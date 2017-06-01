<?php 
$post   = get_post( 1 );
$output =  apply_filters( 'the_content', $post->post_content );
?>

		</div>
	</div>	
	<footer id="footer">
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Stefan / Camilla" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/header_title.png" /></a>
		</div>
		<h2 class="osa-date">
			OSA senast 15 juli
			<?php echo $output; ?>
		</h2>
	</footer>
<?php wp_footer(); ?>
</body>
</html>