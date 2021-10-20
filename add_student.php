<!-- Add student Function to database -->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "insert into students values('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]', $_POST[class], '$_POST[email]','$_POST[password]','$_POST[remark]')";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Admin Dashboard -->
<script type= "text/javascript">
    alert("Student Added Successfully!");
    window.location.href = "admin_dashboard.php";
</script>