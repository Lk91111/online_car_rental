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
						<h1>Contact Us</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_contact_title_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
						<h4>get in touch</h4>
						<h3>Contact Info</h3>
						</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="fa fa-map-marker"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">address</a></h3>
                                                        <p>110 B1 Shankar nagar, Raipur(C.G.) INDIA<br>#492001</p><br><br><br>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="flaticon-phone-call"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">phone Number</a></h3>
                                                        <?php
                                                                foreach ($contact as $value)
                                                                {
                                                        ?>
							<p>+91 <?=$value->pn?>
                                                        </p>
                                                        <?php
                                                                }
                                                        ?>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="flaticon-mail-send"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">Email Address</a></h3>
							<?php
                                                                foreach ($contact as $value)
                                                                {
                                                        ?>
							<p> <?=$value->email?>
                                                        </p>
                                                        <?php
                                                                }
                                                        ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- map section start -->
	<div class="map_main_wrapper">
		<div id="map"></div>
	</div>
	<!-- map section End -->
	<!-- xs offer car tabs Start -->
	<div class="x_contact_title_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
						<h4>get in touch</h4>
						<h3>Leave A Message</h3>
						</div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3"></div>
                                    <form class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12" method="post" action="<?=  base_url('userc/email')?>">
				
					<div class="contect_form1">
                                            <input type="text" placeholder="First Name *" name="fname" class="form-control">
					</div>
				
				
					<div class="contect_form2">
                                            <input type="text" placeholder="Last Name *" name="lname" class="form-control">
					</div>
				
				
					<div class="contect_form2">
                                            <input type="email" placeholder="Email *" name="email" class="form-control">
					</div>
				
				
					<div class="contect_form2">
                                            <input type="text" placeholder="Phone *" name="pn" class="form-control">
					</div>
				
					<div class="contect_form4">
                                            <textarea rows="4" placeholder="Write Comment" name="msg" class="form-control"></textarea>
					</div>
				
				
					<div class="contect_btn contect_btn_contact">
                                            <input type="submit" name="submit" value="Send message" style="background: #4f5dec;color: white;border: none;width: 100%;height: 50px;border-radius: 10px;cursor: pointer;margin-top: 20px;margin-bottom: 20px;">
                                                                         
                                        </div>
				
                            </form>
                                    
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
	<!-- custom js-->
	<script>
		function initMap() {
		            var uluru = {
		                lat: 21.245530,
		                lng: 81.642120
		            };
		            var map = new google.maps.Map(document.getElementById('map'), {
		                zoom: 15,
		                scrollwheel: false,
		                center: uluru
		            });
		            var marker = new google.maps.Marker({
		                position: uluru,
		                map: map
		            });
		        }
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
	</script>
</body>
</html>