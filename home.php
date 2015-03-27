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
 * @package YJLC Template
 */

get_header();

?>

<div class="homepage-section">
  <div class="strap-line">
    <h2>Legally accurate information about youth justice law in England and Wales</h2>
  </div>
</div>

<div class="homepage-section">
  <div class="large-search">
    <h2>Search</h2>

    <p>Search the site for topics you may be interested in</p>

    <label for="homepage-search" class="visuallyhidden">Search YJLC</label>

    <form action="<?php echo home_url( '/' ); ?>" class="form">
      <input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="homepage-search">
      <button type="submit" class="button">Search</button>
    </form>
  </div>
</div>

<div class="homepage-section">
  <h2><a href="/az-index">Browse legal terms</a></h2>

  <p>Browse our A-Z list of definitions of legal terms.</p>

  <ul class="a-z-list">
    <?php
    foreach (range('A', 'Z') as $i)
    {
      $letter = strtoupper($i);
      echo "<li><a href='/az-index#$letter' >$i</a></li>";
    }
    ?>   
  </ul>
</div>

<?php
query_posts( 'category_name=landing-pages' );

if ( have_posts() ) :
?>
<div class="homepage-section">
<h2><a href-"#">Topics</a></h2>

<?php
// Start the Loop.
while ( have_posts() ) : the_post();

if ($wp_query->current_post % 2 == 0) :
?>
<div class="grid-row">
<?php
endif;
?>
<div class="homepage-topic">
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

<?php the_excerpt(); ?>
</div>

<?php if ($wp_query->current_post % 2 == 0) : ?></div><?php endif; ?>

<?
endwhile;
endif;
?>
</div>

<?php get_footer(); ?>
