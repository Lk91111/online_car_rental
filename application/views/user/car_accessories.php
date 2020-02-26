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
                                            <?php 
                                                foreach ($select_car as $value){
                                            ?>
                                            
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
								<li>Details</li>
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
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num ">
							<p>2</p>
						</div>
						<h5>Car</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num2">
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
								<!-- Filter Results -->
								<div class="car-filter accordion x_inner_car_acc_accor">
									<h3>Order Details</h3>
									<hr>
									<!-- Resources -->
									<div class="x_car_access_filer_top_img">
                                                                            <img src="<?=  base_url()?>assets/images/car/<?=$value->img?>" alt="car_img" style="height: 73px;width: 190px;">
										<h3><?=$value->maker?></h3>
										<p><?=$value->price?> (1 day)</p>
									</div>
                                                
									<hr>
									<!-- Company -->
                                                                        <?php
                                                                            foreach ($select_booking as $values)
                                                                            {
                                                                        ?>
									<div class="panel panel-default x_car_inner_acc_acordion_padding">
										<div class="panel-heading">
											<h5 class="panel-title"> <a data-toggle="collapse" href="#collapseTwo" class="collapse"> date</a> </h5>
										</div>
										<div id="collapseTwo" class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li>From <span><?=$values->pd?></span>
														</li>
														<li>To <span><?=$values->dd?></span>
														</li>
														<li>Duration <span><?=$values->dur?> days</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<!-- Attributes -->
									<div class="panel panel-default x_car_inner_acc_acordion_padding">
										<div class="panel-heading">
											<h5 class="panel-title"> <a data-toggle="collapse" href="#collapseThree" class="collapse"> location</a> </h5>
										</div>
										<div id="collapseThree" class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li>Pick-up <span><?=$values->pl?></span>
														</li>
														<li>Drop-off <span><?=$values->dl?></span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
                            
				<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="x_carbooking_right_section_wrapper float_left">
                                            <form action="<?=  base_url('userc/ad_acc')?>?q=<?=$values->id?>" method="post">
                                                <input type="number"  name="gtp" hidden="" value="<?=$value->price?>">
                                                <input type="number"  name="dur" hidden="" value="<?=$values->dur?>">
                                                <?php
                                                    }
                                                ?>
                                                <?php
                                                }
                                                ?>
						<div class="row">
                                                    <?php
                                                        foreach ($select_acc as $values)
                                                        {
                                                    ?>
							<div class="col-md-12">
								<div class="x_car_access_right_price_main_box_wrapper float_left">
									<div class="x_car_access_right_price_main_box_inner_left_wrapper">
										<div class="x_car_access_right_price_img_wrapper">
											<img src="<?=  base_url()?>assets/images/acc/<?=$values->img?>" alt="g1_img">
										</div>
										<div class="x_car_access_right_price_img_cont_wrapper">
											<h3><?=$values->name?></h3>
											<p><?=$values->com?>.</p>
										</div>
									</div>
									<div class="x_car_access_right_price_main_box_inner_right_wrapper">
										<div class="x_car_acc_price_dollar_wrapper">
											<h3><?=$values->price?></h3>
											<p>/ day</p>
										</div>
										<div class="x_car_acc_price_dollar_count_wrapper">
											<div class="quantity">
                                                                                            <input type="number"  name="price<?=$values->id?>" hidden="" value="<?=$values->price?>">
											
                                                                                            <input type="number" min="0" max="100" step="1" value="0" class="qty" name="qtt<?=$values->id?>">
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
                                                            }
                                                        ?>
							<div class="col-md-12">
								<div class="x_car_acc_bottom_button float_left">
									<input type="submit" name="submit" value="Proceed to check-out" style="background: #4f5dec;color: white;border: none;width: 100%;height: 50px;border-radius: 10px;cursor: pointer;margin-top: 20px;margin-bottom: 20px;">
                                                                                        
								</div>
							</div>
						</div>
                                            </form>
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