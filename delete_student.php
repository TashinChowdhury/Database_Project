<!-- Delete student Function - database -->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "delete from students where roll_no = $_POST[roll_no]";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Admin Dashboard -->
<script type= "text/javascript">
    alert("Student Deleted Successfully!");
    window.location.href = "admin_dashboard.php";
</script>