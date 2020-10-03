<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<body>
 <?php
 require('db.php');
 session_start();
if(isset($_POST['username']))
{
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);

    $password=stripslashes($_REQUEST['password']);
    $password=mysqli_real_escape_string($con,$password);

    $query="SELECT * FROM `users` WHERE username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    $rows=mysqli_num_rows($result);
    if($rows==1)
    {
        $_SESSION['username']=$username;
        header("location:index.php");
    }
    else{
        echo "<div class='form'><h3> Username/password is incorrect. </h3> <br> Click here to <a href='loging.php'>Login</a></div>";
    
    }
} else{
    ?>
<div clss="form">
    <h1> Login</h1>
    <form action="" method="POST" name="Login">
    <input type="text" name="username" placeholder="Username" required />
    <input type="text" name="password" placeholder="Password" required />

    <input type="submit" name="submit" value="Login" />

    </form>
    <p>Not registered yet? <a href="registeration.php">Register here</a></p>
</div>

<?php }?>
</body>
</html>