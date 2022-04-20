<?php
	$selector = get_field('selector_columns_clients');
?>
    <section class="clients">
		<?php if( have_rows('clients', 'option') ): ?>
			<div class="clientslist <?php echo $selector; ?>">
				<?php while( have_rows('clients', 'option') ): the_row(); 
					$logotype = get_sub_field('logotype');
				?>	
				<div class="cont-img">				
					<img src="<?php echo $logotype; ?>" class="" />
				</div>				
				<?php endwhile; ?>
			</div>
		<?php endif; ?>			
	</section>