<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atomic Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style>
		body{
			
		}
		.panel{
				background: gray;
				box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
		</style>
		<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
       
    </head>
    <body>
        <div class="container">
            <!--<div class="jumbotron">
                <h1>Two Bootstrap Form</h1>
                <p>Resize this responsive page to see the effect!</p> 
             </div>
			 -->
            <div class="row">
                <div class="col-sm-0">
					<div id="loginbox" style="margin-top:20px;" class="mainbox col-md-8 col-md-offset-0 col-sm-8 col-sm-offset-2">
						
						
							<div class="panel panel-info">
								<div class="panel-heading">
								<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
								</div>
								<div class="panel-body">
									<form role="form" action="action.php" method="post" autocomplete="off">
										<div class="form-inline">
											 <div class="input-group">
												 <span class="input-group-addon">First Name</span>
												 <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter Your First Name" required >
											 </div>
											 <div class="input-group">
												 <span class="input-group-addon">Last Name</span>
												 <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Your Last Name" >
											 </div>
										</div>
										<br>
										<div class="form-inline">
											 <div class="input-group">
												 <span class="input-group-addon">Father's First Name</span>
												 <input type="text" name="ffname" class="form-control" id="ffname" placeholder="Enter Father's First Name" required >
											 </div>
											 <div class="input-group">
												 <span class="input-group-addon">Father's Last Name</span>
												 <input type="text" name="flname" class="form-control" id="lname" placeholder="Enter Father's Last Name" >
											 </div>
										</div>
										
										<br>
										<div class="form-inline">
											 <div class="input-group">
												 <span class="input-group-addon">Mother's First Name</span>
												 <input type="text" name="mfname" class="form-control" id="mfname" placeholder="Enter Mother's First Name" required >
											 </div>
											 <div class="input-group">
												 <span class="input-group-addon">Mother's Last Name</span>
												 <input type="text" name="mlname" class="form-control" id="mlname" placeholder="Enter Mother's Last Name" >
											 </div>
										</div>
										<br>
										
										<div class="form-inline">
											 <div class="input-group">
												<span class="input-group-addon">Date Of Birth</span>
												<input type="date" name="dob" class="form-control" id="dob" >
											 </div>
												 <div class="input-group">
													 <span class="input-group-addon">Age</span>
													 <input type="text" name="age" class="form-control" id="mlname" size="8" placeholder="Your Age" >
												 
												</div>
											
											 <div class="input-group">
											  <span class="input-group-addon">Religion</span>
											  <select class="form-control" name="religion">
												<option value="ISLAM">ISLAM</option>
												<option value="HINDU">HINDU</option>
												<option value="BHUDDO">BHUDDO</option>
												<option value="CHRISTIAN">CHRISTIAN</option>
											  </select>
											 </div>
										</div>
										
										
									 
										 <div class="form-group">
											 <label for="pwd">Password : </label>
											 <input type="password" class="form-control" id="pwd"/>
										 </div>
										 
										 <button type="submit" class="btn tn-default">Submit</button>
										 
									 </form>
								</div>
							</div>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                <!--<div class="col-sm-4">
                     <h3>Form 2</h3>
                     <form role="form">
                         <div class="form-group">
                             <lebel for="email">Email : </lebel>
                             <input tpype="email" class="form-control" id="email"/>
                         </div>
                         <div class="form-group">
                             <lebel for="pwd">Password : </lebel>
                             <input type="password" class="form-control" id="pwd"/>
                         </div>
                         <button type="submit" class="btn btn-default">Submit</button>
                         </form>
                </div>
               -->
                
            </div>
            
        </div>        
    
     <script src="js/bootstrap-min.js"></script>
    </body>
</html>



