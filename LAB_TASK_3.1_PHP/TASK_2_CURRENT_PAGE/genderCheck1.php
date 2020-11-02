<?php

if (isset($_POST['gender']))   
  echo "Gender: ".$_POST['gender'];    
else
  echo "nothing was selected.";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Form - Gender</title>
</head>
<body>
    
    <form method="post" action="genderCheck1.php">
        
        <fieldset style="width:200px">
            
            <legend><b>GENDER</b></legend>
            
                <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female"  > Female
				<input type="radio" name="gender" value="Other" > Other <br>
            
        </fieldset>
        <br>
        <input type="submit" value="Submit">
        
    </form>
    
</body>
</html>





