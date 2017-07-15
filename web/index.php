<!DOCTYPE HTML>
<html>
<head>
<title>App Creation | APP :: Login</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
		</script>

	</head>
	<body>
		<!--container-->
		<div class="container">
		  <!--main-content-->
		        <h1>Food Panda</h1>
		  <div class="main-content">
		   
			  <!--web-forms-->
			    <div class="web-forms">
				 <!--first-one-->
				 <div class="col-md-4"></div>
				 <div class="col-md-4 first-one">
				  <div class="first-one-inner">
				     <h3 class="tittle">Sign in</h3>
					<form>
						<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit"><input type="submit" onclick="myFunction()" value="Sign in" ></div>
						<div class="clearfix"></div>
						<div class="new">
							<h3><a href="#">Forgot your password ?</a></h3>
						</div>
					</form>
				   </div>
				   <a href="register.php" class="hvr-bounce-to-bottom">Create an Account</a>
			      </div>
				   
							 	<div class="clearfix"> </div>
								  <!--//call-inner-->
								</div>
							
						  <!--/cal-grids-->
			     </div>
				<!--main-content-->
				<!--start-copyright-->
				<div class="copy-right">
						<p>Copyright &copy; 2016 APP Creation. All rights  Reserved | Design  by <a href="http://www.facebook.com/ebongbd">bAdBoY</a></p>
				</div>
	<!--//end-copyright-->

		</div>
	 <!--//container-->
	</body>
</html>

