<?php
$Servidor="localhost";
$Usuario="root";
$Senha="";
$banco="cadastro";

$conexao=mysqli_connect($Servidor,$Usuario,$Senha,$banco);
if(!$conexao){
die("Houve um erro: ".mysqli_connnect_error());

}
?>