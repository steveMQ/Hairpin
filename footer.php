<?php echo ot_get_option('ga'); ?>
<?php
	$site_bars = (isset($_GET['site_bars']) ? htmlspecialchars($_GET['site_bars']) : ot_get_option('site_bars', 'on'));
	$header_style = (isset($_GET['header_style']) ? htmlspecialchars($_GET['header_style']) : ot_get_option('header_style', 'style1'));
	$footer_style = (isset($_GET['footer_style']) ? htmlspecialchars($_GET['footer_style']) : ot_get_option('footer_style', 'footer-standard'));
	$footer_content = (isset($_GET['footer_content']) ? htmlspecialchars($_GET['footer_content']) : ot_get_option('footer_content', 'footer-icons'));
?>
		</div><!-- End role["main"] -->


	<?php if (ot_get_option('footer') != 'off') { ?>
	<!-- Start Footer -->
	<footer id="footer" role="contentinfo">
		<div class="row full-width-row">
			<div class="small-12 columns social-links">
				<?php if($footer_content == 'footer-icons') {  ?>
					<?php do_action( 'thb_social' ); ?>
				<?php } else if ($footer_content == 'footer-text') { ?>
					<p><?php echo do_shortcode(ot_get_option('footer_text')); ?></p>
				<?php } else if ($footer_content == 'footer-menu') { ?>
					<?php wp_nav_menu( array( 'menu' => ot_get_option('footer_menu'), 'depth' => 1, 'container' => false  ) ); ?>
				<?php } ?>

				<?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => 'false' )); ?>

			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<?php } ?>
	<?php if (ot_get_option('scroll_totop') != 'off') { ?>
		<a href="#" id="scroll_totop"></a>
	<?php } ?>
</div> <!-- End #wrapper -->

<?php echo ot_get_option('ga'); ?>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	 wp_footer();
?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/about.js"></script>
</body>
</html>
