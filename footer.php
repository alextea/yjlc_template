<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
    </main>

    <footer id="footer">
      <div class="footer-wrapper">
        <div class="grid-row">
          <div class="column-two-thirds">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer_menu',
                'menu_class' => 'footer-links' )
              );
            ?>
          </div>
        </div>
        
        <div class="text">
          <?php 
            $pageID = 1516;
            $page = get_page($pageID);
            echo($page->post_content);
          ?>
        </div>
      </div>
    </footer>
  </div>


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/cookies.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/cookie-bar.js"></script>

  <?php wp_footer(); ?>
</body>
</html>
