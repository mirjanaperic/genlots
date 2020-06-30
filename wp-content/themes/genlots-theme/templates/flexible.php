<?php
/**
 * Template Name: Flexible
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main">

	  	<?php
		if( function_exists('have_rows') ) : 

			if ( have_rows('flexible') ) :

				while ( have_rows('flexible') ): the_row();

					if( get_sub_field('active') )
						get_template_part('template-parts/flexible/' . get_row_layout());

				endwhile;

			endif;
			
		endif;

		?>
		<?php get_template_part('template-parts/custom/twitter_block'); ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_footer();
