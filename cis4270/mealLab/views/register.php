<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Be</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="content/dietshop/images/favicon.ico">
	<!-- FONTS -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito+Sans:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--CSS -->
	<link rel='stylesheet' href='content/dietshop/css/structure.css'>
	<link rel='stylesheet' href='content/dietshop/css/dietshop.css'>
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="plugins/rs-plugin-6.custom/css/rs6.css"> </head>

<body class="home page theme-betheme woocommerce-no-js template-slider content-brightness-light input-brightness-light style-default button-custom layout-full-width if-zoom no-shadows header-classic sticky-header sticky-tb-color ab-show subheader-both-center menu-link-color menuo-no-borders logo-no-margin mobile-tb-center mobile-side-slide mobile-mini-mr-lc mobile-sticky mobile-header-mini mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss be-page-19 be-reg-2513 wishlist-active wishlist-button mobile-row-2-products mfn-variable-swatches product-zoom-disabled mfn-ajax-add-to-cart">
	<div id="Wrapper">
		<div id="Header_wrapper">
			<header id="Header">
				<div id="Action_bar">
					<div class="container">
						<div class="column one">
							<ul class="contact_details">
								<li class="slogan"> <b>HOT DISCOUT ENDS 15th JULY - FIND OUT MORE</b> </li>
							</ul>
						</div>
					</div>
				</div>
				<div id="Top_bar">
					<div class="container">
						<div class="column one">
							<div class="top_bar_left clearfix">
								<div class="logo">
									<a id="logo" href="index-dietshop.html" title="BeDietShop - Betheme" data-height="60" data-padding="15"><img class="logo-main scale-with-grid" src="content/dietshop/images/dietshop.webp" data-retina="content/dietshop/images/retina-dietshop-1.webp" data-height="40" alt="dietshop" /><img class="logo-sticky scale-with-grid" src="content/dietshop/images/dietshop.webp" data-retina="content/dietshop/images/retina-dietshop-1.webp" data-height="40" alt="dietshop" /><img class="logo-mobile scale-with-grid" src="content/dietshop/images/dietshop.webp" data-retina="content/dietshop/images/retina-dietshop-1.webp" data-height="40" alt="dietshop" /><img class="logo-mobile-sticky scale-with-grid" src="content/dietshop/images/dietshop.webp" data-retina="content/dietshop/images/retina-dietshop-1.webp" data-height="40" alt="dietshop" /></a>
								</div>
							</div>
							<div class="top_bar_right">
								<div class="top_bar_right_wrapper">
									<div class="menu_wrapper">
										<nav id="menu">
											<ul id="menu-main-menu" class="menu menu-main">
												<li class="current-menu-item"> <a href="."><span>Home</span></a> </li>
												<li> <a href="content/dietshop/shop.html"><span>Shop</span></a> </li>
												<li> <a href="content/dietshop/about.html"><span>About</span></a> </li>
												<li> <a href="content/dietshop/blog.html"><span>Blog</span></a> </li>
												<li> <a href="content/dietshop/contact.html"><span>Contact</span></a> </li>
												<li> <a href="?ctlr=admin&amp;action=register"><span>Register</span></a> </li>
											</ul>
										</nav><a class="responsive-menu-toggle" href="#" aria-label="Mobile menu"><i class="icon-menu-fine" aria-hidden="true"></i></a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				</div>
			</header>
		</div>
		
		
		
		
		
		<main>
<section>
    
    <?php 
        if ($vm != null) {
            if ($vm->errorMsg != '') { ?>
            <p> <?php echo $vm->errorMsg; ?></p>
    <?php }
        }?>
		
		  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
		
    <form action="." method="post" id="add_edit_product_form">
	<input type="hidden" name="ctlr" value="admin" />
        <input type="hidden" name="action" value="register" />
		<?php echo csrf_token_tag(); ?>
        <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="firstName" id="firstName" class="form-control" />
                      <label class="form-label" for="firstName"> First Name</label>
                    </div>
                  </div>
				  
				  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="lastName" id="lastName" class="form-control" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="email" id="email" class="form-control" />
                      <label class="form-label" for="email">Email</label>
                    </div>
                  </div>
				  
				  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" />
                      <label class="form-label" for="phoneNumber">Phone</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="password" class="form-control" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" />
                      <label class="form-label" for="confirmPassword">Repeat your password</label>
                    </div>
                  </div>

                 

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

    </form>
    
