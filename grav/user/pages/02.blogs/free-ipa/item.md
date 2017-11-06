---
title: Free Yourself with FreeIPA
date: 13:34 06/07/2014 
taxonomy:
    category: blog
    tag: [free-ipa]
---

I see lot of hits on my earlier post on 389 directory server on Centos with Client side sssd.

That made me realize that lot of people are trying 389-ds either for first time setup or  to migrate from other directory servers such as Active Directory or Open ldap.

To centralize our user management system, when I started learning  about 389 I was convinced that 389 is more of a generic and highly modular form of data storage system where you read more often than you write.

And in order to even make it work for user management such as Centralizing posix user passwords, Host based access control and POSIX group management I had to configure many plugins and custom scripts to even get there. Then finally I gave up and start looking for alternatives and to my blind eye I did not know it is just there as default Redhat package called FreeIPA (or Redhat IDM).

===


I see lot of hits on my earlier post on 389 directory server on Centos with Client side sssd.

That made me realize that lot of people are trying 389-ds either for first time setup or  to migrate from other directory servers such as Active Directory or Open ldap.

To centralize our user management system, when I started learning  about 389 I was convinced that 389 is more of a generic and highly modular form of data storage system where you read more often than you write.

And in order to even make it work for user management such as Centralizing posix user passwords, Host based access control and POSIX group management I had to configure many plugins and custom scripts to even get there. Then finally I gave up and start looking for alternatives and to my blind eye I did not know it is just there as default Redhat package called FreeIPA (or Redhat IDM).

So FreeIPA has the recipe what you need to have an Identify Management system. It has customized 389 server to fit it for POSIX user/host management and it comes with default Web UI, so no more Manual LDIF commands and working with 389 console and to more surprising replication and client installation is as easy as cake also it is more secure as it used KRB for password authentication.

Ok, so lets stop talking and start  the steps that I used on my CentOS it is couple of commands away

Before you setup, key things to make sure working

Pre-work
1. DNS: Make sure all hostnames are resolved.
If you already have DNS, then add all new servers to DNS first.

2. iptables: Make sure you open krb and ldap ports open. Both TCP and UDP. krb : 88/444, 389/636

Server Install
yum install ipa-server

ipa-server-install --domain=example.com --realm=EXAMPLE.COM

this will take you to an interactive setup. use --no-ntp if you are installing on VM.

On client side
ipa-client-install --domain=EXAMPLE.COM --server=ipa01.example.com --realm=EXAMPLE.COM -p admin  --password=<password> --mkhomedir --no-ntp --hostname=client01.example.com -U

-U for unattented client setup.
--mkhomedir to create user home directory on first login.

Replication Setup
On the master

ipa-replica-prepare <secondary-hostname>

Copy the gpg file created on master at /var/lib/ipa to the secondary.

Run below command on Secondary

ipa-replica-install /var/lib/ipa/replica-info-ipareplica.<secondary hostname>.gpg


User Migration
In case first time you are centralizing your users from file based shadow password to IPA, then you will have to manually import these users. I have created a small python script that will make your life little easier. All you need is shadow and passwd file from a host where you have all users (make sure the order of user in both files are identical and remove all user with uid < 500 such as ftp, root etc)


https://github.com/kchandan/utils.git

I have tested it and it works. If you find any issue/bug in this tiny script please let me know or file a issue on github.

Monitoring



Nagios monitoring script

https://github.com/kchandan/utils.git

