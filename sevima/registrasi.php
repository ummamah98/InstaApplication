<!DOCTYPE html>
<?php 
include 'db.php'; //mengkoneksikan dengan databasenya
$em=isset($_POST['email']) ? $_POST['email']:"";
$fn=isset($_POST['full_name']) ? $_POST['full_name']:"";
$un=isset($_POST['username']) ? $_POST['username']:"";
$pw=isset($_POST['password']) ? $_POST['password']:"";

if(isset($_POST['regis'])){
	
	if (!empty($_POST["email"]) && !empty($_POST["full_name"]) && !empty($_POST["username"]) && !empty($_POST["password"])) //jika inputan username dan password tidak kosong
	{
		$ins = "INSERT INTO user(emailTlp,fullName,username,password) VALUES (?,?,?,?)"; //mengambil semua informasi pada tabel pengguna pada database						
		$conn->prepare($ins)->execute([$em,$fn,$un,$pw]);
	}
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		body {
			color: #fff;
			background: #f8f9fa;
			font-family: 'Roboto', sans-serif;
			position:center;
		}
		.form-control {
			height: 40px;
			box-shadow: none;
			color: #969fa4;
		}
		.form-control:focus {
			border-color: #5cb85c;
		}
		.form-control, .btn {        
			border-radius: 3px;
		}
		.signup-form {
			width: 400px;
			margin: 0 auto;
			padding: 100px 0;
			font-size: 15px;
		}
		.signup-form h1{
			position: relative;
			text-align: center;
		}   
		.signup-form h5 {
			color: #636363;
			margin: 0 0 15px;
			position: relative;
			text-align: center;
		}
		.signup-form h5:before, .signup-form h5:after {
			content: "";
			height: 2px;
			width: 30%;
			background: #d4d4d4;
			position: absolute;
			top: 50%;
			z-index: 2;
		}	
		.signup-form h5:before {
			left: 0;
		}
		.signup-form h5:after {
			right: 0;
		}
		.signup-form .hint-text {
			color: #999;
			margin-bottom: 10px;
			text-align: center;
		}
		.signup-form form {
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #f2f3f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 20px;
		}
		.row {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin-right: 15px;
			margin-left: 15px;
		)
		.signup-form .btn {        
			font-size: 16px;
			font-weight: bold;		
			min-width: 140px;
			margin-bottom:10px;
			outline: none !important;
		}
		.signup-form .btn-success {
			color: #fff;
			background-color: #F0F8FF;
			border-color: #28a745;
		}
		.signup-form .row div:first-child {
			padding-right: 10px;
		}
		.signup-form .row div:last-child {
			padding-left: 10px;
		}
		.signup-form a {
			color: black;
			text-decoration: underline;
		}
		.signup-form a:hover {
			text-decoration: none;
		}
		.signup-form form a {
			color: #0083fa ;
			text-decoration: none;
		} 
	</style>
</head>
<body>
	<div class="row row-no-gutters">
	<div class="col-4" style="margin-left:20%;padding:100px 0;">
		<img src="ig.jpg" alt=""></img>
	</div>
	<div class="col-1">
		<div class="signup-form">
			<form action="registrasi.php" method="post">
				<h1>Register</h1>
				<p class="hint-text">Sign up to see photos and videos from your friends.</p>
				<div class="form-group">
					<p class="hint-text">
						<img style="width:20px;height:20px" src="fb.png" alt=""></img>
						<a href="https://www.facebook.com">Log in with Facebook</a>
					</p>
				</div>
				<h5>OR</h5>
				<div class="form-group">
					<input type="text" class="form-control" name="email" placeholder="Mobile Number or Email" required="required">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="full_name" placeholder="Full Name" required="required">     	
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="username" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Password" required="required">
				</div>
				<div class="form-group">
					<button type="submit" name="regis" class="btn btn-success btn-lg btn-block">Register</button>
				</div>
				<div class="form-group">
					<p class="hint-text">By signing up, you agree to our 
						<a target="_blank" href="https://help.instagram.com/581066165581870" tabindex="0">Terms</a>, 
						<a target="_blank" href="https://help.instagram.com/519522125107875" tabindex="0">Data Policy</a> and 
						<a target="_blank" href="/legal/cookies/" tabindex="0">Cookies Policy</a>.
					</p>
				</div>
				<div class="form-group">
					<div class="text-center">Already have an account? <a href="login.php">Log in</a></div>
				</div>
			</form>
			
		</div>
	</div>
	</div>
</body>
</html>