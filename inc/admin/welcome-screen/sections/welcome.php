<div class="updated notice is-dismissible" id="eighteen-tags-welcome">
	<h1>Thanks for installing 18 Tags! <small>Choose a skin to jumpstart your site.</small></h1>
	<h2><a href="?page=eighteen-tags-skins">View all skins</a></h2>
	<?php /*
	<div class="col3-set">
		<div class="col">
			<a href="<?php echo admin_url( 'themes.php?page=eighteen-tags-welcome#help-videos' ) ?>">
				<i class="dashicons dashicons-video-alt3"></i>
				<h4>Watch intro videos</h4>
			</a>
		</div>
		<div class="col">
			<a href="<?php echo admin_url( 'themes.php?page=eighteen-tags-skins' ) ?>">
				<i class="dashicons dashicons-welcome-widgets-menus"></i>
				<h4>Choose a design</h4>
			</a>
		</div>
		<div class="col">
			<a href="<?php echo admin_url( 'customize.php' ) ?>">
				<i class="dashicons dashicons-admin-customizer"></i>
				<h4>Start from scratch</h4>
			</a>
		</div>
	</div>
*/ ?>

	<div id="eighteen-tags-skins">
		<div class="skins-wrap">
			<div class="skins-4">
				<?php
				$skins = Eighteen_Tags_Welcome::get_skins();
				foreach ( $skins as $id => $skin ) {
					if ( isset( $skin['name'] ) ) {
						$name = $skin['name'];
					}
					if ( ! isset( $skin['img'] ) ) {
						$skin['img'] = 'https://image.freepik.com/free-vector/modern-geometric-infographic-template_1201-1154.jpg';
					}
					?>
					<div class='skin'>
						<?php
						if ( ! isset( $skin['pro'] ) || class_exists( 'Eighteen_Tags_Pro' ) ) {
							$skin_url = admin_url( 'customize.php?apply_skin' );

							echo "<a href='$skin_url=$name' class='skin-anchor'>";

							if ( isset( $skin['pro'] ) ) {
								echo '<div class="pro-badge">PRO</div>';
							}

							echo '<div class="tooltip-btn">Preview skin</div>';

						} else {
							echo "<a href='https://www.pootlepress.com/18-tags-pro/' class='skin-anchor'>";
							echo '<div class="pro-badge"><i class="dashicons dashicons-lock"></i> PRO</div>';
							echo '<div class="unlock-with-pro"><div class="unlock-with-pro-icon"></div>Unlock with PRO</div>';
						}

						echo "<img src='$skin[img]'>";

						echo '</a>';
						?>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<script>
		( function ( $ ) {
			var $skW = $( '.skins-wrap' );
			setTimeout( function () {
				$skW.animate( {scrollTop: 5000}, {
					easing: 'linear',
					duration: 250000
				} );
			}, 1000 );
			$skW.on( 'mousewheel', function( e ) {
				if ( this.scrollTop > 160 ) $skW.stop();
			} );
		} )( jQuery );
	</script>
</div>