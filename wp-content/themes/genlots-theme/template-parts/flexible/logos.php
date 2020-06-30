<?php if( have_rows('items') ): ?>

    <section class="logos-wrapper">
        <div class="container">
            <div class="logos-inner">

                <?php while ( have_rows('items') ) : the_row(); ?>

                    <?php $image = get_sub_field('logo');
                    if( !empty($image) ): ?>
                    
                        <div class="logo-item">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div><!-- .logo-item -->
                    
                    <?php endif; ?>

                <?php endwhile; ?>

            </div><!-- .logos-inner -->
        </div><!-- .container -->
    </section><!-- .logos-wrapper -->

<?php endif; ?>