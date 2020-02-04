

<?php $args=array(
  'post_type'=>'post',
  'category_name'=>'info',
  'post_status'=>'publish',
);


$infos=new WP_Query($args);?>


  <section class="our_services">
    <div class="container">
      <ul class="row">
        <?php if ( $infos->have_posts() ) : while (  $infos->have_posts() ) :  $infos->the_post();?>
        <li class="col-md-3 col-sm-6 equal_height">
          <div class="services_list">
            <div class="services_image_column">
              <div class="services_image">
               
               <figure>
                <a href="#">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                </a>
              </figure>
            </div>
            <div class="clearfix"></div>
            <h3><a href="<?php the_permalink();?>"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
            <div class="clearfix"></div>
            <div class="services_content_desc">
              <?php the_content();?>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile; 
                   endif; ?>
    </ul>
  </div>
</section>
        <!-- <li class="col-md-3 col-sm-6 equal_height">
          <div class="services_list">
            <div class="services_image_column">
              <div class="services_image">
                <figure>
                  <a href="#">
                    <img src="img/services/university.svg" alt="">
                  </a>
                </figure>
              </div>
              <div class="clearfix"></div>
              <h3><a href="#">Country & University</a></h3>
              <div class="clearfix"></div>
              <div class="services_content_desc">
                Our mission is to avail the best quality products in time and be on the top among the suppliers of the concerned products. Moreover, we are committed to excellence indelivery of longlasting products.
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-6 equal_height">
          <div class="services_list">
            <div class="services_image_column">
              <div class="services_image">
                <figure>
                  <a href="#">
                    <img src="img/services/visa-preparation.svg" alt="Our Services Size">
                  </a>
                </figure>
              </div>
              <div class="clearfix"></div>
              <h3><a href="#">Visa Preparation</a></h3>
              <div class="clearfix"></div>
              <div class="services_content_desc">
                Our mission is to avail the best quality products in time and be on the top among the suppliers of the concerned products. Moreover, we are committed to excellence indelivery of longlasting products.
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-3 col-sm-6 equal_height">
          <div class="services_list">
            <div class="services_image_column">
              <div class="services_image">
                <figure>
                  <a href="#">
                    <img src="img/services/pre-departure.svg" alt="Our Services Size">
                  </a>
                </figure>
              </div>
              <div class="clearfix"></div>
              <h3><a href="#">Pre-Departure</a></h3>
              <div class="clearfix"></div>
              <div class="services_content_desc">
                Our mission is to avail the best quality products in time and be on the top among the suppliers of the concerned products. Moreover, we are committed to excellence indelivery of longlasting products.
              </div>
            </div>
          </div>
        </li> -->
     


<?php wp_reset_postdata();?>

