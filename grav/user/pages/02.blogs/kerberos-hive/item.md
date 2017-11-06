---
title: Kerberos Setup For Hive Connection
date: 13:34 06/21/2014 
taxonomy:
    category: blog
    tag: [kerberos, hive]
---

Key to kerbros authentication using beeline command to connect to hive is that, the keytab file specified in hive-site.xml file should contain all principals who are allowed to connect to Hive.

You need to append the pricipal the JDBC URL.

Step1: Check which keytab file hive server will use for an incoming connection.

[root@krb-cluster-master-node-01 ~]# cat /etc/hive/2.3.6.0-3796/0/hive-site.xml | grep keytab
      <name>hive.metastore.kerberos.keytab.file</name>
      <value>/etc/security/keytabs/hive.service.keytab</value>
      <name>hive.server2.authentication.kerberos.keytab</name>
      <value>/etc/security/keytabs/hive.service.keytab</value>
      <name>hive.server2.authentication.spnego.keytab</name>
      <value>/etc/security/keytabs/spnego.service.keytab</value>


===

Key to kerbros authentication using beeline command to connect to hive is that, the keytab file specified in hive-site.xml file should contain all principals who are allowed to connect to Hive.

You need to append the pricipal the JDBC URL.

Step1: Check which keytab file hive server will use for an incoming connection.

[root@krb-cluster-master-node-01 ~]# cat /etc/hive/2.3.6.0-3796/0/hive-site.xml | grep keytab
      <name>hive.metastore.kerberos.keytab.file</name>
      <value>/etc/security/keytabs/hive.service.keytab</value>
      <name>hive.server2.authentication.kerberos.keytab</name>
      <value>/etc/security/keytabs/hive.service.keytab</value>
      <name>hive.server2.authentication.spnego.keytab</name>
      <value>/etc/security/keytabs/spnego.service.keytab</value>

I interested in the highlighted keytab file which is using while authenticating against the incoming connection.

Step 2: Check what principals are in the keytab DB.
[root@krb-cluster-master-node-01 ~]# klist -k /etc/security/keytabs/hive.service.keytab
Keytab name: FILE:/etc/security/keytabs/hive.service.keytab
KVNO Principal
---- --------------------------------------------------------------------------
   3 hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM
   3 hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM
   3 hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM
   3 hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM
   3 hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM

If you are wondering why there are so many rows for same principle, actually each row represent supported encryption algorithm. To check which row represent which which algo, use 

klist -ke <keytab-file>

Step 3: Do generate a kerberos ticket for the principal if not already done using kinit command.

#kinit hive/krb-cluster-master-node-01.test.example.com -kt /etc/security/keytabs/hive.service.keytab

If this command returns without any error you have successfully generated a kerberos ticket for this principal.

Step4: Now connect to DB using beeline command

[root@krb-cluster-master-node-01 ~]# beeline -u "jdbc:hive2://localhost:10000/default;principal=hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM"
WARNING: Use "yarn jar" to launch YARN applications.
Connecting to jdbc:hive2://localhost:10000/default;principal=hive/krb-cluster-master-node-01.test.example.com@TEST.EXAMPLE.COM
Connected to: Apache Hive (version 1.2.1.2.3.6.0-3796)
Driver: Hive JDBC (version 1.2.1.2.3.6.0-3796)
Transaction isolation: TRANSACTION_REPEATABLE_READ
Beeline version 1.2.1.2.3.6.0-3796 by Apache Hive
0: jdbc:hive2://localhost:10000/default> show databases;
+----------------+--+
| database_name  |
+----------------+--+
| default        |
+----------------+--+
1 row selected (2.195 seconds)

Kerberos Gotchas:

1. Ensure there are no typos in the principal and keytab filenames [in the hive-site.xml too]
2. If you don't have DNS, use IP everywhere including krb5.conf
3. Make sure the keytab file includes the default algos mentioned in the krb5.conf otherwise ticket generation will fail.


Hello world
