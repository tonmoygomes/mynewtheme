<?php
get_header();
	if(have_posts()){
		while (have_posts()) {
			the_post(); ?>
			<article class="post">
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			</article>
		<?php } //endwhile;
	} //end if;
	else
		echo "No content found";

get_footer();
 ?>