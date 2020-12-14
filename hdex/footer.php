<?php
         $logo = get_bloginfo('stylesheet_directory')."/images/logo.png";

         $custom_logo_id = get_theme_mod('custom_logo');
         $img = wp_get_attachment_image_src($custom_logo_id, 'full');
         if (has_custom_logo()) {
            $logo = esc_url($img[0]);
         }
      ?>
<footer class="footer layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-3 col-sm-12">
             <a href="home"><img class="img-responsive" src='<?php echo $logo;?>' alt="#" /></a>
          </div>

          
       </div>
    </div>
 </footer>
<?php wp_footer();?>
</body>
</html>