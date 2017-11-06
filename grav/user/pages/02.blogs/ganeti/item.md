---
title: 'Setting up Ganeti'
date: 17:34 06/27/2014 
taxonomy:
    category: blog
    tag: [Ganeti, Virtual-Machine]
---

Ganeti is a virtual Machine management system build on top of KVM/Xen. It is very much like default virsh(virtual manager) with advanced capabilities such as Live Migration of VMs across nodes.

I have tried to make this guide as idiot proof as possible. If you find any mistakes please leave comment.

Most of the stuff in this post are inherited from https://code.osuosl.org/projects/ganeti-image/wiki/HOWTO_-_CentOS
Salient Points:To me it looks like it is more stable with Debia/Xen rather than RHEL/KVM.

Who should try Ganeti:(Disclaimer: I am no Ganeti Export this is my personal opinion)

If you have a medium scale setup where you have Virtual machines running across more than 2 Physical boxes and looking for some means of High availability. If you are not looking for hight availability features then perhaps having a DRBD/Gluster based Virtual machine would suffice.

Prerequisites:
Terminologies: 
Node: The physical box running the Virtual Machine.
Instance: Guest Virtual machine.
Cluster: Group of nodes.

Ganeti needs some packages/modules in order to fully support all features. 

Setup a Centos 6 mininal install with epel and elrepo installed. Disable selinux/firewall if you are doing it for first time.
KVM Hypervisor:  
You need to have KVM/Qemu packages installed

yum install @Virtualization -y

Manually setup the bridge interface.
DRBD: 
Ganeti uses DRBR to synchronize the Virtual machine images across the nodes  cluster.

yum install kmod-drbd83 drbd83 -y

Customize DRBD kernel params.

echo "options drbd minor_count=255 usermode_helper=/bin/true" >> /etc/modprobe.d/drbd.conf

Keeping the DRBD in a different Volume group would be better, however, there are no such restrictions as you can create DRBD pairs on any LVM.

Setup Host names:Ganeti is very sensitive with hostnames, so all your hostnames(nodes) must be FQDN. If you do not have control over DNS server, simply add them to your hosts file.


127.0.0.1              localhost  

IP1  --------->  gcluster.net gcluster  # it will be used in cluster init.   

IP2  --------->  gnode2.net gnode2 node2 # It will be gluster node  

IP3  --------->  gnode1.net gkvm1 node1  

IP4  --------->  vm1.net instance1.net vm1 instance1 # The virtual machines IP  



IP1: Must be a free IP that will be assumed by the Ganeti cluster and will be added as alias IP in your networking device (eth0:1 or br0:1).

Also make sure that your hostnames are properly setup and output of "hostname --fqdn" is as you intended otherwise you will waste lot of time in troubleshooting annoying ssh error during node setup.
Dependent Packages:
yum install -y pyOpenSSL python-simplejson pyparsing python-inotify python-ctypes python-pycurl python-paramiko debootstrap

Create Volume Group:

pvcreate /dev/sda3
vgcreate vmvg /dev/sda3

**Install and Setup Ganeti Nodes:**

**Install the RPMs**
http://jfut.integ.jp/linux/ganeti/noarch/ganeti-2.6.1-1.el6.noarch.rpm
http://jfut.integ.jp/linux/ganeti/noarch/ganeti-instance-debootstrap-0.7-2.el6.no
wget http://jfut.integ.jp/linux/ganeti/x86_64/python affinity-0.1.0-1.el6.x86_64.rpm


**Install them**
yum localinstall ganeti-2.6.1-1.el6.noarch.rpm python-affinity-0.1.0-1.el6.x86_64.rpm

Initialize the Cluster
gnt-cluster init --vg-name vmvg --master-netdev eth0 --enabled-hypervisors kvm --nic-parameters link=br0 gcluster

Set defautl metavg parameters for DRBD disk
gnt-cluster modify -D drbd:metavg=vmvg

Enable use_bootloader for using VM's boot loader
gnt-cluster modify --hypervisor-parameters kvm:kernel_path=


Add Nodes to the Cluster
gnt-node add gnode2.net

If you get ssh key errors, then follow http://code.google.com/p/ganeti/wiki/ClusterKeysReplacement to fix it.
 gnt-node list


Instance/Virtual Machine Installation:
Unlike virsh, you can't just install any OS from ISO image in Ganeti. You need to install and configure OS templates.  Some good guys have already created such templates for us
1. debootstrap -- For Debian
2. Instance-image -- For all Linux
3. Linux-image/Raw-image -- It worked for me to get CentOS 6 VM install.

Install Linux-image on all Nodes.
Remember to install the packages and ISO images across all the nodes in same location.
wget http://sourceforge.net/projects/ganeti-os-defs/files/ganeti-os-defs-1.1.1.tgz/download
mkdir -p /var/lib/ganeti/os
tar -zxvf ganeti-os-defs-1.1.1.tgz -C /var/lib/ganeti/os
cd /var/lib/ganeti/os/linux-image/
edit environment.sh path of ISO rescue image



**Verify the install**

gnt-os list

Modify the Cluster global Parameters for Instances/Guest VMs.

gnt-cluster modify -B vcpus=2,memory=1024M

**Create an instance image**
gnt-instance add -t drbd -o linux-image+default -s 10g -n gnode1.net:gnode2.net --no-start --no-install  -H kvm:vnc_bind_address=0.0.0.0 vm1.net

**Install OS**
gnt-instance start -H boot_order=cdrom,cdrom_image_path=/usr/local/iso/CentOS-6.3-x86_64-minimal.iso vm1.net



**Get the VNC Access**

gnt-instance info --all  | grep network
(It will show the port assigned)


**Restart the VM**
[root@gnode1 srv]# gnt-instance shutdown vm1.net  
Waiting for job 1607 for vm1.net ...  
[root@gnode1 srv]# gnt-instance start vm1.net  
Waiting for job 1610 for vm1.net ...  
[root@gnode1 srv]
