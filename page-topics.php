<?php
/*
  Template Name: Topic Page
*/

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
  <div class="column-two-thirds">
    <article class="article">
      <header><h1><?php the_title(); ?></h1></header>

      <div class="intro"><?php the_content(); ?></div>
    </article>    

    <?php 
      $topic_category = get_post_meta( $post->ID, 'category_slug', true );

      $args = array( 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'category_name' => $topic_category );
    
      $topic_posts = get_posts( $args );

      foreach ($topic_posts as $post) : setup_postdata( $post );
    ?>
      <article class="post-extract">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <?php the_excerpt(); ?>
      </article>
    <?php 
      endforeach;
    ?>
  </div>  
</div>
<?php 
  endwhile;
endif;

get_footer();
?>
