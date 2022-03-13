<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$teachers = mysqli_query( $connect, "SELECT * FROM teacher" )
		or die("Can not execute query");
    $courses = mysqli_query( $connect, "SELECT * FROM course" )
		or die("Can not execute query");
    echo " <label for='teachers'>Choose a teacher:</label>";
    echo "<select id='teachers' name='teachers'>";
    echo "   <option value=' '>select</option>";
        while( $rows = mysqli_fetch_array( $teachers ) ) {
            extract( $rows );
           echo " <option value=$teacher_id>$name</option>";
        }


       
    echo "</select>";
    echo "<label for='courses'>Choose a course:</label>";
    echo "<select id='courses' name='courses'>";
    echo "   <option value=' '>select</option>";
        while( $rows = mysqli_fetch_array( $courses ) ) {
            extract( $rows );
            echo"<option value=$course_id>$title</option>";
        }
        

       
    echo "</select>";?>
                
                