<!DOCTYPE html>
<html>
<head>
    <title>Login Panel</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <style>
body {
  background-image: url('brain.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #008CBA;
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
    <center><br><br><br>
        <h1 style="color:white;">Student Management System</h1><br>
        <form action="" method="post">
            <input type="submit" name="admin_login" value="Admin Login"><br><br>
            <input type="submit" name="student_login" value="Student Login"><br><br>
            <input type="submit" name="teacher_login" value="Teacher Login"><br><br><br>
            
        </form>
        <?php
            if(isset($_POST['admin_login'])){
                header("Location: admin_login.php");
            }
            if(isset($_POST['student_login'])){
                header("Location: student_login.php");
            }
            if(isset($_POST['teacher_login'])){
                header("Location: teacher_login.php");
            }
        ?>
    </center>
</body>
</html>
