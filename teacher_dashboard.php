<!DOCTYPE html>
<html>
<head>
    <title>Teacher's Dashboard</title>
    <link rel="stylesheet" type="text/css" type/css" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/jquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
    #header{
        height: 8%;
        width: 99%;
        top: 2%;
        background-color: black;
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
        background-color: whitesmoke;
        position: fixed;
        left: 17%;
        top: 21%;
        color: white;
        border: solid 1px black;
        background-image: url('admin_bar.jpg');
    }
    #top_span{
        top: 10%;
        width: 80%;
        left: 17%;
        position: fixed;
    }
    #td{
        border: solid 1px black;
        padding-left: 2px;
        text-align: center;
        width: 240px;
        border-spacing: 5px;
    }
    </style>
    <style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color:  #4CAF50;
  border: none;
  color: white;
  padding: 4px 30px;
  text-decoration: none;
  margin: 1px 2px;
  cursor: pointer;
}
</style>
<style>
body {
  background-image: url('books-2.jpg');
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
    <span id="top_span"><marquee><h3>This is Teacher's Dashboard.</h3></marquee></span>
    <div id= "left_side"><br><br><br>
        <form action=""method="post">
            <table><br>
            <!-- Student's Buttons-->
                <tr>
                    <td>
                        <input type= "submit" name= "search_student" value= "Search Student" >
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type= "submit" name= "edit_student" value= "Edit Student">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type= "submit" name= "add_new_student" value= "Add New Student">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type= "submit" name= "delete_student" value= "Delete Student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type= "submit" name= "show_student" value= "Show Students">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type= "submit" name= "show_detail" value= "Teacher's Info">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type= "submit" name= "edit_detail" value= "Edit Teacher's Info">
                    </td>
                </tr>
            </table>
        </form>  
    </div>
    <!-- student info panel -->
    <div id= "right_side"><br>
    <div id="demo">
    <!-- student search -->
        <?php
            if(isset($_POST['search_student'])){
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_student_by_roll_no_for_search"
                        value="Search">
                    </form>
                </center>
                <?php
            }
            if(isset($_POST['search_student_by_roll_no_for_search'])){
                $query = "select * from students where roll_no = '$_POST[roll_no]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table>
                    <!-- Roll of the student-->
                        <tr>
                            <td><b>Roll No:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['roll_no'];?>" size="43" disabled>
                            </td>
                        </tr>
                    <!-- Name of the student-->
                    <tr>
                            <td><b>Name:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['name'];?>" size="43" disabled>
                            </td>
                        </tr>
                    <!-- Father's name of the student-->
                    <tr>
                            <td><b>Father's Name:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['father_name'];?>" size="43" disabled>
                            </td>
                        </tr>
                    <!-- Class of the student-->
                    <tr>
                            <td><b>Class:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['class'];?>" size="43" disabled>
                            </td>
                        </tr>
                    <!-- Mail of the student-->
                    <tr>
                            <td><b>Email Address:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <input type="text" value=" <?php echo $row['email'];?>" size="43" disabled>
                            </td>
                        </tr>
                     <!-- Password of the student-->
                     <tr>
                            <td><b>Password for Recovery:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <input type="text" value="<?php echo $row['password'];?>" size="43" disabled>
                            </td>
                        </tr>
                    <!-- Remark of the student-->
                    <tr>
                            <td><b>Remark:&nbsp;&nbsp;&nbsp;</b></td>
                            <td>
                                <textarea rows="3" cols="40" disabled><?php echo $row['remark'];?></textarea>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
            }
        ?>
        <!-- Edit Button (student) -->
        <?php
            if(isset($_POST['edit_student'])){
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_student_by_roll_no_for_edit"
                        value="Search">
                    </form>
                </center>
                <?php
            }
            if(isset($_POST['search_student_by_roll_no_for_edit'])){
                $query = "select * from students where roll_no = '$_POST[roll_no]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="teacher_edit_student.php" method="post">
                        <table><h3>Edit Student's Info:</h3><br>
                        <!-- Roll of the student-->
                        <tr>
                                <td><b>Roll No.:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>" size="43" >
                                </td>
                            </tr>
                        <!-- Name of the student-->
                        <tr>
                                <td><b>Name:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $row['name'];?>" size="43" >
                                </td>
                            </tr>
                        <!-- Father's name of the student-->
                        <tr>
                                <td><b>Father's Name:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <input type="text" name="father_name" value="<?php echo $row['father_name'];?>" size="43" >
                                </td>
                            </tr>
                        <!-- Class of the student-->
                        <tr>
                                <td><b>Class:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <input type="text" name="class" value="<?php echo $row['class'];?>" size="43" >
                                </td>
                            </tr>
                        <!-- Mail of the student-->
                        <tr>
                                <td><b>Email Address:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <input type="text" name="email" value=" <?php echo $row['email'];?>" size="43" >
                                </td>
                            </tr>
                        <!-- Password of the student-->
                        <tr>
                                <td><b>Password for Recovery:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <input type="text" name="password" value="<?php echo $row['password'];?>" size="43" >
                                </td>
                            </tr>
                        <!-- Remark of the student-->
                        <tr>
                                <td><b>Remark:&nbsp;&nbsp;&nbsp;</b></td>
                                <td>
                                    <textarea rows="3" cols="40" name="remark" ><?php echo $row['remark'];?></textarea>
                                </td>
                        <!-- Save button with Function -->
                            </tr><br>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="edit" value="Save"></td>
                            </tr>

                        </table>
                    </form>
                    <?php
                }
            }
        ?>
        <!-- Add new Student -->
        <?php
            if(isset($_POST['add_new_student'])){
                ?>
                <center><h4>Fill The Following Details:</h4></center>
                <form action="teacher_add_student.php" method="post">
                    <table>
                        <tr>
                            <td>Roll No.:</td>
                            <td><input type="text" name="roll_no" required  size="43"></td>
                        </tr>
                        <tr>
                            <td> Name:</td>
                            <td><input type="text" name="name" required size="43"></td>
                        </tr>
                        <tr>
                            <td>Father's Name:</td>
                            <td><input type="text" name="father_name" required  size="43"></td>
                        </tr>
                        <tr>
                            <td>Class:</td>
                            <td><input type="text" name="class" required  size="43"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" name="email" required  size="43"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="text" name="password" required  size="43"></td>
                        </tr>
                        <tr>
                            <td>Remark:</td>
                            <td><textarea row="3" cols="40" name="remark"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add" value="Add Student"></td>
                        </tr>
                    </table>
                </form>
                <?php
            }
        ?>
        <!-- Delete Student -->
        <?php
            if(isset($_POST['delete_student'])){
                ?>
                <center>
                    <h4>Enter Roll number to Delete Student's Info</h4><br>
                    <form action="teacher_delete_student.php" method="post">
                        Roll No.:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_by_roll_no_for_delete" value="Delete Student">
                    </form>
                </center>
            <?php
            }
        ?>
        <!-- show students -->
        <?php
            if(isset($_POST['show_student'])){
            ?>
            <center>
                <h3>Student's details:</h3>
                <table style="border: 1px solid black">
                    <tr>
                        <td id="id"><th>Roll No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||</th></td>
                        <td id="id"><th>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||</th></td>
                        <td id="id"><th>Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||</th></td>
                        <td id="id"><th>Class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||</th></td>
                        <td id="id"><th>Email Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th></td>
                    </tr>
                </table>
            </center>
            <?php
             $connection = mysqli_connect("localhost","root","");
             $db = mysqli_select_db($connection,"student_management_system");
             $query = "select * from students";
             $query_run =  mysqli_query($connection,$query);
             while($row = mysqli_fetch_assoc($query_run)){
                 ?>
                 <center>
                    <table style="border: 1px solid black" >
                        <tr>
                            <td id="td"><?php echo $row['roll_no']?></td>
                            <td id="td"><?php echo $row['name']?></td>
                            <td id="td"><?php echo $row['father_name']?></td>
                            <td id="td"><?php echo $row['class']?></td>
                            <td id="td"><?php echo $row['email']?></td>
                        </tr>
                    </table>
                 </center>
                 <?php
             }
            }
        ?>
        <!-- Show Teacher's Info and Edit Teachers info -->
        <?php
            if(isset($_POST['show_detail'])){
                $query = "select * from teachers where email = '$_SESSION[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table>
                        <tr>
                            <td>
                                <b>ID:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['t_id']?>" size="43" disabled>
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
                                <b>Courses:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['courses']?>" size="43" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mobile:<b>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $row['mobile']?>" size="43" disabled>
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
                    </table>
                    <?php
                }
            }
        ?>
        <!-- Edit Teacher's info-->
        <?php
            if(isset($_POST['edit_detail'])){
                $query = "select * from teachers where email = '$_SESSION[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="edit_teacher.php" method="post">
                        <table>
                        <tr>
                            <td>
                                <b>Roll No.:<b>
                            </td>
                            <td>
                                <input type="text" name="t_id" value="<?php echo $row['t_id']?>" size="43" >
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
                                <b>Courses:<b>
                            </td>
                            <td>
                                <input type="text" name="courses" value="<?php echo $row['courses']?>" size="43" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Mobile:<b>
                            </td>
                            <td>
                                <input type="text" name="mobile" value="<?php echo $row['mobile']?>" size="43" >
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