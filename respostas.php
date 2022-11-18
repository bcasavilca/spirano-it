<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cursophp</title>
    <meta charset="utf-8">
    <!–– site responsivo ––>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!–– css––>
    <link rel="stylesheet" href="style.css" >
    <!–– bootstrap ––>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  


  </head>
  <body style="background-color:#E0C9A6;"> 

<nav class="navbar fixed-bottom  navbar-light" style="background-color: green;">
  <div class="containerleft">
  <nav class="navbar navbar-expand-lg navbar-light green">
    <a class="navbar-brand" href="http://localhost/cursophp/index.html">Formulario</a>
    <a class="navbar-brand" href="http://localhost/cursophp/respostas.php">Storico</a>
    <a class="navbar-brand" href="http://localhost/cursophp/grafico.php">Grafico</a>
    <a class="navbar-brand" href="http://localhost/cursophp/grafico.php">Imprimir</a>
    <a class="navbar-brand" href="http://localhost/cursophp/grafico.php">Enviar</a>
  </nav>
</div>.
</nav>

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