

<!-- <div class="navbar-fixed"></div> -->
	<nav class="light-green ">

		<div class="container">


			<div class="nav-wrapper">

				<a href="index.php?page=dashboard" class="brond_logo">Blog 2.0 | Administration</a>
				<?php
							if ($page != 'login' && $page !='new' && $page !='password') {
								?>

				<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

				<ul class="right hide-on-med-and-down">
					<li class="<?php echo ($page=="dashboard")?"active" : "";?>">
						<a href="index.php?page=dashboard"><i class="material-icons">dashboard</i></a>
					</li>

							<?php
							$admin_connect = get_admin_connect();
							if (admin() ==1) {
								?>



					<li class="<?php echo ($page=="write")?"active" : "";?>">
						<a href="index.php?page=write"><i class="material-icons">edit</i></a>
					</li>
					<li class="<?php echo ($page=="list")?"active" : "";?>">
						<a href="index.php?page=list"><i class="material-icons">view_list</i></a>
					</li>
					<li class="<?php echo ($page=="contact")?"active" : "";?>">
						<a href="index.php?page=contact"><i class="material-icons">message</i></a>
					</li>
					<li class="<?php echo ($page=="work")?"active" : "";?>">
						<a href="index.php?page=work"><i class="material-icons">help</i></a>
					</li>

					<li class="<?php echo ($page=="settings")?"active" : "";?>">
						<a href="index.php?page=settings"><i class="material-icons">settings</i></a>
					</li>




								<?php
							}


		 					?>

		 					<li><a href="#!" class="dropdown-button" data-activates="dropdown1"><i class="material-icons left">group</i><?= $admin_connect['name'] ?> <i class="material-icons right">arrow_drop_down</i></a></li>





				</ul>
				<ul id="dropdown1" class="dropdown-content">
					<li ><a href="../index.php?page=home">Quitter</a> </li>
					<li class="divider"></li>
					<li ><a href="index.php?page=logout">Déconnexion</a> </li>

			   </ul>

			   <ul class="side-nav" id="mobile-menu">
					<li class="<?php echo ($page=="dashboard")?"active" : "";?>"><a href="index.php?page=dashboard">Tableau de bord</a></li>



							<?php
							if (admin() ==1) {
								?>


					<li class="<?php echo ($page=="write")?"active" : "";?>">
						<a href="index.php?page=write">Publier un article</a>
					</li>
					<li class="<?php echo ($page=="list")?"active" : "";?>">
						<a href="index.php?page=list">Listing des articles</a>
					</li>
					<li class="<?php echo ($page=="contact")?"active" : "";?>">
						<a href="index.php?page=contact">Contactez</a>
					</li>
					<li class="<?php echo ($page=="settings")?"active" : "";?>">
						<a href="index.php?page=settings">Paramètres</a>
					</li>



								<?php
							}


		 					?>
		 					<li ><a href="../index.php?page=home">Quitter</a> </li>
					<li ><a href="index.php?page=logout">Déconnexion</a> </li>

				</ul>

						<?php
							}

					 ?>

				</div>

		</div>

		</nav>









