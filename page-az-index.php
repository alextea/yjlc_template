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

get_header(); ?>

<div class="grid-row">
  <article class="article column-two-thirds">
    <header><h1>All Topics</h1></header>

    <ul class="a-z-list">
      <?php
      foreach (range('A', 'Z') as $i)
      {
        $letter = strtoupper($i);
        echo "<li><a href='#$letter' >$i</a></li>";
      }
      ?>   
    </ul>

    <?php
    $args = array( 'posts_per_page' => 1000, 'orderby' => 'title', 'order' => 'ASC', 'category_name' => 'a-z' );
    
    $myposts = get_posts( $args );

    foreach (range('A', 'Z') as $i) {
        aToZindex($myposts, $i);
    }

    ?>                
  </article>
</div>
<?php
get_footer();
