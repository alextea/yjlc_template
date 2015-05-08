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
          <p class="acknowledgement">The Youth Justice Legal Centre is brought to you by <a href="#">Just for Kids Law</a>. Thanks to our funders Esmée Fairbairn Foundation, Mark Leonard Trust, Legal Education Foundation, Network for Social Change.</p>

          <p>The content of this website represents the interpretation of the law in England and Wales by the Youth Justice Legal Centre. YJLC aims to be legally accurate, it should not replace independent legal advice. YJLC cannot take responsibility for the accuracy of external websites.</p>

          <p>Youth Justice Legal Centre, 180 North Gower Street, London NW1 2NB</p>
          
          <p>&copy;Youth Justice Legal Centre 2015. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/cookies.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/cookie-bar.js"></script>

  <?php wp_footer(); ?>
</body>
</html>
