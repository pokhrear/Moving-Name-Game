<?php
session_start();
if(empty($_POST["red"]))
header("Location:http://pokhrear.dev.fast.sheridanc.on.ca/Web_programming/Assignment6/step1.html");
//exit; // <- don't forget this!
?>


<!DOCTYPE html>
<html>
 <head>
<meta charset="UTF-8">
 <title></title>
 <style>

 body{
   background-color: skyblue;
   width: 100%;
   margin: 0 auto;
 }
 h1{
   font-size: 35px;
   font-style: italic;
   color: white;
   text-align: center;
 }
 p{
   text-align: center;
   font-size: 30px;
   color: white;
 }
 form{
   text-align: center;
 }
 button{
   font-size: 20px;
   font-style: italic;
   color: yellow;
   background-color: black;
   padding: 5px;
 }
 input[type=radio] {
  border: 0px;
  width: 10%;
  height: 3em;
 }
 </style>
 </head>
<body>
 <?php

 $_SESSION["red"] = $_POST["red"];
 $_SESSION["green"] = $_POST["green"];
 $_SESSION["blue"]=$_POST["blue"];
    ?>
<h1>Hello <?= $_SESSION["name"] ?>, Your Preference are : Red: <?= $_SESSION["red"] ?>, Green: <?= $_SESSION["green"] ?>, Blue: <?= $_SESSION["blue"] ?></h1>
  <p>What Style you Want?</p>
 <form action="step4.php" method="post">
   Circle:<input type="radio" name="shape" value="circle">
   Square:<input type="radio" name="shape" value="square"><br><br>
 <button type="submit">Submit</button>
 </form>
 </body>
</html>
