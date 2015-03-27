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
        
    aToZindex($myposts, 'A');
    aToZindex($myposts, 'B');
    aToZindex($myposts, 'C');
    aToZindex($myposts, 'D');
    aToZindex($myposts, 'E');
    aToZindex($myposts, 'F');
    aToZindex($myposts, 'G');
    aToZindex($myposts, 'H');
    aToZindex($myposts, 'I');
    aToZindex($myposts, 'J');
    aToZindex($myposts, 'K');
    aToZindex($myposts, 'L');
    aToZindex($myposts, 'M');
    aToZindex($myposts, 'N');
    aToZindex($myposts, 'O');
    aToZindex($myposts, 'P');
    aToZindex($myposts, 'Q');
    aToZindex($myposts, 'R');
    aToZindex($myposts, 'S');
    aToZindex($myposts, 'T');
    aToZindex($myposts, 'U');
    aToZindex($myposts, 'V');
    aToZindex($myposts, 'W');
    aToZindex($myposts, 'X');
    aToZindex($myposts, 'Y');
    aToZindex($myposts, 'Z');
    ?>                
  </article>

<?php
get_footer();
