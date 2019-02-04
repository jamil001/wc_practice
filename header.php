<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *

 */

?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	

<head>
	<!-- Meta -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">

	



	<?php wp_head(); ?>

</head>
<body class="cnt-home" <?php body_class(); ?> > 
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
					<li><a href=" <?php echo esc_url( home_url('/') ) ?>my-account"><i class="icon fa fa-user"></i>My Account</a></li>
					
					<li><a href=" <?php echo esc_url( home_url('/') ) ?>cart"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a href=" <?php echo esc_url( home_url('/') ) ?>checkout"><i class="icon fa fa-check"></i>Checkout</a></li>
					<li><a href=" <?php echo esc_url( home_url('/') ) ?>login"><i class="icon fa fa-lock"></i>Login</a></li>
				</ul>
			</div><!-- /.cnt-account -->

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">USD</a></li>
							<li><a href="#">INR</a></li>
							<li><a href="#">GBP</a></li>
						</ul>
					</li>

					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">English</a></li>
							<li><a href="#">French</a></li>
							<li><a href="#">German</a></li>
						</ul>
					</li>
				</ul><!-- /.list-unstyled -->
			</div><!-- /.cnt-cart -->
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
				<div class="logo">
					<a href=" <?php echo home_url( '/' ) ?>">
						
						
						<img src=" <?php echo get_template_directory_uri().'/assets/images/logo.png' ; ?>" alt="">

					</a>
				</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				
			</div><!-- /.logo-holder -->

			<div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
					<!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
				<div class="search-area">
					<form>
						<div class="control-group">

							<ul class="categories-filter animate-dropdown">
								<li class="dropdown">

									<a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

									<ul class="dropdown-menu" role="menu" >
										<li class="menu-header">Computer</li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>

									</ul>
								</li>
							</ul>

							<input class="search-field" placeholder="Search here..." />

							<a class="search-button" href="#" ></a>    

						</div>
					</form>
				</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				
			</div><!-- /.top-search-holder -->

			<div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

				<div class="dropdown dropdown-cart">
					
					<?php global $woocommerce  ?>
					
					
					<a href="<?php echo $woocommerce->cart->get_cart_url();  ?>" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
						<div class="items-cart-inner">
							<div class="basket">
								<i class="glyphicon glyphicon-shopping-cart"></i>
							</div>
							<div class="basket-item-count"><span class="count"><?php echo sprintf(_n('%d item','%d items',$woocommerce->cart->cart_content_count,'flipmart'),$woocommerce->cart->cart_content_count) ; ?></span></div>
							<div class="total-price-basket">
								<span class="lbl">cart -</span>
								<span class="total-price">
									<span class="sign">$</span><span class="value"><?php echo $woocommerce->cart->get_cart_total() ; ?></span>
								</span>
							</div>
							
						
						</div>
					</a>
					
					
					
					
					
				</div><!-- /.dropdown-cart -->

			<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				
			</div><!-- /.top-cart-row -->
		</div><!-- /.row -->

	</div><!-- /.container -->

</div><!-- /.main-header -->

	<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
					<div class="nav-outer">
						
						<?php 
						wp_nav_menu( array(
							'theme_location'  => 'main_menu',
							'container_class' => 'nav-outer',
							'menu_class'      => 'nav navbar-nav',
							
						) );
						 ?>


					
						<div class="clearfix"></div>				
					</div><!-- /.nav-outer -->
				</div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>






