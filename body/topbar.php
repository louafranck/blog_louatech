<nav class="light-blue ">
<div class="container">
	<div class="nav-wrapper ">
		<a href="index.php?page=home" class="brond_logo">Blog 2.0</a>


		<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

		<ul class="right hide-on-med-and-down">

		<li class="<?php echo ($page=="home")?"active" : "";?>"><a href="index.php?page=home"><i class="material-icons left">perm_identity</i> Accueil</a></li>
			<li class="<?php echo ($page=="blog")?"active" : "";?>"><a href="index.php?page=blog">Blog</a></li>
			<li class="<?php echo ($page=="apropos")?"active" : "";?>"><a href="index.php?page=apropos">A propos</a></li>
			<li class="<?php echo ($page=="contact")?"active" : "";?>"><a href="index.php?page=contact">Contacter</a></li>
			<li class="<?php echo ($page=="recherche")?"active" : "";?>"><a href="index.php?page=recherche"><i class="material-icons left">search</i>Recherche</a></li>

			<?php
							if (connect() ==1) {
								?>
									<li class="<?php echo ($page=="compte")?"active" : "";?>"><a href="index.php?page=compte">Mon Profil</a> </li>
									<li ><a href="index.php?page=logout">Déconnexion</a> </li>


								<?php
							} else {
								?>

			<li class="<?php echo ($page=="compteuser")?"active" : "";?>"><a href="index.php?page=compteuser">Se Connecter</a> </li>

								<?php
								}
			 					?>

		</ul>

		<ul class="side-nav" id="mobile-menu">
			<li class="<?php echo ($page=="home")?"active" : "";?>"><a href="index.php?page=home"><i class="material-icons left">perm_identity</i>Accueil</a></li>
			<li class="<?php echo ($page=="blog")?"active" : "";?>"><a href="index.php?page=blog">Blog</a></li>
			<li class="<?php echo ($page=="apropos")?"active" : "";?>"><a href="index.php?page=apropos">A propos</a></li>
			<li class="<?php echo ($page=="contact")?"active" : "";?>"><a href="index.php?page=contact">Contacter</a></li>
			<li class="<?php echo ($page=="recherche")?"active" : "";?>"><a href="index.php?page=recherche"><i class="material-icons left">search</i>Recherche</a></li>


			<?php
							if (connect() ==1) {
								?>
									<li class="<?php echo ($page=="compte")?"active" : "";?>"><a href="index.php?page=compte">Mon Profil</a> </li>
									<li ><a href="index.php?page=logout">Déconnexion</a> </li>

								<?php
							} else {
								?>

			<li class="<?php echo ($page=="compteuser")?"active" : "";?>"><a href="index.php?page=compteuser">Se Connecter</a> </li>

								<?php
								}
			 					?>
		</ul>
	</div>
</div>

</nav>
