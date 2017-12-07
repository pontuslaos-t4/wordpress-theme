<article <?php post_class(); ?> id="<?php the_ID(); ?>">
	<?php if (has_post_thumbnail()) : ?>
		<div class="row">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="title-div">			
			<h4> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a> 
			</h4>
		</div>
		
		<div class="content-div"> 
			<p>
				<?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Läs mer...</a>
			</p>
		</div>
	</div>
</article>