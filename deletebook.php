<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
</head>
<body>
    
    <form method="post">
    Enter the Book ID to delete : <input type="text" name="del" value="" placeholder="Enter Your Choice in number" required/>
        <input type="submit" name="submit" value="Enter"/><br/>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
      
    $val = $_POST['del'];
    if($val != null)
        {
            $arr = array("PHP","JAVA","WD","OOP","C++","CPP");
            echo "<pre>";

            print_r($arr);
            echo "<br>";
        }
    else
        {
            echo "Enter Value or Something Else.....";
        }
    $g=array_pop($arr);          
    print_r($arr);
   
    
}



?>