<!DOCTYPE html>
<html>
<head>
    <title>Student's Dashboard</title>
    <link rel="stylesheet" type="text/css" type/css" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
    #header{
        height: 8%;
        width: 99%;
        top: 2%;
        background-color: crimson;
        position: fixed;
        color: White;
    }
    #left_side{
        height: 75%;
        width: 15%;
        top: 10%;
        position: fixed;
    }
    #right_side{
        height: 75%;
        width: 80%;
        background-image: url('books-2.jpg');
        position: fixed;
        left: 17%;
        top: 21%;
        color: white;
        border: solid 1px black;
    }
    #top_span{
        top: 10%;
        width: 80%;
        left: 17%;
        position: fixed;
    }
    </style>
    <style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #555555;
  border: none;
  color: white;
  padding: 10px 32px;
  text-decoration: none;
  margin: 1px 2px;
  cursor: pointer;
}
</style>
<style>
body {
  background-image: url('books.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
    <?php
        session_start();
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"student_management_system");
       
    ?>
</head>
<body>
    <div id= "header">
    <center><strong><h3>Student Management System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;
        <a href="logout.php">Logout</a></h3>
    </center>
    </div>
    <span id="top_span"><marquee><h3>This is Student's Dashboard.</h3></marquee></span>
    <div id= "left_side"><br><br><br>
        <form action=""method="post">
            <table><br>
            <!-- Student's Buttons-->
                <tr>
                    <td>
                        <input type= "submit" name= "show_detail" value= "Student Info">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type= "submit" name= "edit_detail" value= "Edit Student Info">
                    </td>
                </tr>
            </table>
        </form>  
    </div>
    <!-- student info panel -->
    <div id= "right_side"><br>
    <div id="demo">
        <?php
            if(isset($_POST['show_detail'])){
                $query = "select * from students where email = '$_SESSION[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table>
                        <tr>
                            <td>
                                <b>Roll No.:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['roll_no']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Name:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['name']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Father's Name:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['father_name']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Class:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['class']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Email:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['email']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Password:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['password']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Remark:<b>
                            </td>
                            <td>
                                <textarea rows="3" cols="40" disabled=""><?php echo $row['remark']?></textarea>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
            }
        ?>
        <?php
            if(isset($_POST['edit_detail'])){
                $query = "select * from students where email = '$_SESSION[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="edit_student.php" method="post">
                        <table>
                        <tr>
                            <td>
                                <b>Roll No.:<b>
                            </td>
                            <td>
                                <input type="text" name="roll_no" value="<?php echo $row['roll_no']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Name:<b>
                            </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $row['name']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Father's Name:<b>
                            </td>
                            <td>
                                <input type="text" name="father_name" value="<?php echo $row['father_name']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Class:<b>
                            </td>
                            <td>
                                <input type="text" name="class" value="<?php echo $row['class']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Email:<b>
                            </td>
                            <td>
                                <input type="text" name="email" value="<?php echo $row['email']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Password:<b>
                            </td>
                            <td>
                                <input type="text" name="password" value="<?php echo $row['password']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="save" value="Save"></td>
                        </tr>
                        </table>
                    </form>
                    <?php
                }
            }
        ?>
    </div>
    </div>
</body>
</html>