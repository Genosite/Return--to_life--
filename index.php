<?php

include_once('include/def.php');
include_once('include/users.php');
include_once('src/Portal.class.php');

session_start();

$portal = new Portal;
$portal->run();
?>
