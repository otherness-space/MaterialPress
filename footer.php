	<footer class="page-footer">
		<!-- page-footer red lighten-2 -->
		<div class="container">
			<div class="row">
				<div class="col l4 s12">
					<?php if ( is_active_sidebar( 'footer-widgetize-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgetize-1' ); ?>
					<?php endif; ?>
				</div>
				<div class="col l4 s12">
					<?php if ( is_active_sidebar( 'footer-widgetize-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgetize-2' ); ?>
					<?php endif; ?>
				</div>
				<div class="col l4 s12">
					<?php if ( is_active_sidebar( 'footer-widgetize-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgetize-3' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<!-- footer-copyright red lighten-1 -->
			<div class="container">
				<span class="footer-copyright">© <?php echo date('Y'); ?> Copyright <?php echo get_bloginfo( name ); ?></span>
				<!-- span class="white-text" -->
			<a class="footer-copyright right truncate" href="#">Back to Top</a>
			<!-- a class="white-text" -->
			</div>
		</div>
	</footer>

	<?php wp_footer();?>

</body>
</html>
