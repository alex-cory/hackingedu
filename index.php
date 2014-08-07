<?php require_once './views/header.php'; ?>

    <!-- Contact Form Modal -->
	<?php require_once './views/formContact.php'; ?>

	<!-- MAIN IMAGE SECTION -->
	<div id="home" class="headerwrap ">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- <h1>Hacking Edu</h1> -->
					<img class="main-img" src="./assets/img/hacklogo-white-no-border.png" alt="">
					<h3>SF Bay Area</h3>
					<h2>Disrupting The Education Market</h2>
					<!-- <div class="btn-row"> -->
					<a class="main-btn apply-btn" href="#apply">Hacker Application</a>
					<a class="main-btn volunteer-btn" href="#apply">Volunteer</a>
					<a class="main-btn sponsor-btn" href="#apply">Sponsor</a>
					<!-- </div> -->
					<div class="spacer"></div>
					<!-- <i class="fa fa-angle-down"></i> -->
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<!-- ABOUT -->
	<?php require_once './views/about.php'; ?>

	<!-- APPLY -->
	<?php require_once './views/formSignUp.php'; ?>

	<!-- SPONSORS -->
	<?php require_once './views/sponsors.php'; ?>

	<!-- RULES -->
	<?php require_once './views/rules.php'; ?>

    <!-- MAC IMAGE -->
<!-- 	<div class="container">
		<div class="row centered">
			<div class="col-lg-10 col-lg-offset-1">
				<img class="img-responsive" src="assets/img/spot.png" alt="Spot Theme">
			</div>
		</div>
	</div> -->

	<!-- SCHEDULE -->
	<?php require_once './views/schedule.php'; ?>




	<!-- CALL TO ACTION -->
	<div id="call">
		<div class="container ">
			<div class="row">
				<h3>Interested in Sponsoring?</h3>
				<div class="col-lg-8 col-lg-offset-2">
					<p>Although this is our first year, we want to show the universities in the bay area that students can make new and better products to improve the education system.  Help make a difference by supporting us!</p>
					<p><button type="button" class="btn btn-green btn-lg">Show Your Support!</button></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Call to action -->

<!-- 	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>Stay Connected</h1>
				<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>
				<br> -->
			<!-- </div><!-- col-lg-12 -->

			<!-- <div class="col-lg-4">
	      		<p class="pull-right"><br><button type="button" class="btn btn-green">Contact Us!</button></p>
	      	</div> -->
		<!-- </div> --><!-- row -->
	<!-- </div> --><!-- container -->
    <div class="container ">
    	<div class="row mt">
      		<div class="col-lg-8">
	        	<h1>Stay Connected</h1>
	        	<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>
      		</div>
      		<div class="col-lg-4">
      			<p class="pull-right"><br><button type="button" class="btn btn-green">Contact Us!</button></p>
      		</div>
    	</div><!-- /row -->
    </div><!-- /.container -->

	<!-- SOCIAL FOOTER -->
	<section id="contact"></section>
	<div id="sf">
		<div class="container ">
			<div class="row">
				<a href="<?php echo FACEBOOK_URL; ?>">
					<div class="col-lg-4 dg">
						<h4 class="ml">FACEBOOK</h4>
						<p class="centered"><i class="fa fa-facebook"></i></p>
						<p class="ml">> Become A Friend</p>
					</div>
				</a>
				<a href="<?php echo TWITTER_URL; ?>">
					<div class="col-lg-4 lg">
						<h4 class="ml">TWITTER</h4>
						<p class="centered"><i class="fa fa-twitter"></i></p>
						<p class="ml">> Follow Us</p>
					</div>
				</a>
				<a href="<?php echo GOOGLE_PLUS_URL; ?>">
					<div class="col-lg-4 dg">
						<h4 class="ml">GOOGLE +</h4>
						<p class="centered"><i class="fa fa-google-plus"></i></p>
						<p class="ml">> Add Us To Your Circle</p>
					</div>
				</a>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Social Footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/classie.js"></script>
	<script src="assets/js/AnimOnScroll.js"></script>
	<script>
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
		new AnimOnScroll( document.getElementById( 'process' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
	</script>
  </body>
</html>
