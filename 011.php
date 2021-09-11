<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        p::first-letter {

            padding-left: 10px;
            /* text-indent: 100px; */

        }
    </style>



</head>

<body>


    <?php

    //função/ métodos


    // tipo programação
    // procedural/ funcional
    // Programação orientação objeto

    // pre-definidas count() echo() print() number_format()
    // função que dev. cria
    /*
    private void Area(){

    }
    */


    $altura = 10;
    $largura = 20;

    function  Area()
    {
        $total = $GLOBALS['altura'] *  $GLOBALS['largura'];
        echo $total;
    }
    Area(); // 200
    echo "<hr>";
    $altura = 10;
    $largura = 30;

    // nome da função

    Area(); // 300 , 200
    echo "<hr>";
    function Area_($par1, $par2)
    {
        echo "&emsp;" . $par1 * $par2 . "<br>";
    }
    $a = 101;
    $b = 30;

    Area_($a, $b);
    echo "<hr>";
    function Area02($altura, $largura)
    {   
        if( $altura > 100){
            return ;
        }

        $total = $altura * $largura;
        return ($total);
    }
   // $volta = 3000
    $volta =   Area02($a, $b);

     echo  $volta;

    echo "<p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic illo ducimus, earum iure, nesciunt possimus ab quaerat itaque esse sed animi. Qui, sed laudantium? Veniam incidunt aliquam facere eos eveniet!
 </p>";

   $nome = "Gabriel";
   echo strlen($nome);

echo "<br>";
     // 1º função nomeada (){ .... }
     // 2º função nomeada (par...){ .....}
     // 3º função nomeada (par.. ){ return  variavel, array}
     // 
       $v = fn($x )=>fn($y) =>  $x * $y;

               echo $v($a)($b);
    ?>


</body>

</html>