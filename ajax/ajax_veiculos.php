<?php
include('conn.php');

$mySQL = new MySQL;

$marca = $_GET['marca'];
$rsVeiculos = $mySQL->executeQuery("SELECT * FROM veiculo WHERE id_marca = $marca ORDER BY nome;");
$num = mysql_num_rows($rsVeiculos);
$mySQL->disconnect;

for ($i = 0; $i < $num; $i++) {
  $dados = mysql_fetch_array($rsVeiculos);
  $arrVeiculos[$dados['id_veiculo']] = utf8_encode($dados['nome']);
}
?>
<span id="carregando_veiculo">...aguarde, carregando</span>
<select class="contact-form__select" name="veiculo" id="veiculo">
  <?php foreach($arrVeiculos as $value => $nome){
    echo "<option value='{$value}'>{$nome}</option>";
  }
?>