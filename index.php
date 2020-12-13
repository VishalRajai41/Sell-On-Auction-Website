<script>

function search()
{

    if(document.getElementById("txt1").value=="")
        alert("Enter itemname to search")
   else
        frm.action="table/search.php"
}

</script>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Auction Your Antique</title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Alacrity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar() { window.scrollTo(0, 1); }
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">

</head>

<body>
	 <form name="frm">   
	<!--header-->
	<div class="header-top">
		<div class="header-bar">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Auction Your Antique</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="#about" class="scroll">About</a></li>
							<li><a href="user/index.php" >Login</a></li>
							<li><a href="#search" class="scroll">Search</a></li>
						</ul>

					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//header-->
	<!-- Slideshow 4 -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li>
					<div class="slider-img wthree-oneimg">
						<div class="container">
							<div class="slider-info">
								<h4></h4>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slider-img wthree-twoimg">
						<div class="container">
							<div class="slider-info">
								<h4></h4>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slider-img wthree-threeimg">
						<div class="container">
							<div class="slider-info">
								<h4></h4>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<!-- This is here just to demonstrate the callbacks -->
		<!-- <ul class="events">
      <li>Example 4 callback events</li>
    </ul>-->
	</div>
	<!-- //banner -->
	<!--about -->
	<div class="about" id="about">
		<div class="container">
			<h3 class="title">About</h3>
			<div class="about-top-grids">
				<div class="col-md-6 about-top-grid">
					<h2>Why We Beat
					</h2>
					<p>Nearly a thousand shops dotting the main road sell used goods. There is no guarantee, but there is a bargain to be driven at every store. Many goods-especially electronics and home appliances-can be of very high quality, and feature designs not commonly seen in India. This is true also for furniture, carpets and other such household items. Boats, gym equipment, video games, navigation equipment, machine parts, tools and heavy machinery are also found in abundance.</p>
					<div class="w3layouts_more-buttn ser-buttn">
					</div>
				</div>
				<div class="col-md-6 about-top-image">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about -->
	<!--services-->
	<!--<div class="services" id="services">
		<div class="container">
			<h3 class="title clr">Services</h3>

			<div class="banner-bottom-girds ">
				<div class="col-md-3  col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<span class="fa fa-briefcase banner-icon" aria-hidden="true"></span>
							<h4>Market Research</h4>
							<p>tur aut.maiores alias consequa</p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3  col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<span class="fa fa-thumbs-o-up  banner-icon" aria-hidden="true"></span>

							<h4>New planning</h4>
							<p>
								tur aut.maiores alias consequa</p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3  col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<span class="fa fa-users banner-icon" aria-hidden="true"></span>
							<h4>Support Team</h4>
							<p>
								tur aut.maiores alias consequa</p>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6  its-banner-grid">
					<div class="w3-services-clr">
						<div class=" left-icon-grid">
							<span class="fa fa-line-chart banner-icon" aria-hidden="true"></span>
							<h4>Fast & Efficient</h4>
							<p>
								tur aut.maiores alias consequa</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--gallery-->
