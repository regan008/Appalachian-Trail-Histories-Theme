</div>
</div>
	<div  class="row">


		    <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
        <p><?php echo $footerText; ?></p>
        <?php endif; ?>
    <?php fire_plugin_hook('public_footer'); ?>

			<div class="large-12 columns" id="footer">
				<p>No rights are granted to reproduce any items found on this site.</p>
				</div>
	</div>
