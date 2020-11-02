<?php

$servername ="localhost";
$username ="veom";
$password ="V377eom#";
$dbname ="college_project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,$dbname);

if(isset($_POST['submit']))
{
  $em=$_POST['email'];
  $pwd=$_POST['password'];

  $query = "select * from visitors where email = ' " .$em. " ' AND password = ' " .$pwd . " ' limit 1";

$result=mysqli_query($conn,$query);

  if(mysqli_num_rows($result)==1){
    echo " Login successful";
    header("location:vasu.html");
  }
  else{
    echo "Login unsuccessful";
  }
}

?>

<html>
<head>
  <title>Login page </title>
</head>
<style>
input {
  width:400px;
  height: 35px;
  border: 2px solid blue;
}
  table {
    background-color:white;
    border: 10px;
  }
#btn {
  background-color: green;
  color:white;
  font-size: 20px;
  width:400px;
}

  </style>
</head>
<body bgcolor="#ADD8E6">

<br><br><br><br><br><br><br>
<form action="" method="post">
<table  border="0" border-radius:20px; align="center" cellspacing="20" >
  <th style="font-size:25px;">  Login </th>
  <tr><td>     <input type="text" name="email" placeholder="Email Address"  required> <br></span> </td></tr>
  <tr><td>     <input type="text"    placeholder="Password"  name="password" required>  <br> </span> </td></tr>
  <tr><td>    <input type="submit" id="btn" name="submit" value="Continue"> </td></tr>
  <th style = "font-size:15px;"> New to the Website ?</th>
      <tr><td><a href="signin.php"><input type = "button" value="Create your Account"></a> </td></tr>
</form>
  </table>
  </body>
  <html>
