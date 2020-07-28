<?php
$DB = 'u399695945_repar'; // mudar o nome caso deseje
$link = mysql_connect('sql37.main-hosting.eu','u399695945_rot','13579asd') or die('Nao foi possivel se conectar com o banco de dados'); 
$sel = mysql_select_db($DB) or die("Nao foi possivel selecionar a tabela: $DB"); 

/**
* Formata data
*/
function to_date($data)
{
    return date("d/m/Y H:i:s", strtotime($data));
}

?>