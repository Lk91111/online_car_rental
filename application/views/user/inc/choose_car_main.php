<div class="x_offer_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>What We Offer</h4>
						<h3>Choose your Car</h3>
						<p>We provide lot's of option's as your need we customized car's by category 
                                                    <br>choose your desired car and Enjoy your ride.
                                                </p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="x_offer_tabs_wrapper">
						<ul class="nav nav-tabs">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"> Best Offers</a>
							</li>
							
						</ul>
					</div>
					<div class="tab-content">
						<div id="home" class="tab-pane active">
							<div class="row">
                                                            <?php
                                                            
                                                                foreach (array_reverse($select_car) as $i=>$value)
                                                                {
                                                                    if($i==8)
                                                                    {
                                                                        break;
                                                                    }
                                                                    
                                                            ?>
								<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="x_car_offer_main_boxes_wrapper float_left">
										<div class="x_car_offer_starts float_left">
										</div>
										<div class="x_car_offer_img float_left">
                                                                                    <img src="<?=  base_url()?>assets/images/car/<?=$value->img?>" alt="img" style="height: 73px;width: 190px;">
										</div>
										<div class="x_car_offer_price float_left">
											<div class="x_car_offer_price_inner">
											<h6><i class=""></i></h6>
												<h3><?=$value->price?></h3>
												<p><span>from</span> 
													<br>/ day</p>
											</div>
										</div>
										<div class="x_car_offer_heading float_left">
											<h2><a href="#"><?=$value->maker?></a></h2>
											<p><?=$value->model?></p>
										</div>
										<div class="x_car_offer_heading float_left">
											<ul>
												<li>	<a href="#"><i class="fa fa-users"></i> &nbsp;<?=$value->seat?></a>
												</li>
												<li>	<a href="#"><i class="fa fa-archive"></i> &nbsp;<?=$value->door?></a>
												</li>
												<li>	<a href="#"><i class="fa fa-briefcase"></i> &nbsp;<?=$value->ecc?></a>
												</li>
												<li>
													<div class="nice-select" tabindex="0">	<span class="current"><i class="fa fa-bars"></i></span>
														<ul class="list">
															<li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
															</li>
															<li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> <?=$value->trans?></a>
															</li>
															<li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> <?=$value->year?></a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
										<div class="x_car_offer_bottom_btn float_left">
											<ul>
												<li><a href="<?=  base_url('userc/car_detail')?>?q=<?=$value->id?>">Book now</a>
												</li>
												<li><a href="<?=  base_url('userc/car_detail')?>?q=<?=$value->id?>">Details</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
                                                            <?php
                                                                }
                                                            ?>
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="<?=  base_url('userc/book_car')?>">See All Cars <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>