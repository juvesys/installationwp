
<html >
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

  
    <!--/**********************script de Jwplayer*****************************************/-->
     <script src="http://jwpsrv.com/library/pd5b8GvGEeKVOiIACp8kUw.js"></script>
     <script>jwplayer.key="GkHt2vyJj6DDT5QI4s6esK9rdJSQ006rGOkPaA==";</script>
<!--/**********************************************************************************-->
  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<?php wp_head();?>
</head>
<body>
  <div class="contenedor container">
    <div class="row">
      <div class="cabezera">                
        <nav class="navbar navbar-default">
        <div class="cont-nav-bar container">
          <div class="row">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                
                
            </div>
            <div class="container">
              <div class="cont-nav col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
              <div class="col-sm-8 col-md-8 col-lg-8">
                  <div class="cont-logo col-sm-2 col-md-2 col-lg-2">
                    <img class="logo"  src="<?php bloginfo('template_directory') ?>/images/logo.png">
                  </div>
                  <div class="col-sm-10 col-md-10 col-lg-10">
                    <div class="text-logo"><span class="text-logo1">LATIN</span> <span class="text-logo2">EXCURSIONS</span></div>
                    <div class="collapse navbar-collapse menu "   id="bs-example-navbar-collapse-1">
                      <?php 
                      $defaults = array(
                        'theme_location' => 'principal-menu',
                        //'menu'           => '',
                        'container'      => 'false',
                        'menu_class'=> 'nav navbar-nav'
                        /*'container_id'   => 'menu',
                        'echo'           => true,
                        'fallback_cb'    => 'wp_page_menu',
                        'before'         => '',
                        'after'          => '',
                        'link_before'    => '',
                        'link_after'     => '',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 0,
                        'walker'         => ''*/
                        );
                      wp_nav_menu($defaults);
                      ?>
                 
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="logo2 col-sm-6 col-md-6 col-lg-6">
                    <img src="<?php bloginfo('template_directory') ?>/images/tesoro.png">
                    <span><a href="<?php echo esc_url( home_url( '/Blog' ) ); ?>">OUR TRAVEL BLOG</a></span>
                  </div>
                  <div class="buton-contact col-sm-6 col-md-6 col-lg-6">
                    <img src="<?php bloginfo('template_directory') ?>/images/img-contact.png">
                    <span><a href="">CONTACT </a></span><span class="chevron-up"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
                    <div class="call"><a href=""><i class="fa-phone fa"></i>REQUEST CALL</a></div>
                    <div class="red-social">
                      <ul>
                        <li><a href="" ><i class="fa-twitter fa"></i></a></li>
                        <li><a href="" ><i class="fa-facebook fa"></i></a></li>
                        <li><a href="" ><i class="fa-vimeo-square fa"></i></a></li>
                        <li><a href="" ><i class="fa-pinterest fa"></i></a></li>
                        <li><a href="" ><i class="fa-instagram fa"></i></a></li>
                      </ul>
                    </div>
                  </div> 
                </div>
            </div>
            </div>
            
                
          </div>

        </div>

        </div>
      </nav>
   </div>