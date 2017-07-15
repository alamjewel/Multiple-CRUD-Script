
<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\summary\summary;

$summary = new Summary();
$summarys=$summary->edit($_GET['id']);

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Summary Of a Organization</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" media="all" />
      </head>
    <body>
        <div class="container">
            <div class="col-sm-2"></div>
            <center>
                    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h1>Company Summary</h1>
                                <ul class="pager">
                                    <li class="previous"><a href="index.php">Back</a></li>
                                 </ul>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="update.php" method="post" autocomplete="off">
                                    <input type="hidden" name="id" class="form-control" id="name"value="<?php echo $summarys->id;?> " >
                                    <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-addon">Company Name</span>
                                                <input type="text" name="company" class="form-control" id="name" value="<?php echo $summarys->company;?>" placeholder="Enter Book Name" required >
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">Summary</span>
                                            <textarea  class="form-control" name="summary" rows="4" cols="21"  placeholder="Write Summary here"  required ><?php echo $summarys->summary;?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="reset" class="btn btn-danger btn-block">Reset</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" name="submit" class="btn btn-block btn-success">Submit</button>
                                    </div>
                               </form>  

                            </div>
                        </div>
                    </div>
            </center>
                
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="../js/bootstrap-min.js"></script>
    </body>
</html>
