<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
		<title>Government Engineering College Baran</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/niceselect.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/cube-portfolio.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Eduland Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- Eduland Colors -->
		<link rel="stylesheet" href="css/colors/color1.css">
		
    </head>
    <body>
	
		<?php
			include("header.php");
		?>
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('images/breadcrumb-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h2>Our Courses</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li><a href="index.php">Campus Tour<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="#">Hostels<i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->

    <div class="gallery">
        <!-- Card 1 -->
        <div class="card" onclick="openModal('https://images.unsplash.com/photo-1534447677768-be436bb09401')">
            <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Education 1">
        </div>
        <!-- Card 2 -->
        <div class="card" onclick="openModal('https://images.unsplash.com/photo-1534447677768-be436bb09401')">
            <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Education 2">
        </div>
        <!-- Card 3 -->
        <div class="card" onclick="openModal('https://images.unsplash.com/photo-1534447677768-be436bb09401')">
            <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Education 3">
        </div>
        <!-- Add more cards with educational images -->
        <!-- Card 4 -->
        <div class="card" onclick="openModal('https://images.unsplash.com/photo-1534447677768-be436bb09401')">
            <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Education 4">
        </div>
        <!-- Card 5 -->
        <div class="card" onclick="openModal('https://images.unsplash.com/photo-1534447677768-be436bb09401')">
            <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Education 5">
        </div>
        <!-- Card 6 -->
        <div class="card" onclick="openModal('https://images.unsplash.com/photo-1534447677768-be436bb09401')">
            <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401" alt="Education 6">
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal" onclick="closeModal()">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>


		<?php
			include("footer.php");
		?>
	
			<!-- Jquery JS-->
			<script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Final Countdown JS -->
		<script src="js/finalcountdown.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Nice Select JS -->
		<script src="js/niceselect.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/cube-portfolio.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Scroll Up JS-->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Gmaps JS-->
		<script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    <script>
        function openModal(src) {
            var modal = document.getElementById('modal');
            var modalImg = document.getElementById('modal-img');

            modal.style.display = 'block';
            modalImg.src = src;
        }

        function closeModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
