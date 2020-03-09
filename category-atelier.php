<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();

			echo "<h2>". category_description( get_category_by_slug('atelier')) . "</h2>";
?>
			<section id="ateliers">	
			<?php
			 
			$article=1;
			while ( have_posts() ) :
				 the_post();
				 /*
				 	echo '<p>'. $article . ". ".get_the_title(). "____".get_post_field('post_name')."______".	get_the_author_meta( 'display_name', $post->post_author )  . '</p>';
				 	$article++;
				 */

			
				$heure = substr(get_post_field('post_name'), 4);
				//echo $heure;
				$prof=	get_the_author_meta( 'display_name', $post->post_author );
	
				$gridArea = $heure . '/' . $prof . '/' . ($heure+1) . '/' . ($prof+1);
				echo '<p>' .$gridArea . '</p>' ;
				echo '<h2  style="grid-area:'. $gridArea . '">' . get_the_title() . $gridArea .get_post_field('post_name'). get_the_author_meta( 'display_name', $post->post_author )  .'</h2>';

			endwhile;
		?>
        </section>
<?php
get_sidebar();
get_footer();
