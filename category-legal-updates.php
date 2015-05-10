<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

?>

<div class="grid-row">
  <div class="column-two-thirds">
    <article class="article">
      <header><h1>Legal Updates</h1></header>

      <?php
          // Show an optional term description.
          $term_description = term_description();
          if ( ! empty( $term_description ) ) :
            printf( '<div class="intro">%s</div>', $term_description );
          endif;
        ?>
    </article>    

    <?php 
      if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) : the_post();
    ?>
      <article class="post-extract">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <h3 class="date"><?php echo get_the_date( get_option('date_format') ); ?></h3>

        <?php the_excerpt(); ?>

        <?php the_tags( '<ul class="tag-list"><li>', '</li><li>', '</li></ul>' ); ?>
      </article>
      <?php 
          endwhile;
        endif;
      ?>

    <?php 

      $next_posts_link = get_next_posts_link('Older legal updates');
      $previous_posts_link = get_previous_posts_link('Newer legal updates');

    ?>

    <ul class="post-pagination">
      <?php if ($next_posts_link != "") : ?><li class="nav-previous"><?php echo $next_posts_link ?></li><?php endif; ?>
      <?php if ($previous_posts_link != "") : ?><li class="nav-next"><?php echo $previous_posts_link ?></li><?php endif; ?>
    </ul>
  </div>

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

get_footer();
