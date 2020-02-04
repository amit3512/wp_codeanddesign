
<?php get_header();?>
<p>

<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php the_time('F j,Y g:i a');?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> -Posted on 
<?php 
$categories=get_the_category();
$seperator=",";
$output='';
if($categories){
foreach($categories as $category) {
	$output.=$category->cat_name.$seperator;

}
}
echo $output;
?>
<?php endwhile; 
endif; ?>

</p>
<?php get_footer();?>






