<?php get_header();?>

      <?php if (have_posts()) {
         while (have_posts()) {
            the_post();
            ?>
      <section class="innerpage_banner">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full">
                     <div class="page_title">
                        <div class="full heading_s1">
                           <h2><span><?php the_title();?></span></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2><?php //the_title();?></h2>
                  </div>
                  <div class="full">
                     <p class="large"><?php the_content();?></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

      <?php
         }
      }
      ?>
<?php get_footer();?>