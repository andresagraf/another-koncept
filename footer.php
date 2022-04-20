<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package another-koncept
 */
	$link_terms_esp = get_field('link_legal_terms_esp', 'option');
	$link_terms_eng = get_field('link_legal_terms_eng', 'option');
?>

	<footer id="colophon" class="site-footer">
		<div class="contain">
			<div class="grid-footer">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php the_field('logotipo_footer', 'option'); ?>"/>				
				</a>
				<div class="content-menu-social">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container_class' => 'menu-footer',
						)
					);
					?>
					<div class="socialak">
						<?php if( have_rows('redes_sociales', 'option') ): ?>
							<?php while( have_rows('redes_sociales', 'option') ): the_row(); 

								// Get sub field values.
								$linstagram = get_sub_field('instagram');		
								$lyoutube = get_sub_field('youtube');
								?>	
								<?php if ($linstagram) : ?>
									<a href="<?php echo ($linstagram); ?>" target="_blank">
										<img src="<?php echo get_bloginfo('template_url') ?>/img/icon-instagram.svg"/>
									</a>
								<?php endif; ?>
								<?php if ($lyoutube) : ?>
									<a href="<?php echo ($lyoutube); ?>" target="_blank">
										<img src="<?php echo get_bloginfo('template_url') ?>/img/icon-yt.svg"/>
									</a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>	
					</div>
				</div>
			</div>
			<ul class="legales">
				<li>
				<?php if ($link_terms_esp) :
					$link_url_terms_esp = $link_terms_esp['url'];
					$link_target_terms_esp = $link_terms_esp['target'] ? $link_terms_esp['target'] : '_self';
				?>
					<a href="<?php echo esc_url( $link_url_terms_esp ); ?>" class="link-canaletico" target="<?php echo esc_attr( $link_target_terms_esp ); ?>">
						<span>ESP</span>
						Términos legales 
						</a>
				<?php endif; ?>						
				</li>
				<li>
			<?php if ($link_terms_eng) :
				$link_url_terms_eng = $link_terms_eng['url'];
				$link_target_terms_eng = $link_terms_eng['target'] ? $link_terms_eng['target'] : '_self';
			?>
				<a href="<?php echo esc_url( $link_url_terms_eng ); ?>" class="link-canaletico" target="<?php echo esc_attr( $link_target_terms_eng ); ?>">
					<span>ENG</span>
						Legal terms
					</a>
			<?php endif; ?>					
				</li>			
			</ul>			
		</div>
	</footer><!-- #colophon -->
	<a href="#masthead" id="return-to-top"><span class="chevron top"></span></a>	
</div><!-- #page -->
<?php the_field('script_seguimiento_footer', 'option'); ?>

    <script type="text/javascript"  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/aos.js?id=<?php echo date("Y-m-d-h-i-s");?>"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/script.js?id=<?php echo date("Y-m-d-h-i-s");?>"></script>
<?php wp_footer(); ?>

</body>
</html>
