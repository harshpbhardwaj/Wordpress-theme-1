<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title><?php echo get_bloginfo("name");?></title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href='<?php echo get_bloginfo("stylesheet_directory");?>/images/fevicon.png' type="image/png" />
<?php wp_head();?>
  
   </head>
   <body id="home_page" class="home_page">
   
      <header class="header">
      <?php
         $logo = get_bloginfo('stylesheet_directory')."/images/logo.png";

         $custom_logo_id = get_theme_mod('custom_logo');
         $img = wp_get_attachment_image_src($custom_logo_id, 'full');
         if (has_custom_logo()) {
            $logo = esc_url($img[0]);
         }
      ?>
    <div class="header_top_section">
       <div class="container">
          <div class="row">
           <div class="col-lg-3">
              <div class="full">
                 <div class="logo">
                    <a href='home'><img src='<?php echo $logo;?>' alt="#" /></a>
                 </div>
              </div>
           </div>
           
        </div>
       </div>
    </div>

    <div class="header_bottom_section">

     <div class="container">
        
       <div class="row">
           <div class="col-md-12">
              <div class="full ">
                 <div class="main_menu">
                    <nav class="navbar navbar-inverse navbar-toggleable-md">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="float-left">Menu</span>
                       <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                       </button>
                       <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                          <ul class="navbar-nav">
                             <?php
                               wp_nav_menu(array(
                                  'menu' => 'primary-menu',
                                  'container' => '',
                                  'items_wrap' => '<li class="nav-item">
                                  %3$s
                               </li>'
                               ));
                             ?>
                          </ul>
                       </div>
                    </nav>
                 </div>
                 
              </div>
           </div>
        </div>
     </div>
  </header>