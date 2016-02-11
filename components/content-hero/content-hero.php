<?php
/**
 * The template used for displaying hero content.
 *
 * @package US_Web_Standards
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="us-web-standards-hero">
		<?php the_post_thumbnail( 'us-web-standards-hero' ); ?>
	</div><!-- .hero -->
<?php endif; ?>
