<!-- Delete Teacher Function - database -->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "delete from teachers where t_id = $_POST[t_id]";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Admin Dashboard -->
<script type= "text/javascript">
    alert("Teacher Deleted Successfully!");
    window.location.href = "admin_dashboard.php";
</script>