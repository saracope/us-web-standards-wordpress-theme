<?php
/**
 * The template used for displaying testimonials.
 *
 * @package compeontn_s
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php the_title( '<header class="entry-header"><h2 class="entry-title">', '</h2></header>' ); ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail"><?php the_post_thumbnail( 'us-web-standards-thumbnail-avatar' ); ?></div>
	<?php endif; ?>

	<?php edit_post_link( __( 'Edit', 'us-web-standards' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
