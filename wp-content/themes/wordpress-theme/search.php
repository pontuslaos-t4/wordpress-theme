<?php get_header(); ?>

<div class="row">
	<?php if (have_posts()) : ?>
		<div id="posts" class="col-md-4">
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<?php get_template_part('template-parts/post/content', 'search'); ?>
				</div>
				<hr/>
			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<div>
			No posts found!
		</div>
	<?php endif; ?>

	<div class="col-md-4"></div>

	<div id="sidebar" class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>