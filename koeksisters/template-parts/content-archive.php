<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Koeksisters
 */

?>

<div class="archive-content">
    <div class="content-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
    
	<header class="entry-header">
                                
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php koeksisters_the_category_list(); ?> <br>
                    
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
        
           <?php
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image archive-image">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
			<?php
			the_post_thumbnail('koeksisters-archive-img');
			?>
		</a>
	</figure><!-- .featured-image full-bleed -->
	<?php } ?>
        
        <section class="post-content">
            <div class="archive-page-content">
	<div class="entry-content">
		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->
            </div>
          
        
        
        </section>
        <div class="continue-reading">
			<?php
			$read_more_link = sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s', 'koeksisters' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			);
			?>
					
			<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
				<?php echo $read_more_link; ?>
			</a>
		</div><!-- .continue-reading -->
        
</article><!-- #post-## -->

    </div>


</div>
