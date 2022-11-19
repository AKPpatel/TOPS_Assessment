<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
</head>
<body>
    
    <form method="post">
     Search By ID:<br>
     Search By Name: <input type="text" name="search" value="" placeholder="Enter Your Choice" required/>
        <input type="submit" name="submit" value="Enter"/><br/>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
      
    $val = $_POST['search'];
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
    echo array_search("WD",$arr);
    echo "<br>";
   
    
}



?>