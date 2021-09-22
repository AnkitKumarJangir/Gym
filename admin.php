<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family = Josefin+Sans&display=swap">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style>
		*{
			margin: o;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Josefin Sans', sans-serif;
z-index: 
		}
		body{
			background-image: 
		}

		.main_div{
			width: 100%;
			height: 100vh;
			position: relative;
		}
		.box{
			width: 400px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 50px;
			background: rgba(0,0,0,0.8);
			border-radius: 10px;
		}

		.box h1{
			margin-bottom: 30px;
			color: white;
			text-align: center;
			text-transform: capitalize;
		}
		.box .inputBox {
			position: relative;
		}
		.box .inputBox input{
			width: 100%;
			padding: 10px;
			font-size: 16px;
			color: white;
			letter-spacing: 1px;
			margin-bottom: 30px;
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
		}
		.box .inputBox label{
			position: absolute;
			top: 0;
			left: 0;
			letter-spacing: 1px;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			transition: 0.5s;
		}
		.box .inputBox input:valid ~ label,
		.box .inputBox input:focus ~ label{
			top: -20px;
			left: 0;
			color: #03a9f4;
			font-size: 12px;
		}
		.box input[type="submit"]{
			background: transparent;
			border: none;
			outline: none;
			color: #fff;
			background: #03a9f4;
			padding: 8px 16px;
			border-radius: 5px;
			font-size: 14px;
		}
	</style>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="indexx.php">Antil Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="">
        <a class="nav-link" href="indexx.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packages.php">Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="facilities.php">Facilities</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>

</header>


<div class="container">	
	<div class="main_div">
		<div class="box">
			<h1>Admin Login</h1>

	<form method="POST" action="">
		<div class="inputBox">
			<input type="text" name="username" autocomplete="off"  required>
			<label>username</label>
		
  		</div>
	<div class="inputBox">
			<input type="password" name="pass" autocomplete="off"  required>
			<label>password</label>
		
  		</div>
  		<input type="submit" name="submit" value="Login">

	</form>
		</div>
	

	</div>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	$username='Ankit Jangra';
	$password='admin';
	if($user== $username && $pass == $password)
	{
		header('Location: new.php');
	}

	else {
				# code...
		echo "Invalid";
		}	# code...
}
?>
 <div class="container">
        <div class="main_div">
            <h4>
                <div style="text-align: center;">New <span class="D">Deep</span> Road Carrier</div>
                <hr class="hr2">
            </h4><br>
            <div class="box">
                <h1>Admin Login</h1>

                <form [formGroup]='admForm' (ngSubmit)="onAdmSubmit()">
                    <div class="inputBox">
                        <input type="text" name="username" formControlName="username" autocomplete="off" required>
                        <label>username</label>

                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" formControlName="password" autocomplete="off" required>
                        <label>password</label>

                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Login
                    </button>



                </form>
            </div>


        </div>
    </div>