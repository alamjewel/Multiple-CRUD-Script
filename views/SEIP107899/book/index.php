<?php
session_start();
include_once($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."atomic13".DIRECTORY_SEPARATOR."vendor/autoload.php");

use ATOMIC\BITM\seip107899\book\book;
use ATOMIC\BITM\seip107899\Message\Message;
use ATOMIC\BITM\seip107899\Utility\Utility;

$book = new Book();
$books=$book->index();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Title</title>
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
                        <div class="panel-heading"><ul class="pager">
                            <li class="previous"><a href="http://localhost/atomic13">Back</a></li>
                            <li class="next"><a href="create.php">Create New</a></li>Book List
                          </ul>
                        </div>
                        <div class="panel-body">
                            <div>
                                <?php echo Message::flush();?>
                            </div>
                            <table class="table table-bordered">
                                 <tr class="success"><th width="50"><h4>Serial</h4></th><th><h4>Book Title</h4></th><th><h4>Author</h4></th><th><h4>Action</h4></th></tr>
                                 <?php $serialno=0;
                                    foreach($books as $book): $serialno++; ?>
                                 <tr><td><h4><?php echo $serialno;?></h4></td><td><h4><a title="Click Me to view Data!" data-toggle="tooltip" href="view.php?id=<?php echo $book['id'];?>"><?php echo $book['title'];?></a></h4></td><td><h4><?php echo$book['author'];?></h4></td>
                                       <td width="140">
                                            <form role="form" method="POST" action="delete.php">
                                                <a class="btn btn-success" href="edit.php?id=<?php echo $book['id'];?>">Edit</a>
                                                <input type="hidden" name="id" value= "<?php echo $book['id'];?>" class="form-control" id="name" value="">
                                                <input type="submit" class="btn btn-info" id="delete" value="Delete">
                                            </form>
                                       </td>
                                 </tr>
                                <?php endforeach; ?>
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