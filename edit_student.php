<!-- Update Details function Student by Student-->
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"student_management_system");
    $query = "update students set name='$_POST[name]',father_name='$_POST[father_name]', class=$_POST[class], email='$_POST[email]', password='$_POST[password]'
    where roll_no = $_POST[roll_no]";
    $query_run = mysqli_query($connection,$query);
?>
<!-- Redirecting to Student Dashboard -->
<script type= "text/javascript">
    alert("Edited Details Successfully!");
    window.location.href = "student_dashboard.php";
</script>