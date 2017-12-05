<article <?php post_class(); ?> id="<?php the_ID(); ?>">
	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<h3>
		<?php the_author(); ?>
	</h3>

	<h4>
		<?php the_date("l, F j, Y"); ?>
	</h4>

	<div>
		<?php the_content(); ?>
	</div>
</article>