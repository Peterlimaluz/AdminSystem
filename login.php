<?php
// inclui o arquiv o de configura��o do sistema
include "conectar.php";
// recebe dados do formulario
$user_login = $_POST['user_login'];
$user_senha = $_POST['user_senha'];
$admin = "admin";
$vendedor = "vendedor";
$empresa = "empresa";

//da a mensagem se algum campo obrigatorio estiver em branco e retorna a pagina de cadastro
if( ($user_login == "") || ($user_senha == "")){
        print "<script> alert('Digite Seu Login e Senha!');
                                        history.back(-1);
               </script>";
        exit;
}

// verifica se o usuario existe
$consulta = mysql_query("select * from usuario where user_login='$user_login'");
$campos = mysql_num_rows($consulta);
if($campos != 0) {
// se o usuario digitar o login certo mas a senha errada ele da a menssagem abaixo
	if($user_senha != mysql_result($consulta,0,"user_senha")) {
       print "<script> alert('Login ou Senha Incorreto!');
                                 history.back(-1);
               </script>";
        exit;
	} else {
		// estiver tudo certo vamos ver se ele � o administrador
		if($admin == mysql_result($consulta,0,"user_nivel")) {
			// se for o login do administrador vamos verificar a senha dele
			// se � igual a do administrado
			if($vendedor != mysql_result($consulta,0,"user_nivel")) {
				// se for o administrador vomos criar a sess�o
				// se � igual a do usuario transporte
				if($empresa != mysql_result($consulta,0,"user_nivel")) {
				session_start();
				$_SESSION['user_login'] = $user_login;
				$_SESSION['user_senha'] = $user_senha;

				// redireciona o link para uma outra pagina
                    header("location:admin/index.php");


   }
			}
		} else {
           	// estiver tudo certo vamos ver se ele � o usuario
		if($vendedor == mysql_result($consulta,0,"user_nivel")) {
			// se for o login do administrador vamos verificar a senha dele
			// se � igual a do administrado
			if($admin!= mysql_result($consulta,0,"user_nivel")) {
				// se for o administrador vomos criar a sess�o
				// se for igual a do usuario transporte
				if($empresa != mysql_result($consulta,0,"user_nivel")) {
				session_start();
				$_SESSION['user_login'] = $user_login;
				$_SESSION['user_senha'] = $user_senha;

				// redireciona o link para uma outra pagina
				header("Location:vendedor");

        }
			}
					} else {
           	// estiver tudo certo vamos ver se ele � o usuario
		if($empresa == mysql_result($consulta,0,"user_nivel")) {
			// se for o login do administrador vamos verificar a senha dele
			// se � igual a do administrado
			if($admin != mysql_result($consulta,0,"user_nivel")) {
				// se for o administrador vomos criar a sess�o
				// se for igual a do usuario transporte
				if($vendedor != mysql_result($consulta,0,"user_nivel")) {
				session_start();
				$_SESSION['user_login'] = $user_login;
				$_SESSION['user_senha'] = $user_senha;

				// redireciona o link para uma outra pagina
				header("Location:empresa/index.php");
			 
		
		      }
            }
          }
        }
      }
    }
  
} else {
//se o usuario digitar um login que n�o exista ele da a menssagem abaixo
        print "<script> alert('Usu�rio ou senha Incorreto!');
                               location.href='index.php';
               </script>";
        exit;
}
?>
