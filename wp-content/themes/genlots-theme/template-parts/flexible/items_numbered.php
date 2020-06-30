<?php 

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');

if( have_rows('items') ): ?>

    <section class="items-numbered-wrapper">
        <div class="container">
            <div class="items-numbered-inner">

                <?php if( $above_title ): ?>

                    <div class="itemsn-above-title section-above-title">
                        <p><?php echo $above_title; ?></p>
                    </div><!-- .itemsn-above-title -->

                <?php endif; ?>

                <?php if( $title ): ?>

                    <header class="itemsn-header section-above-title">
                        <h2 class="itemsn-title"><?php echo $title; ?></h2>
                    </header><!-- .itemsn-header -->

                <?php endif; ?>
                
                <div class="itemsn-items">
            
                    <?php while ( have_rows('items') ) : the_row(); 
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                    ?>
            
                        <div class="itemsn-item">
                            <div class="itemsn-item-inner">

                                <div class="itemsn-item-number">
                                    <span><?php echo get_row_index(); ?></span>
                                </div><!-- .itemsn-item-number -->

                                <?php if( $title ): ?>

                                    <div class="itemsn-item-title">
                                        <p><?php echo $title; ?></p>
                                    </div><!-- .itemsn-item-title -->
                                    
                                <?php endif; ?>

                                <?php if( $text ): ?>

                                    <div class="itemsn-item-text">
                                        <p><?php echo $text; ?></p>
                                    </div><!-- .itemsn-item-text -->

                                <?php endif; ?>

                                <?php lf_the_link( 'link', false, 'itemsn-item-link', 'btn btn-prim' ); ?>
                                
                            </div><!-- .itemsn-item-inner -->
                        </div><!-- .itemsn-item -->
            
                    <?php endwhile; ?>
            
                </div><!-- .itemsn-items -->
                
            </div><!-- .items-numbered-inner -->
        </div><!-- .container -->
    </section><!-- .items-numbered-wrapper -->

<?php endif; ?>