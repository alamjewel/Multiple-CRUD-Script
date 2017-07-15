 <?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\hobby\hobby;

$hobby = new Hobby();
$hobbys=$hobby->edit($_GET['id']);

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
        <title>Hobby</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" media="all" />
    </head>
        
        
    </head>
    <body>
        <div class="container">
            <div class="col-sm-2">
                
            </div><center>
                
            <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h1>Hobby Entry</h1>
                        <ul class="pager">
                            <li class="previous"><a href="index.php">Back</a></li>
                         </ul>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="update.php" method="post" autocomplete="off">
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="name" value="<?php echo $hobbys->id;?>">
                                <div class="input-group">
                                        <span class="input-group-addon">Enter Name</span>
                                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $hobbys->name;?>" placeholder="Enter Name" required >
                                </div>
                            </div>   
                            <?php $hobbies=explode(", ",$hobbys->hobby);?>
                            <div class="form-group">
                                Select Your Hobby   :
                                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="Gardening" <?php if(in_array("Gardening", $hobbies)){echo "checked";}?>>Gardening</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="Stamp Collection" <?php if(in_array("Stamp Collection", $hobbies)){echo "checked";}?> >Stamp Collection</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="Traveling" <?php if(in_array("Traveling", $hobbies)){echo "checked";}?>>Traveling</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="hobby[]" value="Reading Books" <?php if(in_array("Reading Books", $hobbies)){echo "checked";}?> >Reading Books</label>
                                
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
        <script src="../js/bootstrap-min.js"></script>
    </body>
</html>