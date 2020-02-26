<div class="x_offer_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>Testimonials</h4>
						<h3>Top Reviews</h3>
						<p>Here are what our customer says about us<br>
                                                Some of the best reviews by our lovingly customer's</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="screenshot">
						<div class="owl-carousel screen nplr screen-loop">
                                                    <?php
                                                        foreach ($review as $data)
                                                        {
                                                    ?>
							<div>
								<div class="card  valign-wrapper">
									<!-- Client's image -->
									<div class="card-image">
                                                                            <i class="img-responsive img-circle fa fa-5x fa-user-circle" style="color: #4f5dec;"></i>
									</div>
									<!-- /Client's image -->
									<div class="card-content center-align valign">
										<div class="testi_slide_star">
											<?php include "star$data->star.php"?>
										</div>
										<!-- Client's Feedback -->
										<p>“ <?=$data->com?> ”</p>
										<!-- /Client's Feedback -->
										<!-- Client's Name -->
										<p class="card-title"><?=$data->name?> <span><?=$data->email?></span>
										</p>
										<!-- /Client's Name -->
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