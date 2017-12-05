<?php get_header(); ?>

<div class="container">
	<?php if (have_posts()) : ?>
		<div id="posts" class="col-md-4">
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<?php get_template_part('template-parts/post/content', get_post_format()); ?>
				</div>
				<hr/>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<div id="sidebar" class="col-md-offset-8">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>