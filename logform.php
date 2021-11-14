<?php
$connection = mysqli_connect('localhost','root');
if($connection)
{
    echo "connection is ecstablish!";
}
else

{
    echo"Error Connection Failed";
}
mysqli_select_db($connection, 'loginpage');

$Name=$_POST['name'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Mobile=$_POST['mobile'];


$data= "INSERT INTO form(NAME,EMAIL,,PASSWORD,MOBILE) 
VALUES('$Name','$Email','$Password','$Mobile')";

mysqli_query($connection,$data);
header('location:success.php');

?>
