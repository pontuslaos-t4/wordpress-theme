<?php get_header(); ?>

<div class="row">
	<?php if (have_posts()) : ?>
		<div id="posts" class="col-md-4 col-md-offset-2">
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<?php get_template_part('template-parts/post/content', get_post_format()); ?>
					<div class="author-info-div center">
						<p>
							Skrivet av <?php the_author_link(); ?> den <?php echo get_the_date(); ?> kl <?php the_time(); ?>
						</p>
					</div>
				</div>
				<hr/>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<div class="nav-previous alignleft">
		<?php next_posts_link('Äldre inlägg'); ?>
	</div>

	<div class="nav-next alignright">
		<?php previous_posts_link('Nyare inlägg'); ?>
	</div>

	<div id="sidebar-div" class="col-md-3 pull-right">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>