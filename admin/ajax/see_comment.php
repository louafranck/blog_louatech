<?php 
			require'../../functions/mainfunctions.php';
			$db->exec("UPDATE commentaires SET vu ='1' WHERE id='{$_POST['id']}'");


  ?>