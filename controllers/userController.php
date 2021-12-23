<?php

class userController
{

	public function __construct()
	{
		require_once "models/user.php";
		session_start();
	}

	public function index()
	{
		if ($_SESSION['loggedin']) {
			header("Location: index.php?type=products&action=index");
			exit();
		} else {
			require_once "views/login/login.php";
		}
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = new User();
		$user->login($username, $password);

		if ($_SESSION['loggedin']) {
			header("Location: index.php?type=products&action=index");
			exit();
		} else {
			$_SESSION["error"] = "User o Password incorrect";
		}
		$this->index();
	}

	public function logout()
	{
		$user = new User();
		$user->logout();
		header("Location: views/login/login.php");
		exit();
	}
	public function getuser()
	{
		require_once "views/user/userInformation.php";
	}
}
