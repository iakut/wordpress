<?php
	if( have_rows('parent_var') ) { 
		while( have_rows('parent_var') ) : the_row();
<<<<<<< HEAD
			$child_var = get_sub_field('child_var'); // field 
||||||| merged common ancestors
			$child_var = get_sub_field('child_var'); // field
=======
			$child_var = get_sub_field('child_var');
>>>>>>> 2eabfeb714f699ed497ea69df7f97ea68f3bfb6a
		endwhile;
	}
?>
