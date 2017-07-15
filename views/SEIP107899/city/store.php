<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\city\city;

$city = new City();
$city->prepare($_REQUEST)->store();
?>
