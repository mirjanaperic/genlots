<?php 

$above_title = get_sub_field('above_title');
$order = get_sub_field('order');
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');
$above_title_2 = get_sub_field('above_title_2');
$title_2 = get_sub_field('title_2');
$content_2 = get_sub_field('content_2');

$order_class = ( $order )? 'order-image-content ':'order-content-image ';

?>

<section class="two-contents-image-wrapper <?php echo $order_class; ?>">
    <div class="container">
        <div class="two-contents-image-inner">

            <div class="two-contents-image-left">
                <div class="two-contents-image-left-inner">

                    <?php if( $above_title ): ?>

                        <div class="ci-above-title ci-above-title1 section-above-title">
                            <p><?php echo $above_title; ?></p>
                        </div><!-- .ci-above-title -->

                    <?php endif; ?>

                    <?php if( $title ): ?>

                        <header class="ci-header ci-header1 section-above-title">
                            <h2 class="ci-title"><?php echo $title; ?></h2>
                        </header><!-- .ci-header -->

                    <?php endif; ?>

                    <?php if( $content ): ?>

                        <div class="ci-content ci-content1 entry-content">
                            <?php echo $content; ?>
                        </div><!-- .ci-content -->

                    <?php endif; ?>

                    
                    <?php if( $above_title_2 ): ?>

                        <div class="ci-above-title ci-above-title2 section-above-title">
                            <p><?php echo $above_title_2; ?></p>
                        </div><!-- .ci-above-title -->

                    <?php endif; ?>

                    <?php if( $title_2 ): ?>

                        <header class="ci-header ci-header2 section-above-title">
                            <h2 class="ci-title"><?php echo $title_2; ?></h2>
                        </header><!-- .ci-header -->

                    <?php endif; ?>

                    <?php if( $content_2 ): ?>

                        <div class="ci-content ci-content2 entry-content">
                            <?php echo $content_2; ?>
                        </div><!-- .ci-content -->

                    <?php endif; ?>

                </div><!-- .two-contents-image-left-inner -->
            </div><!-- .two-contents-image-left -->

            <?php if( !empty($image) ): ?>
            
                <div class="two-contents-image-right">
                    <div class="ci-image-background" <?php bg( $image ); ?>>
                    </div><!-- .ci-image-background -->
                </div><!-- .two-contents-image-right -->
                
            <?php endif; ?>

        </div><!-- .two-contents-image-inner -->
    </div><!-- .container -->
</section><!-- .two-contents-image-wrapper -->