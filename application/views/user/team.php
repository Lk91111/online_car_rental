        <?php
            include 'inc/head.php';
        ?>
	<!-- preloader Start -->
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
	<!-- btc tittle Wrapper Start -->
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>our team</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
                                                            <li><a href="<?=  base_url('userc')?>">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>our team</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_ln_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_ln_car_heading_wrapper float_left">
						<h3>Our Core team</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="btc_ln_slider_wrapper">
						<div class="owl-carousel owl-theme">
                                                    <?php
                                                                foreach ($select_admin as $value)
                                                                {
                                                            ?>
							<div class="item">
								<div class="btc_team_slider_cont_main_wrapper">
									<div class="btc_team_img_wrapper">
                                                                            <img src="<?=  base_url()?>assets/images/team/<?=$value->img?>" alt="team_img1" style="height: 400px;">
										<div class="btc_team_social_wrapper">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-twitter"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="btc_team_img_cont_wrapper">
										<h4><a href="#"><?=$value->name?></a></h4>
										<p>(<?=$value->post?>)</p>
									</div>
								</div>
							</div>
                                                    <?php
                                                           }
                                                    ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--js Start-->
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
	<div class="x_inner_team_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_tb_heading_wrapper float_left">
						<h4>safe deivers</h4>
						<h3>Our Drivers</h3>
						</div>
				</div>
                            <?php
                                   foreach ($select_driver as $value)
                                   {
                            ?>
				<div class=" col-md-4 col-sm-6 col-12">
					<div class="btc_team_bot_cont_main_wrapper">
						<div class="btc_team_img_bot_wrapper">
                                                    <img src="<?=  base_url()?>assets/images/team/<?=$value->img?>" alt="team_img1" style="height: 350px;">
							<div class="btc_team_social_tb_wrapper">
								<h3></h3>
							</div>
						</div>
						<div class="btc_team_img_bot_cont_wrapper">
							<h4><a href="#"><?=$value->name?></a></h4>
							<p>Age - <?=$value->age?> Year</p>
						</div>
					</div>
				</div>
                            <?php
                                   }
                            ?>
				
			</div>
		</div>
	</div>
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
</body>
</html>