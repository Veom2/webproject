<?php

 ?>






<!DOCTYPE HTML>
<html>
<head>
  <title>Image upload</title>
  <style>
  #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid black;
  }
  form{
   width: 50%;
  margin: 20px auto;
}
form div{
  margin-top: 5px;
}
#img_div {
  width: 80%;
  padding: 5px;
  margin: 15px auto;
  border: 1px solid #cbcbcb;
  }
  #img_div:after{
    content: "";
    display: block;
    clear: both;
  }
  img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
  }
  </style>
</head>
<body>
  <div id="content">
    <form method="post" action="index.php" enctype="multipart/form-data">
      <input type="hidden name="size" value="100000">
      <div>
        <input type="File" name="image">
      </div>
      <div>
        <textarea name="text cols="40" rows="6" placeholder="say something about this image"></textarea>
      </div>
      <div>
        <input type="submit name = "upload" value="upload image">
      </div>
    </form>
      </div>
    </body>
    </html>
