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
			$article=1;
			while ( have_posts() ) :
				 the_post();
				 echo '<p>'. $article . " ".get_the_title(). '</p>';
				 $article++;
			endwhile;
		?>
        </section>
<?php
get_sidebar();
get_footer();
