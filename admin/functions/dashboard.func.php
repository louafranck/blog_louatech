<?php 

	function inTable($table){
		global $db;
		$query = $db->query("SELECT COUNT(id) FROM $table");
		return $nombre = $query->fetch();
	}

	function getColor($table,$colors){

		if (isset($colors[$table])) {
			return $colors[$table];
		} else {
			return "orange";
		}
		
	}

// fonction pour recuperer les commentaires non lus des utilisateurs
	function get_comments(){
		global $db;
		$req = $db->query("
			SELECT commentaires.id,
			commentaires.name,
			commentaires.email,
			commentaires.datec,
			commentaires.post_id,
			commentaires.comments,
			posts.title
			FROM commentaires
			JOIN posts
			ON commentaires.post_id = posts.id
			WHERE commentaires.vu ='0'
			ORDER BY commentaires.datec ASC
			");

		$results = [];
		while ($rows = $req->fetchObject()) {
			$results[] = $rows;
		}
		return $results;
	}





 ?>