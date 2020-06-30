<?php 

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');

?>

<section class="tabs-section-wrapper">
		<div class="background-patern-wrapp background-patern-wrapp--tabs">	
			<img src="./wp-includes/images/background-pattern.svg" alt="background-patern">
		</div>
    <div class="container">
        <div class="tabs-section-inner">

            <?php if( $above_title ): ?>

                <div class="tabs-section-above-title section-above-title section-above-title--before">
                    <p><?php echo $above_title; ?></p>
                </div><!-- .tabs-section-above-title -->

            <?php endif; ?>

            <?php if( $title ): ?>

                <header class="tabs-section-header section-above-title">
                    <h2 class="tabs-section-title"><?php echo $title; ?></h2>
                </header><!-- .tabs-section-header -->

            <?php endif; ?>

            <?php if( have_rows('tabs') ): ?>
            
                <div class="tabs-section-main">

                    <div class="tabs-nav">

                        <?php while ( have_rows('tabs') ) : the_row(); 
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');

                            $active_class = ( get_row_index() == 1 )? 'active':'';

                            if( $title ): ?>
                
                                <div class="tabs-nav-item <?php echo $active_class; ?>" data-id="<?php echo get_row_index(); ?>">

                                    <?php if( !empty($icon) ): ?>
                                    
                                        <div class="tabs-nav-icon">
                                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                        </div><!-- .tabs-nav-icon -->
                                    
                                    <?php endif; ?>

                                    <?php if( $title ): ?>
                                        <div class="tabs-nav-title">
                                            <p><?php echo $title; ?></p>
                                        </div><!-- .tabs-nav-title -->
                                    <?php endif; ?>

                                </div><!-- .tabs-nav-item -->

                            <?php endif; ?>
                        <?php endwhile; ?>

                    </div><!-- .tabs-nav -->

                    <div class="tabs-content tabs-content-slider">
                        <?php while ( have_rows('tabs') ) : the_row(); 
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $link = get_sub_field('link');

                                $active_class = ( get_row_index() == 1 )? 'active':'';

                                if( $title ):
                        ?>

                                <div class="tabs-content-item tabs-content-item<?php echo get_row_index(); ?> <?php echo $active_class; ?>">
                                    <div class="tabs-content-item-inner">

                                        <?php if( $content || $link ): ?>
                                            
                                            <div class="tabs-content-left"> 
                                                <div class="tabs-content-left-inner">

                                                    <?php if( $content ): ?>

                                                        <div class="tabs-content-content entry-content">
                                                            <?php echo $content; ?>
                                                        </div><!-- .tabs-content-content -->
                                                        
                                                    <?php endif; ?>

                                                    <?php lf_the_link( 'link', false, 'tabs-content-link', 'btn btn-prim' ); ?>

                                                </div><!-- .tabs-content-left-inner -->
                                            </div><!-- .tabs-content-left -->

                                        <?php endif; ?>

                                        <?php if( have_rows('slides') ): ?>
                                        
                                            <div class="tabs-content-right">
                                                <div class="tabs-content-slides">
                                        
                                                    <?php while ( have_rows('slides') ) : the_row(); 
                                                        $text = get_sub_field('text');
                                                        $author = get_sub_field('author');
                                                        $position = get_sub_field('position');
                                                        $image = get_sub_field('image');

                                                        $text_class = ( $text || $author || $position )? 'tabs-content-slide-has-text ':'tabs-content-slide-no-text ';
                                                        $image_class = ( $image )? 'tabs-content-slide-has-image ':'tabs-content-slide-no-image ';

                                                        if( $image || $text || $author || $position  ): ?>
                                                    
                                                            <div class="tabs-content-slide <?php echo $text_class.$image_class; ?>">
                                                
                                                                <?php if( $text || $author || $position  ): ?>

                                                                    <div class="tabs-content-slide-left">
                                                                        <div class="tabs-content-slide-left-inner">

                                                                            <?php if( $text ): ?>

                                                                                <div class="tabs-content-slide-text">
                                                                                    <p><?php echo __('«','genlots').' '.$text.' '.__('»','genlots'); ?></p>
                                                                                </div><!-- .tabs-content-slide-text -->
                                                                                
                                                                            <?php endif; ?>

                                                                            <?php if( $author ): ?>

                                                                                <div class="tabs-content-silde-author">
                                                                                    <p><?php echo $author; ?></p>
                                                                                </div><!-- .tabs-content-silde-author -->
                                                                                
                                                                            <?php endif; ?>

                                                                            <?php if( $position ): ?>

                                                                                <div class="tabs-content-silde-position">
                                                                                    <p><?php echo $position; ?></p>
                                                                                </div><!-- .tabs-content-silde-position -->

                                                                            <?php endif; ?>

                                                                        </div><!-- .tabs-content-slide-left-inner -->
                                                                    </div><!-- .tabs-content-slide-left -->
                                                                    
                                                                <?php endif; ?>

                                                                <?php if( !empty($image) ): ?>
                                                                
																	<div class="tabs-content-slide-image" <?php bg( $image ); ?>>
																	
                                                                    </div><!-- .tabs-content-slide-image -->

                                                                <?php endif; ?>
                                                
                                                            </div><!-- .tabs-content-slide -->

                                                        <?php endif; ?>
                                            
                                                    <?php endwhile; ?>
                                        
                                                </div><!-- .tabs-content-slides -->
                                            </div><!-- .tabs-content-right -->
                                        
                                        <?php endif; ?>

                                    </div><!-- .tabs-content-item-inner -->
                                </div><!-- .tabs-content-item -->

                            <?php endif; ?>
                        <?php endwhile; ?>

                    </div><!-- .tabs-content -->
            
                </div><!-- .tabs-section-main -->
            
            <?php endif; ?>

        </div><!-- .tabs-section-inner -->
    </div><!-- .container -->
</section><!-- .tabs-section-wrapper -->
