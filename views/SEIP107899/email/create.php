<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Email subscription</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css" media="all" />
 
    </head>
     <body>
        <div class="container">
            <div class="col-sm-2"></div>
            <center>
                    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h1>Email subscription</h1>
                                <ul class="pager">
                                    <li class="previous"><a href="index.php">Back</a></li>
                                 </ul>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="store.php" method="post" autocomplete="off">
                                    <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-addon">Enter Person Name</span>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required >
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">Enter Email</span>
                                            <input type="email" name="email" class="form-control" id="name" placeholder="example@example.com" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="reset" class="btn btn-danger btn-block">Reset</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" name="submit" class="btn btn-block btn-success">Subscribe</button>
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
