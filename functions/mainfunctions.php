<?php

session_start();

$dbhost = 'localhost';
$dbname='siteweb';
$dbuser='root';
$dbpasswd='';
try { $db= new PDO ('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpasswd);

}
catch(PDOexception $e)
{
	die ('Une erreur est survenue lors de la connexion à la base de donnée');
}


function admin(){

if (isset($_SESSION['admin'])) {

	global $db;

	$a =array(
				'email' => $_SESSION['admin'],
				'role'  => 'admin'

	);

	$sql = "SELECT * FROM admin WHERE email  = :email AND role = :role";
	$req = $db ->prepare($sql);
	$req->execute($a);
	$exist = $req->rowCount($sql);
	return $exist;
} else {
	return 0;
}
}




function connect(){

if (isset($_SESSION['admin'])) {

	global $db;

	$a =array(
				'email' => $_SESSION['admin']


	);

	$sql = "SELECT * FROM utilisateur WHERE email  = :email";
	$req = $db ->prepare($sql);
	$req->execute($a);
	$exist = $req->rowCount($sql);
	return $exist;
} else {
	return 0;
}
}


// fonctions pour afficher le nom de l'utilisateur en cours de connection
function get_admin_connect(){
      global $db;
        if (!isset($_SESSION['admin'])) {

   } else {
    $info = $_SESSION['admin'];
    $req = $db->prepare('SELECT * FROM admin WHERE email = ?');
    $req->execute(array($info));
    $user = $req->fetch();

    return $user;
  }
  }





function hasnt_password(){
    global $db;

    $sql = "SELECT * FROM admin WHERE email = '{$_SESSION['admin']}' AND password = ''";
    $req = $db->prepare($sql);
    $req->execute();
    $exist = $req->rowCount($sql);
    return $exist;
}




?>


