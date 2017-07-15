<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\profile\profile;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\Utility\Config;
use ATOMIC\BITM\seip107899\Utility\Uploader;

$uploadFile             = Uploader::upload($_FILES['image']);
      

if($uploadFile){
    $profile            = new Profile();
    $_REQUEST['image']  =$uploadFile;
     //Utility::dd($_REQUEST['image']);
    $profile->prepare($_REQUEST)->store();;
}

?>                           