<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main text-center postGPS" role="main">
    	<div class="line-horizontal"></div>
		<div class="sliderGPS">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(slider) ) : ?>
			<?php endif; ?>
		</div>
		<div class="nosotros-home">
			<h2>NOSOTROS</h2>
			<p><strong>GLOBAL PACKING SOLUTIONS (GPS)</strong> produce Bolsas Pouch con estructuras de películas plásticas y aluminio, con impresiones hasta de 8 colores.</p>
			<p>La calidad que ofrece GPS garantiza la integridad de los productos envasados cumpliendo con los requerimientos de barrera a los efectos del medio ambiente, así como con las propiedades mecánicas de resistencia al desgarre, rigidez o elongación, transparencia, brillo u opacidad, según las especificaciones indispensables para la protección y presentación al consumidor.</p>
			<p>GPS brinda soporte técnico, desde la selección de los materiales, diseño gráfico y empaque del producto final siguiendo estrictos procedimientos de buenas prácticas de manufactura.</p>
		</div>
		<div class="valores">
			<div class="col-sm-4 col-xs-12">
				<img src="<?php echo site_url(); ?>/gps/images/valores-1.png" alt="valores">
			</div>
			<div class="col-sm-4 col-xs-12">
				<img src="<?php echo site_url(); ?>/gps/images/valores-2.png" alt="valores">
			</div>
			<div class="col-sm-4 col-xs-12">
				<img src="<?php echo site_url(); ?>/gps/images/valores-3.png" alt="valores">
			</div>
		</div>

        <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php do_action('mtl_inside_loop_before'); ?>
                <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php do_action('mtl_inside_loop_after'); ?>


            <?php endwhile; ?>
            <div class="clearfix"></div>


            <?php do_action('mtl_after_content_above_footer'); ?>


        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>