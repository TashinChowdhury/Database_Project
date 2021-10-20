<!-- Update Details function Student-->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "update students set name='$_POST[name]',father_name='$_POST[father_name]', class=$_POST[class], email='$_POST[email]', password='$_POST[password]', remark='$_POST[remark]'
    where roll_no = $_POST[roll_no]";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Admin Dashboard -->
<script type= "text/javascript">
    alert("Edited Details Successfully!");
    window.location.href = "admin_dashboard.php";
</script>