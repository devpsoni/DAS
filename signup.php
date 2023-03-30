<?php
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$email=$_POST["email"];
$password=$_POST["password"];
$con = mysqli_connect("localhost","root","","das");
$stmt = $con->prepare("insert into user (f_name,l_name,Email,pwd)
values (?,?,?,?)");
$stmt->bind_param("ssss",$f_name,$l_name,$email,$password);
$stmt->execute();
echo "Account has been created successfully";
?>