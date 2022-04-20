<section class="slider-photos-container">
	<div class="contain-center">
		<div class="slider-photos">
				<?php if( have_rows('slider_photos') ): ?>
			<?php while( have_rows('slider_photos') ): the_row();
				$image_photo = get_sub_field('image_photo');
			?>
			<div class="cont-img">
				<img src="<?php echo $image_photo; ?>" />
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

</section>