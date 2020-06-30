<?php 

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$content = get_sub_field('content');

?>

<section class="content-items-wrapper">
    <div class="container">
        <div class="content-items-inner">

            

            <?php if( have_rows('items') ): ?>
            
                <div class="contenti-items contenti-items-slider">
            
                    <?php while ( have_rows('items') ) : the_row(); 
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');

                        if( $icon || $title || $text ): ?>
            
                            <div class="contenti-item">
                
                                <?php if( !empty($icon) ): ?>
                                
                                    <div class="contenti-item-icon">
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                    </div><!-- .contenti-item-icon -->
                                
                                <?php endif; ?>

                                <?php if( $title ): ?>

                                    <div class="contenti-item-title">
                                        <p><?php echo $title; ?></p>
                                    </div><!-- .contenti-item-title -->
                                    
                                <?php endif; ?>

                                <?php if( $text ): ?>

                                    <div class="contenti-item-text">
                                        <p><?php echo $text; ?></p>
                                    </div><!-- .contenti-item-text -->

                                <?php endif; ?>
                
                            </div><!-- .contenti-item -->

                        <?php endif; ?>
            
                    <?php endwhile; ?>
            
                </div><!-- .contenti-items -->
            
            <?php endif; ?>

        </div><!-- .content-items-inner -->
    </div><!-- .container -->
</section><!-- .content-items-wrapper -->