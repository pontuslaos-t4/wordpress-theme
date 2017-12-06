<?php get_header(); ?>

<div class="row">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="page col-md-4 col-md-offset-2">
				<div class="row">
					<h4>
						<?php the_title(); ?>
					</h4>

					<span>
						<?php the_author(); ?>
					</span>

					<div>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="col-md-4 pull-right">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>