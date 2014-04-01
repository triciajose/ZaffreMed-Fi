<?php

  $host = "localhost";
  $user = "root";
  $pass = "password";
  $directory = "zaffre";

  $mysqli = new mysqli($host, $user, $pass, $directory);

  $cid = $mysqli->real_escape_string($_GET['val']);


	$sql = "UPDATE post SET vote= vote + 1 WHERE cid='$cid'";
	mysqli_query($mysqli,$sql);

	header("Location: feed.php");
?>