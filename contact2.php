<?php

$name=$_REQUEST['name']; 
$email=$_REQUEST['email'];
$phone =$_REQUEST['phone'];

if(isset($_POST['btntest']))
{

$host="localhost";

$user ="root";

$password="";

$db="design";


$conn = mysqli_connect($host,$user, $password,$db);

$insert= "insert into customer values('$name','$email' ,'$phone')";

mysqli_query($conn, $insert);

if($conn){

echo("<h1 style='color:green;'>Your Registration is Done!</h1>");

}

else{

echo("<h1 style='color:red;'>Your Registration is Failed!</h1>");
}

}
?>