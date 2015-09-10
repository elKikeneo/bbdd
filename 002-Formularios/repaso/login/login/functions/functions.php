<?php 

function check_get($a){

	if( isset($_GET[$a]) && !empty($_GET[$a]) ){
		return $_GET[$a];
	}

	return false;
}

function check_post($a){

	if( isset($_POST[$a]) && !empty($_POST[$a]) ){
		return $_POST[$a];
	}

	return false;
}

function check_login(){

	$username = check_post('username');
	$password = check_post('password');
	$remember = check_post('remember');


	if( !$username || !$password ){
		return false;
	}

	include('../bbdd/bbdd.php');

	foreach ($users as $user) {
		
		if( $username == $user['username'] && $password == $user['password'] ){

			/* Pregunto si queremos cookies */
			if($remember){
				setcookie('login',$username,strtotime('+15 days'),'/');
			}

			session_start();
			$_SESSION['username'] = $username;
			header('Location:profile.php');
			exit();
		}

	}

	echo "No existe el usuario y/o contraseña";
	return false;
}

function end_session(){

	if( session_status() != PHP_SESSION_ACTIVE ){
		session_start();
	}

	session_destroy();
	header('location:index.php');
	exit();
}