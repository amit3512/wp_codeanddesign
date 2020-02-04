<section class="test_preparation" style="background-image:url(<?= get_template_directory_uri(); ?>/img/test-preparation.jpg);position:relative;">

<?php $args=array(
  'post_type'=>'post',
  'category_name'=>'test preparation classes',
  'post_status'=>'publish',
);


$infos=new WP_Query($args);?>
<?php if ( $infos->have_posts() ) : while (  $infos->have_posts() ) :  $infos->the_post();?>

  <div id="particles-js"></div>
  <div class="container" style="position:relative;z-index:4;">
    <div class="test_preparation_heading">
      <h2 class="section_title"><span class="small"><?php echo get_field('title_first')?></span><?php the_field('title_second')?></h2>
    </div>
    <div class="clearfix"></div>
    <div class="test_preparation_list">
      <ul>
        <li><span><figure><img src="<?php echo get_field('logo')['url'];?>" alt=""></figure></span></li>
        <li><span><figure><img src="<?php echo get_field('logo1')['url']?>" alt=""></figure></span></li>
        <li><span><figure><img src="<?php bloginfo('template_url');?>/img/test-preparation/sat.png" alt=""></figure></span></li>
        <li><span><figure><img src="<?php bloginfo('template_url');?>/img/test-preparation/pte.png" alt=""></figure></span></li>
        <li><span><figure><img src="<?php bloginfo('template_url');?>/img/test-preparation/gre.png" alt=""></figure></span></li>
        <li><span><figure><img src="<?php bloginfo('template_url');?>/img/test-preparation/gmat.png" alt=""></figure></span></li>
      </ul>
    </div>
  </div>
<?php endwhile;endif;?>
</section>