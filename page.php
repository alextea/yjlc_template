<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php
if ( have_posts() ) :
  // Start the Loop.
  while ( have_posts() ) : the_post();
?>

<div class="grid-row">
  <article class="article column-two-thirds">
    <header><h1><?php the_title(); ?></h1></header>

    <?php the_content(); ?>
  </article>
</div>
<?php 
  endwhile;
endif;

get_footer();
?>
