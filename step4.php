<?php
session_start();
if(empty($_POST["shape"]))
header("Location:http://pokhrear.dev.fast.sheridanc.on.ca/Web_programming/Assignment6/step1.html");
//exit; // <- don't forget this!
?>
<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
    <style >
      body{
        background-color: Wheat;
      }
      canvas{
        margin-left: 10%;
      }
    </style>
  </head>
  <body>
    <?php
    $name =  $_SESSION["name"];
    $r = $_SESSION["red"];
    $g = $_SESSION["green"];
    $b =$_SESSION["blue"];
    $_SESSION["shape"] = $_POST["shape"];
    $s =$_SESSION["shape"];
     ?>
    <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script>
    var myName ="<?php  echo $name; ?>";
    var red = [<?php echo $r ?>, <?php echo $g?>, <?php echo $b?>];
    var green = [<?php echo $r ?>, <?php echo $g ?>,<?php $b ?>];
    var blue = [196, 77, 55];
    var purple =[ 280, 50, 60];
    var orange = [40, 100, 60];
    var letterColors;
    letterColors = [red, orange, green, blue,  purple];

    drawName(myName, letterColors);
    var s = "<?php echo $s ?>";
    if(s=="square")
    {
        bubbleShape = 'square';
    }
    else
    {
        bubbleShape = 'circle';
    }

    bounceBubbles();

    </script>
    <?php
    // destroy the session
    session_destroy();
    ?>
  </body>
</html>
