<?php 


function is_utilisateur($email, $password) 
{

	global $db;
	$a =[
			'email' => $email,
			'password' => sha1($password)
		];
	$sql = "SELECT * FROM utilisateur WHERE email = :email AND password = :password";
	$req = $db->prepare($sql);
	$req->execute($a);
	$exist = $req->rowCount($sql);
	return $exist;

}

