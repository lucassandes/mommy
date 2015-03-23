<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png?v=2">

    <!-- title -->
    <title><?php echo bloginfo( 'name' ); ?> <?php wp_title(); ?></title>

    <!-- wp head -->
    <?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } wp_head(); ?>
</head>
<!-- /head -->

<body id="index" <?php body_class(); ?>>

    <?php if ( ! is_home() && ! is_single() && ! is_archive() && ! is_search() && ! is_404() ) : ?>
        <div id="preloader"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/preloader.gif" alt="Loading..." /></div>
    <?php endif; ?>

    <?php if ( ! is_404() ) : ?>
        <!-- setup vars -->
        <?php if ( ! is_404() && ! is_search() ) { $lt_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); }
            $modules = get_option( 'lovethemes_modules' );
            $social  = get_option( 'lovethemes_social' ); 
        ?>
        <!-- /setup vars -->
        
        <!-- topbar -->
        <div id="topbar">
            <div class="boxed">
                
                <!-- social -->
                <?php if ( $social ) : get_template_part( 'inc/social' ); endif; ?>
                <!-- /social -->
                
                <!-- cart link -->
                <?php if ( class_exists( 'WooCommerce' ) ) : global $woocommerce; ?>
                    <a class="cart-button alignright" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>">
                        <i class="icon-shopping-cart"></i>
                        <?php if ( $woocommerce->cart->cart_contents_count > 0 ) : ?>
                            <?php esc_html_e( "My Basket, ", "lt" ); ?>
                            <span class="cart-count">
                                <?php esc_html_e( sprintf( _n( "%d Item", "%d Items", $woocommerce->cart->cart_contents_count, "lt" ), $woocommerce->cart->cart_contents_count ) ); ?>
                            </span>
                        <?php else : ?>
                            <span class="cart-count">
                                <?php esc_html_e( "Your Cart is Empty", "lt" ); ?>
                            </span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
                <!-- /cart link -->
            
            </div>
        </div>
        <!-- /topbar -->
        
        <!-- header -->
        <header id="main">
            <div class="boxed">
                

                
                <!-- search -->
                <?php /*
                <div id="searchstuff" class="one_quarter">
                    <a class="search-button alignright" href="#">
                        <i class="icon-search"></i>
                    </a>
                    <?php get_search_form(); ?>
                </div> */
                ?>
                <!-- /search -->
                
                <!-- primary nav area -->
                <!-- logo -->
                <div id="logo" class="textcenter aligncenter">
                    <?php $lt_logo = get_option( 'lovethemes_logo' ); if ( $lt_logo['image'] ) : ?>
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <img src="<?php echo esc_url( $lt_logo['image'] ); ?>" alt="<?php esc_html_e( bloginfo( 'name' ) . bloginfo( 'description' ) ); ?>" />
                        </a>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <h1><?php esc_html_e( bloginfo( 'name' ) ); ?></h1>
                        </a>
                    <?php endif; ?>
                </div>
                <!-- /logo -->

                <!-- logo -->
                <div id="logo-mobile" class="textcenter aligncenter hidden-sm hidden-md hidden-lg">
                    <?php $lt_logo = get_option( 'lovethemes_logo' ); if ( $lt_logo['image'] ) : ?>
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <img src="<?php echo esc_url( $lt_logo['image'] ); ?>" alt="<?php esc_html_e( bloginfo( 'name' ) . bloginfo( 'description' ) ); ?>" />
                        </a>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <h1><?php esc_html_e( bloginfo( 'name' ) ); ?></h1>
                        </a>
                    <?php endif; ?>
                </div>
                <!-- /logo -->

                <!-- carrinho ecommerce -->
                <div id="breve-ecom" class="hidden-lg hidden-sm hidden-xs">
                    <img src="<?php echo child_template_directory ?>/imgs/ecommerce.png" />

                </div>

                <!-- /carrinho -->

            	<div id="primary" >


                    <!-- menu -->
                    <a class="open" href="#slideout"><i class="icon-tasks"></i></a>
                    <!-- /menu -->
                    
                    <!-- wp nav menu - populates responsive menu -->
                    <nav class="navigation">
                        <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'primary_menu' ) ); ?>

                    </nav>
                    <!-- /wp nav menu -->
                    
        	    </div>

                <div id="breve-ecom" class="hidden-md">
                    <img src="<?php echo child_template_directory ?>/imgs/ecommerce.png" class="hidden-xs" />

                </div>

                <div class="clear"></div>
                <!-- /primary nav area -->
                
            </div>
    	</header>
    	<!-- /header -->

        <!-- content -->
        <div id="content">
    <?php endif; ?>