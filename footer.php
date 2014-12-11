<footer class="footer">
<div class="footer-container container">
	<div class="row">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'footer-nav--primary',
				'menu_class' => 'footer-nav footer-nav--primary',
				'container' => '',
			)
		); ?>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'footer-nav--secondary',
				'menu_class' => 'footer-nav footer-nav--secondary',
				'container' => '',
			)
		); ?>
	</div>
	<ul class="footer-social">
		<li><a href="" class="footer-social-icon icon--youtube"></a></li>
		<li><a href="" class="footer-social-icon icon--facebook"></a></li>
		<li><a href="" class="footer-social-icon icon--twitter"></a></li>
		<li><a href="" class="footer-social-icon icon--google"></a></li>
	</ul>
</div>
</footer>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/async.min.js"></script>
</body>
</html>