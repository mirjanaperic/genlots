<?php 

$above_title = get_sub_field('above_title');
$order = get_sub_field('order');
$image_type = get_sub_field('image_type');
$image_vp = get_sub_field('image_vertical_position');
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');
$arrow_type = get_sub_field('arrow_type');

$order_class = ( $order )? 'order-image-content ':'order-content-image ';
$image_type_class = ( $image_type )? 'image-type-bg ':'image-type-image ';
$image_vp_class = ( $image_vp && !$image_type )? 'image-pos-top ':'image-pos-center ';
$arrow_icon = ( $arrow_type )? 'icon-arrow-right':'icon-play-arrow';

?>

<section class="content-image-wrapper <?php echo $order_class.$image_type_class.$image_vp_class; ?>">
    <div class="container">
        <div class="content-image-inner">

            <div class="content-image-left">
                <div class="content-image-left-inner">

                    <?php if( $above_title ): ?>

                        <div class="ci-above-title section-above-title">
                            <p><?php echo $above_title; ?></p>
                        </div><!-- .ci-above-title -->

                    <?php endif; ?>

                    <?php if( $title ): ?>

                        <header class="ci-header section-above-title">
                            <h2 class="ci-title"><?php echo $title; ?></h2>
                        </header><!-- .ci-header -->

                    <?php endif; ?>

                    <?php if( $content ): ?>

                        <div class="ci-content entry-content">
                            <?php echo $content; ?>
                        </div><!-- .ci-content -->

                    <?php endif; ?>

                    <?php lf_the_link( 'button_link', false, 'ci-link ci-link-button', 'btn btn-prim' ); ?>
                    <?php lf_the_link( 'arrow_link', false, 'ci-link ci-link-arrow', 'link link-arrow', false, '<i class="'.$arrow_icon.'"></i>' ); ?>

                </div><!-- .content-image-left-inner -->
            </div><!-- .content-image-left -->

            <?php if( !empty($image) ): ?>
            
                <div class="content-image-right">

                    <?php if( $image_type ): ?>
                        <div class="ci-image-background" <?php bg( $image ); ?>>
                        </div><!-- .ci-image-background -->
                    <?php else: ?>
                        <div class="ci-image">
                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                        </div><!-- .ci-image -->
                    <?php endif; ?>

                </div><!-- .content-image-right -->
                
            <?php endif; ?>

        </div><!-- .content-image-inner -->
    </div><!-- .container -->
</section><!-- .content-image-wrapper -->