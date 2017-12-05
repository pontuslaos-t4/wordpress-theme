<article <?php post_class(); ?> id="<?php the_ID(); ?>">
	<h7> <?php the_time(); ?>  <?php echo get_the_date(); ?> </h7>
	<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
	<div class="content-div"> <?php the_content(); ?> </div>
</article>