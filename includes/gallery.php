<?php
	
	if(get_row_layout() == 'gallery'):
	$gallery = get_sub_field('page_gallery');
	$bgColor = (get_sub_field('bg_color') != '' ? 'style="background-color:'.get_sub_field('bg_color').';"' : '');
	$heightClass = (get_sub_field('auto_height') == 1 ? 'fp-auto-height' : '');
	$content = get_sub_field('content');
	$title = get_sub_field('title');
	$id = (get_sub_field('custom_id') != '' ? 'id="'.get_sub_field('custom_id').'" ' : '');

?>
<section <?php echo $id; ?> class="section <?php echo $heightClass; ?>" <?php echo $bgColor; ?>>
	<div class="container">
		<div class="row gallery-title">
			<div class="col-xs-12">
					<h2 class="text-center"><?php echo $title; ?></h2>
				</div>
			</div>	
				<div class="row gallery-images">
					<div class="col-xs-12">	
						<div class="row">
<?php
	
$i=1;	
		if($gallery):
			foreach($gallery as $gallery):	
?>		
				<div class="col-md-3">
					<div class="lightbox-container">
					<a class="image-lightbox" href="<?php echo $gallery['url']; ?>" data-lightbox="image-<?php echo $i; ?>" style="background:url(<?php echo $gallery['url']; ?>) no-repeat center center;background-size: cover;"></a>
					</div>
				</div>		
<?php
$i++;
		 	endforeach;		 	 	
		endif;


endif;	
?>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="gallery-content">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div><!--end container-->
</section>
							