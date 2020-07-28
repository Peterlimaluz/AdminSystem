<?php
// faz conexão com o servidor MySQL

//$local_serve = "localhost"; 	 // local do servidor
//$usuario_serve = "u399695945_rot";		 // nome do usuario
//$senha_serve = "13579asd";			 	 // senha
//$banco_de_dados = "u399695945_repar"; 	 // nome do banco de dados

$local_serve = "localhost"; 	 // local do servidor
$usuario_serve = "root";		 // nome do usuario
$senha_serve = "";			 	 // senha
$banco_de_dados = "admin"; 	 // nome do banco de dados

$conn = @mysql_connect($local_serve,$usuario_serve,$senha_serve) or die ("O servidor não responde!");
mysql_set_charset('utf8',$conn);
// conecta-se ao banco de dados
$db = @mysql_select_db($banco_de_dados,$conn)
	or die ("Não foi possível conectar-se ao banco de dados!");


?>