<?php
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$con = mysqli_connect("localhost","root","","das");
$stmt = $con->prepare("SELECT * FROM user WHERE Email =? and pwd=?");
$stmt->bind_param("ss",$email,$pwd);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows == 0)
{
	echo "Login Failure.... Try Again";
}
else
{
	echo "Login Successful";
}
$stmt->close();

?>