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
						<h1>Checkout</h1>
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
								<li>Checkout</li>
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
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
							<p>3</p>
						</div>
						<h5>detail</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num2">
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
                                                                        <?php
                                                                                foreach ($select_car as $value)
                                                                                    {
                                                                             
                                                                        ?>
									<div class="x_car_access_filer_top_img">
                                                                            <img src="<?=  base_url()?>assets/images/car/<?=$value->img?>" alt="car_img" style="height: 73px;width: 190px;">
										<h3><?=$value->maker?> <?=$value->model?></h3>
										<p><?=$value->price?> (1 day)</p>
									</div>
									<hr>
									<!-- Company -->
									<!-- Attributes -->
									<div class="panel panel-default x_car_inner_acc_acordion_padding">
										<div class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<table class="table">
														<thead>
															<tr>
																<th scope="col">Duration</th>
																<th scope="col">Rate</th>
																<th scope="col">Subtotal</th>
															</tr>
														</thead>
														<tbody>
															<tr>
                                                                                                                            <?php
                                                                                                                                    foreach ($select_booking as $value11)
                                                                                                                                    {
                                                                                                                                        $dur=$value11->dur;
                                                                                                                                    }
                                                                                                                                ?>
																<td><?=$dur?> Day</td>
																<td><?=$value->price?></td>
                                                                                                                                
                                                                                                                                <?php $du=($value->price)*$dur; ?>
																<td><?=$du?></td>
                                                                                                                                
															</tr>
														</tbody>
													</table>
                                                                                                    
												</div>
											</div>
										</div>
									</div>
                                                                        <?php
                                                                         }
                                                                         ?>
									<hr>
									<div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
                                                                                    <?php
                                                                                        foreach ($select_booking as $value)
                                                                                        {
                                                                                    ?>
                                                                                <div class="panel-heading car_checkout_caret">
											<h5 class="panel-title"> <a href="#"> Pick-up Date & place</a> </h5>
										</div>
										<div class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li><?=$value->pd?> @ <?=$value->pdh?>:<?=$value->pdm?></li>
														<li><?=$value->pl?></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
										<div class="panel-heading car_checkout_caret">
											<h5 class="panel-title"> <a href="#"> Drop-Off Date & place</a> </h5>
										</div>
										<div class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li><?=$value->dd?> @ <?=$value->ddh?>:<?=$value->ddm?></li>
														<li><?=$value->dl?></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
                                                                        <?php
                                                                            }
                                                                        ?>
									<hr>
                                                                        
									
                                                                        
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="x_carbooking_right_section_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="x_car_checkout_right_main_box_wrapper float_left">
									<div class="car-filter order-billing margin-top-0">
										<div class="heading-block text-left margin-bottom-0">
											<h4>Billing Details</h4>
											<div class="pull-right checkout_login_btn">
												
												
											</div>
										</div>
										<hr><br>
                                                                                <?php
                                                                                    foreach ($select_ac as $values)
                                                                                    {
                                                                                ?>
                                                                                <form class="billing-form" method="post" action="<?=  base_url('userc/book_car_don')?>?q=<?=$values->id?>">
                                                                                    
                                                                                    <ul class="list-unstyled row">
												<li class="col-md-12">
													<label>First Name *
                                                                                                            <input type="text" placeholder="" class="form-control" name="price" value="<?=$values->gtp?>" hidden="">
                                                                                                            <input type="text" placeholder="" class="form-control" name="fname">
													</label>
												</li>
                                                                                                <?php
                                                                                                    }
                                                                                                ?>
												<li class="col-md-12">
													<label>Last Name *
                                                                                                            <input type="text" placeholder="" class="form-control" name="lname">
													</label>
												</li>
												
												<li class="col-md-12">
													<label>Country</label>
                                                                                                        <select class="myselect" name="country">
														<option>india</option>
														
													</select>
												</li>
												<li class="col-md-12">
													<label>City/town</label>
                                                                                                        <select class="myselect" name="city">
														<option>Select</option>
														<option>CG</option>
														<option>MP</option>
														<option>Delhi</option>
														<option>mumbai</option>
														<option>Kolkata</option>
													</select>
												</li>
												
												<li class="col-md-12">
													<label>Street Address
                                                                                                            <input type="text" placeholder="" class="form-control" name="addr">
													</label>
												</li>
												<li class="col-md-12">
													<label>Phone
                                                                                                            <input type="number" placeholder="" class="form-control" name="pn">
													</label>
												</li>
												<li class="col-md-12">
													<label>Email Address *
                                                                                                            <input type="email" placeholder="" class="form-control" name="email">
													</label>
												</li>
                                                                                                
												
											</ul>
											<hr>
											
												<div class="radio">
													<input type="radio" name="ratio" id="poa" value="option1" checked="">
													<label for="poa">Payment on Arrival</label>
												</div>
												
												
											
											<hr>
											
										
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="contect_btn contect_btn_contact">
									<input type="submit" name="submit" value="Confirm Your booking" style="background: #4f5dec;color: white;border: none;width: 100%;height: 50px;border-radius: 10px;cursor: pointer;margin-top: 20px;margin-bottom: 20px;">
                                                                         
								</div>
							</div>
                                                        </form>
						</div>
					</div>
				</div>
                            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="x_car_book_left_siderbar_wrapper float_left">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<!-- Filter Results -->
								<div class="car-filter accordion x_inner_car_acc_accor">
									<h3>Order Details</h3>
									<hr>
                                                                        <div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
										<div class="panel-heading car_checkout_caret">
											<h5 class="panel-title"> <a href="#">All Accessories</a> </h5>
										</div>
										<div class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
                                                                                                    
													<ul>
                                                                                                            <?php
                                                                                                                foreach ($select_acc as $value)
                                                                                                                    {
                                                                                                            ?>
														<li><?=$value->name?> <span><?=$value->price?></span>
														</li>
														<?php
                                                                                                                    }
                                                                                                                ?>
													</ul>
                                                                                                    
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
										<div class="panel-heading car_checkout_caret">
											<h5 class="panel-title"> <a href="#">Selected Accessories</a> </h5>
										</div>
										<div class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
                                                                                                    
													<ul>
                                                                                                            <?php
                                                                                                                foreach ($select_ac as $value)
                                                                                                                    {
                                                                                                            ?>
														<li><?=$value->gps?>X GPS <span><?=$value->gpsp?></span>
														</li>
                                                                                                                <li><?=$value->bbs?>X Babyseat <span><?=$value->bbsp?></span>
														</li>
                                                                                                                <li><?=$value->exd?>X Extra Driver <span><?=$value->exdp?></span>
														</li>
                                                                                                                <li><?=$value->ins?>X Insurance <span><?=$value->insp?></span>
														</li>
                                                                                                                <hr>
                                                                                                                <li>Total Price <span><?=$value->tp?></span>
														</li>
														<?php
                                                                                                                    }
                                                                                                                ?>
													</ul>
                                                                                                    
												</div>
											</div>
										</div>
									</div>
									<hr>
									<?php
                                                                            foreach ($select_ac as $values)
                                                                            {
                                                                        ?>
                                                                        
                                                                        <form action="<?=  base_url('userc/cop')?>" method="post">
                                                                            <div class="panel-heading car_checkout_caret">
											<h5 class="panel-title"> <a href="#">Apply Coupon</a> </h5>
                                                                            </div><br>
                                                                            <?php
                                                                                foreach ($select_booking as $value)
                                                                                {
                                                                            ?>
                                                                            <input class="form-control" name="id" placeholder="" value="<?=$value->id?>" type="number" hidden="">
                                                                            <?php
                                                                                }
                                                                            ?>
                                                                            <input class="form-control" name="aid" placeholder="" value="<?=$values->id?>" type="number" hidden="">
                                                                            <input class="form-control" name="gtp" placeholder="" value="<?=$values->gtp?>" type="number" hidden="">
                                                                            <input class="form-control" name="cop" placeholder="Enter coupon code" type="text"><br>
                                                                            <div><h5 style="color: #f3051d;text-transform: uppercase;font-size: 16px;"><?=$msg?></h5></div>
                                                                            
                                                                            <div class="contect_btn contect_btn_contact">
                                                                                <input type="submit" name="submit" value="Apply Coupon" style="background: #4f5dec;color: white;border: none;width: 100%;height: 50px;border-radius: 10px;cursor: pointer;margin-top: 20px;margin-bottom: 20px;">
                                                                         
                                                                            </div>
                                                                        </form>
                                                                        <hr>
									<div class="x_car_acc_filter_bottom_total">
										<ul>
											<li>Grand total <span><?=$values->gtp?></span>
											</li>
										</ul>
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