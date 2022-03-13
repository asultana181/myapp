<?php

	$id = $_GET["id"];

	$f0 = $_GET["title"];


?>



<h1>Update Record</h1>



<form method=get action=modify_course.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	course: <input type=text name=title value='<?php echo $f0; ?>'>

	<p>

	

	<p>

	<input type=submit value=Update>

</form>