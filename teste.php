<?php
include("ajax/conn.php");

$mySQL = new MySQL;
$rsClientes = $mySQL->executeQuery("SELECT * FROM estado;");
$rsClientes_totalRows = mysql_num_rows($rsClientes);
$mySQL->disconnect;


/*while ($row_rsClientes = mysql_fetch_array($rsClientes))
{
echo $row_rsClientes["nome"];
}*/

echo $data = date("Y"); 
$dataFinal = date("1990");

$result = $data - $dataFinal;

echo $result;


/*while ($row_rsClientes = mysql_fetch_array($rsClientes))
{
echo $row_rsClientes["nome"];
}*/


?>