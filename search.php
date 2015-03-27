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

<div class="grid-row">
  <div class="article column-two-thirds">
    <header><h1>Search Results</h1></header>
<?php
if ( have_posts() ) :
  // Start the Loop.
  while ( have_posts() ) : the_post();
?>
  <article class="article">
    <header><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></header>

    <?php the_excerpt(); ?>
  </article>
<?php 
  endwhile;
endif;
?>
</div>

<? get_footer(); ?>
