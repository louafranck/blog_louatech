<?php 
			require'../../functions/mainfunctions.php';
			$db->exec("DELETE FROM commentaires  WHERE id='{$_POST['id']}'");


  ?>