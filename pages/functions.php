<?php

function connect( $host = "127.0.0.1:3306", $user = "lit", $pass = "Abc123", $dbname = "lit" ) {
	return new PDO( "mysql:host=$host;dbname=$dbname", $user, $pass, array( PDO::ATTR_PERSISTENT => true ) );
}

function pleaseReg() {
	echo "<script>window.onload = function() { alert( 'Please register or sign in for this action' ); }</script>";
}

function pageReload() {
	echo "<script>window.location=document.URL</script>";
}
