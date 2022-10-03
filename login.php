<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-appno1</title>
   <link rel="stylesheet" href="./css/css/bootstrap.css">
</head>
<body>
    <form action="#" method="POST">
     <section style="padding:2% 10%">
        <div class="container">
        <div class="row">
        <div class="mb-3">
            <div>
                <h1 style="color:orange; text-align:center;font-weight:bold;">Login here</h1>
            </div>
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div> 
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
        <button type="submit" name="submit"  class="btn btn-warning">Login</button>
      </div>
      <div class="mb-3">
      <p style="color:orange;font-size:1.2rem;font-weight:bold;">I don't have an account! <a style="color:#0d6efd;font-size:1.2rem;text-align:center; text-decoration:none"href="index.php">REGISTER HERE</a>
      </div>
  </div>
</section>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- php codes to connect this form to a database goes here -->
 <?php
include('connection.php');
if($connect)
{
   if(isset($_POST['submit']))
   {
         $email="";
         if(isset($_POST['email']))
         {
            $email=$_POST['email'];
         }
         $password="";
         if(isset($_POST['password'])){
            $password=$_POST['password'];
           $password=md5($password);
         }
         $sql3="SELECT * FROM users WHERE email='$email' AND password='$password'";
         $results3=mysqli_query($connect,$sql3);
         if(mysqli_num_rows($results3)>0)
         {
                $row=mysqli_fetch_assoc($results3);
                $role=$row['role'];
                // $email=$row['email'];
                // now we initilize the session to maintain a user state
                $_SESSION['email']=$row['name'];
                $_SESSION['gender']=$row['gender'];
                if($role=='admin')
                {
                  header('location:admin/');
                }
                else if($role=='student')
                {
                  header('location:student/');
                }
                else
                {
                  echo '<p style="text-align:center;color:red; font-size:1.2rem;">you have no access to this page';
                }
              }
         else
         {
            echo ' <p style="color:red;text-align:center; font-size:1.6rem; "> incorrect email or password';
         }

   }
}
else
{
   echo ' <p style="color:red;text-align:center; font-size:1.6rem; "> database connection failed. please try again';
}


mysqli_close($connect);
 ?>
</body>
</html>
