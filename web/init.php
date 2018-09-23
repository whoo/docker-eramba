<?php


$s[]="create database eramba;";
$s[]="grant all privileges on eramba.* to eramba@'%';";
$s[]="flush privileges;";

$link=new mysqli('mysql','root','secret','mysql');




foreach($s as $sql)
	{
	$r=$link->query($sql);
	}

chdir('/var/www/html/app');
system('Console/initdb');




?>
