<?php
include("conexao.php");
$data=$_POST['data'];
$hora=$_POST['hora'];
$id=$_POST['id'];
$status=$_POST['status'];
$problema=$_POST['problema'];
$solucao=$_POST['solucao'];


$sql="INSERT INTO tabela(data,hora,id,status,problema,solucao) VALUES ('$data','$hora','$id','$status','$problema','$solucao')";


if(mysqli_query($conexao, $sql)){
echo "Usuario cadastrado com sucesso";

}else{
	echo "Error".mysql_connect_error($conexao);
}
mysqli_close($conexao);



?>