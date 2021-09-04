<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // condicional
    // simples
    // ( &&, and   || or   !  ==   ===  !=  !==  < <= > >=) booleano
    $nome = "Beatriz";
    $idade = 18;
    //$nome  == "Beatriz";   
    //      (  (v                 and               (f) v) v ) f
    if (!(($nome  == "Beatriz") and   !((10 + 18) > 30))) {
        $m  =  "<script type='text/javascript'>";
        $m .=  "alert('é maior') ";
        $m .=  "</script>";
        echo $m;
    }
    //     f               ( v                  v )     v
    if ((10 > 10) && (("y" !== "H") ||  ($nome != "?"))) {

        echo "saida";
    }
    echo "<hr>";
    if (10 >= 10)
        echo "maior <br>";

    // volta para o estado norma do script 
    echo "isso blá, blá <br>";
    echo "isso blá, blá";
    echo "<hr>";
    // composto
    $idade = 20;
    $ms =  "a pessoa tem idade de ";
    if ($idade >= 18) {
        echo " maior <br>";
        if ($idade == 18) {
            echo  $ms .= $idade;
        }
        if ($idade == 20) {
            echo $ms .= $idade;
            //"a pessoa tem idade de " . $idade;
        }
    } else {
        echo "menor";
    }

    // complexo
    $idade = 20;
    if ($idade == 10) {
        echo "idade 10";
    } else if ($idade == 11) {
        echo "idade 11";
    } else if ($idade == 20) {
        echo "idade 20";
    } else {
        echo "idade ?";
    }

    if ($idade == 10) {
        echo "idade 10";
    }
    if ($idade == 11) {
        echo "idade 11";
    }
    if ($idade == 20) {
        echo "idade 20";
           }
    if ($idade == 40) {
        echo "idade ?";
    }
    // escolha

    echo "<hr>";

    $n1 = 10;
    $n2 = 30;
    $op =  "x";  // if($op == "+")
    // break
    // continue
    switch ($op) {
        case "-":
            echo  $res = $n1 - $n2;
            break;
        case "*":
            echo   $res = $n1 * $n2;
            break;

        case "/":
            echo   $res = $n1 / $n2;
            break;
        case "+":
            echo   $res = $n1 + $n2;
            break;
        default:
            echo "?";
            break;
    }

//$d = 1;
//die();
//break;
    // ternario

    $n1 = 10;
    //$v = null;
   //condição  ? true : false; 
 $i = ( $n1 == 10) ? (($n1 % 2) == 0 ?  "par"  : "impar") : "diferente";
  echo $i;
  //echo  $v;


  $n = 10 ;
  $t = "verdadeiro";
  $t ="falso";
  //só tem que ser linear?
  echo   $n == 10 ? 
     $t = "verdadeiro": 
    $t ="falso";
    



    ?>



</body>

</html>