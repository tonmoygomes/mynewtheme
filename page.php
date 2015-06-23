<?php get_header(); ?>

<div class="content-wrapper">
	<div class="sidebar page-sidebar">
  <?php dynamic_sidebar('page-sidebar'); ?>
	</div><!-- /.sidebar.page-sidebar -->
	<div class="main">
		<?php

		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
			
			<article class="post page">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			</article>
			
			<?php endwhile;
			
			else :
				echo '<p>No content found</p>';
			
			endif;
		?>
	</div><!-- /.main -->
</div><!-- /.content-wrapper -->
<?php get_footer(); ?>