<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

?>

<div class="content-about">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
            <?php
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image about-image">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
			<?php
			the_post_thumbnail('koeksisters-index-img');
			?>
		</a>
	</figure><!-- .featured-image full-bleed -->
	<?php } ?>
        
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'humescores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</div>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'humescores' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
