<?php if( have_rows('marquee') ): ?>
    <marquee class="marquee-city">
    <?php while( have_rows('marquee') ): the_row(); 
        $city_name = get_sub_field('city_name');
        ?>
		  <span><?php echo $city_name; ?></span>
		
    <?php endwhile; ?>
    	</marquee>
<?php endif; ?>	
	
