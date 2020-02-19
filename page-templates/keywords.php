<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
		
		?>
										
		<div class="post-tags meta-content entry-content">
			<div class="content">
			
				<br/>
		<?php 
		
		// Produce a list of all existing Tags
		
		$tags = get_tags();
		
		$html = '';
		
		$counter = 1;
		
		foreach ( $tags as $tag ) {
			
			$tag_link = get_tag_link( $tag->term_id );
					
			$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
			$html .= "{$tag->name}</a>";
			
			if ( $counter === count($tags) ) {
				// echo 'LAST';
			
			} else {
				$html .= ', ';
			}
			
			$counter++;
		
		}

		echo $html;
		  
		  ?>
				</div>
			</div><!-- .meta-content -->
  <?php 

	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
