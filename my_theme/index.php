<?php get_header();?>

<p>

	<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
		<?php the_post_thumbnail();?>
		<?php the_content('Continue Reading &raquo;'); ?>
		
		<?php the_time('F j,Y g:i a');?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> -Posted on 
		<?php 
		$categories=get_the_category();
		$seperator=",";
		$output='';
		if($categories){
			foreach($categories as $category) {
				$output.='<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$seperator;

			}
		}
		echo trim($output,$seperator);
		?>
	<?php endwhile; 
endif; ?>

</p>





<?php get_footer(); ?>



