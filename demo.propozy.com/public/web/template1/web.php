<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
//$_SERVER['HTTP_HOST'] = 'http://localhost/propoxy';
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path."/propoxy");
define('DRUPAL_ROOT', getcwd()); //the most important line
//$_SERVER['HTTP_HOST'] = 'http://localhost/propoxy';
require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
global $user;
print_r($user);
 $json_data = file_get_contents('data.txt');
 if(isset($user->uid)) {
	 $json_data = file_get_contents('userdata/data_'.$user->uid.'.txt');
	 if(!$json_data) {
	   $json_data = file_get_contents('data.txt');
	 }
 }
 $data = json_decode($json_data, true);
 $Hometitle = $data['Template1']['Home'][0]['Title'];
 $HomeDescription = $data['Template1']['Home'][1]['Description'];
 $Hometitle = $user->name;
?>
<!DOCTYPE HTML>
<!--
	Justice by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php print $data['Template1']['Home'][0]['Title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<?php 
	 if(isset($user->uid)) {
		print '<a href="?mod=edit" class="edit-btn">Edit</a>';
		print '<a href="http://localhost/propoxy" class="edit-btn-home">Home</a>';
	 }
	   if(isset($_REQUEST['mod'])) {
	     print '<div class="fom-box">'; include "form.php";  print'</div>';
	   }
	?>
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="index.php"><?php print $data['Template1']['Home'][0]['Title']; ?></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="#" data-nav-section="home"><?php print $data['Template1']['Menu'][0]; ?></a></li>
						<li><a href="#" data-nav-section="about"><?php print $data['Template1']['Menu'][1]; ?></a></li>
						<li><a href="#" data-nav-section="practice-areas"><?php print $data['Template1']['Menu'][2]; ?></a></li>
						<li><a href="#" data-nav-section="our-team"><?php print $data['Template1']['Menu'][3]; ?></a></li>
						<li class="btn-cta"><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
						<!-- For external page link -->
						<!-- <li><a href="http://gettemplates.co/" class="external">External</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<section id="gtco-hero" class="gtco-cover" style="background-image: url(images/img_bg_4.jpg);"  data-section="home"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeIn"><?php print $data['Template1']['Home'][1]['Description'] ?></h1>
							<p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-controller-play"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1><?php print $data['Template1']['About'][0]['Title']; ?></h1>
					<p class="sub"><?php print $data['Template1']['About'][1]['Description']; ?></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Welcome</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/img_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">

					<h2 class="heading-colored">Excellence &amp; Honesty</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut praesentium nihil hic quam culpa magnam ducimus suscipit repellat quidem cumque, unde impedit, labore earum eligendi perspiciatis nemo molestiae sequi veritatis. Veritatis, reprehenderit, eaque! Rerum, libero ipsam enim, iusto adipisci quae repellendus officia consequatur ducimus cupiditate impedit, aliquam numquam excepturi.</p>
					<p><a href="#" class="read-more">Read more <i class="icon-chevron-right"></i></a></p>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h2 class="heading-colored"><?php print $data['Template1']['PracticeAreas'][0]['Title']; ?></h2>
					<p class="sub"><?php print $data['Template1']['PracticeAreas'][1]['Description']; ?></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn"><?php print $data['Template1']['PracticeAreas'][0]['Title']; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Criminal Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Industrial Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Financial Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
				<div class="col-md-6">
					
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Divorce Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Corporate Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="images/scale.png" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
						</div>
						<div class="gtco-copy">
							<h3>Accident Law</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget ornare tortor leo eget erat. </p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="our-team">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1><?php print $data['Template1']['OURTEAM'][0]['Title']; ?></h1>
					<p class="sub"><?php print $data['Template1']['OURTEAM'][1]['Description']; ?></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Our Team</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="images/img_team_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Jeff Finley</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/img_team_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Craig Campbell</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

		</div>
	</section>

	<section id="gtco-contact" data-section="contact">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1><?php print $data['Template1']['ContactUs'][0]['Title']; ?></h1>
					<p class="sub"><?php print $data['Template1']['ContactUs'][1]['Description']; ?></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Contact</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<form action="#">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="text" class="form-control" placeholder="Name" id="name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" class="form-control" placeholder="Email" id="email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>
							<li class="address">198 West 21th Street, Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1235235598">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="#">http://gettemplates.co</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="container">
			
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>



