<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php
// if ( have_posts() ) {

// 	// Load posts loop.
// 	while ( have_posts() ) {
// 		the_post();
		
// 		//get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
// 		echo 'bài viết :' .$post->post_title;
// 	}
	

// 	// Previous/next page navigation.
// 	twenty_twenty_one_the_posts_navigation();

// } else {

// 	// If no content, include the "No posts found" template.
// 	get_template_part( 'template-parts/content/content-none' );

// }

?>
<h2>Query1</h2>
<?php
$args=array(
	'page_id'=>1,
);
$bung= new WP_Query($args);
while($bung->have_posts()):
	$bung->the_post();
	echo '<h1> '.get_the_title().'</h1>';
endwhile;
//echo 'bài viết :' .$post->post_title;

// get_footer();
?>
<h2>query2</h2>
<?php
$query2_array=array(
	'post_per_page'=>5,
	'post_type'=>'post',
	'order_by'=>'rand'
);
$query2= new WP_Query($query2_array);
if($query2->have_posts()):
	while($query2->have_posts()):
		$query2->the_post();
		echo '<h1> '.get_the_title().'</h1>';
	endwhile;
endif;
?>
<div class="pagination">
	<?php
	posts_nav_link();
	?>
</div>
<?php
get_footer();
?>