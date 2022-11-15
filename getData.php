<?php 
// MySQL database connection code
$connection = mysqli_connect("localhost","root","","cadastro") or die("Error " . mysqli_error($connection));
//Fetch sports data
$sql = "SELECT COUNT(id), id FROM tabela GROUP BY id";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//create an array
$array = array();
$i = 0;
while($row = mysqli_fetch_assoc($result))
{  
    $orgname = $row['id'];
    $count = $row['COUNT(id)'];
    $array['cols'][] = array('type' => 'number'); 

    $array['rows'][] = array('c' => array( array('v'=> (int)$orgname), array('v'=>(int)$count)) );
    
}
$data = json_encode($array);
echo $data;
?>