<?php
namespace ATOMIC\BITM\seip107899\Utility;

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Config;


class Uploader {
   static function upload($files){
       $source              = $files['tmp_name'];
       $destination         = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'SEIP107899'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;
       $destinationFileName = self::uniqueName($files['name']);
       $isUpload            = move_uploaded_file($source, $destination.$destinationFileName);
       
       
       if($isUpload){
           return $destinationFileName;
       }else{
           Message::set('<div class="alert alert-success"><strong>ERROR:Birthday Data Added Sucessfully.!</strong></div>');
           //Utilredirect
       }
   }
   
   static function uniqueName($fileName){
       $fileName_parts= explode(".", $fileName);
       $ext=array_pop($fileName_parts);
       $name=implode(".",$fileName_parts);
       return $name."_".time().".".$ext;
   }
   
   static public function delete($fileName){
       $file= $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'SEIP107899'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$fileName;
       unlink($file);
       Utility::redirect('index.php');
   }
   
}

?>
