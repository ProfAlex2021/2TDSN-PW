<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>


</style>

</head>
<body>
    <?php
     // for , while , do while, foreach
        $c= "red";
        
     
     for($i= 10; $i > 0 ; $i-- ){
        //$c = "#" . (dechex(5+$i)) . (dechex(1+$i)) . (dechex(2 + $i));
        $c = "#" . (dechex($i)) . (dechex($i)) . (dechex($i));
         echo "<p style=\"color:$c\">$i</p>";    
          
     }
   echo "<hr> -";
   echo "<table border='1'>";

    for($i= 0; $i < 5 ; $i++ ){
     
      echo "<tr>";

        for($j= 0; $j < 5 ; $j++ ){
           
            echo "<td> $j x $i = " . ($i * $j) ."</td>";   
        }  
    echo"</tr>"; 
     }
     echo"</table>";

$i = 0;
  while($i < 10){
  echo $i ." ";
  $i++;
  }
echo "<hr>";
  do {
    echo $i ." ";
    $i++;
  }while($i < 10);

  echo "<hr>";

 $i = 0;
 do {
    echo $i ." ";
    $i++;
  }while($i < 10);

 while($i < 10){
  echo $i ." ";
  $i++;
  }


     


    ?>
</body>
</html>