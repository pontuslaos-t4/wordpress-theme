<?php get_header(); ?>

<div class="row">
	<div class="single-post col-md-4 col-md-offset-2">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<h4>
						<?php the_title(); ?>
					</h4>

					<h7>
						<?php the_author(); ?>, <?php the_time(); ?> <?php echo get_the_date(); ?>
					</h7>

					<div class="post">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<div class="col-md-3 pull-right">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?> 	