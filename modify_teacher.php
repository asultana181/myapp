<?php

	$id = $_GET["t_id"];

	$f0 = $_GET["name"];

	$f1 = $_GET["c_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE teacher SET name='$f0', course_id='$f1' WHERE teacher_id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> f0 = $f0 <br> f1 = $f1";



	echo "<p><a href=read_teacher.php>READ all records</a>";

?>