<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    // op. Art   - + * / %
    $n1 = 10;
    $n2 = 20;
    //$n1 = "emerson";
    //$res = $n1 + $n2 ;
    //$res = $n1 +  10 ;
     $res = $n1 + 70  ; // c 
    //$res = $n1 +  "emerson" ;
    echo "<p><strong> $n1 + 10 = </strong>  $res </p>";// 30
     $n1 = 30;
     $n2 = 50;
     //$res = $n1 - $n2; // 30  - 50 = - 20
     $res = $n1 - "10";
     echo "<p><strong> $n1 - $n2 = </strong>  $res </p>";

     echo "<hr>";
     $n1 = 100;
      $rep = $n1 % 3 ;
     echo @"<p><strong> $n1 % 3 = </strong>  $resp </p>";


   ?>    
</body>
</html>