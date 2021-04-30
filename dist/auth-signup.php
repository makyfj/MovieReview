<!DOCTYPE html>
<html lang="en">

<head>

	<title>DashboardKit Bootstrap 5 Admin Template</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">


	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="assets/fonts/material.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css" id="main-style-link">


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<form class="row g-3" action="userRegistration.php" name="userForm" onsubmit="return validateForm()" method="post">
						<div class="card-body">
							<img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
							<h4 class="mb-3 f-w-400">Sign up</h4>
							<div class="input-group mb-3">
								<span class="input-group-text"><i data-feather="user"></i></span>
								<input type="text" class="form-control" placeholder="Username" id="user" name="user">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text"><i data-feather="mail"></i></span>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email address">
							</div>
							<div class="input-group mb-4">
								<span class="input-group-text"><i data-feather="lock"></i></span>
								<input type="password" class="form-control" placeholder="Password" id="password" name="password">
							</div>
							<button class="btn btn-primary btn-block mb-4" type="submit" onclick="validateForm();">Sign up</button>
							<p class="mb-2">Already have an account? <a href="auth-signin.php" class="f-w-400">Signin</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script>
	$("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script>

</body>

</html>