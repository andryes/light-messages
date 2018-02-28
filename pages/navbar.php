
<!-- Navbar + authorization form -->
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" rel="home" href="index.php">
                <img class="logo" src="images/logo.png">
            </a>
        </div>
        

		<?php // Greetings for user if authorized
		if ( isset( $_SESSION['login'] ) ) {
			echo '<form action="index.php';
			if ( isset( $_GET['page'] ) ) {
				echo '?page=' . $_GET['page'];
			}
			echo '" class="navbar-form navbar-right" method="post" id="first-form">
				<span class="welcome">Welcome, ' . $_SESSION['login'] . '! &nbsp;</span>
				<button type="submit" name="ex" class="btn btn-sm btn-primary" id="ex">SIGN OUT &nbsp;<i class="glyphicon glyphicon-log-out"></i></button>
				</form>';
		} else { ?>
            <!-- Sign in and register if not authorized -->
            <div>
                <!-- <button type="submit" class="btn btn-sm btn-info navbar-right" data-toggle="modal" data-target="#modal-1" id="reg-form">
                    <i class="fa fa-user-plus"></i> REGISTER
                </button>
                <form action="" class="navbar-form navbar-right" method="POST" id="first-form">
                    <div class="form-group form-group-sm">
                        <input type="text" name="logname" class="form-control" placeholder="Login" value="">
                    </div>
                    <div class="form-group form-group-sm">
                        <input type="password" name="logpass" class="form-control" placeholder="Password" value="">
                    </div>
                    <button type="submit" name='log' class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-user"></i> SIGN IN
                    </button>
                </form> -->
                <h3 class="welcome">Please login with facebook</h3>
            </div>
		<?php } ?>

    </div>
</div>
