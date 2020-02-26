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
						<h1>Best Offer Cars</h1>
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
								<li>Best Offers</li>
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
						<div class="x_icon_num x_icon_num2">
							<p>1</p>
						</div>
						<h5>Time & place</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper2">
						<div class="x_icon_num x_icon_num3">
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
						
					</div>
				</div>
				<div class="col-xl-12 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="x_carbooking_right_section_wrapper float_left">
						<div class="row">
							
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="x_carbook_right_tabs_box_wrapper float_left">
									
								</div>
							</div>
							<div class="col-md-12">
								<div class="x_car_book_tabs_content_main_wrapper">
									<div class="tab-content">
										
										<div id="menu1" class="tab-pane active">
											<div class="row">
                                                                                            <?php
                                                                                                    foreach (array_reverse($data) as $value)
                                                                                                    {
                                                                                            ?>
												<div class="col-md-12">
													<div class="x_car_offer_main_boxes_wrapper float_left">
														<div class="x_car_offer_starts x_car_offer_starts_list_img float_left">
															<div class="x_car_offer_img x_car_offer_img_list float_left">
                                                                                                                            <img src="<?=  base_url()?>assets/images/car/<?=$value->img?>" alt="img" style="width: 190px;height: 73px;">
															</div>
															<div class="x_car_offer_price x_car_offer_price_list float_left">
																<div class="x_car_offer_price_inner x_car_offer_price_inner_list">
																<h6><i class=""></i></h6>
																	<h3><?=$value->price?></h3>
																	<p><span>from</span> 
																		<br>/ day</p>
																</div>
															</div>
														</div>
														<div class="x_car_offer_starts_list_img_cont">
															<div class="x_car_offer_heading x_car_offer_heading_list float_left">
																<h2><a href="#"><?=$value->maker?></a></h2>
																<p><?=$value->model?></p>
															</div>
															<div class="x_car_offer_bottom_btn x_car_offer_bottom_btn_list float_left">
																<ul>
																	<li><a href="<?=  base_url('userc/car_detail')?>?q=<?=$value->id?>">Book now</a>
																	</li>
																	<li><a href="<?=  base_url('userc/car_detail')?>?q=<?=$value->id?>">Details</a>
																	</li>
																</ul>
															</div>
															<div class="x_car_offer_heading x_car_offer_heading_listing float_left">
																<ul class="">
																	<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;<?=$value->seat?> Seats</a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-clone"></i> &nbsp;<?=$value->door?> Doors</a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-shield"></i> &nbsp;<?=$value->trans?></a>
																	</li>
																
																	<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;<?=$value->ecc?></a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-snowflake-o"></i>&nbsp;<?=$value->con?></a>
																	</li>
																	<li>	<a href="#"><i class="fa fa-calendar"></i>&nbsp;<?=$value->year?></a>
																	</li>
																</ul>
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
	
	<!-- x footer Wrapper Start -->
	<?php
            include 'inc/footer.php';
        ?>
	<?php
            include 'inc/js.php';
        ?>
</body>
</html>