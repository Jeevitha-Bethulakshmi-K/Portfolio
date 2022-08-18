<html>
<head>
<title>Contact Me Response</title>

</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
echo "<center>";
$hostname="localhost";
$username="root";
$password="";
$databasename="Portfolio";
$mysqli=mysqli_connect($hostname,$username,$password,$databasename);
if ($mysqli==False)
{
die ('Error:'.mysqli_connect_error());
}

$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];


$queryst="insert into contact(Email,Name,Message) values('$email','$name','$message')";
$execute=mysqli_query($mysqli,$queryst);
if($execute==True)
{
echo "<br><h1>Message sent Successfully</h1>";

}
else
{
echo "<h1>Failed to connect...Please retry</h1>".mysqli_error($mysqli);
}

}

