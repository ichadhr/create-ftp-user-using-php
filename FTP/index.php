<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('Net/SSH2.php');

/*$ssh = new Net_SSH2('heavyhunt.com');
$ssh->login('heavyhuntcom', 'F1s#d3o_@lFv');

$ssh->read('[prompt]');
$ssh->write("su -\n");
$ssh->read('Password:');
$ssh->write("f!t2BTXShqh8\n");
$ssh->write("adduser dmstest\n");
$ssh->write("passwd dmstest\n");
$ssh->read('New password:');
$ssh->write("Dms@123\n");
$ssh->read('Retype new password:');
$ssh->write("Dms@123\n");
$ssh->write("chown dmstest /home/heavyhuntcom/public_html/uploads/dms/remain/dmstest\n");
$ssh->write("usermod -s /sbin/nologin dmstest\n");
//$ssh->write("ls\n");
echo $ssh->read('[prompt]');*/
?>
