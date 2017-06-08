<?php 
$post   = get_post( 1 );
$output =  apply_filters( 'the_content', $post->post_content );
?>

		</div>
	</div>	
	<footer id="footer" class="row collapse">
		<section class="small-12 medium-6 columns">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Stefan / Camilla" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/header_title.png" /></a>
			</div>
			<h2 class="osa-date">
				OSA senast 15 juli
			</h2>
			<?php echo $output; ?>

			<div class="contact">
				<label>Email</label>
				<ul>
					<li>svebeck@gmail.com</li>
					<li>caka902@gmail.com</li>
				</ul>
			</div>
		</section>
		<section id="map" class="small-12 medium-6 columns">

		</section>
	</footer>
<?php wp_footer(); ?>
</body>
</html>