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
						<h1>Order Done</h1>
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
								<li>Done</li>
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
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
							<p>4</p>
						</div>
						<h5>checkout</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
						<div class="x_icon_num x_icon_num2">
							<p>5</p>
						</div>
						<h5>done!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x tittle num Wrapper End -->
        <div class="x_car_donr_main_box_wrapper float_left html-content">
                            <?php
                                    foreach ($select_billing as $value1)
                                    {
                            ?>
		<div class="container" id="cont">
			<div class="x_car_donr_main_box_wrapper_inner">
				<div class="order-done"> <i class="icon-checked"><img src="<?=  base_url()?>assets/images/icon-checked.png" alt=""></i>
					<h4>thank you! Order has been received</h4>
					<h4>Order number: <span>#<?=$value1->id?></span></h4>
					<hr>
					<h4>Summary</h4>
                                        <?php
                                            foreach ($select_booking as $value2)
                                            {
                                        ?>
					<ul class="row list-unstyled">
						<li class="col-md-6">
							<h6>Date</h6>
							<p>From <span><?=$value2->pd?> @ <?=$value2->pdh?>:<?=$value2->pdm?></span>
							</p>
							<p>To <span><?=$value2->dd?> @ <?=$value2->ddh?>:<?=$value2->ddm?></span>
							</p>
							<p>Duration <span><?=$value2->dur?> Days</span>
							</p>
						</li>
						<li class="col-md-6">
							<h6>Location</h6>
							<p>Pick-Up <span><?=$value2->pl?></span>
							</p>
							<p>Drop-off <span><?=$value2->dl?></span>
							</p>
						</li>
                                                <?php
                                            }
                                                ?>
                                                
                                                <?php
                                                    foreach ($select_car as $value3)
                                                    {
                                                ?>
						<li class="col-md-6">
							<h6>Car</h6>
							<p><?=$value3->maker?> <?=$value3->model?> <span><?=$value3->price?></span>
							</p>
							
						</li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    foreach ($select_ac as $value4)
                                                    {
                                                ?>
						<li class="col-md-6">
							<h6>Add-ons</h6>
							<p><?=$value4->gps?>x GPS <span><?=$value4->gpsp?></span>
							</p>
							<p><?=$value4->bbs?>x Babyseat <span><?=$value4->bbsp?></span>
							</p>
                                                        <p><?=$value4->exd?>x Extra driver <span><?=$value4->exdp?></span>
							</p>
                                                        <p><?=$value4->ins?>x Insurance <span><?=$value4->insp?></span>
							</p>
                                                        <p>Coupon Applied <span><?=$value4->code?></span>
							</p>
                                                        <p>Coupon Benefit<span><?=$value4->cop?>% OFF</span>
							</p>
						</li>
						
						<li class="col-md-12">
							<h6>Total</h6>
                                                        <p>Total Amount <span><?=$value4->ttl?></span>
							</p>
							<p>Payment on Arrival <span><?=$value4->gtp?></span>
							</p>
						</li>
                                                <?php
                                                    }
                                                ?>
                                                
                                                
						<li class="col-md-12">
							<h6>Billing Information</h6>
							<p><?=$value1->fname?> <?=$value1->lname?>
								
								<br><?=$value1->country?>
								<br><?=$value1->city?>
								<br><?=$value1->addr?>
								<br><?=$value1->pn?>
								<br><?=$value1->email?>
								<br>
							</p>
						</li>
						
					</ul>
					<hr>
					
				</div>
			</div>
		</div>
                            <?php
                                    }
                            ?>
	</div>
        <div id="editor"></div>
        <div class="contect_btn contect_btn_contact">
            <button id="cmd" onclick="printDiv('cont')" style="background: #4f5dec;color: white;border: none;width: 25%;height: 50px;text-transform: uppercase;border-radius: 10px;cursor: pointer;margin-top: 20px;margin-bottom: 20px;">Print bill</button>
        </div>
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
        <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jquery.min.js"></script>
        <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jszip.min.js"></script>
 <script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
<script type="text/javascript">
function printDiv(divName)
{
    var printCont=document.getElementById(divName).innerHTML;
    var originalCont=document.body.innerHTML;
    document.body.innerHTML=printCont;
    window.print();
    document.body.innerHTML=originalCont;
}
</script>
</body>

</html>