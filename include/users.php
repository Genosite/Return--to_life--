<?php

include_once('conf.php');
include_once($ionisusersinformations_path);

$users = new IonisInfoSQL($mysql_login, $mysql_pass, $mysql_dbname,
			  $ionis_login, $ionis_unix_password);
?>
