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
    <header>
      <h1><?php the_title(); ?></h1>
      <h3 class="date heading-secondary">
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
          <?php echo get_the_date( get_option('date_format') ); ?>
        </time>
      </h3>
    </header>

    <?php the_content(); ?>

    <div class="post-meta">
      <?php the_tags( '<ul class="tag-list"><li>', '</li><li>', '</li></ul>' ); ?>
    </div>
  </article>

  <div class="column-third sidebar">
    <div class="sidebar-section">
      <a href="/subscribe-to-legal-updates" class="button">Subscribe to legal updates</a>
    </div>

    <div class="sidebar-section">
      <h3>Tags</h3>

      <?php 
        $tags = get_tags();
        if ($tags) {
          echo '<ul class="tag-list">';
          foreach ($tags as $tag) {
            echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li> ';
          }
          echo '</ul>';
        }
      ?>

    </div>

    <div class="sidebar-section">
      <h3>Archives</h3>

      <ul class="archive-list">
        <?php wp_get_archives(); ?> 
      </ul>
    </div>

  </div>
</div>
<?php 
  endwhile;
endif;

get_footer();
?>
