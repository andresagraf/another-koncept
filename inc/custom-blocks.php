<?php
/**
 * Custom Blocks Definition
 */


/**
 * Create Another blocks category
 */
function another_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'another-blocks',
				'title' => __( 'another Blocks', 'another-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'another_block_category', 10, 2);



/**
 * Custom Blocks Definition (using ACF Blocks)
 */
add_action('acf/init', 'conelsur_custom_blocks_acf');
function conelsur_custom_blocks_acf()
{
	// check function exists
	if (function_exists('acf_register_block_type')) {

			
		// Register Responsive Bar content videos Block
		acf_register_block_type(array(
			'name' => 'bar-content-videos',
			'title' => __('Bar content videos','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'format-video',
			'keywords' => array('barcontentvideos'),
			'render_template' => '/blocks/bar-content-videos/bar-content-videos.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'bar-content-videos', get_template_directory_uri() . '/blocks/bar-content-videos/bar-content-videos.css', array(), '1.0.0' , false );
			},
		));
		// Register Responsive Bar content marquee Block
		acf_register_block_type(array(
			'name' => 'city-marquee',
			'title' => __('City Marquee','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'text',
			'keywords' => array('citymarquee'),
			'render_template' => '/blocks/city-marquee/city-marquee.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'city-marquee', get_template_directory_uri() . '/blocks/city-marquee/city-marquee.css', array(), '1.0.0' , false );
			},
		));		
		// Register Responsive Bar content slide-txt Block
		acf_register_block_type(array(
			'name' => 'slider-txt',
			'title' => __('Slider txt','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'slides',
			'keywords' => array('slider-txt'),
			'render_template' => '/blocks/slider-txt/slider-txt.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'slider-txt', get_template_directory_uri() . '/blocks/slider-txt/slider-txt.css', array(), '1.0.0', false );
				wp_enqueue_style( 'slider-txtb', get_template_directory_uri() . '/blocks/slider-txt/slick/slick.css', array(), '1.0.0', false  );
				wp_enqueue_script( 'slider-txta', get_template_directory_uri() . '/blocks/slider-txt/slick/slick.min.js', array(), ''   );
				wp_enqueue_script( 'slider-txtc', get_template_directory_uri() . '/blocks/slider-txt/slider-txt.js', array(), '' );
			},
		));
		// Register Responsive Bar content staff Block
		acf_register_block_type(array(
			'name' => 'staffac',
			'title' => __('Staff','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'businessperson',
			'keywords' => array('staff'),
			'render_template' => '/blocks/staff/staff.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'staff', get_template_directory_uri() . '/blocks/staff/staff.css', array(), '1.0.0', false );
			},
		));
		// Register Responsive Bar content staff Block
		acf_register_block_type(array(
			'name' => 'destinations',
			'title' => __('Destinations','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'admin-site',
			'keywords' => array('destinations'),
			'render_template' => '/blocks/destinations/destinations.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'destinations', get_template_directory_uri() . '/blocks/destinations/destinations.css', array(), '1.0.0', false );
			},
		));
		acf_register_block_type(array(
			'name' => 'slider-photos',
			'title' => __('Slider photos','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'slides',
			'keywords' => array('slider-photos'),
			'render_template' => '/blocks/slider-photos/slider-photos.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'slider-photos', get_template_directory_uri() . '/blocks/slider-photos/slider-photos.css', array(), '1.0.0', false );
				wp_enqueue_style( 'slider-photosb', get_template_directory_uri() . '/blocks/slider-photos/slick/slick.css', array(), '1.0.0', false  );
				wp_enqueue_script( 'slider-photosa', get_template_directory_uri() . '/blocks/slider-photos/slick/slick.min.js', array(), ''   );
				wp_enqueue_script( 'slider-photosc', get_template_directory_uri() . '/blocks/slider-photos/slider-photos.js', array(), '' );
			},
		));
		acf_register_block_type(array(
			'name' => 'button',
			'title' => __('Button AK','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'button',
			'keywords' => array('button-ak'),
			'render_template' => '/blocks/button-ak/button-ak.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'buttonak', get_template_directory_uri() . '/blocks/button-ak/button-ak.css', array(), '1.0.0', false );
			},
		));
		acf_register_block_type(array(
			'name' => 'customers',
			'title' => __('Clients- AK','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'button',
			'keywords' => array('customers-ak'),
			'render_template' => '/blocks/customers/customers.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'customers', get_template_directory_uri() . '/blocks/customers/customers.css', array(), '1.0.0', false );
			},
		));
		acf_register_block_type(array(
			'name' => 'contactak',
			'title' => __('Contact - AK','another'),
			'description' => __('Displays last documents'),
			'category' => 'another-blocks',
			'icon' => 'button',
			'keywords' => array('contact-ak'),
			'render_template' => '/blocks/contactak/contactak.php',
			'enqueue_assets' => function(){
				wp_enqueue_style( 'contactak', get_template_directory_uri() . '/blocks/contactak/contactak.css', array(), '1.0.0', false );
			},
		));		
	}
}
