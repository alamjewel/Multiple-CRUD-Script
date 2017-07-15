<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;
use ATOMIC\BITM\seip107899\terms\Termsandcondition;

$terms = new Termsandcondition();
$term=$terms->index();

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Terms & Condition</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" media="all" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
       
        
       <div class="col-sm-2">
                
            </div>
            <center>
            
                <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-primary"> 
                        <div class="panel-heading"><ul class="pager">
                            <li class="previous"><a href="http://localhost/atomic13">Back</a></li>
                            
                            <li class="next"><a href="create.php">Create New</a></li>Terms & Condition
                          </ul>
                        </div>
                        <div class="panel-body">
                            <div>
                                <?php echo Message::flush();?>
                            </div>
                            <table class="table table-bordered">
                               <tr class="success"><th width="50">Serial</th><th>Name</th><th>Condition</th><th>Action</th></tr>
                               <?php $serialno=0;
                                    foreach($term as $term): $serialno++; ?>
                               <tr><td><?php echo $serialno;?></td><td><h4><a title="Click Me to view Data!" data-toggle="tooltip" href="view.php?id=<?php echo $term['id'];?>"><?php echo $term['name'];?></a></h4></td><td><?php echo$term['terms'];?></td>
                                     <td width="140">
                                         <div class="btn-group">
                                            <a class="btn btn-success" href="edit.php?id=<?php echo $term['id'];?>">Edit</a>
                                            <a class="btn btn-danger" href="delete.php?id=<?php echo $term['id'];?>">Delete</a>
                                         </div>
                                     </td>
                               </tr>
                              <?php endforeach; ?>




                            </table>
                    </div>
                </div>
            </div>
            
        </div>
                
                
               
            </center>
        </div>
    </body>
</html>
