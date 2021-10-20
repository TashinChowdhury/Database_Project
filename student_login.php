<!DOCTYPE html>
<html>
<head>
    <title>Student's Login</title>
    <link rel="stylesheet" type="text/css" type/css" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
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
    <center><br><br><br>
        <form class="login-email" action="" method="post">
            <p class="login-text" style="font-size: 2rem; font-weight:800; ">Student Login</p>
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
                $query = "select * from students where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email'] == $_POST['email']){
                        if($row['password'] == $_POST['password']){
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['name'] = $row['name'];
                            header("Location: student_dashboard.php");
                        }
                        else{
                            echo "WRONG PASSWORD!!!";
                        }
                    }
                    else{
                        echo "WRONG EMAIL ADDRESS!!!";
                    }
                }
            }
        ?>
    </center>
</body>
</html>
