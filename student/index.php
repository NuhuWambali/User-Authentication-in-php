<?php session_start();
if($_SESSION['email'])
{
   $currentUser=$_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student page</title>
</head>
<style>
.header{
    background-color:#000;
    padding:5% 5%;
}
.body{
    background-color:#eee;
    padding:4% 5%;
}

</style>
<body>
<div class="header">
        <p style="text-align:center;color:#fff;margin:0 90% 0;font-size:1rem;"> <?php echo " Welcome :".$currentUser?>
        <h1 style="text-align:center;color:#fff; font-size:2rem"> WELCOME TO THIS PAGE</h1>
    </div>
    <div class="body">
        <h1 style="text-align:center;color:#008699; font-size:1.3rem"> this is a Student page</h1>
    </div>
    <div class="body">
    <h1 style="text-align:center;color:#008699; font-size:1.3rem"> we're happy to see you here!</h1>
  
</body>
</html>