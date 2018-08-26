<?php

//https://www.forumsys.com/tutorials/integration-how-to/ldap/online-ldap-test-server/
$ldap_dn = "ou=scientists,dc=example,dc=com";
$ldap_password = "password";
$ldap_con = ldap_connect("54.196.176.103",389);

ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
	
	$filter = "(cn=Albert Einstein)";
	$result = ldap_search($ldap_con,"dc=example,dc=com",$filter) or exit("Unable to search");
	$entries = ldap_get_entries($ldap_con, $result);
	
	
	print "<pre>";
	print_r ($entries);
	print "</pre>";
	
}else{
	
	echo "Invalid user/pass or other errors";
}

?>