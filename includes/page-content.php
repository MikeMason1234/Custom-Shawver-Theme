<?php
	
	if(have_rows('page_content')):
	
		while(have_rows('page_content')): the_row();
		
			if(get_row_layout() == 'text_area'):
				require('text-area.php');
			endif;
			
			if(get_row_layout() == 'gallery'):
				require('gallery.php');
			endif;
			
			if(get_row_layout() == 'slider'):
				require('slider.php');
			endif;		
			
		endwhile;
		
	endif;
	
?>				
				