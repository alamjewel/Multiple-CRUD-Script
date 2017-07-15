 <?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\hobby\hobby;

$hobby = new Hobby();
$hobbys=$hobby->view($_GET['id']);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hobby</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" media="all" />
    </head>
    <body>
        <div class="container">
            <div class="col-sm-2"></div>
            <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <ul class="pager">
                            <li class="previous"><a href="http://localhost/atomic13">Back</a></li>
                            <li class="next"><a href="create.php">Create New</a></li>Hobby Information
                        </ul>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr class="success"><th width="50">Serial</th><th>Person Name</th><th>Hobby</th><th>Action</th></tr>
                             <tr><td><?php echo $hobbys->id;?></td><td><h4><?php echo $hobbys->name;?></h4></td>
                                <td>
                                    <?php echo $hobbys->hobby;?>
                                   </td>
                                   <td width="140">
                                       <form role="form" method="POST" action="delete.php">
                                           <a class="btn btn-success" href="edit.php?id=<?php echo $hobbys->id;?>">Edit</a>
                                           <input type="hidden" name="id" value= "<?php echo $hobbys->id;?>" class="form-control" id="name" value="">
                                           <input type="submit" class="btn btn-info" id="delete" value="Delete">
                                       </form></td>
                            </tr>
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('#delete').bind('click',function(e){
                    var isOk = confirm("Are you sure you want to delete?");
                    //console.log(isOk);
                    if(!isOk){
                        e.preventDefault();
                    }
             });
                
            });
           
        </script>
    </body>
</html>
