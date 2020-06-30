<?php 

$title = get_sub_field('title');
$image = get_sub_field('image');
$background = get_sub_field('background');

$background_style = ( $background )? 'style="background-image:url('.$background.')"':'';


$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$content = get_sub_field('content');

?>

<section class="home-hero-wrapper" >
<div class="home-hero-overlay" <?php echo $background_style; ?>></div>
		<div class="container">
			<div class="home-hero-inner">
				<?php if( $title ): ?>

					<div class="home-hero-left">
						<div class="home-hero-left-inner">

							<header class="home-hero-header">
								<h1 class="home-hero-title"><?php echo $title; ?></h1>
							</header><!-- .home-hero-header -->

						</div><!-- .home-hero-left-inner -->
					</div><!-- .home-hero-left -->
					
				<?php endif; ?>

				<?php if( !empty($image) ): ?>

					<div class="home-hero-right">
						<div class="home-hero-right-inner">

							<div class="home-hero-image">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div><!-- .home-hero-image -->

						</div><!-- .home-hero-right-inner -->
					</div><!-- .home-hero-right -->
				
				<?php endif; ?>
				
			</div><!-- .home-hero-inner -->
		</div><!-- .container -->
		
	
		<div class="text-description-section">
			<div class="background-patern-wrapp">
				<img src="./wp-includes/images/background-pattern.svg" alt="background-patern">
			</div>
			<div class="hero-text-description-wrapper">
				<div class="container">

				<?php if( $above_title ): ?>

					<div class="contenti-above-title section-above-title section-above-title--before">
						<p><?php echo $above_title; ?></p>
					</div><!-- .contenti-above-title -->

					<?php endif; ?>

					<?php if( $title ): ?>

					<header class="contenti-header section-above-title section-above-title--short">
						<h2 class="contenti-title"><?php echo $title; ?></h2>
					</header><!-- .contenti-header -->

					<?php endif; ?>

					<?php if( $content ): ?>

					<div class="contenti-content entry-content">
						<?php echo $content; ?>
					</div><!-- .contenti-content -->

					<?php endif; ?>

					<?php lf_the_link( 'link', false, 'contenti-link', 'btn btn-prim' ); ?>
				</div>
			</div>
		</div> 

	</section><!-- .home-hero-wrapper -->