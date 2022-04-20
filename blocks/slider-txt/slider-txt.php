
<?php
// Get slidertxt
					$link_slider_txt = get_field('link_slider_txt');
?>
<section class="slider-txt-container">
	<div class="contain">
		<div class="slider-txt-container__cross">
			<img src="<?php echo get_template_directory_uri(); ?>/img/cross.svg" />
		</div>
			<div class="slider-txt">
					<?php if( have_rows('slider_txt') ): ?>
				<?php while( have_rows('slider_txt') ): the_row();
					$title = get_sub_field('title');
					$testimony = get_sub_field('testimony');
					$name = get_sub_field('name');
					$degree = get_sub_field('degree');
				?>
					<div>
						<div class="slider-txt__testimony">
							<?php if ($title) : ?>
								<h3><?php echo $title; ?> </h3>
							<?php endif; ?>	
							<?php echo $testimony; ?> 
						</div>
						<div class="slider-txt__name">
							<?php echo $name; ?> 
						</div>
						<div class="slider-txt__degree">
							<?php echo $degree; ?> 
						</div>
					</div>
				<?php endwhile; ?>
						<?php endif; ?>
			</div>
		<?php if ($link_slider_txt) :
			$link_url_slider_txt = $link_slider_txt['url'];
			$link_target_slider_txt = $link_slider_txt['target'] ? $link_slider_txt['target'] : '_self';
			$link_title_slider_txt = $link_slider_txt['title'];
		?>
			<a href="<?php echo esc_url( $link_url_slider_txt ); ?>" class="slider-txt-container__link" target="<?php echo esc_attr( $link_target_slider_txt ); ?>">
				<?php echo esc_html( $link_title_slider_txt ); ?>
			</a>
		<?php endif; ?>	
	</div>
</section>