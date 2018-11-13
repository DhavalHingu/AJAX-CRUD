<?php
 include('connect.php');

$CreateSql="DELETE from crud"; 

 $res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
header('Location: index.html');
?>