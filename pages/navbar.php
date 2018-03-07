
<!-- Navbar + authorization form -->
<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" rel="home" href="index.php">
				<img class="logo" src="images/logo.png">
			</a>
		</div>
				<ul class="nav navbar-nav">
					<?php
						if ( isset( $_GET['page'] ) ) {
							if ( $_GET['page'] == 'about' ) {
								$about = 'active';
							}
						} else {
							$msgs = 'active';
						}
					?>
					<li class="<?php if ( ! empty( $msgs ) ) { echo $msgs; } ?>"><a href="index.php">MESSAGES</a></li>
					<li class="<?php if ( ! empty( $about ) ) { echo $about; } ?>"><a href="index.php?page=about">ABOUT</a></li>
				</ul>
		
		<?php
			if ( isset( $_SESSION['login'] ) ) {
				// TODO
			} else { 
		?>
			<!-- Sign in and register if not authorized -->
			<div>

				<?php
					$client_id = '236523673560391'; // Client ID
					$client_secret = 'd2c5ac542654a1c8755d9bd40ccb35ac'; // Client secret
					$redirect_uri = 'http://localhost/light-messages/'; // Redirect URIs

					$url = 'https://www.facebook.com/dialog/oauth';

					$params = array(
						'client_id'     => $client_id,
						'redirect_uri'  => $redirect_uri,
						'response_type' => 'code',
						'scope'         => 'email,user_birthday'
					);

					echo $link = '<h3 class="welcome"><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Please login with facebook</a></h3>';
				?>

			</div>
		
		<?php } ?>

	</div>
</div>
