<form role="search" method="get" action="<?php home_url('/'); ?>">
	<div class="input-group stylish-input-group">
		<input type="search" class="form-control" placeholder="Sök..." value="<?php echo get_search_query(); ?>" name="s" title="Search" />
		<span class="input-group-addon">
			<button type="submit" class="searchbutton">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
	</div>
</form>