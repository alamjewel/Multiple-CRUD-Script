<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\profile\profile;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\Utility\Config;
use ATOMIC\BITM\seip107899\Utility\Uploader;


 //Utility::dd($_REQUEST['oldFileName']);

$uploadFile             = Uploader::upload($_FILES['image']);

if($uploadFile){
    $profile            = new Profile();
    $_REQUEST['image']  =$uploadFile;
    $profile->prepare($_REQUEST)->update();
    Uploader::delete($_REQUEST['oldFileName']);
}

?>                           