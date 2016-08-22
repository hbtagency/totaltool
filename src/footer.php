<footer class="full-width">
    <nav class="container">
        <a href="<?php echo get_site_url(); ?>"><img class="img-responsive footer_logo inline-block col-sm-2 hidden-xs" src="<?php echo get_site_url(); ?>/img/logo.png"/></a>
        <span class="footer_copyright inline-block col-sm-10 col-xs-12"/>
            <p>© 2016 Total Tools. All Rights Reserved.  <a href="<?php echo get_site_url(); ?>/index.php/terms-and-conditions/" data-toggle="modal" data-target="#terms_conditions">Terms & Conditions</a> Apply. Click 
            <a href="<?php echo get_site_url(); ?>/index.php/faq/">Here</a> 
            For More Information. Privacy Policy <a href="#" data-toggle="modal" data-target="#privacy">Available Here</a></p>
        </span>

        <!--
            <?php //wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'menu-footer', 'menu_class' => 'menu-inline' ) ); ?>
        -->
    </nav>
</footer>
  <?php wp_footer(); ?>
  </body>
</html>