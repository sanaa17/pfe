<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Graduation an Education Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
				<h3>Sign In </h3>
					<form action="#" method="post">
						<input type="email" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<ul>
						<li>
							<input type="checkbox" id="brand1" value="">
							<label for="brand1"><span></span>Remember me</label>
						</li>
						</ul>
						<a href="#">Forgot Password?</a><br>
						<div class="clearfix"></div>
							<input type="submit" value="Sign In">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign in form -->

<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Sign Up</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Your Name" required=""/>
						<input type="email" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<input type="password" name="Password" class="password" placeholder="Confirm Password" required=""/>
						<input type="submit" value="Sign Up">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign up form -->

<!-- TOP HEADER -->
<div class="top">
	<div class="container">
		<div class="col-md-4 top-left">
			<p><i class="fa fa-map-marker" aria-hidden="true"></i> Avenue park,4th Block,Near statue</p>
		</div>
		<div class="col-md-4 top-middle">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
			</ul>
		</div>
		<div class="col-md-4 top-right">
			<a href="#" data-toggle="modal" data-target="#myModal1"><span></span> Sign In</a>
			<a href="#" data-toggle="modal" data-target="#myModal2"><span></span> Sign Up</a>
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
						<h1><a class="navber-brand" href="index.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Graduation</a></h1>
					</div>
					<div class="collapse navbar-collapse navbar-right navigation-right" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 navbar-nav nav nav-wil">
								<li class="active"><a data-hover="Home" href="index.html">Home</a></li>
								<li><a data-hover="About" href="#about" class="scroll">About</a></li>
								<li><a data-hover="Services" href="#services" class="scroll">Services</a></li>
								<li><a data-hover="OurStaff" href="#staff" class="scroll">OurStaff</a></li>
								<li><a data-hover="Gallery" href="#gallery" class="scroll">Gallery</a></li>
								<li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>
<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/srix">
			
			<div class="w3ls_banner_info">
				<div class="container">
				<div class="w3l-banner-grids">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider4">
									<li>
										<div class="w3ls-text">
											<h3>Helping our students</h3>
							                <h3>Fulfill the right potential</h3>
											<p>Cras ultrices lorem a hendrerit condim<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Providing safe and</h3>
							                <h3>Educational environment</h3>
											<p>Proin convallis leo vitae ligula portti<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Providing our students</h3>
							                <h3>Scholarships and more</h3>
											<p>Cras ultrices lorem a hendrerit condim<i class="fa fa-trophy" aria-hidden="true"></i></p>
										</div>
									</li>
									<li>
										<div class="w3ls-text">
											<h3>Providing Hostel facility</h3>
							                <h3>with  clean & Green</h3>
											<p>Cras ultrices lorem a hendrerit condim<i class="fa fa-trophy" aria-hidden="true"></i></p>
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
								<div class="modal-header">
									Education
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
									<div class="modal-body">
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										<p>Ut enim ad minima veniam, quis nostrum 
											exercitationem ullam corporis suscipit laboriosam, 
											nisi ut aliquid ex ea commodi consequatur? Quis autem 
											vel eum iure reprehenderit qui in ea voluptate velit 
											esse quam nihil molestiae consequatur, vel illum qui 
											dolorem eum fugiat quo voluptas nulla pariatur.
											<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
												esse quam nihil molestiae consequatur.</i></p>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
<!-- //banner section -->

<!-- about section -->
<div class="about" id="about"> 
	<div class="container"> 
		<div class="heading">
			<h3>about</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mollis sit amet nunc vel iaculis. Duis semper vitae risus a hendrerit. Curabitur vel vehicula odio. Pellentesque posuere ligula vitae ex euismod, ut placerat turpis commodo. Aliquam eu arcu dolor. Maecenas non orci accumsan, vehicula diam faucibus, eleifend augue</p>
		</div>
		<div class="about-w3lsrow"> 
			<div class="col-md-7 col-sm-7 w3about-img"> 
				<img src="images/a3.jpg" alt="" />
				<div class="w3about-text"> 
					<h5 class="w3l-subtitle">- Heading 2</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
				</div>
			</div>
			<div class="col-md-7 col-sm-7 w3about-img1"> 
				<img src="images/g1111.jpg" alt="" />
				<div class="w3about-text1"> 
					<h5 class="w3l-subtitle">- Heading 1</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
				</div>
			</div> 
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about section --> 
	
