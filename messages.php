
<!-- Main big container -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="todo_H">Messages:</h2>
        </div>
    </div>
    <!-- Blocks with tasks -->
    <div class="row">
        <div class="col-md-2 leftpanel">
            <div>
                <p class="tasksfor">Messages for:</p>
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
					} ?>
                    <a href="index.php?per=day" class="btn btn-info <?php if ( ! empty( $chose_day ) ) { echo $chose_day; } ?>">Day</a>
                    <a href="index.php?per=week" class="btn btn-info <?php if ( ! empty( $chose_week ) ) { echo $chose_week; } ?>">Week</a>
                    <a href="index.php?per=month" class="btn btn-info <?php if ( ! empty( $chose_month ) ) { echo $chose_month; } ?>">Month</a>
                    <a href="index.php?per=year" class="btn btn-info <?php if ( ! empty( $chose_year ) ) { echo $chose_year; } ?>">Year</a>
                </div>
				<?php // Period switcher handler
				if ( isset( $_GET['per'] ) ) {
					$per     = $_GET['per'];
					$tbname  = 'tasks_' . $per;
					$tbname2 = 'done_' . $per;
				} else {
					$tbname  = 'tasks_day';
					$tbname2 = 'done_day';
				} ?>
            </form>
        </div>
        <div class="col-md-10">
            <form action="" method="post">
                <div class="col-md-10">
                    <div class="tasks">
                        <?php
                            $stmt = 'SELECT * FROM messages';
                            $sql = $pdo->query( $stmt );
                            while ( $row = $sql->fetch( PDO::FETCH_NUM ) ) {
                                echo '<p class="messages"><b><i>' . $row[1] . '</i></b><br><span class="details"><a href="#">username</a> &nbsp; | &nbsp; <a href="#">datetime</a> &nbsp; | &nbsp; <a href="#">reply</a></span></p>';
                            }
                        ?>
                    </div>
                    <div>
                </div>
            </form>
        </div>
    </div><!-- .row -->
    <!-- "Add task" form -->
    <div class="row">
    	<div class="col-md-2"></div>
        <div class="col-md-10 atf">
            <form action="" class="navbar-form add-task" method="POST">
                <b>New message:</b>
                <div class="form-group">
                    <input type="text" name="newtask" class="form-control users-add-task-btn" placeholder="Option for registered users">
                </div>
                <button name="addnew" type="submit" class="btn btn-success add-btn">ADD</button>
            </form>
        </div>
    </div>

	<?php // "ADD TASK" button handler
	if ( isset( $_POST['addnew'] ) ) {
	    $sql = 'INSERT INTO messages (text, userid) VALUES ("' . $_POST['newtask'] . '", "18")';
		$pdo->query( $sql );
		pageReload();
	} ?>

</div>
<div style="height: 100px;"></div>
