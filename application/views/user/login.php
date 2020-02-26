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
						<h1>Login</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Login</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_partner_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>Please Login To Access you account.</h4>
						<h3>LOGIN TO YOUR ACCOUNT</h3>
					</div>
				</div>
			</div>
			<div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-12">
                        <!-- login_wrapper -->

                        <div class="login_wrapper">
                            
                            <div class="formsix-pos">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="" id="email2" placeholder="Username*">
                                </div>
                            </div>
                            <div class="formsix-e">
                                <div class="form-group i-password">
                                    <input type="password" class="form-control" required="" id="password2" placeholder="Password *">
                                </div>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="#" class="forget_password">
									Forgot Password
								</a>
                            </div>
                            <div class="login_btn_wrapper">
                                <a href="#" class="btn btn-primary login_btn"> login </a>
                            </div>
                            <div class="login_message">
                                <p>Don’t have an account ? <a href="<?=  base_url('userc/register')?>"> Register Now </a> </p>
                            </div>
                        </div>
                        <p>In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        <!-- /.login_wrapper-->
                    </div>
                </div>
		</div>
	</div>
	<!-- x news latter Wrapper Start -->
	<div class="x_news_letter_main_wrapper">
		<div class="container">
			<div class="x_news_contact_wrapper">
                            <img src="<?=  base_url()?>assets/images/nl1.png" alt="news_img">
				<h4>Call Us <br> <span>+1 800 123 4567</span></h4>
			</div>
			<div class="x_news_contact_second_wrapper">
				<h4>Get in touch</h4>
			</div>
			<div class="x_news_contact_search_wrapper">
				<input type="text" placeholder="Email Address">
				<button>Get <i class="fa fa-arrow-right"></i>
				</button>
			</div>
		</div>
	</div>
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