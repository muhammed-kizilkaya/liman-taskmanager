<?php


$ip = '192.168.1.11'; //extensiondb
$domainname= 'home.lab';
$user = "administrator@".$domainname;
$pass = '123123Aa';
$server = 'ldaps://'.$ip;

$ldap = ldap_connect($server);
ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap, LDAP_OPT_X_TLS_REQUIRE_CERT, LDAP_OPT_X_TLS_NEVER);
ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

$bind=ldap_bind($ldap, $user, $pass);
if (!$bind) {
    exit('Binding failed');
} 