<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="agile-heading heading">
				<h3>Our Services</h3>
			</div>
			<div class="wthree-services-grids">
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-trophy" aria-hidden="true"></i>
							<h4>trophy</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>trophy</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							<h4>graduation</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>graduation</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-black-tie" aria-hidden="true"></i>
							<h4>black tie</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>black tie</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							<h4>thumbs up</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>thumbs up</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree-services-grids services-grids1">
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
							<h4>calendar</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>calendar</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-sun-o" aria-hidden="true"></i>
							<h4>Vivamus</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>Vivamus</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-percent" aria-hidden="true"></i>
							<h4>percent</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>percent</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa fa-university" aria-hidden="true"></i>
							<h4>university</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>university</h4>
							<p>Nulla mi nisl, porta ornare facilisis sit amet, bibendum ac dolor.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->

<!-- staff section -->
	<div class="team" id="staff"> 
		<div class="container"> 
			<div class="heading">
				<h3>Our Staff</h3>
			</div>
			<div class="team-grids">
				<div class="col-md-4 col-sm-4 team-grid"> 
					<h3>Meet Our Staff</h3>
					<h4>Donec euismod tempor dui sed laoreet.</h4>
					<p>Ut risus eros, iaculis ac dui ac, consectetur tristique elit. Aliquam a mattis eros. Aliquam suscipit massa sit amet massa laoreet, quis vulputate arcu aliquet. Nunc porta leo neque, eu condimentum tellus iaculis vitae. Praesent a libero dictum, congue sem sit amet. </p>
				</div>
				<div class="col-md-4 col-sm-4 team-grid1"> 
					<div class="inner-team-grid"> 
						<img src="images/s1.jpg" alt="" />
						<h3>Amsterden</h3>
						<h4>Head & Dean</h4>
						<p>+040 0356672</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 team-grid1">  
					<div class="inner-team-grid"> 
						<img src="images/s2.jpg" alt="" />
						<h3>Leyrie</h3>
						<h4>Senior Professor</h4>
						<p>+040 0352654</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 team-grid1"> 
					<div class="inner-team-grid"> 
						<img src="images/s3.jpg" alt="" />
						<h3>Eglesias</h3>
						<h4>Lecturer</h4>
						<p>+040 0356699</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 team-grid1">  
					<div class="inner-team-grid"> 
						<img src="images/s4.jpg" alt="" />
						<h3>mery linda</h3>
						<h4>Asst. Professor</h4>
						<p>+040 0352631</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 team-grid1">  
					<div class="inner-team-grid"> 
						<img src="images/s5.jpg" alt="" />
						<h3>paul vest</h3>
						<h4>Senior Professor</h4>
						<p>+040 0352666</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //staff section -->

<!-- gallery -->
<div class="team-bottom gallery" id="gallery">
			<div class="heading">
				<h3>gallery</h3>
			</div>
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g21.jpg" data-responsive-src="images/g1.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g21.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g2.jpg" data-responsive-src="images/g2.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g2.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g3.jpg" data-responsive-src="images/g3.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g4.jpg" data-responsive-src="images/g4.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g4.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g25.jpg" data-responsive-src="images/g5.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g25.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g6.jpg" data-responsive-src="images/g6.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g6.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g7.jpg" data-responsive-src="images/g7.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g7.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g8.jpg" data-responsive-src="images/g8.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g8.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g9.jpg" data-responsive-src="images/g9.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g9.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g10.jpg" data-responsive-src="images/g10.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g10.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g22.jpg" data-responsive-src="images/g11.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g22.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g12.jpg" data-responsive-src="images/g12.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g12.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g23.jpg" data-responsive-src="images/g12.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g23.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g24.jpg" data-responsive-src="images/g12.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g24.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Graduation" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/g25.jpg" data-responsive-src="images/g12.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/g25.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext"><i class="fa fa-search-plus" aria-hidden="true"></i></h4>
								
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		<div class="clearfix"></div>
</div>
<!-- //gallery -->

