  
<?php

echo "Name: ".$_POST['Name'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>"html form_name"</title>

</head>
<body>
	<form method ="post" action ="nameCheck1.php"> 
	<fieldset style="width: 200px;">

        <legend><b>NAME</b></legend>
        <input type="text" name="Name"> <hr>
        <input type="submit" value="Submit">
		
	</fieldset>
	</form>
</body>
</html>