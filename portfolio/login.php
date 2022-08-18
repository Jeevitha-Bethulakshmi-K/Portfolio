<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-image: url('achivbg.jpg');
                background-repeat: no-repeat;
                background-position: absolute;
                background-size:cover;
            }
            .button {
  background-color: rgb(0,213,255); /* Green */
  border: none;
  color:black;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bolder;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border: 2px solid black;
}




.button:hover {background-color: black;
color:rgb(0,213,255);
border: 2px solid rgb(0,213,255);
}
            </style>
    </head>
    <body>
<?php
echo "<center>";
session_start();
$hostname="localhost";
$username="root";
$password="";
$databasename="portfolio";
$flag=0;
$mysqli=mysqli_connect($hostname,$username,$password,$databasename);




$queryst="select * from logindb";
$execute=mysqli_query($mysqli,$queryst);
while(($rows=mysqli_fetch_array($execute))!=null)
{
    $login='$rows[0]';
    $password='$rows[1]';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
 if ($_POST['login'] === login && $_POST['password'] === password)
 {
 $_SESSION['login'] = $_POST['login']; //write login to server storage
 header('Location: /'); //redirect to main
 break;
 }
 else{
    $flag=1;
 }
}
}
if($flag==1)
 {
 echo "<script>alert('Wrong login or password');</script>";
 echo "<noscript>Wrong login or password</noscript>";
 }


?>
<form method="post">
<table width="30%" height="300px" style="background-color:rgb(0,213,255);border: 2px solid black;margin-top: 40px;margin-left: 50px;">



<tr>
<td style="font-size:25px;">Login
<td><input type="text" placeholder="Email" name="login" style="font-size:25px;background-color: black;color: rgb(0,213,255);" required>

<tr>
<td style="font-size:25px;">Password
<td><input type="password" placeholder="Name" name="password" style="font-size:25px;background-color: black;color: rgb(0,213,255);">

<tr>
<td>
<td>
<input type="submit" class="button" value="Login">
</table>

</form>
</body>
</html>