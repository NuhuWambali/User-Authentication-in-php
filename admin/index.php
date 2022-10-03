<?php session_start();
if($_SESSION['email'])
{
   $currentUser=$_SESSION['email'];

}
else
{
    header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<style>
.header{
    background-color:#008699;
    padding:5% 5%;
    padding-top:10px;
}
.body{
    background-color:#d3dce3;
    padding:5% 5%;
}
p{
    margin-left:70%;
   
}
a{
   margin: 0 5%;
}
</style>
<body>
    <div class="header">   
        <?php echo '<p style="text-align:center;color:#fff;font-size:1rem;;">  Welcome :'.$currentUser
        ?>
        <a style="text-decoration:none;color:#000;font-size:1.2rem;" href="index.php? id=logout">log out</a>
        <?php
        if(isset($_GET['id']))
        {
            session_destroy();
            header('location:../login.php');
        }
        
        ?>
        <h1 style="text-align:center;color:#fff; font-size:2rem"> WELCOME TO THIS PAGE</h1>
    </div>
    <div class="body">
        <h1 style="text-align:center;color:#008699; font-size:1.3rem"> this is an admin page</h1>
        <?php echo " your gender is : ".$_SESSION['gender']?>
    </div>
    <div class="body">
    <h1 style="text-align:center;color:#008699; font-size:1.3rem"> we're happy to see you here!</h1>
  
</body>
</html>