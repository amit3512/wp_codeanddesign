
<?php $args=array(
'post_type'=>'abroad study',
'category_name'=>'abroad study',
'post_status'=>'publish',
);


$infos=new WP_Query($args);?>
  


<div class="clearifx"></div>
<!--ABROAD STUDIES HTML OPEN -->
<section class="abroad_studies">
  <div class="container">
    <h2 class="section_title"><span class="small">Abroad Studies</span>Countries we offer</h2>
    <div class="clearfix"></div>
    <ul class="row">
      <?php if ( $infos->have_posts() ) : while (  $infos->have_posts() ) :  $infos->the_post();?>
      <li class="col-sm-6">
        <a href="#">
          <figure style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')"><img src="<?php bloginfo('template_url')?>/img/study-abroad-size.png" alt="abroad studies image dimension"></figure>
          <h4><?php the_title();?></h4>
        </a>
      </li>
      <?php endwhile; 
    endif; ?>
    </ul>
  </div>
</section>

 <?php wp_reset_postdata();?>
