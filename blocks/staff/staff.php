<section class="staff">
	<div class="contain">
		<div class="staffcont">
			<?php if( have_rows('staff') ): ?>
			<?php while( have_rows('staff') ): the_row();
				$image = get_sub_field('image');
				$name = get_sub_field('name');
				$degree = get_sub_field('degree');
			?>
			<div class="staffcont__row" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="450"   data-aos-offset="0">
				<div class="staffcont__row--image">
					<?php if( $image ) :?>
						<img src="<?php echo $image; ?>" />
					<?php endif; ?>
					
				</div>
				<div class="staffcont__row--datamember">
					<h2><?php echo $name; ?> </h2>
					<p><?php echo $degree; ?> </p>
				</div>
			</div>

			<?php endwhile; ?>
			<?php endif; ?>
	
		</div>
	</div>
</section>