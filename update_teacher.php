<?php

	$id = $_GET["t_id"];

	$f0 = $_GET["name"];

	$f1 = $_GET["c_id"];

?>



<h1>Update Record</h1>



<form method=get action=modify_teacher.php>



	<input type=hidden name=t_id value='<?php echo $id; ?>'> <br>



	teachers_name: <input type=text name=name value='<?php echo $f0; ?>'>

	<p>

	course: <input type=text name=c_id value='<?php echo $f1; ?>'>

	<p>

	<input type=submit value=Update>

</form>