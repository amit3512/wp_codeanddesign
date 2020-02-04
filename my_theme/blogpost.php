

<?php $args=array(
  'post_type'=>'blog post',
  'category_name'=>'blogpost',
  'post_status'=>'publish',
);


$infos=new WP_Query($args);?>



<div class="innerpage">
  <div class="blog_section">
    <div class="container">
      
        <ul class="row">
          <?php if ( $infos->have_posts() ) : while (  $infos->have_posts() ) :  $infos->the_post();?>
          <li class="blog_list col-sm-6 col-md-4">
            <div class="blog_image_column">
              <div class="blog_image">
                <!-- <?php $backgroundImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );?> -->
              <figure style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
                  <a href="#">
                    <img src="<?php bloginfo('template_url')?>/img/blog-size.png" alt="Blog Size">s
                  </a>
                </figure>
              </div>
              <time><?php the_title();?></time>
              <div class="blog_content_desc">
                <p><?php the_excerpt();?></p>
              </div>
              <a href="#" class="readmore_text">Read More <i class="fa fa-caret-right"></i></a>
            </div>
          </li>
          <?php endwhile; 
                   endif; ?>
        </ul>
  
    </div>
  </div>
</div>
<div>
      <div class="blog_post_viewall">
        <a href="<?php echo get_page_link(25); ?>" class="readmore" ;">View All</a>
      </div>
    </div>
  </section>

  
  <?php wp_reset_postdata();?>
