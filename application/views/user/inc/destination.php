<div class="btc_team_main_wrapper">
		<div class="btc_team_img_overlay"></div>
		<div class="container">
			<div class="btc_team_left_wrapper">
				<h3>Featured <br>
Destinations</h3>
				<p>Explore a different way to travel. There are lots of destination's we covered over the india, we reached your loved one location.</p>
			</div>
			<div class="btc_team_right_wrapper">
				<div class="btc_team_slider_wrapper">
					<div class="owl-carousel owl-theme">
                                            <?php
                                             foreach ($select_dest as $value)
                                             {
                                            ?>
						<div class="item">
							<div class="btc_team_slider_cont_main_wrapper">
								<div class="btc_team_img_wrapper">
                                                                    <img src="<?=  base_url()?>assets/images/dest/<?=$value->img?>" alt="team_img1" style="height: 250px;">
									<div class="x_team_label_wrapper">
										<p>NEW</p>
									</div>
								</div>
								<div class="btc_team_img_cont_wrapper">
									<h4><a href="#"><?=$value->city?>, <?=$value->state?></a></h4>
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