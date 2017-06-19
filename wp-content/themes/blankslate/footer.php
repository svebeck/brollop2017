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
				<label>kontakt</label>
				<ul>
					<li class="name">Stefan</li>
					<li>svebeck@gmail.com</li>
					<li>073 - 915 54 23</li>
				</ul>
				<ul>
					<li class="name">Camilla</li>
					<li>caka902@gmail.com</li>
					<li>070 - 611 30 64</li>
				</ul>
			</div>
		</section>
		<section id="map" class="small-12 medium-6 columns">
			<a href="https://goo.gl/maps/pC25ywRzpuQ2" target="_blank">GOOGLE MAPS ></a>
		</section>
	</footer>
<?php wp_footer(); ?>
</body>
</html>