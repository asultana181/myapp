<?php

	$f0 = $_GET["course_name"];

	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course VALUES ( '', '$f0' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> f0 = $f0 <br>" ;



	echo "<p><a href=read_course.php>READ all records</a>";

?>