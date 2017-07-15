<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gender Entry</title>
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
                                             <div class="panel-heading"><h1>Gender Entry</h1>
                                                      <ul class="pager">
                                                               <li class="previous"><a href="index.php">Back</a></li>
                                                      </ul>
                                               </div>
                                               <div class="panel-body">
                                                      <form role="form" method="post" action="store.php" >
                                                               <div class="form-group">
                                                                        <div class="input-group">
                                                                                 <span class="input-group-addon">Enter Name</span>
                                                                                 <input type="text" name="name" class="form-control" id="usr" value="" placeholder="enter your name here"  required/>
                                                                        </div>
                                                               </div>
                                                               <div class="form-group">
                                                                        <label for="gender">Select Gender :</label>
                                                                        <div class="radio-inline">
                                                                                 <label><input type="radio" name="gender" value="Male"   required >Male</label>
                                                                        </div>
                                                                        <div class="radio-inline">
                                                                                 <label><input type="radio" name="gender" value="Female"   required >Female</label>
                                                                        </div>
                                                               </div>
                                                               <button type="reset" class="btn btn-primary">Reset</button>
                                                               <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                                      </form>   
                                             </div>
                                    </div>
                           </div>
                  </center>
         </div>
         <script src="../js/bootstrap-min.js"></script>
    </body>
</html>
