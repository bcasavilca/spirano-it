<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cursophp</title>
    <meta charset="utf-8">
  </head>
  <body style="background-color:#E0C9A6;"> 
  	<div class="navbar">
  <a href="http://localhost/cursophp/index.html" class="active">Formulario</a>
  <a href="http://localhost/cursophp/respostas.php">Respostas</a> 
  <a href="http://localhost/cursophp/grafico.php">Grafico</a>  
</div>
   <?php
   if(isset($_SESSION['msg'])){
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
}

$pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
$qtd_result_pg = 100;
$inicio = ($qtd_result_pg * $pagina) - $qtd_result_pg;

$respostas = "SELECT * FROM tabela LIMIT $inicio, $qtd_result_pg" ;
$res = mysqli_query($conexao,$respostas);
while($row_res = mysqli_fetch_assoc($res)){
	echo "Data: ".$row_res['data']."<br>";
	echo "Hora: ".$row_res['hora']."<br>";
	echo "Id: ".$row_res['id']."<br>";
	echo "Status: ".$row_res['status']."<br>";
	echo "Problema: ".$row_res['problema']."<br>";
	echo "Solucao: ".$row_res['solucao']."<br><hr>";

}

?>

  </body>
</html>