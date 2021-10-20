<!-- Add Teacher Function to database -->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "insert into teachers values('',$_POST[t_id],'$_POST[name]','$_POST[courses]', '$_POST[mobile]', '$_POST[email]','$_POST[password]')";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Admin Dashboard -->
<script type= "text/javascript">
    alert("Teacher Added Successfully!");
    window.location.href = "admin_dashboard.php";
</script>