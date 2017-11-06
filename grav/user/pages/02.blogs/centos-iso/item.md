---
title: CentOs Auto-installer ISO
date: 14:55 07/11/2014
author: Tasha Maxwell
taxonomy:
    category: blog
    tag: [centos, auto-installer]
---

Lately I had to rebuild CentOS ISO with my own kickstart script 


1. Mount the CentOS Minimal install on your local machine or VM.

mkdir cmin_iso

mount -o loop CentOS.iso cmin_iso/
2. Mount the DVD1 image as well as we will need some extra packages on top of Minimal install.

mount -o loop CentOS-DVD1.iso dvd1/


3. Copy the whole content into new dir as the mounted data is readonly ISO.

mkdir min_iso

cp -r cmin_iso/* min_iso/
cp cmin_iso/.discinfo min_iso/

4. Copy extra packages mentioned in kickstart from dvd Packages/ directory to min_iso/Packages/ dir. 
===


Lately I had to rebuild CentOS ISO with my own kickstart script 


1. Mount the CentOS Minimal install on your local machine or VM.

mkdir cmin_iso

mount -o loop CentOS.iso cmin_iso/
2. Mount the DVD1 image as well as we will need some extra packages on top of Minimal install.

mount -o loop CentOS-DVD1.iso dvd1/


3. Copy the whole content into new dir as the mounted data is readonly ISO.

mkdir min_iso

cp -r cmin_iso/* min_iso/
cp cmin_iso/.discinfo min_iso/

4. Copy extra packages mentioned in kickstart from dvd Packages/ directory to min_iso/Packages/ dir. 




5. Copy the kiskstart file at min_iso/ks.cfg. 





install
cdrom
lang en_US.UTF-8
keyboard us
network --onboot yes --device eth2 --bootproto dhcp --hostname myhost
rootpw  password
firewall --service=ssh
text
authconfig --enableshadow --passalgo=sha512
selinux --enforcing
timezone --utc America/New_York
bootloader --location=mbr --driveorder=sda --append="crashkernel=auto"
clearpart --all --initlabel
zerombr
part /boot --fstype=ext4 --size=500
part pv.008018 --grow --size=1
volgroup vg_my --pesize=4096 pv.008018
logvol / --fstype=ext4 --name=lv_root --vgname=vg_my --grow --size=1024 --maxsize=51200
logvol swap --name=lv_swap --vgname=vg_my --grow --size=1984 --maxsize=1984
poweroff
%pre
%packages --nobase
@core
openssh-clients
%post
# Add your custom script. Such as mounting the drive and copy for files.
%end

6. Copy this isolinux.cfg file into min_iso/isolinux.cfg [for serial support]

default vesamenu.c32
serial 0 115200
menu title Welcome to CentOS 6.5!

label linux
  menu label ^Install or Upgrade system
  menu default
  kernel vmlinuz console=tty0 console=ttyS0,115200n8
  append initrd=initrd.img ks=cdrom:/ks.cfg serial
label vesa
  menu label Install system with ^basic video driver
  kernel vmlinuz
  append initrd=initrd.img xdriver=vesa nomodeset
label rescue
  menu label ^Rescue installed system
  kernel vmlinuz
  append initrd=initrd.img rescue
label local
  menu label Boot from ^local drive
  localboot 0xffff
label memtest86
  menu label ^Memory test
  kernel memtest
  append -

7. Open the file reppodata/repodata.xml and copy the file name [.xml] for the group section. [not the group_gz section!]

<data type="group">
  <checksum type="sha256">34bae2d3c9c78e04ed2429923bc095005af1b166d1a354422c4c04274bae0f59</checksum>
  <location href="repodata/34bae2d3c9c78e04ed2429923bc095005af1b166d1a354422c4c04274bae0f59-c6-minimal-x86_64.xml"/>
  <timestamp>1385727295.83</timestamp>
  <size>11862</size>
</data>

Update the repo

cd min_iso/

createrepo -v -g repodata/34bae2d3c9c78e04ed2429923bc095005af1b166d1a354422c4c04274bae0f59-c6-minimal-x86_64.xml .

8. Now create the ISO.


cd /home/iso
ISOFILE=$PWD.iso
PACKAGER="Chandan"
ISONAME="CentOS 6.5"
ISODATE="`date -I`"

sudo mkisofs -r -R -J -T -v -no-emul-boot \
    -boot-load-size 4 \
    -boot-info-table \
    -V "$ISONAME" \
    -p "$PACKAGER" \
    -A "$ISONAME - $ISODATE" \
    -b isolinux/isolinux.bin \
    -c isolinux/boot.cat \
    -x "lost+found" \
    --joliet-long \
    -o $ISOFILE .
