$(document).ready(function(){
	 $(".see_comment").click(function(){
        var id = $(this).attr("id");
        $.post('ajax/see_comment.php',{id:id},function(){
            $("#commentaire_"+id).hide();
        });
    });

});

$(document).ready(function(){

    $(".delete_comment").click(function(){
        var id = $(this).attr("id");
        $.post('ajax/delete_comment.php',{id:id},function(){
                $("#commentaire_"+id).hide();
        });
    });

});


$(document).ready(function(){
    $('.modal').modal();
  });


