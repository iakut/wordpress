<?php
	if( have_rows('parent_var') ) { 
		while( have_rows('parent_var') ) : the_row();
<<<<<<< HEAD
			$child_var = get_sub_field('child_var'); // field 
=======
			$child_var = get_sub_field('child_var');
>>>>>>> 5a5fccea2a21d7f93951f04d89c4ec7badada069
		endwhile;
	}
?>
