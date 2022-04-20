<?php
	$link_ak = get_field('link');
?>

<section class="buttonak">
	<?php if ($link_ak) :
		$link_url_slider_ak = $link_ak['url'];
		$link_target_slider_ak = $link_ak['target'] ? $link_ak['target'] : '_self';
		$link_title_slider_ak = $link_ak['title'];
	?>
		<a href="<?php echo esc_url( $link_url_slider_ak ); ?>" class="buttonak__link" target="<?php echo esc_attr( $link_target_slider_ak ); ?>">
			<?php echo esc_html( $link_title_slider_ak ); ?>
		</a>
	<?php endif; ?>	
</section>