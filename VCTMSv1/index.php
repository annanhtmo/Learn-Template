<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author">
	<title>Login Page VCTMS</title>
	<link rel="stylesheet" type="text/css" href="lib/login_page/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login_page/my-login.css">
	<script src="js/login_page/jquery.min.js"></script>
	<script src="lib/login_page/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/login_page/my-login.js"></script>
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<!--<div class="brand">
						<img src="images/avatar.png">
					</div>-->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST">
								<div class="form-group">
									<label for="npk">NPK</label>
									<input id="npk" type="text" class="form-control" name="npk" value="" required autofocus>
								</div>
								<div class="form-group">
									<label for="password">Password
										<a href="forgot.php" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>
								<div class="form-group">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="register.php">Sign Up</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Denso Indonesia 2018
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>