
<?php

if(hasnt_password() == 1){
    header("Location:index.php?page=password");
}

?>


<h2>TABLEAU DE BORD</h2>
<div class="row">

    <?php

        $tables = [
            "Publications"      =>  "posts",
            "Commentaires"      =>  "commentaires",
            "Administrateurs"   =>  "admin"
        ];

        $colors = [
            "posts"     =>  "blue-grey",
            "commentaires"  =>  "red",
            "admin"    =>  "blue"
        ];

    ?>


    <?php

        foreach($tables as $table_name => $table){
            ?>
                <div class="col l4 m6 s12">
                    <div class="card">
                        <div class="card-content <?= getColor($table,$colors) ?> white-text">
                            <span class="card-title"><?= $table_name ?></span>
                            <?php $nbrInTable = inTable($table); ?>
                            <h4><?= $nbrInTable[0] ?></h4>
                        </div>
                    </div>
                </div>
            <?php
        }

    ?>


</div>

<h4>Commentaires non lus</h4>
<?php
    $commentss = get_comments();
?>
<table>
    <thead>
        <tr>
            <th>Article</th>
            <th>Commentaire</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(!empty($commentss)) {
            foreach ($commentss as $comment) {
                ?>
                <tr id="commentaire_<?= $comment->id ?>">
                    <td><?= $comment->title ?></td>
                    <td><?= substr($comment->comments, 0, 100); ?>...</td>
                    <td>
                        <a href="#" id="<?= $comment->id ?>"
                           class="btn btn-small waves-effect waves-light green see_comment"><i
                                class="material-icons">done</i></a>
                        <a href="#" id="<?= $comment->id ?>"
                           class="btn btn-small waves-effect waves-light red delete_comment"><i
                                class="material-icons">delete</i></a>


                          <!-- Modal Trigger -->
  					<a class="btn btn-small waves-effect waves-light blue modal-trigger" href="#modal1<?= $comment->id ?>">
  						<i class="material-icons">more_vert</i>
  					</a>
					    <!-- Modal Structure -->
					  <div id="modal1<?= $comment->id ?>" class="modal modal-fixed-footer">
					    <div class="modal-content">
					      <h4><?= $comment->title ?></h4>
							 <p>Commentaire posté par <strong><?= $comment->name . " (" . $comment->email . ")</strong><br/>Le " . date("d/m/Y à H:i", strtotime($comment->datec)) ?>
					         </p>
					         <hr/>
					       	<p><?= nl2br($comment->comments) ?></p>

					    </div>
					    <div class="modal-footer">
					      	<a href="#" id="<?= $comment->id ?>" class="modal-action modal-close waves-effect waves-red btn-flat delete_comment">
					      		<i class="material-icons">delete</i>
					      	</a>
					        <a href="#" id="<?= $comment->id ?>" class="modal-action modal-close waves-effect waves-green btn-flat see_comment">
					        	<i class="material-icons">done</i>
					        </a>
					    </div>
					  </div>
                    </td>
                </tr>

            <?php
            }
        }else{
            ?>
                <tr>
                    <td></td>
                    <td><center>Aucun commentaire à valider</center></td>
                </tr>
            <?php
        }
        ?>
    </tbody>
</table>




<pre>
    <?php
    var_dump($_SESSION);
    ?>
</pre>






