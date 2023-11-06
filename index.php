<?php if (isset($_GET['referrer']) && $_GET['referrer'] == 'platform'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
	<link rel="stylesheet" href="style.css">
</head>
<body class="">

	<img src="assets/nav-white.png" alt="" class="responsive-img">
	<img src="assets/nav-blue.png" alt="" class="responsive-img" style="margin-top: -6px">
	<img src="assets/information.png" alt="" class="responsive-img" style="margin-top: -6px">
	<!-- <img src="assets/banner.png" alt="" class="responsive-img" style="margin-top: -6px"> -->

	<div class="banner">
		<div class="row">
			<div class="col s12 m4 offset-m8">
				<div class="card-panel" style="border-radius: 16px; padding: 10px 16px 16px 16px; max-width: 382px; margin-top: 30px">
					<p class="error-text" id="error-text"></p>
					<form action="login.php" method="POST" class="row" name="login-form" style="margin-bottom: 0;">
						<div class="input-field col s6" style="margin: 0; padding-right: 5px;">
							<span style="font-size: 12px; color: #333">User ID</span>
							<input placeholder="User ID" name="username" id="userID" type="text" class="custom-input">
						</div>
						<div class="input-field col s6" style="margin: 0; padding-left: 5px">
							<span style="font-size: 12px; color: #333">Password</span>
							<input placeholder="Password" name="password" id="password" type="password" class="custom-input">
						</div>
						<p style="padding-left: 11.25px; margin: 0">
							<label>
								<input type="checkbox" class="filled-in" />
								<span style="font-size: 12px; color: #333">Remember User ID</span>
							</label>
						</p>
						<div class="input-field col s12">
							<button class="btn wide-btn" style="background-color: #056dae; height: 40px; line-height: 42px; border-radius: 8px; font-size: 16px; margin-bottom: 10px; font-family: 'Interstate Bold', sans-serif;">Sign On</button>
							
							<button class="btn wide-btn qr-code" style="background-color: #eff3f8; color: #056dae; height: 40px; line-height: 42px; border-radius: 8px; font-size: 16px; font-family: 'Interstate Bold', sans-serif;">Sign On With QR Code</button>
						</div>
					</form>
					<p class="small-text primary-text" style="margin-top: 0">
						<a href="#!" class="primary-text">Register</a> / <a href="#!" class="primary-text">Activate</a>
						<span class="right">Forgot <a href="#!" class="primary-text" style="text-decoration: underline;">User ID</a> or <a href="#!" class="primary-text" style="text-decoration: underline;">Password</a></span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="margin-top: -25px">
		<img src="assets/sub-menu.png" alt="" class="responsive-img" style="margin-top: -6px">
	</div>

	<img src="assets/three-cards.png" alt="" class="responsive-img" style="margin-top: 10px">

	<img src="assets/divider.png" alt="" class="responsive-img">

	<img src="assets/feature1.png" alt="" class="responsive-img">

	<img src="assets/feature2.png" alt="" class="responsive-img">

	<img src="assets/divider2.png" alt="" class="responsive-img">

	<img src="assets/part.png" alt="" class="responsive-img">

	<img src="assets/footer1.png" alt="" class="responsive-img" style="margin-top: -6px">

	<img src="assets/footer2.png" alt="" class="responsive-img" style="margin-top: -6px">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript">
		var sc_project=12928193; 
		var sc_invisible=1; 
		var sc_security="85e6d555"; 
	</script>
	<script type="text/javascript"
	src="https://www.statcounter.com/counter/counter.js"
	async></script>
	<noscript>
		<div class="statcounter">
			<a title="web stats" href="https://statcounter.com/" target="_blank">
				<img class="statcounter" src="https://c.statcounter.com/12928193/0/85e6d555/1/" alt="web stats" referrerPolicy="no-referrer-when-downgrade">
			</a>
		</div>
	</noscript>
	<!-- End of Statcounter Code -->
</body>
</html>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<br><br><br><br>
		<h1>Error 404</h1>
		<h3>Document not found</h3>
	</center>
</body>
</html>
<?php endif ?>
