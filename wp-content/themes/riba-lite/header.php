<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="profile" href="http://gmpg.org/xfn/11">
    	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    	<?php wp_head(); ?>
        <style>
            @media (min-width: 768px){
                .post-grid.format-image .link-wrapper, .rl-layout.single .post-grid.format-image .link-wrapper {
                    height: 1300px;
                }
            }
            #page {padding-bottom: 0;}
            #primary-menu li:first-child a{
                border-bottom: 4px solid #e60714;
                padding-bottom: 8px !important;
            }
            .site-header {
                border: 0;
            }
            .line-horizontal {
                border: 2px solid #e60714;
                float: left;
                width: 100%;
                display: block;
                margin-top: 93px;
                margin-bottom: 35px;
            }
            #footer {
                background: #222;
            }
            /*redes sociales*/
            .social{
                margin: auto;
            }
            .social, .localizacion {
                text-align: center;
            }
            .social li {
                display: inline-block;
                padding: 0 15px;
            }
            .social li img{
                max-width: 50px
            }
            .localizacion li {
                display: inline-block;
                padding: 0 25px;
            }
            .localizacion li a{
                color: white;
            }
            .footer-contact-container {
                border: 0;
            }
            #rl-main-menu>ul>li>a{
                font-size: 16px;
            }
            #rl-main-menu>ul>li>a:hover{
                color:  #e60714;
            }
            .post-grid .link-wrapper:hover{
                opacity: 1;
                background: #e60714;
            }
            .post-grid .link-wrapper{
                background-color: transparent;
            }
            .post-cover-wrapper{opacity: 1}
            .post-grid .link-wrapper:hover .post-cover-wrapper{
                opacity: .2 !important;
            }
            .post-grid .entry-meta{display: none;}
            .post-grid.post-standard .entry-title{display: none;}
            .post-grid.post-standard .entry-title:hover{display: block;}
            .post-grid .entry-content{top:0;transform:initial;-webkit-transform:initial;}
            .post-grid .entry-content a{
                height: 378px;
                line-height: 378px;
                text-align: center;
                display: block;
                text-decoration: underline !important;
                font-size: 28px;
            }
            .form-contact .row-1 input[type="text"], .form-contact .row-1 input[type="email"]{width: 93.5%}
            .form-contact .row-2 {width: 49%;display: inline-block;}
            .form-contact .row-2 input[type="text"]{width: 90%;}
            article.hentry header.entry-header h1{
                padding-top: 81px;
                text-align: center;
            }
            .row-1 h2{color:#e60714; font-size: 22px;}
            .row-1 textarea{
                max-height: 135px;
                background: #eee;
                border: 0;
            }
            .row-1 input[type="submit"]{
                background: #e60714;
                border: 0;
                color: white;
                height: 50px;
                padding: 0;
                line-height: 50px;
                width: 116px;
                float: right;
            }
            .form-contact input[type="text"], .form-contact input[type="email"]{
                background: #eee;
                border: 0;
                height: 50px;
            }
            .your-subject input{width: 100% !important;}
            .valores img{width: 60%;text-align: center;}
            .valores {
                padding-top: 35px;
                padding-bottom: 50px;
                float: left;
                width: 100%;
                text-align: center;
            }
            /*slider*/
            .site-branding img {
                max-width: initial;
            }
            .nosotros-home{
                float: left;
                margin-top: 143px;
                padding-bottom: 35px;
            }
            /*footer*/
            .inc-footer {
                padding: 45px 0 0 0;
                background: #222;
            }
            .inc-footer .website-width {
                max-width: 1000px;
                box-sizing: border-box;
                padding: 0 2px 0 2px;
                width: 100%;
                margin: auto
            }
            .footer-address {
                font: normal normal 300 14px/18px "Roboto",sans-serif;
                color: #fff;
                text-align: left;
            }
            .footer-address p {
                font: normal normal 300 14px/18px "Roboto",sans-serif;
                color: #fff;
                padding: 0 0 25px 0;
            }
            .footer-address strong {
                display: block;
                font: normal normal 400 14px/18px "Roboto",sans-serif;
            }
            .footer-menu {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                text-align: center;
            }
            .vertical-navigation li>a:hover {
                color: #e60714 !important;
                transition: .3s;
            }
            .footer-menu ul.vertical-navigation {
                display: block;
                vertical-align: top;
                box-sizing: border-box;
                overflow: hidden;
                text-overflow: ellipsis;
                float: left;
                padding: 0 5px;
            }
            .footer-menu ul.vertical-navigation li {
                color: #ccc;
                text-align: left;
                margin: 0;
            }
            .footer-menu ul.vertical-navigation li a {
                font: normal normal 300 14px/18px "Roboto",sans-serif;
                color: #fff;
                display: block;
                text-decoration: none;
                transition: .3s;
                padding-bottom: 12px;
            }
            .u-reset {
                clear: both;
                display: block;
            }
            .etex-footer {
                /*margin: 120px 0 0 0;
                background: url(images/etex-line.png) no-repeat 40px center;
                height: 40px;
                position: relative;*/

                position: relative;
                text-align: left;
                padding-bottom: 25px;
            }/*
            .etex-footer::before {
                content: ' ';
                display: block;
                width: 125px;
                height: 125px;
                background: url(images/logo-grey.png) no-repeat top center;
                position: absolute;
                bottom: 37px;
                left: 0;
            }*/
            .etex-footer img{padding-left: 15px;}
            .etex-footer .etex-logo {
                float: right;
                height: 40px;
                /*background: #222 url(images/etex-logo.png) no-repeat right top;*/
                width: 180px;
            }
            @media (min-width: 768px) {
                .col-md-3, .cell3.fluid-column {
                    box-sizing: border-box;
                    position: relative;
                    min-height: 1px;
                    padding-right: 15px;
                    padding-left: 15px;
                    float: left;
                    width: 25%;
                }
                .col-md-6, .cell6.fluid-column {
                    box-sizing: border-box;
                    position: relative;
                    min-height: 1px;
                    padding-right: 15px;
                    padding-left: 15px;
                    float: left;
                    width: 50%;
                }
            }


        </style>
        <!--<link rel="stylesheet" type="text/css" href="<?php //echo site_url(); ?>/gps/css/style.css" />-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    </head>
    <?php $riba_lite_logo_text = get_theme_mod('riba_lite_text_logo', __('Riba', 'riba-lite') ); ?>
    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <?php do_action('mtl_site_preloader'); ?>
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'riba-lite' ); ?></a>
            <?php do_action('mtl_before_header'); ?>
            <div id="header-container" class="container-fluid">
                <header id="masthead" class="site-header" role="banner">
                    <div class="site-branding col-lg-4 col-md-4 col-sm-4 col-xs-12 text-lg-left text-md-left text-sm-left text-xs-center">
                        <?php //echo '<a class="rl-text-logo" href="'. esc_url( home_url( '/' ) ) .'" rel="home" >'. esc_attr( $riba_lite_logo_text ) .'</a>'; ?>
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/gps/images/logo.png" alt=""></a>
                    </div><!--/.site-branding.col-lg-4.col-md-4.col-sm-4.col-xs-12.text-lg-left.text-md-left.text-sm-left.text-xs-center-->
                    <nav id="site-navigation" class="main-navigation col-lg-8 col-md-8 col-sm-8 xs" role="navigation">
                        <?php wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'menu_id'           => 'primary-menu',
                            'container_id'      => 'rl-main-menu',
                            'container_class'   => 'hidden-xs',
                            'walker'            => new MTL_Extended_Menu_Walker(),
                            'fallback_cb'       =>  'MTL_Extended_Menu_Walker::fallback',
                        ) ); ?>
                    </nav><!--/#site-navigation.main-navigation.col-lg-8.col-md-8.col-sm-8.xs-->
                </header><!-- #masthead -->
            </div><!--/#header-container.container-fluid-->
            <div class="clearfix"></div>
            <button class="responsive-button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <nav class="responsive-navigation">
                <?php wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'menu_id'           => '',
                    'container_id'      => '',
                    'container_class'   => '',
                    'walker'            => new MTL_Extended_Menu_Walker(),
                    'fallback_cb'       =>  'MTL_Extended_Menu_Walker::fallback',
                ) ); ?>
            </nav><!--/.responsive-navigation-->
            <div id="content" class="site-content container-fluid">