<?php
	if( have_rows('parent_var') ) { 
		while( have_rows('parent_var') ) : the_row();
			$child_var = get_sub_field('child_var'); // field
		endwhile;
	}
?>
