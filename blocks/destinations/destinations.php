<section class="destinations">
	<div class="destinations__contain">
		<div class="destcont">
			<?php if( have_rows('destinations') ): ?>
			<?php while( have_rows('destinations') ): the_row();
				$image_city = get_sub_field('image_city');
				$city = get_sub_field('city');
				$slogan = get_sub_field('slogan');
				$link_page = get_sub_field('link_page');
			?>
			<?php if ($link_page) :
				$link_url_slider_txt = $link_page['url'];
				$link_target_slider_txt = $link_page['target'] ? $link_page['target'] : '_self';
				$link_title_slider_txt = $link_page['title'];
			?>
			<a href="<?php echo esc_url( $link_url_slider_txt ); ?>" class="destcont__row" target="<?php echo esc_attr( $link_target_slider_txt ); ?>">			
						<?php if( $image_city ) :?>
							<img src="<?php echo $image_city; ?>" />
						<?php endif; ?>
					<div class="destcont__row--city">
						<h2><?php echo $city; ?> </h2>
						<p><?php echo $slogan; ?> </p>
					</div>
			</a>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>