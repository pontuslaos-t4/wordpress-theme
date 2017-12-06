<?php get_header(); ?>

<div class="page">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div>
				<h1>
					<?php the_title(); ?>
				</h1>

				<p>
					<?php the_content(); ?>
				</p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>