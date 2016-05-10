<?php 	
 	//header( 'Cache-Control: no-cache' );
	//header( 'Content-type: application/xml; charset="utf-8"', true );

	//$con = mysql_connect( 'localhost', 'root', '123456' ) ;
	//$conexao = mysql_select_db( 'arcam', $con );

	$db_banco ="arcam";
	$db_user = "root";
	$db_pass = "123456";
	$host = "localhost";

	$conexao = @mysql_connect($host,$db_user,$db_pass);

	if (!($conexao)){
    print("<script language=JavaScript>
          alert(\"Não foi possível conectar ao Banco de Dados.\");
          </script>");
	echo $conexao;
    exit;
}

$db = mysql_select_db($db_banco,$conexao) or
    die("<script language=JavaScript>alert(\"Tabela inexistente!\");</script>"); 

	$codEstado = $_GET['estado'];
	$arrCidades[];
 
	$sql = "SELECT id_cidade, nome FROM cidade WHERE id_estado=$codEstado";
	$res = mysql_query($sql,$conexao);
	$num_cidades = mysql_num_rows($res);
	
	//monto um array de cidades
	for ($i = 0; $i < $num; $i++) {
	  $dados = mysql_fetch_array($res);
	  $arrCidades[$dados['id_cidade']] = utf8_encode($dados['nome']);
	}
	

?>