<?php
header('Content-Type: text/html; charset=utf-8');
include "admin/sql/conectar.php";

	
function retorna( $cod, $db )
  {
    $sql = "SELECT user_id, user_cpf, user_nome, user_dtnascimento, user_tel, user_tel, user_email, user_login, user_senha, user_nivel, user_dtgerado FROM usuario WHERE user_email = '$cod' ";

    $query = $db->query( $sql );

    $arr = Array();
    if( $query->num_rows )
    {
      while( $dados = $query->fetch_object() )
      {
		$arr['user_cpf'] = $dados->user_cpf;
        $arr['user_nome'] = $dados->user_nome;
		$arr['user_dtnascimento'] = $dados->user_dtnascimento;
        $arr['user_tel'] = $dados->user_tel;  
		$arr['user_email'] = $dados->user_email;
        $arr['user_login'] = $dados->user_login;  
		$arr['user_senha'] = $dados->user_senha;
        $arr['user_nivel'] = $dados->user_nivel;
        $arr['user_dtgerado'] = $dados->user_dtgerado;
      }
    }
    else
      $arr['user_nome'] = 'EMAIL NÂO CADASTRADO NO SISTEMA - TENTE NOVAMENTE';

    return json_encode( $arr );
  }

/* só se for enviado o parâmetro, que devolve os dados */
if( isset($_GET['user_email']) )
{
  $db = new mysqli('sql37.main-hosting.eu', 'u399695945_rot', '13579asd', 'u399695945_repar');
  echo retorna( filter ( $_GET['user_email'] ), $db );
}

function filter( $var ){
  return $var;//a implementação desta, fica a cargo do leitor
}

?>