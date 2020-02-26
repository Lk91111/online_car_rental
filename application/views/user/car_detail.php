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
        <?php
        foreach ($data as $value)
        {
        ?>
	<!-- btc tittle Wrapper Start -->
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1><?=$value->maker?> <?=$value->model?></h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li><a href="#">Cars</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li><?=$value->maker?> <?=$value->model?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- x tittle num Wrapper Start -->
	<div class="x_title_num_mian_Wrapper float_left">
		<div class="container">
			<div class="x_title_inner_num_wrapper float_left">
				<div class="x_title_num_heading">
					<h3>Choose a car</h3>
					<p>Complete Your Step</p>
				</div>
				<div class="x_title_num_heading_cont">
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
							<p>1</p>
						</div>
						<h5>Time & place</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper2">
						<div class="x_icon_num x_icon_num2">
							<p>2</p>
						</div>
						<h5>Car</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num3">
							<p>3</p>
						</div>
						<h5>detail</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num3">
							<p>4</p>
						</div>
						<h5>checkout</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
						<div class="x_icon_num x_icon_num3">
							<p>5</p>
						</div>
						<h5>done!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x tittle num Wrapper End -->
	<!-- x car book sidebar section Wrapper Start -->
	<div class="x_car_book_sider_main_Wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="x_car_book_left_siderbar_wrapper float_left">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="x_slider_form_main_wrapper float_left x_slider_form_main_wrapper_ccb">
									<div class="x_slider_form_heading_wrapper x_slider_form_heading_wrapper_carbooking float_left">
										<h3>Book this car</h3>
									</div>
                                                                 <form action="<?=  base_url('userc/booking')?>?q=<?=$value->id?>" method="post">  
									<div class="row">
										<div class="col-md-12">
											<div class="x_slider_form_input_wrapper float_left">
												<h3>Pick-up Location</h3>
                                                                                                <input type="text" placeholder="City, Airport, Station, etc." name="pl">
											</div>
										</div>
										<div class="col-md-12">
											<div class="x_slider_form_input_wrapper float_left">
												<h3>Drop-off Location</h3>
                                                                                                <input type="text" placeholder="City, Airport, Station, etc." name="dl">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-sec-header">
												<h3>Pick-up Date</h3>
												<label class="cal-icon">Pick-up Date
                                                                                                    <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker" name="pd">
												</label>
											</div>
										</div>
										<div class="col-md-12">
											<div class="x_slider_select">
                                                                                            <select class="myselect" name="pdh">
																	<option>01</option>
																	<option>02</option>
																	<option>03</option>
																	<option>04</option>
                                                                                                                                        <option>05</option>
																	<option>06</option>
																	<option>07</option>
																	<option>08</option>
                                                                                                                                        <option>09</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																</select>	<i class="fa fa-clock-o"></i>
											</div>
											<div class="x_slider_select x_slider_select2">
                                                                                            <select class="myselect" name="pdm">
																	<option>15 am</option>
                                                                                                                                        <option>15 pm</option>
																	<option>30 am</option>
                                                                                                                                        <option>30 pm</option>
																	<option>45 am</option>
																	<option>45 pm</option>
																</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-sec-header">
												<h3>Drop-Off Date</h3>
												<label class="cal-icon">Pick-up Date
                                                                                                    <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker" name="dd">
												</label>
											</div>
										</div>
										<div class="col-md-12">
											<div class="x_slider_select">
                                                                                            <select class="myselect" name="ddh">
																	<option>01</option>
																	<option>02</option>
																	<option>03</option>
																	<option>04</option>
                                                                                                                                        <option>05</option>
																	<option>06</option>
																	<option>07</option>
																	<option>08</option>
                                                                                                                                        <option>09</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																</select>	<i class="fa fa-clock-o"></i>
											</div>
											<div class="x_slider_select x_slider_select2">
                                                                                            <select class="myselect" name="ddm">
																	<option>15 am</option>
                                                                                                                                        <option>15 pm</option>
																	<option>30 am</option>
                                                                                                                                        <option>30 pm</option>
																	<option>45 am</option>
																	<option>45 pm</option>
																</select>
											</div>
										</div>
										
										<div class="col-md-12">
											<div class="x_slider_checout_right x_slider_checout_right_carbooking">
												<input type="submit" name="submit" value="Book Now" style="background: #4f5dec;color: white;border: none;width: 100%;height: 50px;border-radius: 10px;cursor: pointer;margin-top: 20px;margin-bottom: 20px;">
                                                                                        </div>
										</div>
									</div>
                                                                </form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="x_car_detail_main_wrapper float_left">
								<div class="lr_bc_slider_first_wrapper">
									<div class="owl-carousel owl-theme">
										<div class="item">
											<div class="lr_bc_slider_img_wrapper">
												<img src="<?=  base_url()?>assets/images/car/<?=$value->img?>" alt="fresh_food_img">
											</div>
										</div>
										
									</div>
								</div>
								<div class="x_car_detail_slider_bottom_cont float_left">
									<div class="x_car_detail_slider_bottom_cont_left">
										<h3><?=$value->maker?> <?=$value->model?></h3>
										<?php
                                                                                    include 'inc/star4.php';
                                                                                ?>
										<span>251 Reviews</span>
									</div>
									<div class="x_car_detail_slider_bottom_cont_right">
										<h3><?=$value->price?></h3>
										<p><span>from</span> 
											<br>/ day</p>
									</div>
									<div class="x_car_detail_slider_bottom_cont_center float_left">
										</div>
									<div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2">
																<ul class="">
																	<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;<?=$value->seat?> Seats</a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;<?=$value->door?> Doors</a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-shield"></i> &nbsp;<?=$value->trans?></a>
																	</li>
																
																	<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;<?=$value->con?></a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-code-fork"></i> <?=$value->ft?></a>
																	</li>
																	<li>
                                                                                                                                            <a href="#"><i class="fa fa-user-circle-o"></i> <?=$value->year?></a>
																		
																	</li>
																</ul>
															</div>
									
								</div>
								
								<div class="x_css_tabs_wrapper float_left">
									<div class="x_css_tabs_main_wrapper float_left">
										<ul class="nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#home"> User ReView
											</a>
										</li>
										
									</ul>
									</div>
									<div class="tab-content">
										<div id="home" class="tab-pane active">
											
                                                                                    <form action="<?=  base_url('userc/feed')?>?q=<?=$value->id?>" method="post">
											<div class="x_css_skills_form_wrapper">
												<div class="x_css_skill_form_heading float_left">
													<h3>Your Reviews</h3>
													
												</div>
												<div class="row only_left">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="contect_form1 xcontect_form1">
                                                                                    <input type="text" placeholder="Full Name *" name="fname">
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="contect_form2 xcontect_form2">
                                                                                    <input type="email" placeholder="Email *" name="email">
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="x_slider_select">
                                                                                    <select class="myselect" name="title">
                                                                                        <option>Good</option>
                                                                                        <option>Best</option>
                                                                                        <option>Bad</option>
                                                                                    </select>
										</div>
									</div>
                                                                            <div class="contect_form2 xcontect_form2 col-lg-6">
                                                                                <input type="number" placeholder="Enter star 1-5 *" name="star">
										</div>                        
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="contect_form4 xcontect_form4">
                                                                                    <textarea rows="4" placeholder="Write Comment" name="com"></textarea>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="contect_btn x_css_form_btn">
											<input type="submit" name="submit" value="submit" style="background: #4f5dec;color: white;border: none;width: 50%;height: 50px;border-radius: 10px;cursor: pointer;margin-top: 10px;">
                                                                                </div>
									</div>
                                                                                                    
                                                                                                </div>
											</div>
                                                                                        </form>
										</div>
										
									</div>	
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
                                                            <?php
                                                                    
                                                                    foreach ($feed_data as $values)
                                                                    {
                                                                        
                                                            ?>
								<div class="col-md-12">
									<div class="blog_single_comment_wrapper">
										<div class="blog_comment3_wrapper">
											<div class="blog_comment1_img">
                                                                                            <i class="img-responsive img-circle fa fa-5x fa-user-circle" style="color: #4f5dec;"></i>
											</div>
											<div class="blog_comment1_cont">
                                                                                            <h3><?=$values->name?> <i class="fa fa-circle"></i> <span><?=$values->datetimes?></span><?php include "inc/star$values->star.php"?></h3>
												<p><?=$values->com?></p>
											</div>
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
	</div>
	<!-- x car book sidebar section Wrapper End -->
	<!-- x news latter Wrapper Start -->
	<?php 
        include 'inc/get.php';
        ?>
	<!-- x news latter Wrapper End -->
	<?php
        }
        ?>
	<!-- x footer Wrapper Start -->
	<?php
            include 'inc/footer.php';
        ?>
	<?php
            include 'inc/js.php';
        ?>
</body>
</html>