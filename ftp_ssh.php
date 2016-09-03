<?php

//install vsftpd on your server then following steps will work like charm
include('./FTP/Net/SSH2.php');
include('./FTP/Crypt/RSA.php');

$ssh = new Net_SSH2('yourdomain.com');
$user = "username";
$password = "password";
if (!$ssh->login($user, $password)) {
    exit('Login Failed');
}

$dmsUser = "pragnesh";
$path = '/var/www/html/uploads/'.$dmsUser;
$dms_password = 'test1234';

$ssh->read('[prompt]');
$ssh->write("sudo -i \n");
$ssh->read('[prompt]'); //, NET_SSH2_READ_REGEX
$ssh->write("adduser ".$dmsUser."\n");
$ssh->read('Enter new UNIX password:');
$ssh->write($dms_password."\n");
$ssh->read('Retype new UNIX password:');
$ssh->write($dms_password."\n");
$ssh->read('Full Name []:');
$ssh->write("\n");
$ssh->read('Room Number []:');
$ssh->write("\n");
$ssh->read('Work Phone []:');
$ssh->write("\n");
$ssh->read('Home Phone []:');
$ssh->write("\n");
$ssh->read('Other []:');
$ssh->write("\n");
$ssh->read('Is the information correct? [Y/n]');
$ssh->write("Y \n");
$ssh->write("chown ".$dmsUser.":ubuntu ".$path." -R \n");

?>