<!--	<div class="gallery" id="gallery">

		<h3 class="title">Projects & Certificates</h3>

		<div class="container">
			<div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<!--<div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g2.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g3.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g4.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g5.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g5.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 agileinfo_portfolio_grid project">
				<a href="images/g6.jpg" class="lsb-preview" data-lsb-group="header">
					<div class="agileits_portfolio_grid project_icon">
						<img src="images/g6.jpg" alt=" " class="img-responsive">
					</div>
				</a>
			</div>-
			<div class="clearfix"> </div>

		</div>
	</div>-->
	<!--//gallery-->
	<!--team-->
	<!--<div class="team" id="team">
		<div class="container">
			<h3 class="title clr">Team</h3>
			<div class="team-us">
				<div class="col-sm-4 col-xs-4 team-grid">
					<div class="team-members">
						<div class="team-avatar">
							<!--<img src="images/tm.jpg" class="img-responsive" alt="">
						</div>
						<div class="team-desc">
							<h4></h4>
							<span></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 team-grid">
					<div class="team-members">
						<div class="team-avatar">
							<img src="images/tm.jpg" class="img-responsive" alt="">
						</div>
						<div class="team-desc">
							<h4>Rajai Vishal</h4>
							<span>Designing & Developing</span>
						</div>
					</div>
				</div>
				<!--<div class="col-sm-4 col-xs-4 team-grid">
					<div class="team-members">
						<div class="team-avatar">
							<img src="images/tm.jpg" class="img-responsive " alt="">
						</div>
						<div class="team-desc">
							<h4>Alex Atkinson</h4>
							<span>Director</span>
						</div>
					</div>
				</div
			</div>
		</div>
	</div>-->
	<!--//team-->
	<!--news letter-->
	<!--<div class="newsletter">
		<div class="container">
			<div class="subscribe">
				<h3 class="title">news letter</h3>
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6 col-xs-6 sub-letter">

						<input type="text" name="Name" placeholder="Name" required="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 sub-letter">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="clearfix"> </div>
					<div class="w3-agile-click">
						<input type="submit" value="SEND">
					</div>
				</form>
			</div>
		</div>
	</div>-->
	<!--//news letter-->
	<div class="contact" id="search">
		<div class="container">
			<h3 class="title clr">Search</h3>
			<center><div class="agileinfo-contact-two-grids">

				<div class="col-md-7 contact-us">
					<form action="#" method="post">
						<div class="col-md-6 col-sm-6 col-xs-6 styled-input ">
							<div class="contact-buttn">
							<input type="text"  name="txtsearch"  id="txt1" placeholder="Search"  required="">

							<input type="submit" class="contact-buttn"  value="SEARCH" name="btnsearch" onclick=search() >
						</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
							
						</div>
						<!--<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
							<input type="email" name="Email" placeholder="Email" required="">

						</div>

						<div class="col-md-6 col-sm-6 col-xs-6 styled-input">

							<input type="text" name="phone" placeholder="phone" required="">
						</div>
						<div class="clearfix">
						</div>
						<div class="styled-input">

							<textarea name="Message" placeholder="Message" required=""></textarea>
						</div>-->
						<!--<div>
							<div class="contact-buttn">
								<input type="submit" value="SEND">
							</div>
						</div>-->
					</form>
				</div>
				<!--<div class=" col-md-5 col-sm-8 col-xs-7 contact-map">
					<div class="map-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.731066636705!2d72.15012866531234!3d21.75194936807103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a728b1423db%3A0xe28321a4f173cbb6!2sSindhunagar%2C+Sardarnagar%2C+Bhavnagar%2C+Gujarat+364001!5e0!3m2!1sen!2sin!4v1532419945703" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>
					<div class="contact-icons">
						<div class="footer_grid_left">
							<h5>Address</h5>
							<p>Sindhunagar ,Bhavanagar<br> Bhvanagar, INDIA
							</p>
		
						</div>
						<div class="footer_grid_left">
							<h5> Contact Us</h5>
							<p>8141912584</p>
						</div>
						<div class="footer_grid_left">
							<h5>Email Us</h5>
							<a href="mailto:rajaivisha41@gmail.com">rajaivisha41@gmail.com</a>

						</div>

					</div>
				</div>-->
				<div class="clearfix"> </div>
			</div></center>
		</div>
	</div>
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="col-md-3 wls-bottom-head">
				<h4><a href="index.php"></a></h4>
			</div>
			<div class="col-md-6 header-side">
				<p>© Project@2019 . All Rights Reserved | Design by Zala Satyajeet & Achhada Nandlal </a></p>
			</div>
			<div class="col-md-3 header-side">
				<div class="buttom-social-grids">

					<!--<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>-->
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer  -->

	<!--js working-->
	<script src='js/jquery-2.2.3.min.js'></script>

	<!-- //js  working-->
	<script src="js/responsiveslides.min.js"></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 900,
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
	<!--// banner-->
	<!-- gallery-pop-up -->
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.agileinfo_portfolio_grid a').Chocolat();
		});
	</script>
	<!-- //gallery-pop-up -->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
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
	<!-- //here ends scrolling icon -->

	<!--bootstrap-->
	<script src="js/bootstrap.js"></script>
	<!--// bootstrap-->
	</form>
</body>

</html>