<?php
get_header();
	if(have_posts()){
		while (have_posts()) {
			the_post(); ?>
			<article class="post">
			<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_content(); ?></p>
			</article>
		<?php } //endwhile;
	} //end if;
	else
		echo "No content found";

get_footer();
 ?>