</section>
</main>
		
		
		
		
		
		
		
		<footer id="Footer" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 120px"> </div>
					<div class="col-md-3">
						<h4>Contact with us</h4>
						<p style="padding-right: 15px;"> Nullam viverra consectetuer quisque cursus et, porttitor risus. </p>
						<p> <a href="tel:+61 (0) 3 8376 6284" data-type="tel" data-id="tel:+61 (0) 3 8376 6284">+61 (0) 3 8376 6284</a>
							<br> <a href="#"><span>noreply@envato.com</span></a> </p>
						<hr class="no_line" style="margin:0 auto 20px">
						<h4>Localization</h4>
						<p> Envato
							<br> Level 13, 2 Elizabeth
							<br> Victoria 3000
							<br> Australia </p>
					</div>
					<div class="col-md-3">
						<h4>Useful links</h4>
						<ul>
							<li style="margin-bottom:25px;"> <i class="icon-dot" style="color:#75973a;"></i><a href="content/dietshop/contact.html">Contact us</a> </li>
							<li style="margin-bottom:25px;"> <i class="icon-dot" style="color:#75973a;"></i><a href="content/dietshop/about.html">Help &amp; About us</a> </li>
							<li style="margin-bottom:25px;"> <i class="icon-dot" style="color:#75973a;"></i><a href="#">Shipping &amp; Returns</a> </li>
							<li style="margin-bottom:25px;"> <i class="icon-dot" style="color:#75973a;"></i><a href="#">Refund Policy</a> </li>
							<li style="margin-bottom:25px;"> <i class="icon-dot" style="color:#75973a;"></i><a href="#">Press Room</a> </li>
							<li style="margin-bottom:25px;"> <i class="icon-dot" style="color:#75973a;"></i><a href="#">Privacy Policy</a> </li>
						</ul>
					</div>
					<div class="col-md-6">
						<h4>BE informed with our newsletter</h4>
						<div id="contactWrapper">
							<div id="contactform">
								<form method="post" id="reused_form">
									<div class="row">
										<div class="col-md-7">
											<input placeholder="Your e-mail" id="email" type="email" name="Email" required maxlength="50"> </div>
										<div class="col-md-5">
											<button class="button-primary" id="submit" type="submit">Subscribe</button>
										</div>
									</div>
								</form>
								<div id="success_message" style="display:none">
									<h3>Submitted the form successfully!</h3>
									<p>We will get back to you soon.</p>
								</div>
								<div id="error_message" style="width:100%; height:100%; display:none;">
									<h3>Error</h3> Sorry there was an error sending your form.</div>
							</div>
						</div>
						<hr class="no_line" style="margin:0 auto 20px">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
						<hr class="no_line" style="margin:0 auto 70px">
						<p style="font-weight: 600;"> We accept:<img loading="lazy" style="margin: 0 25px; position: relative;" src="content/dietshop/images/dietshop-footer-icon1.webp" class="wp-image-32 scale-with-grid" width="304" height="25" /> </p>
					</div>
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 70px"> </div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href="#"><i class="icon-up-open-big"></i></a>
						<div class="copyright"> &copy; 2021 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="https://1.envato.market/9ZxXY">BeantownThemes</a> </div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="body_overlay"></div>
	<div id="Side_slide" class="right light" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="menu_wrapper"></div>
	</div>
	<!-- JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-migrate-3.3.2.js"></script>
	<script src="js/mfn.menu.js"></script>
	<script src="js/jquery.plugins.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/animations/animations.js"></script>
	<script src="js/translate3d.js"></script>
	<script src="js/scripts.js"></script>
	<script src="phpmailer/form.js"></script>
	<script src="plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
	<script src="plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
	<script type="text/javascript">
	var revapi1, tpj;

	function revinit_revslider11() {
		jQuery(function() {
			tpj = jQuery;
			revapi1 = tpj("#rev_slider_1_1");
			if(revapi1 == undefined || revapi1.revolution == undefined) {
				revslider_showDoubleJqueryError("rev_slider_1_1");
			} else {
				revapi1.revolution({
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1240,778,778",
					gridwidth: "1400,1400,778,778",
					gridheight: "950,950,1100,1100",
					spinner: "spinner12",
					perspective: 600,
					perspectiveType: "global",
					spinnerclr: "#13d5ff",
					editorheight: "950,768,1100,720",
					responsiveLevels: "1240,1240,778,778",
					progressBar: {
						disableProgressBar: true
					},
					navigation: {
						onHoverStop: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
			}
		});
	} // End of RevInitScript
	var once_revslider11 = false;
	if(document.readyState === "loading") {
		document.addEventListener('readystatechange', function() {
			if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
				once_revslider11 = true;
				revinit_revslider11();
			}
		});
	} else {
		once_revslider11 = true;
		revinit_revslider11();
	}
	</script>
</body>

</html>