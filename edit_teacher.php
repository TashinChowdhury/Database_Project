<!-- Update Details function Student by Teacher-->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "update teachers set name='$_POST[name]',courses='$_POST[courses]', mobile='$_POST[mobile]', email='$_POST[email]', password='$_POST[password]'
    where t_id = $_POST[t_id]";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Teacher Dashboard -->
<script type= "text/javascript">
    alert("Edited Details Successfully!");
    window.location.href = "teacher_dashboard.php";
</script>