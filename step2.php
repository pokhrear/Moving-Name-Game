<?php

session_start();

?>
<?php
if(empty($_POST["name"]))
header("Location:http://pokhrear.dev.fast.sheridanc.on.ca/Web_programming/Assignment6/step1.html");
//exit; // <- don't forget this!
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session Management</title>
        <style media="screen">
          body{
            background-color: orange;
            width: 60%;
            margin: 0 auto;
          }
          h1{
            font-size: 65px;
            font-style: italic;
            color: white;
            text-align: center;
          }
          p{
            text-align: center;
            font-size: 30px;
            color: brown;
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
          input{
            background-color: silver;
            font-size: 20px;
          }
        </style>
    </head>
    <body>
        <?php
        // 2. Store data in the $_SESSION superglobal

        $_SESSION["name"] = $_POST["name"];
        ?>
        <h1>Hello <?= $_SESSION["name"] ?>!!</h1>
        <p>Choose your color</p>
        <form action="step3.php" method="post">
          Red: <input type="number" name="red" required><br><br>
          Green: <input type="number" name="green" required><br><br>
          Blue: <input type="number" name="blue" required><br><br>
          <button type="submit" >Submit</button>
        </form>
    </body>
</html>
