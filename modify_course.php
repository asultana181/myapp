<?php

	$id = $_GET["id"];

	$f0 = $_GET["title"];

	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE course SET title='$f0' WHERE course_id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> title = $f0 ";



	echo "<p><a href=read_course.php>READ all records</a>";

?>