<?php
    include 'connection.php';

   $id=$_GET['id'];
   $sql = "DELETE FROM tblemployee WHERE id=$id";

mysqli_query($conn, $sql); 


header('Location:employees.php');
exit;
?>