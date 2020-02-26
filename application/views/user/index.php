<?php
    include 'inc/head.php';
?>
<?php
    include 'inc/preloader.php';
?>
	<div class="serach-header">
		<div class="searchbox">
			<button class="close">×</button>
			<form>
				<input type="search" placeholder="Search …">
				<button type="submit"><i class="fa fa-search"></i>
				</button>
			</form>
		</div>
	</div>
	<!-- x top header_wrapper Start -->
	<?php
        include 'inc/header.php';
        ?>
	<!-- x top header_wrapper End -->
	<!-- hs Navigation Start -->
	<?php
        include 'inc/navbar.php';
        ?>
	<!-- hs Navigation End -->
	<!-- hs Slider Start -->
	<?php
        include 'inc/slider_main.php';
        ?>
	<!-- hs Slider End -->
	<?php
        include 'inc/search_form.php';
        ?>
	<!-- xs Slider bottom title Start -->
	<div class="x_slider_bottom_title_main_wrapper">
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-magnifying-glass"></i>
			<h3><a href="#">24 / 7 CAR SUPPORT</a></h3>
			<p>Contact us any time you want
				<br>we provide 24/7 customer support
				<br>our services are always open for you.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-world"></i>
			<h3><a href="#">LOTS OF LOCATION</a></h3>
			<p>Book your car at any location you want 
                            set your Pick up location And enjoy your ride.
                        </p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-checklist"></i>
			<h3><a href="#">RESERVATION ANYTIME</a></h3>
			<p>We provide 24/7 customer supporting  
				<br>reserve booking your car any time 
				<br>and take your ride when you want.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-car-trip"></i>
			<h3><a href="#">Rentals Cars</a></h3>
			<p>We provide lot's of car's for your rent
				<br>choose which one you like
				<br>and enjoy your ride.</p>
		</div>
	</div>
	<!-- xs Slider bottom title End -->
	<!-- xs offer car tabs Start -->
	<?php
        include 'inc/choose_car_main.php';
        ?>
	<!-- xs offer car tabs End -->
	<!-- featured destination section Start -->
	<?php
        include 'inc/destination.php';
        ?>
	<!-- featured destination section End -->
	<!-- work process Start -->
	<?php
        include 'inc/how_it_work.php';
        ?>
	<!-- work process End -->
	<!-- x booking Wrapper Start -->
	<div class="x_booking_main_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="x_book_logo_wrapper float_left">
						<img src="<?=  base_url()?>assets/images/white_logo.png" alt="logo">
					</div>
				</div>
				<div class="col-md-6">
					<div class="x_book_logo_heading_wrapper float_left">
						<h3>Book on xp Now!</h3>
						<p>The Most User Centric car Rental site on the Market.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="x_book_logo_btn float_left">
						<ul>
							<li><a href="<?=  base_url('userc/book_car')?>">See All Cars <i class="fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x booking Wrapper End -->
	<!-- xs offer car tabs Start -->
	<?php
        include 'inc/reviews.php';
        ?>
	<!-- btc team Wrapper Start -->
	<div class="x_why_main_wrapper">
		<div class="x_why_img_overlay"></div>
		<div class="container">
			<div class="x_why_left_main_wrapper">
				<img src="<?=  base_url()?>assets/images/w1.png" alt="car_img">
			</div>
			<div class="x_why_right_main_wrapper">
				<h3>Why Choose Us ?</h3>
				<p>We use our years of experience to provide the highest quality services to ensure you travel smoothly and safely.
					<br><br>We reward you with lower rates the longer you rent a car from us and you have a wide range of vehicles to choose from.
                                        <br>Our dedicated, friendly staff are on hand to assist you while you vacation on the island.</p>
				<ul>
					<li><a href="<?=  base_url('userc/about')?>">read more <i class="fa fa-arrow-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper End -->
	<!-- xs offer car tabs Start -->
	<?php 
        include 'inc/latest_car.php';
        ?>
	<!--js Start-->
	<!-- xs offer car tabs Start -->
	<?php 
        include 'inc/brand_slider.php';
        ?>
	<!-- btc team Wrapper Start -->
	<!-- x news latter Wrapper Start -->
	<?php 
        include 'inc/get.php';
        ?>
	<!-- x news latter Wrapper End -->
	<!-- x footer Wrapper Start -->
	<?php 
        include 'inc/footer.php';
        ?>
	<?php 
        include 'inc/js.php';
        ?>
	<!-- custom js-->
</body>
</html>