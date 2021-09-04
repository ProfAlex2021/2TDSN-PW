<?php
// Array - // vetor, matriz, lista
/*
   string[] x = new string[6] // string
   int[] i = new int[10];
   list<> i = new list<string>()
  ?
   */
    // 1º forma   chave/valor (indice"numero" , associativo "texto");
    $nomes= array(); // form com construtor? 
    $nomes[0] = "Leonardo"; // numero
    $nomes[1] = "Khevyn";   // numero
    $nomes[2] = "Samira";   // numero
    $nomes[3] =  30;   // numero
    $nomes["h"] = "Nicolas";
    // exibir um elemento do array
    echo $nomes[0];
    echo "<br>";
    print_r($nomes);
    echo "<br>";
    var_dump($nomes);
    echo "<br>";
    // 2º
    //               0  1    2   3   5
    $idades = array( 1, 24, 48, 30 , 50 => 81, 5=>95, 59, 'h'=> false );
   var_dump($idades);
    
   echo "<hr>";

    // 3º
     $animais = [ "gato", "cachorro", "passaro", "o" => 20, "u" => 10.9];
     echo "<br>"; echo "<br>";
     var_dump($animais);     

     echo "<hr>";
    // indice   associativo
  //                0   1     2    3   4
    $numeros =array(10, 50 , 70 , 30, 36);
    $texto =array("a"=> "ba", 
                  "e"=> "be",
                   "i"=> "bi");

    //
       for($i= 0; $i < count($numeros); $i++){
            echo $numeros[$i]."<br>";
       }


       echo "<hr>";
      //echo   $i."<br>";


       foreach($numeros as $indice => $valor){
        echo  $indice."= " . $valor."<br>";
       }
       echo "<hr>";

       foreach($texto as $valor){
        echo   $valor."<br>";
       }
     
        echo "<hr>";

        $livros =[
           0=>[ "isbn:" => 1234567, 
                 "Titulo"=> "PHP",
                 "valor:" => 10.99 
               ],
            1=>[ "isbn:" => 8907654, 
                 "Titulo"=> "MYSQL",
                 "valor:" => 100.99 
               ],
             2 =>[ "isbn:" => 0000000, 
               "Titulo"=> "C#",
               "valor:" => 600.99 
             ]  
            ];

            print_r ($livros[1]["Titulo"]);   



    




     
    

// Arrow Function
