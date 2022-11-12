<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form method="post">
    Enter Old Password : <input type="text" name="t1" value="" placeholder="Enter Old Password" required/><br><br>
    Enter New Password : <input type="text" name="t2" value="" placeholder="Enter New Password" required/><br><br>
    <!-- Enter Confirm Password : <input type="text" name="t3" value="" placeholder="Enter Confirm Password"/><br><br> -->
    <input type="submit" name="submit" value="Enter"/>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{

        $oldpass = $_POST['t1'];
        $newpass = $_POST['t2'];    
        //$confpass = $_POST['t3']; 

        if($newpass != null)
        {
        echo "<br>";
        echo "Password Successfully Changed!";
        // console.log("Password Successfully Changed!");
        //header('location:pass.php');
        }
        else
        {
            echo "Enter New Password";
        }
        echo "<br>";
        echo "Press any key to continue...";
    // if($newpass == "Password")
    // {
    //     echo "Password Successfully Changed!";
    // }
    
}


?>