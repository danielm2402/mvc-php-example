<?php

class User
{

	private $db;
	private $user;

	public function __construct()
	{
		$this->db = Connect::connectto();
		session_start();
	}

	public function login($username, $password)
	{
		$sql = "SELECT * FROM usuario WHERE user='$username' LIMIT 1";
		$result = $this->db->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			if (password_verify($password, $row['password'])) {
				$_SESSION['loggedin'] = true;
				$_SESSION['username'] = $username;
				$_SESSION['rol'] = $row["rol"];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
			}
		}
	}
	public function logout()
	{
		session_destroy();
	}
}
