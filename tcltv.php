<html>
<head>
  <title>Samsung galaxy m21</title>
</head>

<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  <!-- code for star rating -->
  .checked {
    color: orange;
  }
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none ;
    position: absolute;
    background-color:#98ccfe ;
    min-width: 100px;
    box-shadow: 0px 15px 16px 0px rgba(0, 0, 0, 0.2);
    padding: 12px 16px;

  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  </style>
  <title>website
    </title>
    </head>
    <body bgcolor="">
      <table border="0" width="100%" bgcolor="#99ccff" height="60px">
        <tr>

          <th><a data-flickr-embed="true" data-header="true" href="vasu.html" title="logo"><img src="https://live.staticflickr.com/65535/50323138366_e3a05d0712_t.jpg" width="100" height="55" alt="logo"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script></th>
          <td><input type="text" placeholder="search for products,brands & more" style="width:500px; height:35px;">
          <input type="button" value="Search" style="width:100px; height:35px"></td>
          <th><a href="login.php" style="color:white;font-size:20px;text-decoration:none;">Login & Signup</a></th>
          <th><a href="#" style="color:white;font-size:20px;text-decoration:none;">About us</a></th>
          <th><a href="#" style="color:white;font-size:20px;text-decoration:none;">More</a></th>
          <th><img src=""></th>
          </tr>
          </table>
<table border="0" width="100%" bgcolor="white" height="8%">
  <tr>
    <th width="16.6%">

      <div class="dropdown">
      <span>Electronics</span>
      <div class="dropdown-content">
        <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Mobiles</a></p>
        <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Telivisions</a></p>
        <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Refrigerators</a></p>
        <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Laptops</a></p>
      </div>
    </div>
  </th>
    <th width="16.6%">
      <div class="dropdown">
        <span>Men</span>
        <div class="dropdown-content">
          <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">T-shirts</a></p>
          <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Jeans</a></p>
          <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Shoes</a></p>
        </div>
      </div>
      </th>
    <th width="16.6%">
        <div class="dropdown">
          <span>Women</span>
        <div class="dropdown-content">
          <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Tops</a></p>
          <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Jeans</a></p>
          <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Suits</a></p>
        </div>
      </div>
    </th>

    <th width="16.6%">
      <div class="dropdown">
        <span>Home & Furniture</span>
      <div class="dropdown-content">
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Tables</a></p>
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Sofa Sets</a></p>
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Beds</a></p>
    </div>
  </div>
</th>

    <th width="16.6%">
      <div class="dropdown">
        <span>Audio</span>
      <div class="dropdown-content">
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Headphones</a></p>
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Microphones</a></p>
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Earbuds</a></p>
    </div>
  </div>
</th>
    <th width="16.6%">
      <div class="dropdown">
        <span>Others</span>
      <div class="dropdown-content">
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Gym accessories</a></p>
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Medicines</a></p>
      <p><a href="#" style="color:black;font-size:15px;text-decoration:none;">Books</a></p>
    </div>
  </div>
</th>
  </tr>
</table>



<?php
$servername ="localhost";
$username ="veom";
$password ="V377eom#";
$dbname ="college_project";

$conn = mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from  product  WHERE ID= '1'  " ;
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total!=0)
{

  while($result=mysqli_fetch_assoc($data))
  {
    echo "
    <table border=\"0\" width=\"100%\">
    <tr>
      <td><img src = ".$result['images']  ."  width=\"300px\" height=\"500px;\"> </td>
      <td><b><font size=\"5\">".$result['name']  . "</font></b><br><br>
      <font size=\"5\" color=\"red\"><b>".$result['price']  . "</b></font><br><br>
    <b><font size=\"5\">  ".$result['variant'] ."</font></b> <br><br>
    ".$result['rating'] ."

      <br>
      <style=\"text-align:right;\"><ul>
        <li>".$result['pdetails']  . "</li></ul>

      </tr>
      </table>

      ?>





    ";
  }
}else {
  echo "no result found";
}



?>
<table border="0" width="100%">
  <tr>
  <th bgcolor="#99ccff" width="25%"><b>Help</b></th>
  <th bgcolor="#99ccff" width="25%"><b>Follow us</b></th>
  <th bgcolor="#99ccff" width="25%"><b>Contact</b></th>
  <th bgcolor="#99ccff" width="25%"><b>Search</b></th>
</tr>
<tr>
<td>
<ul>
<li>Payments</li>
<li>Shipping</li>
<li>Cancellation & Reports</li>
<li>FAQ</li>
</ul></td>
<td>
<ul>
<li>Facebook</li>
<li>Instagram</li>
<li>Twitter</li>
<li>Youtube</li>
</ul></td>
<td>
<ul>
<li>veomnohria@gmail.com</li>
<li>Vasudevsoni@gmail.com</li>
<li>Vaibhav@gmail.com</li>
<li>India</li>
</ul></td>
<td><input type="text" placeholder="Search">
  <input type="button" value="search">


</tr>
</table>
</body>
<html>
