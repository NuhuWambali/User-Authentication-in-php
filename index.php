<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-appno1</title>
    <link rel="stylesheet" href="./css/css/bootstrap.css">
</head>
<body>
    <form action="#" method="POST">
        <section style="padding:0 20%;">
        <div class="container">
        <div class="row">
        <div class="mb-3">
            <div>
                <h1 style="color:#0d6efd; text-align:center;font-weight:bold;">Register here</h1>
            </div>
         <div class="mb-3">
                <label for="examplename" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleName" name="name">
        </div>
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div> 
        <div class="mb-3">
            <label for="examplephoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="examplephonrNumber" name="phone">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
        <select class="form-select" aria-label="gender" name="gender">
            <option selected>Select Your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="role" name="role">
                <option selected>Select Your Role</option>
                <option value="admin">Admin</option>
                <option value="student">Student</option>
              </select>
            </div>
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </div>
    <div class="mb-3">
    <p style="color:green;font-size:1.2rem;">Do you have an account? <a style="color:#0d6efd;font-size:1.2rem;text-align:center; text-decoration:none"href="login.php">LOGIN HERE</a>
      
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
       if(isset($_POST['submit'])){
         $name="";
         if(isset($_POST['name'])){
            $name=$_POST['name'];
         }
         $email="";
         if(isset($_POST['email'])){
           $email=$_POST['email'];
         }
         $phone="";
         if(isset($_POST['phone'])){
           $phone=$_POST['phone'];
         }
         $password="";
         if(isset($_POST['password'])){
           $password=$_POST['password'];
           $password=md5($password);
         }
         $gender="";
         if(isset($_POST['gender'])){
           $gender=$_POST['gender'];
         }
         $role="";
         if(isset($_POST['role'])){
           $role=$_POST['role'];
         }  
   $sql1="SELECT * FROM users WHERE email='$email' or phone='$phone'";
   $results1=mysqli_query($connect,$sql1);
   if(mysqli_num_rows($results1)>0)
    {
      echo ' <p style="color:red;text-align:center; font-size:1.6rem ;"> User already exits! please register a new user';
    }
   else{
     $sql2="INSERT INTO users (name,email,password,phone,gender,role) VALUES ('$name','$email','$password','$phone','$gender','$role')";
     $results2=mysqli_query($connect,$sql2);
     if($results2)
      {
        echo ' <p style="color:green;text-align:center; font-size:1.6rem;"> Successfully registed';
      }
      else{
        echo ' <p style="color:red;text-align:center; font-size:1.6rem; "> Failed to register! please try again!';
      }

   }
       }
      }
    else{
         echo ' <p style="color:red;text-align:center; font-size:1.6rem ;"> database not found';
      }
    ?>
</body>
</html>