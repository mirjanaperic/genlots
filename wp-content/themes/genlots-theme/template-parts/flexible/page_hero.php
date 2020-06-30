<?php 

$title = get_sub_field('title');
$background = get_sub_field('background');

$background_style = ( $background )? 'style="background-image:url('.$background.')"':'';


if( !$title ):
   $title = get_the_title(); 
endif;

?>

<section class="page-hero-wrapper" <?php echo $background_style; ?>>
    <div class="container">
        <div class="page-hero-inner">

            <?php if( $title ): ?>

                <header class="page-hero-header">
                    <h1 class="page-hero-title"><?php echo $title; ?></h1>
                </header><!-- .page-hero-header -->
                
            <?php endif; ?>

        </div><!-- .page-hero-inner -->
    </div><!-- .container -->
</section><!-- .page-hero-wrapper -->