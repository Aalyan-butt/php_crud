<?php

 $stu_name =   $_POST ['sname'];
 $stu_adress = $_POST ['sadress'];
 $stu_class =  $_POST ['sclass'];
 $stu_phone =  $_POST ['sphone'];

 include 'config.php';
$sql = "INSERT INTO student(sname, sadress, sclass,sphone) VALUES('{$stu_name}', '{$stu_adress}','{$stu_class}','{$stu_phone}' )";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful"); 

 header("Location: https://localhost/php_crud/index.php");

mysqli_close($conn);



?>

<h1></h1>