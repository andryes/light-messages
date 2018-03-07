
<!-- Main big container -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="msg-title">Messages:</h2>
		</div>
	</div>
	<!-- Blocks with messages -->
	<div class="row">
		<div class="col-md-2 leftpanel">
			<div>
				<p class="msg-period"><b>Messages for:</b></p>
			</div>
			<form action="" method="post">
				<div class="btn-group-vertical period">
					<?php // Active button handler
						if ( isset( $_GET['per'] ) ) {
							if ( $_GET['per'] == 'day' ) {
								$chose_day = 'active';
							} elseif ( $_GET['per'] == 'week' ) {
								$chose_week = 'active';
							} elseif ( $_GET['per'] == 'month' ) {
								$chose_month = 'active';
							} elseif ( $_GET['per'] == 'year' ) {
								$chose_year = 'active';
							}
						} else {
							$chose_day = 'active';
						} 
					?>
					<a href="index.php?per=day" class="btn btn-info <?php if ( ! empty( $chose_day ) ) { echo $chose_day; } ?>">Day</a>
					<a href="index.php?per=week" class="btn btn-info <?php if ( ! empty( $chose_week ) ) { echo $chose_week; } ?>">Week</a>
					<a href="index.php?per=month" class="btn btn-info <?php if ( ! empty( $chose_month ) ) { echo $chose_month; } ?>">Month</a>
					<a href="index.php?per=year" class="btn btn-info <?php if ( ! empty( $chose_year ) ) { echo $chose_year; } ?>">Year</a>
				</div>
				<?php 
					// Period switcher
				?>
			</form>
		</div>
		<div class="col-md-10">
			<form action="" method="post">
				<div class="col-md-10">
					<div class="msgs">
						<?php
							$stmt = 'SELECT * FROM messages';
							$sql = $pdo->query( $stmt );
							echo '<ol>';
							while ( $row = $sql->fetch( PDO::FETCH_NUM ) ) {
								echo '
									<li class="messages">
										<span class="details">
											<a href="#">username</a><br><br>
											<b><i>' . $row[1] . '</i></b><div class="reply"><a href="#">reply</a></div><br><br>
											<p>' . $row[3] . '</p>
										</span>
									</li>
								';
							}
							echo '</ol>';
						?>
					</div>
					<div>
				</div>
			</form>
		</div>
	</div><!-- .row -->
	<!-- "ADD" form -->
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10 add-msg-div">
			<form action="" class="navbar-form add-msg-form" method="POST">
				<b>New message:</b>
				<div class="form-group">
					<input type="text" name="newmsg" class="form-control add-msg-input" placeholder="Option for registered users">
				</div>
				<button name="addnew" type="submit" class="btn btn-success add-btn">ADD</button>
			</form>
		</div>
	</div>

	<?php // "ADD" button handler
		if ( isset( $_POST['addnew'] ) ) {
			$sql = 'INSERT INTO messages (text, userid, date) VALUES ("' . $_POST['newmsg'] . '", "18", "' . date("Y-m-d H:i:s") . '")';
			$pdo->query( $sql );
			pageReload();
		}
	?>

</div>
<div style="height: 100px;"></div>
