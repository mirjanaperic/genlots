<?php 

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$below_title = get_sub_field('below_title');

if( have_rows('items') ): ?>

    <section class="team-wrapper">
        <div class="container">
            <div class="team-inner">

                <?php if( $above_title ): ?>

                    <div class="team-above-title section-above-title">
                        <p><?php echo $above_title; ?></p>
                    </div><!-- .team-above-title -->

                <?php endif; ?>

                <?php if( $title ): ?>

                    <header class="team-header section-above-title">
                        <h2 class="team-title"><?php echo $title; ?></h2>
                    </header><!-- .team-header -->

                <?php endif; ?>

                <?php if( $below_title ): ?>

                    <div class="team-below-title section-above-title">
                        <p><i class="icon-arrow-right"></i><span><?php echo $below_title; ?></span></p>
                    </div><!-- .team-below-title -->

                <?php endif; ?>

                <?php while ( have_rows('items') ) : the_row(); 
                    $name = get_sub_field('name');
                    $position = get_sub_field('position');
                    $image = get_sub_field('image');
                    $url = get_sub_field('linkedin_url');

                    if( $name ): ?>

                        <div class="team-item">
                            <div class="team-item-inner">

                                <?php if( !empty($image) ): ?>
                                
                                    <div class="team-item-image">
                                        <?php echo wp_get_attachment_image( $image, 'thumbnail' ); ?>

                                        <?php if( $url ): ?>

                                            <div class="team-item-linkedin">
                                                <a href="<?php echo $url; ?>" target="_blank"><i class="icon-linkedin"></i></a>
                                            </div><!-- .team-item-linkedin -->
                                            
                                        <?php endif; ?>

                                    </div><!-- .team-item-image -->
                                
                                <?php endif; ?>

                                <div class="team-item-main">
                                    <div class="team-item-main-inner">

                                        <div class="team-item-name">
                                            <p><?php echo $name; ?></p>
                                        </div><!-- .team-item-name -->

                                        <?php if( $position ): ?>

                                            <div class="team-item-position">
                                                <p><?php echo $position; ?></p>
                                            </div><!-- .team-item-position -->
                                            
                                        <?php endif; ?>

                                    </div><!-- .team-item-main-inner -->
                                </div><!-- .team-item-main -->

                            </div><!-- .team-item-inner -->
                        </div><!-- .team-item -->

                    <?php endif; ?>
                <?php endwhile; ?>

            </div><!-- .team-inner -->
        </div><!-- .container -->
    </section><!-- .team-wrapper -->

<?php endif; ?>