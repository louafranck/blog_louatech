<?php 

function get_post()
{
	global $db;

	$req = $db->query("SELECT 
							posts.id, 
							posts.title,
							posts.image,
							posts.date,
							posts.containte,
							posts.posted,
							admin.name
							FROM posts
							JOIN admin
							ON posts.writer = admin.email 
							WHERE posts.id = '{$_GET['id']}'");
	$result = $req->fetchObject();
	return $result;
 }


 function edit($title,$content,$posted,$id){

    global $db;

    $e = [
        'title'     => $title,
        'content'   => $content,
        'posted'    => $posted,
        'id'        => $id
    ];

    $sql = "UPDATE posts SET title=:title, containte=:content, date=NOW(), posted=:posted WHERE id=:id";
    $req = $db->prepare($sql);
    $req->execute($e);

}

 ?>