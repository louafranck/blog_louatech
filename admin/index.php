<?php
include '../functions/mainfunctions.php';
$pages = scandir('pages/');
if (isset($_GET['page']) && !empty($_GET['page'])) {
  if (in_array($_GET['page'].'.php',$pages)) {
    $page=$_GET['page'];
  }
  else {
    $page = "error";
  }
}
else {
    $page = "dashboard";
  }

$page_functions= scandir('functions/');
if (in_array($page.'.func.php', $page_functions)) {
  include 'functions/'.$page.'.func.php';
}


?>




  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <link href="../css/material-icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
      <title>Blog 2.0 | Administration</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    </head>

    <body>
    <?php

          if ($page!='login' && $page !='new' && !isset($_SESSION['admin'])) {
            header("Location:index.php?page=login");
          }
          include 'body/topbar.php';

          ?>
        <div class="container">


          <?php
          include 'pages/'.$page.'.php';

          ?>
        </div>



      <!--Import jQuery before materialize.js   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.js"></script>
      <script type="text/javascript" src="../js/sript.js"></script>



      <?php
            $page_js= scandir('js/');
if (in_array($page.'.func.js', $page_js)) {
  ?>
  <script type="text/javascript" src="js/<?= $page ?>.func.js"></script>

  <?php
}
       ?>
    </body>
  </html
