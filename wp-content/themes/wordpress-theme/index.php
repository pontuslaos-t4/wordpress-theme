<?php get_header(); ?>

<div class="row">
	<?php if (have_posts()) : ?>
		<div id="posts" class="col-md-4 col-md-offset-2">
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<?php get_template_part('template-parts/post/content', get_post_format()); ?>
				</div>
				<hr/>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<div id="sidebar-div" class="col-md-4 pull-right">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>