<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tacobell</h1>
    </header>
    <main>
        <div class="signup-form">
            <form action="register_proses.php" method="POST">
for="firstname">First Na
                <input type="text" name="firstname" required>
for="lastname">Last Na
                <input type="text" name="lastname" required>
for="username">Userna
                <input type="text" name="username" required>
for="email">Ema
                <input type="text" name="email" required>
for="password">Passwo
                <input type="password" name="password" required>
for="birthdate">Birthda
                <input type="date" name="birthdate" required>
for="gender">Gend
                <select name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <button type="submit">Signup</button>
            </form>
        </div>
    </main>
</body>
</html> -->

<head>
		<meta charset="utf-8">
   		<meta name="keywords" content="Admin Login By Zaki" >
    	<meta name="description" content="Admin Login By Zaki" >
    	<title>Sign In </title>
		<script src="https://use.fontawesome.com/fbf13eceb7.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="register_user.css" >
    </head>
    <body>
	
    	<div class="biggest">
    	
		
    		<div class="nav">
    			<ul>
			
    				<li><img src="https://i.imgur.com/cqN7DSd.png" width="70" height="70" /></li>
    				<li class="move1"><a class="login1" href="login_user.php"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a></li>
    				<li class="move2"><a class="sign-up" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Register</a></li>
					<hr/>
    			</ul>
    			
    			<!-- Start Introduction here-->
    		<div class="intro">
    			<div class="par">
	    			<h3>Welcome To Your account.</h3>
	    			<span>Designed With love <br>by Kouloughli Hemza</span>
	    			<div class="social">
	    				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	    			</div>
    			</div>
    		</div>
    		<!-- End Introduction here-->
    		</div>
    		    <div class="container">
				    <div class="reg">
	    				<p><span>Register !</span> New account to see what <br>we have for you.</p><br>
	    				<form action="register_proses.php" method="POST">
                        <input type="text" name="firstname" placeholder="first name">
                        <input type="text" name="lastname" placeholder="last name" required>
                        <input type="text" name="username" placeholder="username" required>
                        <!-- <input type="text" name="email" placeholder="email" required>
                        <input type="password" name="password" placeholder="password" required>
                        <input type="date" name="birthdate" placeholder="birth date" required>
                        <select name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select> -->
	    				<!--<span><input type="submit" value=""><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>-->
	    				<button><i class="fa fa-plus" aria-hidden="true"></i></button>
	    				</form><br>
	    				<p>Already Have An account ?<span class="login1"><a href="login_user.html"> Log in</a></span></p>
	    			</div>
                </div>
    	</div>
	</body>


    