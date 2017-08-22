<div class="slider-productos">
	<?php if ( function_exists( 'easingslider' ) ) { easingslider( 60 ); } ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-producto">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content post-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'riba-lite' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link( esc_html__( 'Edit', 'riba-lite' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->