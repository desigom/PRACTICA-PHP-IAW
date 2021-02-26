<?php
$x = obtener(x);
$inicial = rand(1,10);
$final = rand(1,10);
 
echo "La tabla de multiplicar del $x desde $inicio hasta $final es : \n";
 
mientras($inicial diferente que $final){
 
  echo "$x x $inicial = ". ($inicial multiplicado por $x);
  if($inicial menor que $final){ 
    incrementar $inicial;
  }else{
    disminuir $inicial;
  }
}  
?>