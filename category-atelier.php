<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();
?>
        
			<section id="ateliers">	
			<?php
			echo "<h2>". category_description( get_category_by_slug('atelier')) . "</h2>"; 
			$article=1;
			while ( have_posts() ) :
				 the_post();
				 echo '<p>'. $article . ". ".get_the_title(). "____".get_post_field('post_name')."______".	get_the_author_meta( 'display_name', $post->post_author )  . '</p>';
				 $article++;
			endwhile;
		?>
        </section>
<?php
get_sidebar();
get_footer();
