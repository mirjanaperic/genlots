<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// echo custom link
function lf_the_link( $field_name, $option = false, $wrapper_class = false, $link_class = false, $override_text = false, $before = false, $after = false ){

    if( $option === true ):
        $opt = 'option';
    elseif( $option ):
        $opt = $option;
    else:
        $opt = '';
    endif;
    
    if( have_rows($field_name,$opt) ):
        while( have_rows($field_name,$opt) ): the_row();

            $link = get_sub_field('external_link');
            $int_link = get_sub_field('internal_link');
			$int_text = ( $override_text )? $override_text : get_sub_field('internal_link_text');
                
            if( $link ): 
                $link_url = $link['url'];
				$link_title = ( $override_text )? $override_text : $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>

                <div class="<?php echo $wrapper_class; ?>">
					<a class="<?php echo $link_class; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
						<?php echo ( $before )? $before:''; ?>
						<span><?php echo esc_html($link_title); ?></span>
						<?php echo ( $after )? $after:''; ?>
					</a>
                </div><!-- .<?php echo $wrapper_class; ?> -->

            <?php elseif( $int_link && $int_text ): ?>
                
				<div class="<?php echo $wrapper_class; ?>">
					<?php echo ( $before )? $before:''; ?>
						<a class="<?php echo $link_class; ?>" href="<?php echo $int_link; ?>"><?php echo $int_text; ?></a>
					<?php echo ( $after )? $after:''; ?>
                </div><!-- .<?php echo $wrapper_class; ?> -->
                
            <?php endif;

        endwhile;
    endif;

}

function get_twitter_post($tweet_id) { 
    return false; //temporary disabled to prevent requests
	require_once 'twitter_api_exchange.php';

	$settings = array(
		'consumer_key' => 'muaWAcSLeo4Enjck7OatukFkS',
		'consumer_secret' => 'e4ENd7aPSlKhoHBOpw8SMOQzOnFWUZQgnf6Dpu6d3aUZik0ick',		
		
		// timeline
		'oauth_access_token' => '',
		'oauth_access_token_secret' => '',
	  );
	  
      // Get tweet using TwitterAPIExchange
      $url = 'https://api.twitter.com/1.1/statuses/show/'.$tweet_id.'.json';
	  $requestMethod = 'GET';
	  
	  $twitter = new TwitterAPIExchange($settings);
	  $user_tweet = $twitter
		->buildOauth($url, $requestMethod)
		->performRequest();
	  
      $user_tweet = json_decode($user_tweet);

      if( isset($user_tweet->user->screen_name) ): 
      
        $profile_url = "https://twitter.com/" . $user_tweet->user->screen_name;
        $profile_name = '@' . $user_tweet->user->name . ':';
        $content = mb_strimwidth( $user_tweet->text, 0, 160, '...' );
        $link = $profile_url . '/status/' . $tweet_id;
      
      ?>
        
        <div class="tweet-item">
            <a href="<?php echo $link; ?>" class="tweet-icon" target="_blank">
                <i class="icon-twitter"></i>
            </a><!-- .tweet-icon -->
            <div class="tweet-item-inner">

                <div class="tweet-item-top">
                    <a href="<?php echo $profile_url; ?>" class="tweet-item-user" target="_blank">
                        <?php echo $profile_name; ?>
                    </a><!-- .tweet-item-user -->
                    <p class="tweet-item-date"><?php echo date('j M. Y', strtotime($user_tweet->created_at)); ?></p>
                </div><!-- .tweet-item-top -->

                <?php if( $content ): ?>

                    <div class="tweet-item-content">
                        <p><?php echo $content; ?></p>
                    </div><!-- .tweet-item-content -->
                    
                <?php endif; ?>

                <?php if( isset($user_tweet->entities->media[0]->type) && $user_tweet->entities->media[0]->type == 'photo' ): ?>

                    <div class="tweet-item-image">
                        <img src="<?php echo $user_tweet->entities->media[0]->media_url; ?>" alt="<?php echo $user_tweet->user->name; ?>">
                    </div><!-- .tweet-item-image -->
                    
                <?php endif; ?>

            </div><!-- .tweet-item-inner -->
        </div><!-- .tweet-item -->  
        
       <?php endif;

}

/**
 * Displaying a background image if set
 *
 * @param int,string $image
 * @param boolean $echo
 * @return string
 */
function bg( $image, $echo = true, $size = 'full' ){

    $content = $image_url = $image_alt = '';
	if( is_int($image) ){
        $image_url = wp_get_attachment_image_src($image, $size)[0];
        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
	}elseif( is_string($image) ){
        $image_url = $image;
        $image_alt = '['.basename($image_url).']';
    }
	
	if( $image_url ){
		$content .= " role='img' aria-label='". $image_alt ."' style='background-image: url($image_url)'";
	}

	if( $echo )
		echo $content;
	else
		return $content;
}

// contact details shortcode
function contact_details_shortcode()
{

    $address = get_field('address', 'option');
    $email = get_field('email', 'option');
    $phone = get_field('phone', 'option');

    ob_start()

?>

    <div class="contact-details">
        <div class="contact-details-inner">

            <?php if ($address) : ?>
                <div class="contact-item contact-item-address">
                    <a href="https://www.google.com/maps?daddr=<?php echo str_replace(' ', '+', $address); ?>" target="_blank">
                        <span class="contact-item-label"><i class="icon-pin"></i></span>
                        <span class="contact-item-value"><?php echo $address; ?></span>
                    </a>
                </div><!-- .contact-item -->
            <?php endif; ?>

            <?php if ($email) : ?>
                <div class="contact-item contact-item-email">
                    <a href="mailto:<?php echo $email; ?>">
                        <span class="contact-item-label"><i class="icon-phone"></i></span>
                        <span class="contact-item-value"><?php echo $email; ?></span>
                    </a>
                </div><!-- .contact-item -->
            <?php endif; ?>

            <?php if ($phone) : ?>
                <div class="contact-item contact-item-phone">
                    <a href="tel:<?php echo str_replace(' ', '', $phone); ?>">
                        <span class="contact-item-label"><i class="icon-mail"></i></span>
                        <span class="contact-item-value"><?php echo $phone; ?></span>
                    </a>
                </div><!-- .contact-item -->
            <?php endif; ?>

        </div><!-- .contact-details-inner -->
    </div><!-- .contact-details -->

<?php return ob_get_clean();
}
add_shortcode('contact_details', 'contact_details_shortcode');