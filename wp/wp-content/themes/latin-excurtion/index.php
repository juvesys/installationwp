<?php get_header(); ?>
  
  
  
  <div class="blog-section1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          <ul>
            <li class="tesoro-logo">
              <a href="javascript:;">
                <img src="<?php bloginfo('template_directory') ?>/images/img-el-tesoro.png">
              </a>
              <div class="search-form">
                <form class="form-searching" method="post">
                  <div>
                    <input class="search-input" type="text" name="search" placeholder="Search Articles"><button type="submit"><i class="fa fa-search button-search"></i></button>
                  </div>
                </form>
              </div>
            </li>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="post">
              <a href="javascript:;">
                <div class="image-container img-journey">
                  <img src="<?php bloginfo('template_directory') ?>/images/las_iguanas.jpg">
                </div>
                <div class="info-container">
                  <div class="country"><?php the_title(); ?></div>
                  <div class="title">Not-to-Miss Attractions on Santa Cruz Island, Galapagos</div>
                  <div class="summary">The walk to Tortuga Bay can be a steamy challenge, so it is best to get there earlier in the day. Along the way, try spotting the many small lizards that dash back and ...</div>
                  <div class="viewDetails">
                    <img src="<?php bloginfo('template_directory') ?>/images/icon-view-more-gray.png">
                  </div>
                </div>
              </a>
            </li>
           <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          </ul>  
        </div>
    </div>
  </div>
  </div>
  
 
 <?php get_footer(); ?>