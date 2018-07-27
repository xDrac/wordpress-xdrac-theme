  <footer class="site-footer">
<!-- CONTENT GOES HERE -->
  <nav class="site-nav">
    <?php
    $args = array(
        'theme_location' => 'footer'
    );
    ?>
    <?php wp_nav_menu(  $args ); ?>
  </nav>

      <p><?php bloginfo('name')?> - &copy; <?php echo date('Y');?></p>

  </footer>

</div><!-- body container -->

<?php wp_footer(); ?>

</html>
</body>
