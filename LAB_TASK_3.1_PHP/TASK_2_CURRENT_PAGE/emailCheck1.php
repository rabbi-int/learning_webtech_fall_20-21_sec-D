<?php

echo "Email: ".$_POST['Email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Form - Email</title>
</head>
<body>
    
    <form method="post" action="emailCheck1.php">
        
        <fieldset style="width: 190px;">
            
            <legend><b>EMAIL</b></legend>
        <input type="email" name="Email">
        <button title="hint:Sample@example.com" style="color: blue; font-size: 12px;"><b>i</b></button>
        <hr>
        <input type="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>