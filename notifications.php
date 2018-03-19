<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="fr">
<!-- Head -->
<head>
<title>Gestion des PFE :Etudiants</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Graduation a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- default-css-files -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- default-css-files -->

<!-- gallery css file-->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery css file-->

<!-- Online fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<!-- //Online fonts -->

<!-- style.css-file -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //style.css-file -->

<!-- Script-for-nav-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //Script-for-nav-scrolling -->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Default-JavaScript-File -->
</head>
<!-- Head -->
<body>

<!-- banner section -->
<!-- popup for sign in form -->
<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog1" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Déconnexion </h3>
					<form action="#" method="post">
						<h5> voulez vous déconnecter ?</h5>
							<input type="submit" value="OUI"> <input type="submit" value="NON">

					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign in form -->

<!-- popup for sign up form
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Inscription</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="votre nom" required=""/>
						<input type="text" name="Prenom" placeholder="votre Prénom" required=""/>
						<input type="text" name="specialite" placeholder="Spécialité" required=""/>
						<input type="email" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="mot de passe" required=""/>
						<input type="password" name="Password" class="password" placeholder="Confirmer mot de passe" required=""/>
						<input type="submit" value="Inscription">
					</form>
			</div>
		</div>
	</div>
</div>-->
<!-- //popup for sign up form -->

<!-- TOP HEADER -->
<div class="top">
	<div class="container">
		<div class="col-md-4 top-left">
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> Nouveau Pole ,Mansourah Tlemcen </p>
		</div>
		<div class="col-md-4 top-middle">
			<ul>
				<li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
				<li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
				<li><a href="www.gmail.com"><i class="fa fa-google-plus"></i></a></li>

			</ul>
		</div>
		<div class="col-md-4 top-right">
			<a href="#" data-toggle="modal" data-target="#myModal1"><span></span> Déconnexion</a>
			<!--<a href="#" data-toggle="modal" data-target="#myModal2"><span></span> Inscription</a>-->
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //TOP HEADER -->

		<div class="navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
					</div>
					<div class="logo">
						<h1><a class="navber-brand" href="Etudiant.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Gestion des PFE</a></h1>
					</div>
					<div class="collapse navbar-collapse navbar-right navigation-right" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-3" id="link-effect-3">

							<ul class="nav1 navbar-nav nav nav-wil">
								<li class="active"><a data-hover="Acceuil" href="Etudiant.php">Acceuil</a></li>
								<li><a data-hover="Thémes" href="Etudiant.php#theme" >Thémes </a></li>
								<li><a data-hover="Fiche de Voeux" href="ficheVoeux.php#fiche" >Fiche de Voeux </a></li>
								<li><a data-hover="Notifications" href="notification.php#notif" >Notifications</a></li>

								<li><a data-hover="Profile" href="profileET.php#prfl" >Profile</a></li>
							</ul>

						</nav>
					</div>
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>
<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="images/g8.jpg">

			<div class="w3ls_banner_info">
				<div class="container">
				<div class="w3l-banner-grids">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider4">
									<li>
										<div class="w3ls-text">
											<h3>Université Abou Baker Belkaid</h3>
							                <h3>Tlemcen</h3>
											<p>Site réservé aux étudiants Master 2<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Département d'informatique</h3>
							                <h3>GL,SIC,RSD,MID</h3>
											<p>Site réservé aux étudiants Master 2<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Université Abou Baker Belkaid</</h3>
							                <h3>Tlemcen</h3>
											<p>Site réservé aux étudiants Master 2<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Département d'informatique</h3>
							                <h3>GL,SIC,RSD,MID</h3>
											<p>Site réservé aux étudiants Master 2<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
								</ul>
							</div>
							<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });

								});
							 </script>
							<!--banner Slider starts Here-->
						</div>
			<div class="clearfix"> </div>
				</div>
					<!--modal-video-->
					<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">

							</div>
						</div>
					</div>
				</div>
			<div id="notif"></div></div>
	</div>
<!-- //banner section -->



<!--notifications -->



<!-- notification section -->
<div class="contact" id="notif">
	<div class="container">
		<div class="heading">
			<h3>Contacter Encadreur</h3>
			<h5>Besoin d'aide<span>?</span>Appeler</h5>
			<h4>0123456789</h4>
		</div>
			<form action="#" method="post">
                <div class="col-lg-4 col-md-4 col-sm-4">
					<div class="control-group form-group">
						<div class="controls">
                            <input type="text" class="form-control" id="name" required data-validation-required-message="entrer le Distinataire svp " placeholder="Distinataire*"><i class="fa fa-user" aria-hidden="true"></i>
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" id="name1" required data-validation-required-message="Taper un objectif" placeholder="Objectif*"><i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                    </div>
				</div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-4">
					<div class="control-group form-group">
						<div class="controls">
                            <input type="text" class="form-control" id="name1" required data-validation-required-message="Please enter your phone number." placeholder="Phone number*"><i class="fa fa-phone" aria-hidden="true"></i>
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div> -->
				<div class="clearfix"></div>
				<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message*"></textarea>
                        </div>
                    </div>
				</div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <div class="col-lg-12 col-md-12 col-sm-12 center">
					<button type="submit" class="btn btn-primary">Envoyer</button>
				</div>
				<div class="clearfix"></div>
            </form>
	</div>
</div>
<!-- //notification section -->



<!--notifications end -->


<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<p>© 2018 Gestion des PFE . tout droits réservés| créer par <a href="#">SML Company</a></p>
			</div>
			<div class="footer-right">
				<div class="wthree-icon">
					<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- For Gallery js files -->
<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //For Gallery js files -->



	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
