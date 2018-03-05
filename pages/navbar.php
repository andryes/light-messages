
<!-- Navbar + authorization form -->
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" rel="home" href="index.php">
                <img class="logo" src="images/logo.png">
            </a>
        </div>
        
		<?php
    		if ( isset( $_SESSION['login'] ) ) {
    			// TODO
    		} else { 
        ?>
            <!-- Sign in and register if not authorized -->
            <div>
                <h3 class="welcome">Please login with facebook</h3>
            </div>
		
        <?php } ?>

    </div>
</div>
