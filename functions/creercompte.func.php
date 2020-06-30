<?php 

function isEmail($email){
    global $db;
    $e = ['email'   =>  $email];
    $sql = "SELECT * FROM utilisateur WHERE email = :email";
    $req = $db->prepare($sql);
    $req->execute($e);
    $free = $req->rowCount($sql);

    return $free;
}


function ajoututilisateur($pseudo,$email,$password,$telephone,$genre) {
	 global $db;

    $m= [
        'pseudo'       =>  $pseudo,
        'email'        =>  $email,
        'password'     =>  sha1($password),
        'telephone'    =>  $telephone,
        'genre'        =>  $genre
    ];

    $sql = "INSERT INTO utilisateur(pseudo,email,password,telephone,genre) VALUES(:pseudo,:email,:password,:telephone,:genre)";
    $req = $db->prepare($sql);
    $req->execute($m);
}