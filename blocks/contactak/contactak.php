<?php
	$background_image = get_field('background_image');
	$title = get_field('title');
	$direction = get_field('direction');
	$phones = get_field('phones');
	$email = get_field('email');
?>

<section class="contactak">
	<div class="background_contact">
		<img src="<?php echo $background_image; ?>" />
		<div class="content-contactak">
			<h1><?php echo $title; ?></h1>
			<div class="content-contactak__fact direction"><?php echo $direction; ?></div>
			<div class="content-contactak__fact phones"><?php echo $phones; ?></div>
			<div class="content-contactak__fact email"><?php echo $email; ?></div>
		</div>		
	</div>
</section>
	
