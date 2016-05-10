<?php
include('conn.php');

$mySQL = new MySQL;

$estado = $_GET['estado'];  //codigo do estado passado por parametro

$rsCidades = $mySQL->executeQuery("SELECT * FROM cidades WHERE estados_cod_estados = $estado ORDER BY nome;");
$num = mysql_num_rows($rsCidades);
$mySQL->disconnect;

for ($i = 0; $i < $num; $i++) {
  $dados = mysql_fetch_array($rsCidades);
  $arrCidades[$dados['cod_cidades']] = utf8_encode($dados['nome']);
}
?>
<span id="carregando_cidade">...aguarde, carregando</span>
<select class="contact-form__select" name="cidade" id="cidade">
  <?php foreach($arrCidades as $value => $nome){
    echo "<option value='{$value}'>{$nome}</option>";
  }

?>