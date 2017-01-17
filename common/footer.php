</div>
</div>
	<div  class="row">



			<div class="large-9 small-12 columns" id="footer">
				<?php if ( $footerText = get_theme_option('Footer Text') ): ?>
                <?php echo $footerText; ?>
                <?php endif; ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
				</div>
				<div class="large-3 small-12 columns" id="footer">
					<p><small>Proudly Powered by Omeka</small></p>

				</div>

	</div>
