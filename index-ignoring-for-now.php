<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Popsmartkids - (iOS/Android)
    </title>
    
	<link href="wordpress/wp-content/themes/blog/css/bootstrap.min.css" rel="stylesheet">
	<link href="wordpress/wp-content/themes/blog/style.css" rel="stylesheet" type="text/css">
	<!-- load font awesome for social media icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- our local style sheet -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- A google api font, really easy to change -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<!-- This creates the navbar button that changes with smaller screen sizes -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<!-- these spans are meant to be empty, they just create the lines inside the button -->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- navbar-brand is bootstrap, this is where our logo image in the top left goes -->
					<a class="navbar-brand" href="index.html"><img class="logo" src="wordpress/wp-content/themes/blog/images/popkids_text8crop.png"></a>
				</div>
				<!-- this continues to create the navbar/button which changes with screen size -->
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="local">
							<a href="../index.html">Home</a>
						</li>
						<li class="local">
							<a href="../aboutUs.html">About Us</a>
						</li>
						<li class="local">
							<a href="../products/">Products</a>
						</li>
						<li class="active">
							<a href="/blog/">Blog</a>
						</li>
						<li class="local">
							<a href="../contactUs.html">Contact Us</a>
						</li>
					</ul>
				</div>
				<!-- end collapsing navigation section -->
			</div>
		</nav>
    <!-- end header (navbar) section -->
	<div class="jumbotron jumbotron-fluid" id="blog">
        <div class="container text-center">
            <h3 class="display-3">Blog</h3>
        </div>
    </div>
		<div id="wrapper">
			<div id="container">
				<?php
					while(have_posts()) : the_post();?>
						<span class="date"><?php echo get_the_date();?></span>
									<div class="postBlock">
										<div id="constant">
												<a href="<?php the_permalink();?>"><h2>
													<?php the_title();?>
												</h2></a>
												<br>
												<span class="author"><i>by - <?php the_author();?></i></span>
												<br>												
												<br>											
												<span class="summary"><?php echo $summary;?></span>
												<div class="hideShow"><?php the_content();?></div>
										</div>								
									</div>
					<?php endwhile;
				?>
			</div>
		</div>
		</div>
	<footer class="container-fluid text-center">
        <div class="row">
			<div class="col-sm-4"></div>
            <div class="col-sm-4">
                <a href="https://www.facebook.com/popsmartkids/" class="fab fa-facebook-square"></a>
                <a href="https://twitter.com/popsmartkids" class="fab fa-twitter-square"></a>
                <a href="https://www.linkedin.com/in/priyankaraha/" class="fab fa-linkedin"></a>
            </div>
			<div class="col-sm-1"></div>
			<div class="col-sm-1">
				<h4><a class="footer_info" href="privacyPolicy.html">Privacy Policy</a></h4>
			</div>
			<div class="col-sm-1">
				<h4><a class="footer_info" href="legal.html">Legal</a></h4>
			</div>
			<div class="col-sm-1">
				<h4><a class="footer_info" href="safeZone.html">Safe Zone</a></h4>
			</div>
        </div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
    <script src="wordpress/wp-content/themes/blog/js/bootstrap.min.js"></script>
	<script src="wordpress/wp-content/themes/blog/js/blogjs.js"></script>
    </body>
</html>
