<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author">
	<title>Register Page VCTMS</title>
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
				<div class="card-wrapper" style="margin: 3% auto;">
					<!--<div class="brand">
						<img src="images/avatar.png">
					</div>-->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST">
								<div class="form-group">
									<label for="npk">NPK</label>
									<input id="npk" type="text" class="form-control" name="npk" required autofocus>
								</div>
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
								</div>
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>
								<div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> I agree to the Terms and Conditions
									</label>
								</div>
								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Already have an account? <a href="index.php">Login</a>
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