	<head>
		<meta charset="utf-8">
   		<meta name="keywords" content="Admin Login By Zaki" >
    	<meta name="description" content="Admin Login By Zaki" >
    	<title>Sign In </title>
		<script src="https://use.fontawesome.com/fbf13eceb7.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="login_user.css" >
    </head>
    <body>
	
    	<div class="biggest">		
    		<div class="nav">
    			<ul>
			
    				<li><img src="image/taco_bell.jpg" width="100" height="70" /></li>
    				<li class="move1"><a class="login1" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a></li>
    				<li class="move2"><a class="sign-up" href="register_user.php"><i class="fa fa-user-o" aria-hidden="true"></i> Register</a></li>
					<hr/>
    			</ul>
    			
    		<div class="intro">
    			<div class="par">
	    			<h3>Welcome To Taco Bell.</h3>
	    			<span>Please login first to place your order <br>by yours truly manfred von karma</span>
	    			<div class="social">
	    				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	    			</div>
    			</div>
    		</div>
    		</div>
    		<div class="container">
    			<div class="logged">
	    			<div class="login">
	    				<p><span>Login</span> To your account to see what <br>we have for you.</p><br>
	    				<form action="login_user_proses.php" method="POST">
							<input type="text" name="username" placeholder="username">
							<input type="password" name="password" placeholder="password">
							<!-- <span><input type="submit" value=""><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span> -->
							<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
						</form><br>
	    				<p>Dont't Have an account ?<span><a class="sign-up" href="register_user.php" > Register</a></span></p>
	    			</div>
    			</div>
    		</div>
    	</div>
	</body>