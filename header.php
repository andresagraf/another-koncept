<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package another-koncept
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php the_field('script_seguimiento_header', 'option'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="masthead"></div>
<?php the_field('script_seguimiento_body', 'option'); ?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<?php 
			$changue_color_header = get_field('changue_color_header');
	?>

<header class="header <?php if( $changue_color_header == 'black' ) :?>	black<?php endif;?>">
	<div class="contain">
		<?php if( $changue_color_header == 'black' ) :?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('black_logo', 'option'); ?>"/></a>
		<?php elseif( $changue_color_header == 'white' ) :?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('white_logo', 'option'); ?>"/></a>		
		<?php endif;  ?>	
	  <input class="menu-btn" type="checkbox" id="menu-btn" />
	  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container_class' => 'menu',
			)
		);
		?>
  </div>
</header>

	<?php 
			$header_have_image_or_video = get_field('header_have_image_or_video');
			$header_image = get_field('header_image');
	?>
	<?php if( $header_have_image_or_video == 'yes' ) :?>
		<section class="hero">	
			<?php if (have_rows('header_image') ):?>
				<?php while( have_rows('header_image') ): the_row();
					$image_o_video = get_sub_field('image_o_video');
					$image = get_sub_field('image');
					$video = get_sub_field('video');
					$text = get_sub_field('text');
					$small_text = get_sub_field('small_text');
				?><h1>
					<?php echo $text; ?>
					<?php if( $small_text ) :?>
						<small><?php echo $small_text; ?></small>
					<?php endif;?>
				</h1>
					<?php if( $image_o_video == 'image' ) :?>
						<?php if( $image ) :?>
							<img class="img-cabecera" src="<?php echo $image; ?>" />
						<?php endif;?>
						<?php elseif( $image_o_video == 'video' ) :?>
							<?php if( $video ) :?>
							<div class="video-background">
							<!-- Youtube -->
								<video class="video" src="<?php echo $video; ?>" autoplay="" muted="" loop="" playsinline="">	</video>
							</div>
							<?php endif;?>	
					<?php endif;?>	
				<?php endwhile;?>
			<?php endif;?>
		</section>
	<?php else	:?>		
	<section class="herotitle">
		<div class="herotitle__contain">
		<?php the_title( '<h1>', '</h1>' ); ?>
		</div>
	</section>
	<?php endif;?>		
