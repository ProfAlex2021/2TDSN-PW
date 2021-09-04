<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo " PW2"; ?>    </title>
</head>
<body>
 <?php   
    echo "<h1> Sexta-feira 13 </h1>";
 ?>  
  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id magni ipsam autem cumque quasi! Accusantium tenetur corrupti minima qui, rerum voluptatem laboriosam
       dolore. Ipsum accusantium, doloremque esse impedit est eos. </p>
<?php  
   print_r(" <br> Olá");

   print("<br> outra forma de exibir na tela<br>");
   
   printf("No estoque do Bar a %d garrafas de água tônica",10);

  // variavel no php
  // String, inteiro, float, double, booleano, Array, objeto;
   /*
      C# 
       tipo variavel 
       string nome;
    */
    echo "<br>";
   $nome = "Leornardo"; // string
   
   echo "Nome: $nome "; // Nome:Leornardo
   echo  gettype($nome);
     
   
   $nome = 16.99;
   echo "<br>";
   echo "Nome: $nome ";// Nome:16
   echo  gettype($nome);
   
   echo "<br>";
   $nome = true;// boleano
   
   echo "Nome: " . $nome . " - blá, blá ... ";

  echo  gettype($nome);

  echo "<hr>";

  $nome = 'Gabriel';
  $idade = 20; 
  $Gabriel = 'sei lá';
                                                   //  "f"
  echo "com declarar variavel no php \$nome =". $$nome .",  \$idade  \"f \" "; 

  

?>

</body>
</html>