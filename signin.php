<?php
include ("connection.php") ;
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" >
  <title>Signup Form</title>
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
    width:410px;
  }

    </style>
  </head>
<body bgcolor="#ADD8E6">

<br><br><br><br><br><br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table  border="0" border-radius:20px; align="center" cellspacing="20" >
    <th style="font-size:25px;">  Create Your Account </th>
    <tr> <td>    <input type="text"  id="user" placeholder="Name" name="name" required>  <span class="error"> </span> </td></tr>
    <tr><td>     <input type="text" id="email" placeholder="Email Address" name="email"  required> <br><span class="error"> </span></td></tr>
    <tr><td>     <input type="text" id="pass"   placeholder="Password"  name="password" required>  <br> <span class="error"></span></td></tr>
    <tr><td>    <input type="text" id="pass"   placeholder="Confirm  password"  name="confirmpassword" required>  <br> <span class="error"></span></td></tr>
    <tr><td>    <input type="submit" id="btn" name="submit"> </td></tr>
</form>



</table>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
$nm = $_POST[ 'name' ];
$em = $_POST[ 'email' ];
$pwd = $_POST[ 'password' ];
$conpwd = $_POST[ 'confirmpassword' ];




$query = "INSERT INTO visitors VALUES ( ' $nm ' , ' $em ' , ' $pwd ' , ' $conpwd ') " ;
$data =mysqli_query($conn , $query) ;

if($data)
{
 //echo "Data inserted into database";
 header("location:login.php");
}

else {
 //echo "Failed to insert data into database";
}
}

?>
