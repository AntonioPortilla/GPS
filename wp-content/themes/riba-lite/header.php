<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="profile" href="http://gmpg.org/xfn/11">
    	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" href="<?php echo site_url(); ?>/gps/css/style.css">
        <link rel="shortcut icon" href="<?php echo site_url(); ?>/gps/images/favicon.ico"/>
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
            }
            .social li img{
                max-width: 50px
            }
            .social li span{
                background: url('gps/images/redes-red.png');
                background-repeat: no-repeat;
            }
            .social img{
                background-position: -28px 0;
                width: 50px;
                display: inline-block;
            }
            .social a{
                display: block;
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
            /*bloque servicios*/
            .bloque-servicios {
                z-index: 105;
                width: 100%;
                margin-left: 0%;
            }
            .contenedor-srv{
                margin-right: -10000px;
                width: 59.17%;
                margin-left: 20.42%;
                padding: 100px 0;
                margin-top: 195px;
            }
            .contenedor-srv h1{
                font-family: niveau-grotesk, sans-serif;
                font-weight: 900;
                text-align: center;
                color: #e60714;
                margin-top: -145px;
                padding-bottom: 55px;
            }
            .contenedor-srv h2{
                font-size: 50px;
                font-family: lato, sans-serif;
                padding: 0;
                margin: 0;
                font-weight: 300;
            }
            .txt-left {
                width: 450px;
                min-height: 198px;
                line-height: 48px;
                text-align: right;
                font-size: 40px;
                margin-right: -10000px;
                margin-top: 28px;
                left: -464px;
                position: relative;
                font-family: niveau-grotesk, sans-serif;
                font-weight: 900;
                color: #111;
                margin-left: 50%;
                float:left;
            }
            .txt-right {
                font-family: lato, sans-serif;
                font-weight: 300;
                text-align: justify;
                position: relative;
                margin-left: 50%;
                padding-left: 10px;
            }
            .txt-right p {
                color: #111;
            }
            .txt-left h3{
                font-family: lato, sans-serif;
                font-weight: bold;
                font-size: 55px;
                line-height: 1.2;
                padding: 0;
                margin: 0;
            }
            .content-nosotros{
                margin-top: 150px;
            }
            .content-nosotros h2{
                padding-top: 40px;
                color: #e60714;
            }
            .content-nosotros p{
                text-align: justify;
            }
            div.wpcf7-validation-errors{border: 0;}
            .mapa{max-width: 1281px}
            .mapa img{width: 100%;}
            .myModal{display: none}
            .iframe-dir{
                display: block;
                position: fixed;
                z-index: 101;
                left: 50%;
                top: 15%;
                margin-left: -40%;
                margin-top: 0px;
                width: 80%;
                height: 70%;
                padding: 2em;
                box-shadow: 1px 1px 3px rgba(0,0,0,0.35);
                background-color: white;
            }
            .mapa img{cursor:pointer;}
            .lean-overlay{
                position: fixed;
                z-index: 100;
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100%;
                background: rgb(0, 0, 0);
                opacity: 0.5;
                overflow: auto;
            }
            .iframe-dir .cerrar{
                position: absolute;
                right: -12px;
                top: -20px;
                cursor: pointer;
            }
            .iframe-dir .cerrar img{
                width: 65px;
            }
            header.SERVICIOS h3 div,
            header.NOSOTROS h3 div,
            header.PRODUCTOS h3 div,
            header.CONTACTO h3 div{
                text-align: center;
            }
            header.categorias h3 span{
                width: 56px;
                height: 58px;
                position: absolute;
                margin-left: -23px;
                top: 220px;
            }
            header.SERVICIOS h3 span{
                background: url('gps/images/servicios.png');
            }
            header.NOSOTROS h3 span{
                background: url('gps/images/nosotros.png');
            }
            header.PRODUCTOS h3 span{
                background: url('gps/images/producto.png');
            }
            header.CONTACTO h3 span{
                background: url('gps/images/contacto.png');
            }
            .mt-contact-bar{display:none}
            .headroom--unpinned.headroom--not-top.site-header{
                top: 130px;
                padding-top: 10px;
            }
            .productosFull{
                width: 100%;
                margin-left: initial;
                text-align: justify;
            }
            .productosFull p{
                color: #000;
            }
            .lista-producto{
                margin: 50px 0;
                text-align: center;
            }
            .lista-producto li{
                display: inline-block;
                font-size: 14px;
                margin: 0 15px;
            }
            .lista-producto li:last-child{
                color: #e60714;
            }
            .lista-producto li a:hover{
                color: #e60714;
            }
            .lineHoritonzal{
                width: 100%;
                height: 4px;
                background: #e60714;
                margin-top: 5px;
                float: left;
            }
            .content-producto{
                margin-top: 65px;
            }
            .content-producto h1{
                color: #e60714;
                text-align: left !important;
            }
        /*contenido media queryes*/
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
            @media (max-width: 640px){
                .line-horizontal{
                    margin-top: 0;
                }
                button.responsive-button{
                    border: 1px solid #e60714;
                    color: #e60714;
                    background: white;
                }
                nav.responsive-navigation ul li{text-align: center;}
                nav.responsive-navigation ul li a:hover{color: #e60714;}
                .footer-address{
                    border-bottom: 1px solid rgba(255, 255, 255, .6);
                    margin-bottom: 52px;
                }
                .mt-contact-bar{display: none;}
                #header-container{padding-top: 20px;}
                #masthead{background-color: transparent;}
                .menu-footer, .menu-footer2{
                    margin-left: 0;
                    width: 50%;
                }
                ul.social{padding-left: 0}
                .etex-footer {
                    text-align: center;
                    padding-bottom: 46px;
                    padding-top: 16px;
                }
                .etex-footer img{padding-left: 0}
                .contenedor-srv{
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 35px 0;
                }
                .nosotros-home{padding-top: 0px;margin-top: 70px}
                article.hentry header.entry-header h1{padding-top: 0}
                .contenedor-srv .txt-left, .contenedor-srv .txt-right{
                    width: 100%;
                    margin: 0 auto;
                    display: block;
                    left: initial;
                    float: left;
                }
                .contenedor-srv{
                    margin-top: 0;
                }
                .txt-left h2, .txt-left h3{
                    font-size: 22px;text-align: center;
                }
                .txt-left{
                    min-height: initial;
                }
                .contenedor-srv h1{margin-top: 0;padding-bottom: 0;}
                .content-nosotros{margin-top: 50px;}
                .iframe-dir{
                    width: 98%;
                    margin-left: -49%;
                    padding: 10px;
                }
                .iframe-dir .cerrar img{
                    width: 50px;
                }
                .iframe-dir .cerrar{right: 0}
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