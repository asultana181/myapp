<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM course" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>course_id</th> <th>title</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_id </td>";
		echo "<td> $title </td>";
		echo "<td> <a href = 'delete_course.php?id=$course_id'> Delete </a> </td>";
	    echo "<td> <a href = 'update_course.php?id=$course_id&title=$title'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_course.php>CREATE a new record</a>";
?>