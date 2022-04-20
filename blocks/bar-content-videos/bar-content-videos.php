
<?php

// Get 3 latest videos
	$title = get_field('title');
	$text = get_field('text');
	$link = get_field('link');
	$video_or_image = get_field('video_or_image');
	$image_bar = get_field('image');
	$youtube_id = get_field('youtube_id');
	
?>
	<div class="video-bar-container" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"   data-aos-offset="0">
		<div class="columna-txt">
			<h2><?php echo $title ?> </h2>
			<p><?php echo $text ?></p>
			<?php if ($link) :
				$link_url = $link['url'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				$link_title = $link['title'];
			?>
				<a href="<?php echo esc_url( $link_url ); ?>" class="link-canaletico" target="<?php echo esc_attr( $link_target ); ?>">
					<?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>		
		</div>
		<?php if( $video_or_image == 'video' ) :?>
			<div class="video-background">
				<video class="video" src="<?php echo $youtube_id; ?>" autoplay="" muted="" loop="" playsinline="">	</video>
			</div>
		<?php else :?>
		<div class="image-background">
			<img class="img-bar" src="<?php echo $image_bar; ?>" />
		</div>
		<?php endif;?>	
	</div>