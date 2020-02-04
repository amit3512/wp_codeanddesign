<?php /* Template Name: Teams */ ?>
<?php get_header(); ?>
<?php $args=array(
  'post_type'=>'teams',
  'category_name'=>'team',
  'post_status'=>'publish',
);


$infos=new WP_Query($args);?>

<div class="clearfix"></div>
<!-- Why Choose Us Inner Page  Section Open -->
<div class="innerpage">
  <div class="our_team_innerpage">
    <div class="container">
      <div class="our_team_innerpage_inner">
        <ul class="row">
          <?php if ( $infos->have_posts() ) : while (  $infos->have_posts() ) :  $infos->the_post();?>
          <li class="col-lg-4">
            <figure>
                <?php echo the_post_thumbnail('small-thumbnail');?>
              <div style="background-image:url(https://demo.accesspressthemes.com/unicon-pro/unicon-lite/wp-content/uploads/sites/2/2016/08/z2.jpg);">
              
              </div>
              <figcaption>
                <span>Founder / CEO</span>
                <strong><?php the_title(); ?></strong>
                <p><?php the_excerpt(); ?> </p>
              </figcaption>
            </figure>
          </li>
          <?php endwhile; endif; ?>
                   
        </ul>
      </div>
    </div>
  </div>
</div>
<hr>


<?php wp_reset_postdata();?>
<?php wp_footer();?>