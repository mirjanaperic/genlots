<?php 

$title = get_field('career_benefits_title','option');

if( have_rows('career_benefits_items','option') ): ?>

<section class="career-benefits-wrapper">
    <div class="container">
        <div class="career-benefits-inner">

            <?php if( $title ): ?>

                <div class="career-benefits-title section-above-title">
                    <p><?php echo $title; ?></p>
                </div><!-- .career-benefits-title -->

            <?php endif; ?>

            <div class="career-benefits-items">
                <div class="career-benefits-items-inner">

                    <?php while ( have_rows('career_benefits_items','option') ) : the_row();                
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');

                        if( $icon || $title || $text ): ?>

                            <div class="career-benefits-item">

                                <?php if( !empty($icon) ): ?>
                                    
                                    <div class="career-benefits-item-icon">
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                    </div><!-- .career-benefits-item-icon -->
                                
                                <?php endif; ?>

                                <?php if( $title ): ?>

                                    <div class="career-benefits-item-title">
                                        <p><?php echo $title; ?></p>
                                    </div><!-- .career-benefits-item-title -->
                                    
                                <?php endif; ?>

                                <?php if( $text ): ?>

                                    <div class="career-benefits-item-text">
                                        <p><?php echo $text; ?></p>
                                    </div><!-- .career-benefits-item-text -->

                                <?php endif; ?>

                            </div><!-- .career-benefits-item -->

                        <?php endif; ?>
                    <?php endwhile; ?>

                </div><!-- .career-benefits-items-inner -->
            </div><!-- .career-benefits-items -->

        </div><!-- .career-benefits-inner -->
    </div><!-- .container -->
</section><!-- .career-benefits-wrapper -->

<?php endif; ?>