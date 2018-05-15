<?php
/**
 * The template part for displaying slider
 *
 * @package Pet Animal Store
 * @subpackage pet_animal_store
 * @since Pet Animal Store 1.0
 */
?>

<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$audio = false;

	// Only get audio from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
	}

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box">
      <div class="service-image">
        <?php
          if ( ! is_single() ) {

            // If not a single post, highlight the audio file.
            if ( ! empty( $audio ) ) {
              foreach ( $audio as $audio_html ) {
                echo '<div class="entry-audio">';
                  echo $audio_html;
                echo '</div><!-- .entry-audio -->';
              }
            };

          };
        ?>
      </div>
      <div class="service-text">
        <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt();?></p>
        <div class="service-btn">
          <a href="<?php the_permalink(); ?>" class="Masters-In-Digital-Marketing" title="<?php esc_attr_e('Read More','pet-animal-store'); ?>"><?php esc_html_e('Read More','pet-animal-store'); ?></a>  
        </div> 
      </div>
  </div>
</div>