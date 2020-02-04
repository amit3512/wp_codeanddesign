
<?php get_header();?>



<div class="clearfix"></div>
<!-- ABOUT US HTML OPEN -->

<section class="about_us">
  <div class="container">
    <div class="about_us_inner">
      <div class="about_us_content" >
        <h2 class="about_us_title" ><span class="small"><?php  the_field('title'); ?></span><?php  the_field('big_title'); ?></h2>
        <div class="clearfix"><img src="<?php   echo get_field('image')['url']; ?>"></div>
        <div class="about_us_desc">
        	<p><?php  the_field('content')?> </p>
        <div class="clearfix"></div>
        <a href="#" class="readmore">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'info.php'?>
<?php include 'front_page_test_preparation_classes.php'?>
<?php include 'abroad-study.php'?>
<?php include 'testimonial.php'?>
<?php include 'blogpost.php'?>



<?php get_footer();?>

<!-- check for arrays -->      
<!-- <?php echo '<pre>';
print_r(get_field('image'));
echo '</pre>';
die();
?> -->
 


