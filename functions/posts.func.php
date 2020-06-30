<?php

	function get_postsid(){

			global $db;


			$req = $db->query("SELECT posts.id,posts.title,posts.image,posts.containte,posts.date,admin.name FROM posts JOIN admin ON posts.writer = admin.email
					WHERE posts.id ='{$_GET['id']}' AND posts.posted ='1' ");
			$result = $req->fetchObject();
			return $result;

	}

	function comment($name,$email,$comments){

		global $db;

		$c = array(

				'name' => $name,
				'email'=> $email,
				'comments' => $comments,
				'post_id' => $_GET['id']

			);

		$sql = "INSERT INTO commentaires(name,email,comments,post_id,datec) VALUES(:name,:email,:comments,:post_id,NOW())";
		$req = $db->prepare($sql);
		$req->execute($c);
	}

	function get_comments(){


		global $db;
		$req = $db->query("SELECT * FROM commentaires WHERE post_id='{$_GET['id']}' ORDER BY datec DESC");
		$results = [];
		while ($rows = $req->fetchObject()) {
			$results[] = $rows;
		}

		return $results;
	}


// fonctions pour afficher le nom de l'utilisateur en cours de connection
function get_users_comments(){
			global $db;
				if (!isset($_SESSION['admin'])) {

   } else {
		$info = $_SESSION['admin'];
		$req = $db->prepare('SELECT * FROM utilisateur WHERE email = ?');
		$req->execute([$info]);
		$user = $req->fetch();

		return $user;
	}
	}

 ?>
