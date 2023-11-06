<?php

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!isset($username) || empty($username)) {
		return 'Username cannot be empty';
	}

	if (!isset($password) || empty($password)) {
		return 'Password cannot be empty';
	}

	header('Location:error.php?error-code=502&device=computer&username=' . $username);