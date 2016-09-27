<?php 
	
	if(get_row_layout() == 'slider'):
	$slider = get_sub_field('page_slider');
	$id = (get_sub_field('custom_id') != '' ? 'id="'.get_sub_field('custom_id').'"' : '');
		
?>		
<section <?php echo $id; ?> class="section">
	<div class="row">
		<div class="col-xs-12">
<?php
		if($slider):
			foreach($slider as $slider):
?>					
				<div class="slide" style="background:url(<?php echo $slider['url']; ?>) no-repeat center center;background-size:cover;"></div>
<?php
			endforeach;
		endif;
	endif;	
?>				
		</div>
	</div>
</section>					
	