<?php 

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');

if( have_rows('items') ): ?>

    <section class="faq-wrapper">
        <div class="container">
            <div class="faq-inner">

                <?php if( $above_title ): ?>

                    <div class="faq-above-title section-above-title">
                        <p><?php echo $above_title; ?></p>
                    </div><!-- .faq-above-title -->

                <?php endif; ?>

                <?php if( $title ): ?>

                    <header class="faq-header section-above-title">
                        <h2 class="faq-title"><?php echo $title; ?></h2>
                    </header><!-- .faq-header -->

                <?php endif; ?>

                <div class="faq-items">
            
                    <?php while ( have_rows('items') ) : the_row(); 
                        $question = get_sub_field('question');
                        $answer_left = get_sub_field('answer_left');
                        $answer_right = get_sub_field('answer_right');

                        $answer_class = ( !$answer_right )? 'answer-fill-width':'';

                        if( $question && $answer_left ): ?>
            
                            <div class="faq-item <?php echo $answer_class; ?>">
                                <div class="faq-question">
                                    <div class="icon-wrap"><i class="icon-angle-down"></i></div>
                                    <p class="faq-question-title"><?php echo $question; ?></p>
                                </div>
                                <div class="faq-answer">
                                    <div class="faq-answer-inner">

                                        <?php if( $answer_left ): ?>

                                            <div class="faq-answer-left entry-content">
                                                <?php echo $answer_left; ?>
                                            </div><!-- .faq-answer-left -->
                                            
                                        <?php endif; ?>

                                        <?php if( $answer_right ): ?>

                                            <div class="faq-answer-right entry-content">
                                                <?php echo $answer_right; ?>
                                            </div><!-- .faq-answer-right -->

                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div><!-- .faq-item -->
            
                        <?php endif; ?>
                    <?php endwhile; ?>
            
                </div><!-- .faq-items -->
                
            </div><!-- .faq-inner -->
        </div><!-- .container -->
    </section><!-- .faq-wrapper -->

<?php endif; ?>