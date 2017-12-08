<article <?php post_class(); ?> id="<?php the_ID(); ?>">
	<div class="container-fluid">
		<div class="row">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>
		
		<div class="row">
			<h4> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a> 
			</h4>
		</div>
			
		<div class="row"> 
			<?php the_excerpt(); ?> 
			<a href="<?php the_permalink(); ?>">Läs mer...</a>
		</div>
	</div>
</article>