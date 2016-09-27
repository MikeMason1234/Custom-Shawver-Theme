<?php
	
	if(get_row_layout() == 'text_area'):
		$content = get_sub_field('text_box');
		$bgColor = get_sub_field('bg_color');
		$bgImage = get_sub_field('bg_image');
		$bgRepeat = (get_sub_field('bg_repeat') == 1 ? 'repeat' : 'no-repeat; background-size:cover;');
		$customClass = get_sub_field('custom_class');
		$heightClass = (get_sub_field('auto_height') == 1 ? 'fp-auto-height' : '');
		$fullWidth = (get_sub_field('full_width') == 1 ? '-fluid' : '');
		$id = (get_sub_field('custom_id') != '' ? 'id="'.get_sub_field('custom_id').'"' : '');
		
?>
<section <?php echo $id; ?> class="section <?php echo $customClass; ?> <?php echo $heightClass; ?>" 
	<?php 	if(!empty($bgColor) && ($bgImage == '')){
				echo 'style="background-color:'.$bgColor.';">';
			} elseif(!empty($bgImage)){
				echo 'style="background:url('.$bgImage.') '.$bgRepeat.';">';	
			} else {
				echo '>';
			}	
	?>			
		
	<div class="container<?php echo $fullWidth; ?>">
		<div class="row">
			<div class="col-xs-12">
				<?php echo $content; ?>		
			</div>
		</div>
	</div>
</section>

<?php
	
	endif;
	
?>							