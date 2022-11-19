<?php 

require('conn.php');

if(isset($_POST['submit']))
{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $password=$_POST['password'];

   $sql=mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
   if(mysqli_num_rows($sql)>0)
   {
   echo "<script>alert('email already exist'); </script>";
   }
   else
   {
    $que = "INSERT INTO user VALUES('','$fname','$lname','$email','$password')";
    mysqli_query($conn,$que);
    echo "<script>alert('succesfully'); </script>";
    header('location: login.php');
   }
   
   
}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Book Api|Register</title>
</head>

<body>
    <h1 class="text-center">Register</h1>
    <section>
        <div class="form w-100">
            <form method="post" action="" class="w-25 m-auto mt-5">
                <div class="mb-3">
                    <label class="form-label">Firts Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" name="submit">Register</button>
                <p class="mt-3">already signed up?<a href="login.php">Login</a></p>
            </form>
        </div>

    </section>

    <div>


    </div>

</body>

</html>