<!-- Admission form -->
<div class="admission">
	   <div class="container">
	   <div class="heading">
			<h3>Admission are open</h3>
		</div>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<form action="#" method="post">
				<div class="col-md-6 admission_left">
				<h2>Fill your Information</h2>
				 <div class="select-block1">
					<select required="">
						<option value="">Title*</option>
						<option value="">Mr.</option>
						<option value="">Ms.</option>
				   </select>
				 </div>
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="First Name*" type="text" required="">
				 </div>
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="slider-name" id="slider-name1" placeholder="Last Name*" type="text" required="">
				 </div>
				<!-- select-block -->
				<div class="select-block1">
					<select required="">
						<option value="">Course type*</option>
						<option value="">Diploma</option>
						<option value="">Full time</option>
						<option value="">Part time</option>
						<option value="">Higher degree</option>
						<option value="">Graduate</option>
						<option value="">Pg</option>
						<option value="">Degree</option>
					</select>
				</div>
              <div class="col-md-4 form_box">
                  <div class="select-block1">
                    <select required="">
	                    <option value="">Date*</option>
	                    <option value="">1</option>
	                    <option value="">2</option>
	                    <option value="">3</option>
	                    <option value="">4</option>
	                    <option value="">5</option>
	                    <option value="">6</option>
	                    <option value="">7</option>
	                    <option value="">8</option>
	                    <option value="">9</option>
	                    <option value="">10</option>
	                    <option value="">11</option>
	                    <option value="">12</option>
	                    <option value="">13</option>
	                    <option value="">14</option>
	                    <option value="">15</option>
	                    <option value="">16</option>
	                    <option value="">17</option>
	                    <option value="">18</option>
	                    <option value="">19</option>
	                    <option value="">20</option>
	                    <option value="">21</option>
	                    <option value="">22</option>
	                    <option value="">23</option>
	                    <option value="">24</option>
	                    <option value="">25</option>
	                    <option value="">26</option>
	                    <option value="">27</option>
	                    <option value="">28</option>
	                    <option value="">29</option>
	                    <option value="">30</option>
	                    <option value="">31</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box">
                   <div class="select-block1">
                    <select required="">
	                    <option value="">Month</option>
	                    <option value="">January</option>
	                    <option value="">February</option>
	                    <option value="">March</option>
	                    <option value="">April</option>
	                    <option value="">May</option>
	                    <option value="">June</option>
	                    <option value="">July</option>
	                    <option value="">August</option>
	                    <option value="">September</option>
	                    <option value="">October</option>
	                    <option value="">November</option>
	                    <option value="">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box1">
                   <div class="select-block1">
                    <select required="">
	                    <option value="">Year</option>
	                    <option value="">1982</option>
	                    <option value="">1983</option>
	                    <option value="">1984</option>
	                    <option value="">1985</option>
	                    <option value="">1986</option>
	                    <option value="">1987</option>
	                    <option value="">1988</option>
	                    <option value="">1989</option>
	                    <option value="">1990</option>
	                    <option value="">1991</option>
	                    <option value="">1992</option>
	                    <option value="">1993</option>
	                    <option value="">1994</option>
	                    <option value="">1995</option>
	                    <option value="">1996</option>
	                    <option value="">1997</option>
	                    <option value="">1998</option>
	                    <option value="">1999</option>
	                    <option value="">2000</option>
	                    <option value="">2001</option>
	                    <option value="">2002</option>
	                    <option value="">2003</option>
	                    <option value="">2004</option>
	                    <option value="">2005</option>
	                    <option value="">2006</option>
	                    <option value="">2007</option>
	                    <option value="">2008</option>
	                    <option value="">2009</option>
	                    <option value="">2010</option>
	                    <option value="">2011</option>
	                    <option value="">2012</option>
	                    <option value="">2013</option>
	                    <option value="">2014</option>
	                    <option value="">2015</option>
	                    <option value="">2016</option>
	                    <option value="">2017</option>
                    </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 admission_right">
              <h3>Contact Information</h3>
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="slider-name" id="slider-name2" placeholder=" Primary email*" type="email" required="">
	             </div>
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="slider-name" id="slider-name3" placeholder="Secondary email" type="email" required="">
	             </div>
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="slider-name" id="slider-name4" placeholder="Phone no*" type="tel" required="">
	             </div>
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="slider-name" id="slider-name5" placeholder="Postal code*" type="tel" required="">
	             </div>
               <div class="select-block1">
                <select>
                    <option value="">Country*</option>
                    <option value="">Japan</option>
                        <option value="">Kenya</option>
                        <option value="">Dubai</option>
                        <option value="">Italy</option>
                        <option value="">Greece</option> 
                        <option value="">Iceland</option> 
                        <option value="">China</option> 
                        <option value="">Doha</option> 
                        <option value="">Irland</option> 
                        <option value="">Srilanka</option> 
                        <option value="">Russia</option> 
                        <option value="">Hong Kong</option> 
                        <option value="">Germany</option>
                        <option value="">Canada</option>  
                        <option value="">Mexico</option> 
                        <option value="">Nepal</option>
                        <option value="">Norway</option> 
                        <option value="">Oman</option>
                        <option value="">Pakistan</option>  
                        <option value="">Kuwait</option> 
                        <option value="">Indonesia</option>  
                        <option value="">Spain</option>
                        <option value="">Thailand</option>  
                        <option value="">Saudi Arabia</option> 
                        <option value="">Poland</option> 
                </select>
              </div>
	            <input type="submit" value="Apply Now" class="course-submit">	
	   	   </div>	                            
             </form>	
	   	   </div>
	   	</div>
	   	  <div class="clearfix"> </div>	
