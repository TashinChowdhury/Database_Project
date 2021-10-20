<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" type/css" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <head>
    <style>
body {
  background-image: url('background_admin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
    <div class="container">
    <center><br><br><br>
        <h1 style="color:white;">Admin Login</h1><br>
        <form class="login-email" action="" method="post">
            <div class="input-group">
            Email:<input type="email" name ="email" placeholder="Enter Email" required><br><br>
            </div>
            <div class="input-group">
            Password:<input type="password" name="password" placeholder="Enter Password" required><br><br>
            </div>
           <input type="submit" name="submit" required> 
        </form>
        <?php
        session_start();
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"student_management_system");
                $query = "select * from login where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email'] == $_POST['email']){
                        if($row['password'] == $_POST['password']){
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['name'] = $row['name'];
                            header("Location: admin_dashboard.php");
                        }
                        else{
                            echo "WRONG PASSWORD!!!";
                        }
                    }
                }
            }
        ?>
    </center>
    </div>
</body>

</html>