<!-- //Admission form -->



<!-- subscribe section -->
<div class="subscribe"> 
	<div class="container"> 
		<div class="heading">
			<h3>Subscribe</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<form action="#" method="post"> 
			<input type="email" name="email" placeholder="Enter your email..." required="">
			<input type="submit" value="Subscribe">
		</form>
	</div>
</div>
<!-- //subscribe section -->

<!-- contact section -->
<div class="contact" id="contact"> 
	<div class="container"> 
		<div class="heading">
			<h3>Contact</h3>
			<h5>Need Help<span>?</span>   Make a call</h5>
			<h4>+010 32190765</h4>
		</div>
			<form action="#" method="post">
                <div class="col-lg-4 col-md-4 col-sm-4">
					<div class="control-group form-group">
						<div class="controls">
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Your Name*"><i class="fa fa-user" aria-hidden="true"></i>
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-4">	
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Email*"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-4 col-sm-4">
					<div class="control-group form-group">
						<div class="controls">
                            <input type="text" class="form-control" id="name1" required data-validation-required-message="Please enter your phone number." placeholder="Phone number*"><i class="fa fa-phone" aria-hidden="true"></i>
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
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
					<button type="submit" class="btn btn-primary">Send Message</button>
				</div>
				<div class="clearfix"></div>	
            </form>
	</div>
</div>
<!-- //contact section -->

<!-- map -->
<div class="map">
	<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen></iframe>
</div>
<!-- /map -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<p>© 2017 Graduation . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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