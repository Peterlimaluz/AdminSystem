<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Pesquisa :: Dia de Fatura</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Reparsul - Reparos e Manutenção de Containers" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link href="../../../css/style.css" rel="stylesheet" type="text/css" />
<!-- Favicon -->
<link rel="shortcut icon" href="../../../favicon.png">
<!-- font-awesome icons -->
<link href="../../../css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="../../../js/jquery-1.11.1.min.js"></script>
<script src="../../../js/modernizr.custom.js"></script>
<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--//webfonts--> 
<!--animate-->
<link href="../../../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../../../js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<!-- Search Cliente 1 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cpf").blur(function(){
      var $cli_rsocial = $("#rsocial");
	  var $cli_cep = $("#cep");
	  var $cli_logradouro = $("#rua");
	  var $cli_num = $("#num");
	  var $cli_bairro = $("#bairro");
	  var $cli_cidade = $("#cidade");
	  var $cli_ac = $("#ac");

      $cli_rsocial.val('Carregando...');
      $cli_cep.val('Carregando...');
      $cli_logradouro.val('Carregando...');
      $cli_num.val('Carregando...');
      $cli_bairro.val('Carregando...');
      $cli_cidade.val('Carregando...');
      $cli_ac.val('Carregando...');

        $.getJSON(
          '../../../sql/select_clientes.php',
          { cli_cpf: $( this ).val() },
          function( json )
          {
            $cli_rsocial.val( json.cli_rsocial );
            $cli_cep.val( json.cli_cep );
            $cli_logradouro.val( json.cli_logradouro );
            $cli_num.val( json.cli_num );
            $cli_bairro.val( json.cli_bairro );
            $cli_cidade.val( json.cli_cidade );
            $cli_ac.val( json.cli_ac );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH Cliente 1 -->
<!-- Search Produto 1 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod").blur(function(){
      var $pro_tipo = $("#tipo");
	  var $pro_valor = $("#valor");
	  var $pro_largura = $("#largura");
	  var $pro_comprimento = $("#comprimento");
	  var $pro_altura = $("#altura");
	  var $pro_peso = $("#peso");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
      $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
            $pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 1 -->
<!-- Search Produto 2 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod2").blur(function(){
      var $pro_tipo = $("#tipo2");
	  var $pro_valor = $("#valor2");
	  var $pro_largura = $("#largura2");
	  var $pro_comprimento = $("#comprimento2");
	  var $pro_altura = $("#altura2");
	  var $pro_peso = $("#peso2");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 2 -->
<!-- Search Produto 3 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod3").blur(function(){
      var $pro_tipo = $("#tipo3");
	  var $pro_valor = $("#valor3");
	  var $pro_largura = $("#largura3");
	  var $pro_comprimento = $("#comprimento3");
	  var $pro_altura = $("#altura3");
	  var $pro_peso = $("#peso3");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 3 -->
<!-- Search Produto 4 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod4").blur(function(){
      var $pro_tipo = $("#tipo4");
	  var $pro_valor = $("#valor4");
	  var $pro_largura = $("#largura4");
	  var $pro_comprimento = $("#comprimento4");
	  var $pro_altura = $("#altura4");
	  var $pro_peso = $("#peso4");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 4 -->
<!-- Search Produto 5 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod5").blur(function(){
      var $pro_tipo = $("#tipo5");
	  var $pro_valor = $("#valor5");
	  var $pro_largura = $("#largura5");
	  var $pro_comprimento = $("#comprimento5");
	  var $pro_altura = $("#altura5");
	  var $pro_peso = $("#peso5");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 5 -->
<!-- Search Produto 6 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod6").blur(function(){
      var $pro_tipo = $("#tipo6");
	  var $pro_valor = $("#valor6");
	  var $pro_largura = $("#largura6");
	  var $pro_comprimento = $("#comprimento6");
	  var $pro_altura = $("#altura6");
	  var $pro_peso = $("#peso6");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 6 -->
<!-- Search Produto 7 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod7").blur(function(){
      var $pro_tipo = $("#tipo7");
	  var $pro_valor = $("#valor7");
	  var $pro_largura = $("#largura7");
	  var $pro_comprimento = $("#comprimento7");
	  var $pro_altura = $("#altura7");
	  var $pro_peso = $("#peso7");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 7 -->
<!-- Search Produto 8 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod8").blur(function(){
      var $pro_tipo = $("#tipo8");
	  var $pro_valor = $("#valor8");
	  var $pro_largura = $("#largura8");
	  var $pro_comprimento = $("#comprimento8");
	  var $pro_altura = $("#altura8");
	  var $pro_peso = $("#peso8");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 8 -->
<!-- Search Produto 9 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod9").blur(function(){
      var $pro_tipo = $("#tipo9");
	  var $pro_valor = $("#valor9");
	  var $pro_largura = $("#largura9");
	  var $pro_comprimento = $("#comprimento9");
	  var $pro_altura = $("#altura9");
	  var $pro_peso = $("#peso9");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 9 -->
<!-- Search Produto 10 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod10").blur(function(){
      var $pro_tipo = $("#tipo10");
	  var $pro_valor = $("#valor10");
	  var $pro_largura = $("#largura10");
	  var $pro_comprimento = $("#comprimento10");
	  var $pro_altura = $("#altura10");
	  var $pro_peso = $("#peso10");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 10 -->
<!-- Search Produto 11 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod11").blur(function(){
      var $pro_tipo = $("#tipo11");
	  var $pro_valor = $("#valor11");
	  var $pro_largura = $("#largura11");
	  var $pro_comprimento = $("#comprimento11");
	  var $pro_altura = $("#altura11");
	  var $pro_peso = $("#peso11");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 11 -->
<!-- Search Produto 12 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod12").blur(function(){
      var $pro_tipo = $("#tipo12");
	  var $pro_valor = $("#valor12");
	  var $pro_largura = $("#largura12");
	  var $pro_comprimento = $("#comprimento12");
	  var $pro_altura = $("#altura12");
	  var $pro_peso = $("#peso12");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 12 -->
<!-- Search Produto 13 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod13").blur(function(){
      var $pro_tipo = $("#tipo13");
	  var $pro_valor = $("#valor13");
	  var $pro_largura = $("#largura13");
	  var $pro_comprimento = $("#comprimento13");
	  var $pro_altura = $("#altura13");
	  var $pro_peso = $("#peso13");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 13 -->
<!-- Search Produto 14 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod14").blur(function(){
      var $pro_tipo = $("#tipo14");
	  var $pro_valor = $("#valor14");
	  var $pro_largura = $("#largura14");
	  var $pro_comprimento = $("#comprimento14");
	  var $pro_altura = $("#altura14");
	  var $pro_peso = $("#peso14");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 14 -->
<!-- Search Produto 15 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod15").blur(function(){
      var $pro_tipo = $("#tipo15");
	  var $pro_valor = $("#valor15");
	  var $pro_largura = $("#largura15");
	  var $pro_comprimento = $("#comprimento15");
	  var $pro_altura = $("#altura15");
	  var $pro_peso = $("#peso15");

      $pro_tipo.val('Carregando...');
      $pro_valor.val('Carregando...');
	  $pro_largura.val('Carregando...');
      $pro_comprimento.val('Carregando...');
      $pro_altura.val('Carregando...');
      $pro_peso.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos.php',
          { pro_cod: $( this ).val() },
          function( json )
          {
            $pro_tipo.val( json.pro_tipo );
            $pro_valor.val( json.pro_valor );
			$pro_largura.val( json.pro_largura );
            $pro_comprimento.val( json.pro_comprimento );
            $pro_altura.val( json.pro_altura );
            $pro_peso.val( json.pro_peso );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH PRODUTO 15 -->
<script src="../../../js/metisMenu.min.js"></script>
<script src="../../../js/custom.js"></script>
<link href="../../../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="../../../index.php"><i class="fa fa-home nav_icon"></i>Home</a>
						</li>
						<li>
							<a href="../../../site/"><i class="fab fa-edge nav_icon"></i>Site</a>
						</li>
						<li>
							<a href="../../../cadastro/"><i class="fa fa-cogs nav_icon"></i>Cadastro <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM clientes';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$total = $query[0];
									?>
									<a href="../../../cadastro/cliente/">Clientes <span class="nav-badge-btm"><?php echo $total ?></span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM produtos';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$total2 = $query[0];
									?>
									<a href="../../../cadastro/produtos/">Produtos <span class="nav-badge-btm"><?php echo $total2 ?></span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM servicos';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$total3 = $query[0];
									?>
									<a href="../../../cadastro/servicos/">Serviços <span class="nav-badge-btm"><?php echo $total3 ?></span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM fornecedores';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$total4 = $query[0];
									?>
									<a href="../../../cadastro/fornecedores/">Fornecedores <span class="nav-badge-btm"><?php echo $total4 ?></span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM transportes';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$total5 = $query[0];
									?>
									<a href="../../../cadastro/transportes/">Transporte <span class="nav-badge-btm"><?php echo $total5 ?></span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM usuario';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$total6 = $query[0];
									?>
									<a href="../../../cadastro/usuarios/">Usuários <span class="nav-badge-btm"><?php echo $total6 ?></span></a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li class="">
							<a href="#"><i class="fa fa-dollar nav_icon"></i>Financeiro <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM contas_a_pagar';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$contas = $query[0];
									?>
									<a href="../../../financeiro/contas-a-pagar/">Contas á Pagar <span class="nav-badge-btm" style="background-color: orchid;"> <?php echo $contas ?> </span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM contas_a_receber';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$contas2 = $query[0];
									?>
									<a href="../../../financeiro/contas-a-receber/">Contas á Receber <span class="nav-badge-btm" style="background-color: orchid;"> <?php echo $contas2 ?> </span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM recibo';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$contas3 = $query[0];
									?>
									<a href="../../../financeiro/recibo/">Recibo <span class="nav-badge-btm" style="background-color: orchid;"> <?php echo $contas3 ?> </span></a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li class="">
							<a href="relatorios"><i class="fa fa-bar-chart nav_icon"></i>Relatórios <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="../../../relatorios/estatisticas/">Estatisticas</a>
								</li>
								<li>
									<a href="../../../relatorios/contratos/">Contratos</a>
								</li>
								<li>
									<a href="../../../relatorios/financeiro/">Financeiro</a>
								</li>
								<li>
									<a href="../../../relatorios/cadastros/">Cadastros</a>
								</li>
								<li>
									<a href="../../../relatorios/controle-patio/controle/">Controle de Pátio</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-book nav_icon"></i>Contratos<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM contrato_locacao';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$loca = $query[0];
									?>
									<a href="../../../contratos/locacoes/">Locação  <span class="nav-badge-btm" style="background-color:deepskyblue;"> <?php echo $loca ?> </span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM contrato_vendas';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$loca2 = $query[0];
									?>
									<a href="../../../contratos/vendas/">Vendas <span class="nav-badge-btm" style="background-color:deepskyblue;"> <?php echo $loca2 ?> </span></a>
								</li>
								<li>									
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM manutencao';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$loca3 = $query[0];
									?>
									<a href="../../../contratos/manutencao/">Manutenção <span class="nav-badge-btm" style="background-color:deepskyblue;"> <?php echo $loca3 ?> </span></a>
								</li>
								<li>
									<?php
										include "../../../sql/conectar.php";
										$begin = @$_GET['begin'];
										if (!$begin) { $begin = 0; }

										$query = 'SELECT COUNT(*) FROM orcamento';
										$query = mysql_query($query);
										$query = mysql_fetch_array($query);
										$loca4 = $query[0];
									?>
									<a href="../../../contratos/orcamento/">Orçamentos <span class="nav-badge-btm" style="background-color:deepskyblue;"> <?php echo $loca4 ?> </span></a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="../../../controle-patio/"><i class="fa fa-table nav_icon"></i>Controle de Pátio </a>
						</li>
						<li>
							<a href="../../../agenda/"><i class="fa fa-calendar nav_icon"></i>Agenda</a>
						</li>						
						<li>
							<a href="../../../sql/logout.php" class="chart-nav"><i class="fa fa-times nav_icon"></i>Logout </a>
						</li>
						
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="../../../">
						<h1>REPARSUL</h1>
						<span>............</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<a href="#" style="color: slateblue; font-weight: 600; text-transform: uppercase;"><div class="titlePg">Pesquisa Locação</div></a>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
<?php
require_once "../../../sql/conectar.php";
require_once "../../../sql/valida_session.php";

$sql   =   mysql_query("SELECT * FROM usuario") 
  						or die("ERRO NA CONSULTA SQL");
//LINHAS TOTAIS AFETADAS PELA CONSULT
$row  =  mysql_num_rows($sql);
?>
			<div class="header-right">				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="../../../images/a.png" alt=""> </span> 
									<div class="user-name">
										<p><?php echo "<p> ".$_SESSION['user_login']." </p>" ?></p>
										<span>Administrador</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="../../../cadastro/usuarios/alterar/meu_cadastro.php"><i class="fa fa-user"></i> Perfil</a> </li> 
								<li> <a href="../../../sql/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1"><i class="material-icons">border_color </i> Pesquisa Contrato de Locação</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Pesquisa por dia de faturamento:</h4>
<?php
$dia = $_POST['fadia'];						
$query = "SELECT COUNT(*) FROM contrato_locacao WHERE lo_fadia LIKE '%$dia%'";
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$total = $query[0];
?>
						<div class="row text-center">
				<h3>Total de Contrato Cadastrados : <strong style="color: crimson;"><?php echo $total ?></strong></h3>
	</div>
						<br>
						<table class="table table-striped table-responsive table-hover bg-warning"> 
							<thead> 
								<tr> 
									<th>CÓDIGO</th> 
									<th>CPF/CNPJ</th> 
									<th>DATA GERADO</th> 
									<th>CLIENTE</th> 
									<th>TIPO</th>
									<th>SITUAÇÃO</th>
									<th>FORMA PAG.</th>
									<th>EXPANDIR</th>
								</tr> 
							</thead>
	<?php
	
$dia = $_POST['fadia'];
$query = "SELECT DISTINCT * FROM contrato_locacao WHERE lo_fadia LIKE '%$dia%'";
$query = mysql_query($query);

$c = 2;
$cores = array("#ecfeef","#fcffe0");

while ($linha = mysql_fetch_array($query)) {

  $var = $linha['lo_dtabertura'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
 
   $varE = $linha['lo_edhentrega'];
   $varE = explode(" ",$varE);
   $diaE = $varE[0];
   $diaE = explode("-",$diaE);
   $dataE = "$diaE[2]/$diaE[1]/$diaE[0]";

   $varR = $linha['lo_rdentrega'];
   $varR = explode(" ",$varR);
   $diaR = $varR[0];
   $diaR = explode("-",$diaR);
   $dataR = "$diaR[2]/$diaR[1]/$diaR[0]";
	
   $varA = $linha['lo_dtAlterado'];
   $varA = explode(" ",$varA);
   $diaA = $varA[0];
   $diaA = explode("-",$diaA);
   $dataA = "$diaA[2]/$diaA[1]/$diaA[0]";
   
   $index = $c % 2;
   $c++;
   $cor = $cores[$index];
 
?> 
							<tbody> 
								<tr title="<?php echo $linha['lo_idOne']?><?php if($linha['lo_idTwo'] == ''){}else{?> | <?php echo $linha['lo_idTwo']; }?><?php if($linha['lo_idThree'] == ''){}else{?> | <?php echo $linha['lo_idThree']; }?><?php if($linha['lo_idFour'] == ''){}else{?> | <?php echo $linha['lo_idFour']; }?><?php if($linha['lo_idFive'] == ''){}else{?> | <?php echo $linha['lo_idFive']; }?><?php if($linha['lo_idSix'] == ''){}else{?> | <?php echo $linha['lo_idSix']; }?><?php if($linha['lo_idSev'] == ''){}else{?> | <?php echo $linha['lo_idSev']; }?><?php if($linha['lo_idEig'] == ''){}else{?> | <?php echo $linha['lo_idEig']; }?><?php if($linha['lo_idNine'] == ''){}else{?> | <?php echo $linha['lo_idNine']; }?><?php if($linha['lo_idTen'] == ''){}else{?> | <?php echo $linha['lo_idTen']; }?><?php if($linha['lo_idTenO'] == ''){}else{?> | <?php echo $linha['lo_idTenO']; }?><?php if($linha['lo_idTenTw'] == ''){}else{?> | <?php echo $linha['lo_idTenTw']; }?><?php if($linha['lo_idTenTr'] == ''){}else{?> | <?php echo $linha['lo_idTenTr']; }?><?php if($linha['lo_idTenFour'] == ''){}else{?> | <?php echo $linha['lo_idTenFour']; }?><?php if($linha['lo_idTenFive'] == ''){}else{?> | <?php echo $linha['lo_idTenFive']; }?>">
									<th scope="row"><?php echo $linha['lo_id'] ?></th> 
									<td><?php echo $linha['lo_cpf'] ?></td> 
									<td><?php echo $data ?></td> 
									<td><?php echo $linha['lo_nome'] ?></td>
									<td><?php echo $linha['lo_tipo'] ?></td>
									<th style="background-color: aquamarine"><?php echo $linha['lo_situacao'] ?></th>
									<td><?php echo $linha['lo_faforma'] ?></td>
									<td><a class="btn btn-primary" id="noprint" data-toggle="collapse" href="#<?php echo $linha['lo_id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo $linha['lo_id'] ?>"><i class="fa fa-plus-square nav_icon"></i></a></td>
								</tr>
							</tbody>
							<tr class="collapse" id="<?php echo $linha['lo_id'] ?>" style="background: #FFF6A9;">
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterar<?php echo $linha['lo_id'] ?>" data-whatever="@mdo"><i class="fa fa-pencil-alt nav_icon"></i> Alterar</button>
							<div class="modal fade" id="alterar<?php echo $linha['lo_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="alterar<?php echo $linha['lo_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="info<?php echo $linha['lo_id'] ?>Label">REGISTRO DO CONTRATO DE LOCAÇÃO: (<b style="color: midnightblue;"><?php echo $linha['lo_id'] ?></b>)</h4>
									  <hr>
										<label>Contrato Gerado Pelo Usuário: <small style="color: crimson;"><?php echo $linha['lo_user']?></small></label>
										
								  </div>
								  <div class="modal-body">
									<form action="../../../sql/update-contrato-locacao.php" method="post">
										<div class="form-group">
											<input type="hidden" name="lo_id" value="<?php echo $linha['lo_id']?>">
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $linha['lo_id'] ?>">Dados Gerais :</a></i></u></div>
											<div id="collapseOne<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $linha['lo_id'] ?>">
												<div class="row">
													<div class="col-md-3">
														<label>CPF/CNPJ</label>
													<input type="text" name="lo_cpf" id="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="14" class="form-control" value="<?php echo $linha['lo_cpf']?>" placeholder="CPF/CNPJ - Cliente">
														<script>
													function formatarCampo(campoTexto) {
														if (campoTexto.value.length <= 11) {
														campoTexto.value = mascaraCpf(campoTexto.value);
														} else {
														campoTexto.value = mascaraCnpj(campoTexto.value);
														}
														}
													function retirarFormatacao(campoTexto) {
														campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g,"");
														}
													function mascaraCpf(valor) {
														return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
														}
													function mascaraCnpj(valor) {
														return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g,"\$1.\$2.\$3\/\$4\-\$5");
														}
														</script>
													</div>
													<div class="col-md-3">
														 <!-- Adicionando Javascript -->
											<script type="text/javascript" >

												$(document).ready(function() {

													function limpa_formulário_cep() {
														// Limpa valores do formulário de cep.
														$("#rua").val("");
														$("#bairro").val("");
														$("#cidade").val("");
														$("#uf").val("");
														$("#ibge").val("");
													}

													//Quando o campo cep perde o foco.
													$("#cep").blur(function() {

														//Nova variável "cep" somente com dígitos.
														var cep = $(this).val().replace(/\D/g, '');

														//Verifica se campo cep possui valor informado.
														if (cep != "") {

															//Expressão regular para validar o CEP.
															var validacep = /^[0-9]{8}$/;

															//Valida o formato do CEP.
															if(validacep.test(cep)) {

																//Preenche os campos com "..." enquanto consulta webservice.
																$("#rua").val("...");
																$("#bairro").val("...");
																$("#cidade").val("...");
																$("#uf").val("...");
																$("#ibge").val("...");

																//Consulta o webservice viacep.com.br/
																$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

																	if (!("erro" in dados)) {
																		//Atualiza os campos com os valores da consulta.
																		$("#rua").val(dados.logradouro);
																		$("#bairro").val(dados.bairro);
																		$("#cidade").val(dados.localidade);
																		$("#uf").val(dados.uf);
																		$("#ibge").val(dados.ibge);
																	} //end if.
																	else {
																		//CEP pesquisado não foi encontrado.
																		limpa_formulário_cep();
																		alert("CEP não encontrado.");
																	}
																});
															} //end if.
															else {
																//cep é inválido.
																limpa_formulário_cep();
																alert("Formato de CEP inválido.");
															}
														} //end if.
														else {
															//cep sem valor, limpa formulário.
															limpa_formulário_cep();
														}
													});
												});

											</script>
														<label>CEP</label>
														<input type="text" name="lo_cep" id="cep" value="<?php echo $linha['lo_cep']?>" class="form-control" placeholder="Cep">
													</div>
													<div class="col-md-3">
														<label>CIDADE</label>
														<input type="text" name="lo_cidade" id="cidade" value="<?php echo $linha['lo_cidade']?>" class="form-control" placeholder="Cidade">
													</div>
													<div class="col-md-3">
														<label>BAIRRO</label>
														<input type="text" name="lo_bairro" id="bairro" value="<?php echo $linha['lo_bairro']?>" class="form-control" placeholder="Bairro">
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<label>LOGRADOURO</label>
														<input type="text" name="lo_logradouro" id="rua" value="<?php echo $linha['lo_logradouro']?>" class="form-control" placeholder="Endereço">
													</div>
													<div class="col-md-2">
														<label>NUMERO</label>
														<input type="text" name="lo_numero" id="num" value="<?php echo $linha['lo_numero']?>" class="form-control" placeholder="Número">
													</div>
													<div class="col-md-2">
														<label>AC</label>
														<input type="text" name="lo_ac" id="ac" value="<?php echo $linha['lo_ac']?>" class="form-control" placeholder="UF">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<label class="control-label">Cliente</label>
														<input class="form-control" name="lo_nome" value="<?php echo $linha['lo_nome'] ?>">
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-4">
														<label>TIPO DE CONTRATO: <b style="color: crimson;"><?php echo $linha['lo_tipo'] ?></b></label>
														<select class="form-control" name="lo_tipo">
															<option value="<?php echo $linha['lo_tipo']?>"></option>
															<option value="ALUGUEL">ALUGUEL</option>
															<option value="EMPRÉSTIMO">EMPRÉSTIMO</option>
														</select>
													</div>
													<div class="col-md-4">
														<label>Data Gerado: <b style="color: crimson;"><?php echo $data ?></b></label>
														<input type="date" name="lo_dtabertura" class="form-control" placeholder="Data Gerado:" value="<?php echo $linha['lo_dtabertura']?>">
													</div>
													<div class="col-md-4">
														<label>SITUAÇÃO : <b style="color: crimson;"><?php echo $linha['lo_situacao'] ?></b></label>
														<select class="form-control" name="lo_situacao">
															<option value="<?php echo $linha['lo_situacao'] ?>"></option>
														  	<option value="ABERTO">ABERTO</option>
															<option value="ATIVO">ATIVO</option>
															<option value="FINALIZADO">FINALIZADO</option>
															<option value="CANCELADO">CANCELADO</option>
														</select>
													</div>
													<input type="hidden" name="lo_user" value="<?php echo $linha['lo_user']?>">
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $linha['lo_id'] ?>">Faturamento :</a></i></u></div>
											<div id="collapseTwo<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $linha['lo_id'] ?>">
												<div class="row">
													<div class="col-md-2">
														<label>Dias: <b style="color: crimson;"><?php echo $linha['lo_fadia'] ?></b></label>
														<select class="form-control" name="lo_fadia">
														  <option value="<?php echo $linha['lo_fadia'] ?>">Dias</option>
														  <option value="01">01</option>
														  <option value="02">02</option>
														  <option value="03">03</option>
														  <option value="04">04</option>
														  <option value="05">05</option>
														  <option value="06">06</option>
														  <option value="07">07</option>
														  <option value="08">08</option>
														  <option value="09">09</option>
														  <option value="10">10</option>
														  <option value="11">11</option>
														  <option value="12">12</option>
														  <option value="13">13</option>
														  <option value="14">14</option>
														  <option value="15">15</option>
														  <option value="16">16</option>
														  <option value="17">17</option>
														  <option value="18">18</option>
														  <option value="19">19</option>
														  <option value="20">20</option>
														  <option value="21">21</option>
														  <option value="22">22</option>
														  <option value="23">23</option>
														  <option value="24">24</option>
														  <option value="25">25</option>
														  <option value="26">26</option>
														  <option value="27">27</option>
														  <option value="28">28</option>
														  <option value="29">29</option>
														  <option value="30">30</option>
														  <option value="31">31</option>
														</select>
													</div>
													<div class="col-md-4">
														<label>Quantidade de Vezes: <b style="color: crimson;"><?php echo $linha['lo_faquantidade'] ?></b></label>
														<select name="lo_faquantidade" class="form-control">
															<option value="<?php echo $linha['lo_faquantidade'] ?>"></option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
														</select>
													</div>
													<div class="col-md-6">
														<label>Forma de Pagamento: <b style="color: crimson;"><?php echo $linha['lo_faforma'] ?></b></label>
														<select class="form-control" name="lo_faforma">
															<option value="<?php echo $linha['lo_faforma'] ?>">FORMA DE PAGAMENTO</option>
															<option value="CARNE">CARNE</option>
															<option value="BOLETO">BOLETO</option>
															<option value="CRÉDITO">CRÉDITO</option>
															<option value="DÉBITO">DÉBITO</option>
															<option value="CHEQUE">CHEQUE</option>
															<option value="DEVOLUÇÃO">DEVOLUÇÃO</option>
															<option value="DINHEIRO A VISTA">DINHEIRO A VISTA</option>
															<option value="DINHEIRO PARCELADO">DINHEIRO PARCELADO</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP1<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP1<?php echo $linha['lo_id'] ?>">Produtos 1:</a></i></u></div>
								<div id="collapseP1<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP1<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idOne" id="codigo" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoOne" id="tipo" class="form-control" placeholder="Tipo :" value="<?php echo $linha['lo_tipoOne'] ?>">
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeOne" id="quantidade" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade :" value="<?php echo $linha['lo_quantidadeOne'] ?>">
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorOne" onKeyUp="calcular(this.value)" id="valor" class="form-control" placeholder="Valor Unitario:" value="<?php echo $linha['lo_valorOne'] ?>">
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTOne" onKeyUp="calcular(this.value)" id="valorT" class="form-control" placeholder="Valor Total:" value="<?php echo $linha['lo_valTOne'] ?>">
									</div>
									<!-- Medição de Produto 1 -->
									<input type="hidden" name="lo_larguraOne" id="largura" value="<?php echo $linha['lo_larguraOne']?>">
									<input type="hidden" name="lo_comprimentoOne" id="comprimento" value="<?php echo $linha['lo_comprimentoOne']?>">
									<input type="hidden" name="lo_alturaOne" id="altura" value="<?php echo $linha['lo_alturaOne']?>">
									<input type="hidden" name="lo_pesoOne" id="peso" value="<?php echo $linha['lo_pesoOne']?>">
									<!-- FIM Medição Produto 1 -->
								</div>
									<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP2<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP2<?php echo $linha['lo_id'] ?>"> -- Produtos 2 :</a></i></u></div>								
								</div>								
								<div id="collapseP2<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod2" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod2').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS2"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTwo" id="codigo2" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTwo" id="tipo2" value="<?php echo $linha['lo_tipoTwo'] ?>" class="form-control" placeholder="Tipo 2:">
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTwo" id="quantidade2" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['lo_quantidadeTwo'] ?>" placeholder="Quantidade 2:">
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTwo" id="valor2" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorTwo'] ?>" class="form-control" placeholder="Valor Unitario 2:">
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label> 
										<input type="text" name="lo_valTTwo" onKeyUp="calcular(this.value)" id="valorT2" value="<?php echo $linha['lo_valTTwo'] ?>" class="form-control" placeholder="Valor Total 2:">
									</div>
									<input type="hidden" name="lo_larguraTwo" id="largura2" value="<?php echo $linha['lo_larguraTwo']?>">
									<input type="hidden" name="lo_comprimentoTwo" id="comprimento2" value="<?php echo $linha['lo_comprimentoTwo']?>">
									<input type="hidden" name="lo_alturaTwo" id="altura2" value="<?php echo $linha['lo_alturaTwo']?>">
									<input type="hidden" name="lo_pesoTwo" id="peso2" value="<?php echo $linha['lo_pesoTwo']?>">
								</div>
									<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP3<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP3<?php echo $linha['lo_id'] ?>"> -- Produtos 3 :</a></i></u></div>
								</div>								
								<div id="collapseP3<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod3" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod3').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS3"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idThree" id="codigo3" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoThree" id="tipo3" value="<?php echo $linha['lo_tipoThree'] ?>" class="form-control" placeholder="Tipo 3:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeThree" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeThree'] ?>" class="form-control" placeholder="Quantidade 3:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorThree" value="<?php echo $linha['lo_valorThree'] ?>" id="valor3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 3:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTThree" value="<?php echo $linha['lo_valTThree'] ?>" id="valorT3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 3:"/>
									</div>
									<input type="hidden" name="lo_larguraThree" id="largura3" value="<?php echo $linha['lo_larguraThree']?>">
									<input type="hidden" name="lo_comprimentoThree" id="comprimento3" value="<?php echo $linha['lo_comprimentoThree']?>">
									<input type="hidden" name="lo_alturaThree" id="altura3" value="<?php echo $linha['lo_alturaThree']?>">
									<input type="hidden" name="lo_pesoThree" id="peso3" value="<?php echo $linha['lo_pesoThree']?>">
								</div>
									<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP4<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP4<?php echo $linha['lo_id'] ?>"> -- Produtos 4 :</a></i></u></div>
								</div>								
								<div id="collapseP4<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4<?php echo $linha['lo_id'] ?>" style="text-transform: uppercase;">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod4" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod4').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS4"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idFour" id="codigo4" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoFour" id="tipo4" value="<?php echo $linha['lo_tipoFour'] ?>" class="form-control" placeholder="Tipo 4:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeFour" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeFour'] ?>" id="quantidade4" class="form-control" placeholder="Quantidade 4:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorFour" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorFour'] ?>" id="valor4" class="form-control" placeholder="Valor Unitario 4:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTFour" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTFour'] ?>" id="valorT4" class="form-control" placeholder="Valor Total 4:"/>
									</div>
									<input type="hidden" name="lo_larguraFour" id="largura4" value="<?php echo $linha['lo_larguraFour']?>">
									<input type="hidden" name="lo_comprimentoFour" id="comprimento4" value="<?php echo $linha['lo_comprimentoFour']?>">
									<input type="hidden" name="lo_alturaFour" id="altura4" value="<?php echo $linha['lo_alturaFour']?>">
									<input type="hidden" name="lo_pesoFour" id="peso4" value="<?php echo $linha['lo_pesoFour']?>">
								</div>
									<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP5<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP5<?php echo $linha['lo_id'] ?>"> -- Produtos 5 :</a></i></u></div>
								</div>								
								<div id="collapseP5<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod5" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod5').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS5"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idFive" id="codigo5" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoFive" value="<?php echo $linha['lo_tipoFive'] ?>" id="tipo5" class="form-control" placeholder="Tipo 5:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeFive" id="quantidade5" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeFive'] ?>" class="form-control" placeholder="Quantidade 5:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorFive" id="valor5" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorFive'] ?>" class="form-control" placeholder="Valor Unitario 5:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTFive" id="valorT5" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTFive'] ?>" class="form-control" placeholder="Valor Total 5:"/>
									</div>
									<input type="hidden" name="lo_larguraFive" id="largura5" value="<?php echo $linha['lo_larguraFive']?>">
									<input type="hidden" name="lo_comprimentoFive" id="comprimento5" value="<?php echo $linha['lo_comprimentoFive']?>">
									<input type="hidden" name="lo_alturaFive" id="altura5" value="<?php echo $linha['lo_alturaFive']?>">
									<input type="hidden" name="lo_pesoFive" id="peso5" value="<?php echo $linha['lo_pesoFive']?>">
								</div>
									<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP6<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP6<?php echo $linha['lo_id'] ?>"> -- Produtos 6 :</a></i></u></div>
								</div>								
								<div id="collapseP6<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP6<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod6" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod6').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS6"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idSix" id="codigo6" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoSix" value="<?php echo $linha['lo_tipoSix'] ?>" id="tipo6" class="form-control" placeholder="Tipo 6:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeSix" id="quantidade6" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeSix'] ?>" class="form-control" placeholder="Quantidade 6:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorSix" id="valor6" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorSix'] ?>" class="form-control" placeholder="Valor Unitario 6:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTSix" id="valorT6" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTSix'] ?>" class="form-control" placeholder="Valor Total 6:"/>
									</div>
									<input type="hidden" name="lo_larguraSix" id="largura6" value="<?php echo $linha['lo_larguraSix']?>">
									<input type="hidden" name="lo_comprimentoSix" id="comprimento6" value="<?php echo $linha['lo_comprimentoSix']?>">
									<input type="hidden" name="lo_alturaSix" id="altura6" value="<?php echo $linha['lo_alturaSix']?>">
									<input type="hidden" name="lo_pesoSix" id="peso6" value="<?php echo $linha['lo_pesoSix']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP7<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP7<?php echo $linha['lo_id'] ?>"> -- Produtos 7 :</a></i></u></div>
								</div>								
								<div id="collapseP7<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP7<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod7" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod7').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS7"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idSev" id="codigo7" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoSev" value="<?php echo $linha['lo_tipoSev'] ?>" id="tipo7" class="form-control" placeholder="Tipo 7:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeSev" id="quantidade7" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeSev'] ?>" class="form-control" placeholder="Quantidade 7:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorSev" id="valor7" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorSev'] ?>" class="form-control" placeholder="Valor Unitario 7:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTSev" id="valorT7" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTSev'] ?>" class="form-control" placeholder="Valor Unitario 7:"/>
									</div>
									<input type="hidden" name="lo_larguraSev" id="largura7" value="<?php echo $linha['lo_larguraSev']?>">
									<input type="hidden" name="lo_comprimentoSev" id="comprimento7" value="<?php echo $linha['lo_comprimentoSev']?>">
									<input type="hidden" name="lo_alturaSev" id="altura7" value="<?php echo $linha['lo_alturaSev']?>">
									<input type="hidden" name="lo_pesoSev" id="peso7" value="<?php echo $linha['lo_pesoSev']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP8<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP8<?php echo $linha['lo_id'] ?>"> -- Produtos 8 :</a></i></u></div>
								</div>								
								<div id="collapseP8<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP8<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod8" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod8').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS8"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idEig" id="codigo8" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoEig" value="<?php echo $linha['lo_tipoEig'] ?>" id="tipo8" class="form-control" placeholder="Tipo 8:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeEig" id="quantidade8" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeEig'] ?>" class="form-control" placeholder="Quantidade 8:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorEig" id="valor8" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorEig'] ?>" class="form-control" placeholder="Valor Unitario 8:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTEig" id="valorT8" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTEig'] ?>" class="form-control" placeholder="Valor Total 8:"/>
									</div>
									<input type="hidden" name="lo_larguraEig" id="largura8" value="<?php echo $linha['lo_larguraEig']?>">
									<input type="hidden" name="lo_comprimentoEig" id="comprimento8" value="<?php echo $linha['lo_comprimentoEig']?>">
									<input type="hidden" name="lo_alturaEig" id="altura8" value="<?php echo $linha['lo_alturaEig']?>">
									<input type="hidden" name="lo_pesoEig" id="peso8" value="<?php echo $linha['lo_pesoEig']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP9<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP9<?php echo $linha['lo_id'] ?>"> -- Produtos 9 :</a></i></u></div>
								</div>								
								<div id="collapseP9<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP9<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod9" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod9').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS9"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idNine" id="codigo9" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoNine" value="<?php echo $linha['lo_tipoNine'] ?>" id="tipo9" class="form-control" placeholder="Tipo 9:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeNine" id="quantidade9" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeNine'] ?>" class="form-control" placeholder="Quantidade 9:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorNine" id="valor9" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorNine'] ?>" class="form-control" placeholder="Valor Unitario 9:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTNine" id="valorT9" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTNine'] ?>" class="form-control" placeholder="Valor Total 9:"/>
									</div>
									<input type="hidden" name="lo_larguraNine" id="largura9" value="<?php echo $linha['lo_larguraNine']?>">
									<input type="hidden" name="lo_comprimentoNine" id="comprimento9" value="<?php echo $linha['lo_comprimentoNine']?>">
									<input type="hidden" name="lo_alturaNine" id="altura9" value="<?php echo $linha['lo_alturaNine']?>">
									<input type="hidden" name="lo_pesoNine" id="peso9" value="<?php echo $linha['lo_pesoNine']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP1t<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP1t<?php echo $linha['lo_id'] ?>"> -- Produtos 10 :</a></i></u></div>
								</div>								
								<div id="collapseP1t<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP1t<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod10" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod10').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS10"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTen" id="codigo10" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTen" value="<?php echo $linha['lo_tipoTen'] ?>" id="tipo10" class="form-control" placeholder="Tipo 10:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTen" id="quantidade10" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_quantidadeTen'] ?>" class="form-control" placeholder="Quantidade 10:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTen" id="valor10" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valorTen'] ?>" class="form-control" placeholder="Valor Unitario 10:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTTen" id="valorT10" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTTen'] ?>" class="form-control" placeholder="Valor Total 10:"/>
									</div>
									<input type="hidden" name="lo_larguraTen" id="largura10" value="<?php echo $linha['lo_larguraTen']?>">
									<input type="hidden" name="lo_comprimentoTen" id="comprimento10" value="<?php echo $linha['lo_comprimentoTen']?>">
									<input type="hidden" name="lo_alturaTen" id="altura10" value="<?php echo $linha['lo_alturaTen']?>">
									<input type="hidden" name="lo_pesoTen" id="peso10" value="<?php echo $linha['lo_pesoTen']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP11<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP11<?php echo $linha['lo_id'] ?>"> -- Produtos 11 :</a></i></u></div>
								</div>								
								<div id="collapseP11<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP11<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod11" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod11').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS11"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTenO" id="codigo11" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTenO" value="<?php echo $linha['lo_tipoTenO'] ?>" id="tipo11" class="form-control" placeholder="Tipo 11:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTenO" id="quantidade11" value="<?php echo $linha['lo_quantidadeTenO'] ?>" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 11:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTenO" id="valor11" value="<?php echo $linha['lo_valorTenO'] ?>" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 11:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTTenO" id="valorT11" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valTTenO'] ?>" class="form-control" placeholder="Valor Total 11:"/>
									</div>
									<input type="hidden" name="lo_larguraTenO" id="largura11" value="<?php echo $linha['lo_larguraTenO']?>">
									<input type="hidden" name="lo_comprimentoTenO" id="comprimento11" value="<?php echo $linha['lo_comprimentoTenO']?>">
									<input type="hidden" name="lo_alturaTenO" id="altura11" value="<?php echo $linha['lo_alturaTenO']?>">
									<input type="hidden" name="lo_pesoTenO" id="peso11" value="<?php echo $linha['lo_pesoTenO']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP12t<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP12t<?php echo $linha['lo_id'] ?>"> -- Produtos 12 :</a></i></u></div>
								</div>								
								<div id="collapseP12t<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP12t<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod12" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod12').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS12"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTenTw" id="codigo12" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTenTw" value="<?php echo $linha['lo_tipoTenTw'] ?>" id="tipo12" class="form-control" placeholder="Tipo 12:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTenTw" onKeyUp="calcular(this.value)" id="quantidade12" value="<?php echo $linha['lo_quantidadeTenTw'] ?>" class="form-control" placeholder="Quantidade 12:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTenTw" onKeyUp="calcular(this.value)" id="valor12" value="<?php echo $linha['lo_valorTenTw'] ?>" class="form-control" placeholder="Valor Unitario 12:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTTenTw" onKeyUp="calcular(this.value)" id="valorT12" value="<?php echo $linha['lo_valTTenTw'] ?>" class="form-control" placeholder="Valor Total 12:"/>
									</div>
									<input type="hidden" name="lo_larguraTenTw" id="largura12" value="<?php echo $linha['lo_larguraTenTw']?>">
									<input type="hidden" name="lo_comprimentoTenTw" id="comprimento12" value="<?php echo $linha['lo_comprimentoTenTw']?>">
									<input type="hidden" name="lo_alturaTenTw" id="altura12" value="<?php echo $linha['lo_alturaTenTw']?>">
									<input type="hidden" name="lo_pesoTenTw" id="peso12" value="<?php echo $linha['lo_pesoTenTw']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP13<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP13<?php echo $linha['lo_id'] ?>"> -- Produtos 13 :</a></i></u></div>
								</div>								
								<div id="collapseP13<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP13<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input class="form-control" name="lo_idTenTr" value="<?php echo $linha['lo_idTenTr'] ?>" id="cod13" placeholder="Cod. Produto 13:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod13').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS13"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTenTr" id="codigo13" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTenTr" value="<?php echo $linha['lo_tipoTenTr'] ?>" id="tipo13" class="form-control" placeholder="Tipo 13:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTenTr" onKeyUp="calcular(this.value)" id="quantidade13" value="<?php echo $linha['lo_quantidadeTenTr'] ?>" class="form-control" placeholder="Quantidade 13:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTenTr" onKeyUp="calcular(this.value)" id="valor13" value="<?php echo $linha['lo_valorTenTr'] ?>" class="form-control" placeholder="Valor Unitario 13:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTTenTr" onKeyUp="calcular(this.value)" id="valorT13" value="<?php echo $linha['lo_valTTenTr'] ?>" class="form-control" placeholder="Valor Total 13:"/>
									</div>
									<input type="hidden" name="lo_larguraTenTr" id="largura13" value="<?php echo $linha['lo_larguraTenTr']?>">
									<input type="hidden" name="lo_comprimentoTenTr" id="comprimento13" value="<?php echo $linha['lo_comprimentoTenTr']?>">
									<input type="hidden" name="lo_alturaTenTr" id="altura13" value="<?php echo $linha['lo_alturaTenTr']?>">
									<input type="hidden" name="lo_pesoTenTr" id="peso13" value="<?php echo $linha['lo_pesoTenTr']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP14<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP14<?php echo $linha['lo_id'] ?>"> -- Produtos 14 :</a></i></u></div>
								</div>								
								<div id="collapseP14<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP14<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input class="form-control" name="lo_idTenFour" value="<?php echo $linha['lo_idTenFour'] ?>" id="cod14" placeholder="Cod. Produto 14:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod14').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS14"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTenFour" id="codigo14" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTenFour" value="<?php echo $linha['lo_tipoTenFour'] ?>" id="tipo14" class="form-control" placeholder="Tipo 14:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTenFour" onKeyUp="calcular(this.value)" id="quantidade14" value="<?php echo $linha['lo_quantidadeTenFour'] ?>" class="form-control" placeholder="Quantidade 14:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTenFour" onKeyUp="calcular(this.value)" id="valor14" value="<?php echo $linha['lo_valorTenFour'] ?>" class="form-control" placeholder="Valor Unitario 14:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTTenFour" onKeyUp="calcular(this.value)" id="valorT14" value="<?php echo $linha['lo_valTTenFour'] ?>" class="form-control" placeholder="Valor Total 14:"/>
									</div>
									<input type="hidden" name="lo_larguraTenFour" id="largura14" value="<?php echo $linha['lo_larguraTenFour']?>">
									<input type="hidden" name="lo_comprimentoTenFour" id="comprimento14" value="<?php echo $linha['lo_comprimentoTenFour']?>">
									<input type="hidden" name="lo_alturaTenFour" id="altura14" value="<?php echo $linha['lo_alturaTenFour']?>">
									<input type="hidden" name="lo_pesoTenFour" id="peso14" value="<?php echo $linha['lo_pesoTenFour']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP15<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseP15<?php echo $linha['lo_id'] ?>"> -- Produtos 15 :</a></i></u></div>
								</div>								
								<div id="collapseP15<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP15<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Código</label>
										<input class="form-control" name="lo_idTenFive" value="<?php echo $linha['lo_idTenFive'] ?>" id="cod15" placeholder="Cod. Produto 15:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod15').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS15"> 
											<option>Lista de Código de Produtos</option>
											<?php


												$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$queryp = mysql_query($queryp);

												while ($linhap = mysql_fetch_array($queryp)) {

											?>
											<option value="<?php echo $linhap['pro_cod']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Produto</label>
										<input type="text" name="idTen5" id="codigo15" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="lo_tipoTenFive" value="<?php echo $linha['lo_tipoTenFive'] ?>" id="tipo15" class="form-control" placeholder="Tipo 15:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="lo_quantidadeTenFive" onKeyUp="calcular(this.value)" id="quantidade15" value="<?php echo $linha['lo_quantidadeTenFive'] ?>" class="form-control" placeholder="Quantidade 15:"/>
									</div>
									<div class="col-md-2">
										<label>Valor Unitário</label>
										<input type="text" name="lo_valorTenFive" onKeyUp="calcular(this.value)" id="valor15" value="<?php echo $linha['lo_valorTenFive'] ?>" class="form-control" placeholder="Valor Unitario 15:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="lo_valTTenFive" onKeyUp="calcular(this.value)" id="valorT15" value="<?php echo $linha['lo_valTTenFive'] ?>" class="form-control" placeholder="Valor Total 15:"/>
									</div>
									<input type="hidden" name="lo_larguraTenFive" id="largura15" value="<?php echo $linha['lo_larguraTenFive']?>">
									<input type="hidden" name="lo_comprimentoTenFive" id="comprimento15" value="<?php echo $linha['lo_comprimentoTenFive']?>">
									<input type="hidden" name="lo_alturaTenFive" id="altura15" value="<?php echo $linha['lo_alturaTenFive']?>">
									<input type="hidden" name="lo_pesoTenFive" id="peso15" value="<?php echo $linha['lo_pesoTenFive']?>">
								</div>									
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4">
										<label>Valor da Locação</label>
										<input type="text" name="lo_total" id="valort" value="<?php echo $linha['lo_total'] ?>" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor da Locação:"/>
									</div>
									<script>
										var mask = {
										   money: function() {
											  var el = this
											  ,exec = function(v) {
												 v = v.replace(/\D/g,"");
												 v = new String(Number(v));
												 var len = v.length;
												 if (1== len)
													v = v.replace(/(\d)/,"0,0$1");
												 else if (2 == len)
													v = v.replace(/(\d)/,"0,$1");
												 else if (len > 2) {
													v = v.replace(/(\d{2})$/,',$1');
												 }
												 return v;
											  };
											  setTimeout(function(){
												 el.value = exec(el.value);
											  },1);
										   }
										}
										$(function(){
										   $('#valort').bind('keypress',mask.money)
										});
									</script>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFourE<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseFourE<?php echo $linha['lo_id'] ?>">Entrega :</a></i></u></div>
								<div id="collapseFourE<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourE<?php echo $linha['lo_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Data de Entrega: <br>
											<small style="color: crimson;"><?php echo $dataE ?></small></label>
										<input type="date" class="form-control" name="lo_edhentrega" value="<?php echo $linha['lo_edhentrega']?>" placeholder="Data/Hora Entrega :">
									</div>
									<div class="col-md-2">
										 <!-- Adicionando Javascript -->
											<script type="text/javascript" >

												$(document).ready(function() {

													function limpa_formulário_cep() {
														// Limpa valores do formulário de cep.
														$("#ruaE").val("");
														$("#bairroE").val("");
														$("#cidadeE").val("");
														$("#ufE").val("");
														$("#ibgeE").val("");
													}

													//Quando o campo cep perde o foco.
													$("#cepE").blur(function() {

														//Nova variável "cep" somente com dígitos.
														var cep = $(this).val().replace(/\D/g, '');

														//Verifica se campo cep possui valor informado.
														if (cep != "") {

															//Expressão regular para validar o CEP.
															var validacep = /^[0-9]{8}$/;

															//Valida o formato do CEP.
															if(validacep.test(cep)) {

																//Preenche os campos com "..." enquanto consulta webservice.
																$("#ruaE").val("...");
																$("#bairroE").val("...");
																$("#cidadeE").val("...");
																$("#ufE").val("...");
																$("#ibgeE").val("...");

																//Consulta o webservice viacep.com.br/
																$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

																	if (!("erro" in dados)) {
																		//Atualiza os campos com os valores da consulta.
																		$("#ruaE").val(dados.logradouro);
																		$("#bairroE").val(dados.bairro);
																		$("#cidadeE").val(dados.localidade);
																		$("#ufE").val(dados.uf);
																		$("#ibgeE").val(dados.ibge);
																	} //end if.
																	else {
																		//CEP pesquisado não foi encontrado.
																		limpa_formulário_cep();
																		alert("CEP não encontrado.");
																	}
																});
															} //end if.
															else {
																//cep é inválido.
																limpa_formulário_cep();
																alert("Formato de CEP inválido.");
															}
														} //end if.
														else {
															//cep sem valor, limpa formulário.
															limpa_formulário_cep();
														}
													});
												});

											</script>
										<label>CEP</label>
										<input type="text" name="lo_ecep" class="form-control" value="<?php echo $linha['lo_ecep'] ?>" id="cepE" placeholder="Cep :"/>
									</div>
									<div class="col-md-3">
										<label>Complemento</label>
										<input type="text" name="lo_ecomplemento" class="form-control" value="<?php echo $linha['lo_ecomplemento'] ?>" placeholder="Complemento :"/>
									</div>
									<div class="col-md-2">
										<label>Bairro</label>
										<input type="text" name="lo_ebairro" class="form-control" value="<?php echo $linha['lo_ebairro'] ?>" id="bairro" placeholder="Bairro:"/>
									</div>
									<div class="col-md-2">
										<label>Cidade</label>
										<input type="text" name="lo_ecidade" class="form-control" value="<?php echo $linha['lo_ecidade'] ?>" id="cidade" placeholder="Cidade:"/>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<label>Logradouro</label>
										<input type="text" name="lo_elogradouro" value="<?php echo $linha['lo_elogradouro'] ?>" class="form-control" id="rua" placeholder="Logradouro :"/>
									</div>
									<div class="col-md-2">
										<label>Número</label>
										<input type="text" name="lo_enumero" class="form-control" value="<?php echo $linha['lo_enumero'] ?>" placeholder="N° :"/>
									</div>
									<div class="col-md-2">
										<label>UF</label>
										<input type="text" name="lo_euf" class="form-control" value="<?php echo $linha['lo_euf'] ?>" id="uf" placeholder="UF :"/>
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFiveR<?php echo $linha['lo_id'] ?>" aria-expanded="false" aria-controls="collapseFiveR<?php echo $linha['lo_id'] ?>">Retirada :</a></i></u></div>
								<div id="collapseFiveR<?php echo $linha['lo_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveR<?php echo $linha['lo_id'] ?>">	
								<div class="row">
									<div class="col-md-3">
										<label>Data/Hora:
										<br><small style="color: crimson;"><?php echo $dataR ?></small></label>
										<input type="date" class="form-control" name="lo_rdentrega" value="<?php echo $linha['lo_rdentrega']?>" placeholder="Data/Hora Entrega :">
									</div>
									<div class="col-md-2">
										<!-- Adicionando Javascript -->
										<script type="text/javascript" >

											$(document).ready(function() {

												function limpa_formulário_cep() {
													// Limpa valores do formulário de cep.
													$("#rua2").val("");
													$("#bairro2").val("");
													$("#cidade2").val("");
													$("#uf2").val("");
													$("#ibge2").val("");
												}

												//Quando o campo cep perde o foco.
												$("#cep2").blur(function() {

													//Nova variável "cep" somente com dígitos.
													var cep = $(this).val().replace(/\D/g, '');

													//Verifica se campo cep possui valor informado.
													if (cep != "") {

														//Expressão regular para validar o CEP.
														var validacep = /^[0-9]{8}$/;

														//Valida o formato do CEP.
														if(validacep.test(cep)) {

															//Preenche os campos com "..." enquanto consulta webservice.
															$("#rua2").val("...");
															$("#bairro2").val("...");
															$("#cidade2").val("...");
															$("#uf2").val("...");
															$("#ibge2").val("...");

															//Consulta o webservice viacep.com.br/
															$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

																if (!("erro" in dados)) {
																	//Atualiza os campos com os valores da consulta.
																	$("#rua2").val(dados.logradouro);
																	$("#bairro2").val(dados.bairro);
																	$("#cidade2").val(dados.localidade);
																	$("#uf2").val(dados.uf);
																	$("#ibge2").val(dados.ibge);
																} //end if.
																else {
																	//CEP pesquisado não foi encontrado.
																	limpa_formulário_cep();
																	alert("CEP não encontrado.");
																}
															});
														} //end if.
														else {
															//cep é inválido.
															limpa_formulário_cep();
															alert("Formato de CEP inválido.");
														}
													} //end if.
													else {
														//cep sem valor, limpa formulário.
														limpa_formulário_cep();
													}
												});
											});

										</script>
										<label>CEP</label>
										<input type="text" name="lo_rcep" class="form-control" id="cep2" value="<?php echo $linha['lo_rcep'] ?>" placeholder="Cep :"/>
									</div>
									<div class="col-md-3">
										<label>Complemento</label>
										<input type="text" name="lo_rcomplemento" value="<?php echo $linha['lo_rcomplemento'] ?>" class="form-control" placeholder="Complemento :"/>
									</div>
									<div class="col-md-2">
										<label>Bairro</label>
										<input type="text" name="lo_rbairro" value="<?php echo $linha['lo_rbairro'] ?>" class="form-control" id="bairro2" placeholder="Bairro:"/>
									</div>
									<div class="col-md-2">
										<label>Cidade</label>
										<input type="text" name="lo_rcidade" value="<?php echo $linha['lo_rcidade'] ?>" class="form-control" id="cidade2" placeholder="Cidade:"/>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<label>Logradouro</label>
										<input type="text" name="lo_rlogradouro" value="<?php echo $linha['lo_rlogradouro'] ?>" class="form-control" id="rua2" placeholder="Logradouro :"/>
									</div>
									<div class="col-md-2">
										<label>Número</label>
										<input type="text" name="lo_rnumero" value="<?php echo $linha['lo_rnumero'] ?>" class="form-control" placeholder="N° :"/>
									</div>
									<div class="col-md-2">
										<label>UF</label>
										<input type="text" name="lo_ruf" value="<?php echo $linha['lo_ruf'] ?>" class="form-control" id="uf2" placeholder="UF :"/>
										
									</div>
								</div>
								</div>
								<div class="row">
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="lo_valor" id="val" onKeyUp="calcular(this.value)" value="<?php echo $linha['lo_valor']?>" placeholder="Digite o Valor:" required>
										<script>
										var mask = {
										   money: function() {
											  var el = this
											  ,exec = function(v) {
												 v = v.replace(/\D/g,"");
												 v = new String(Number(v));
												 var len = v.length;
												 if (1== len)
													v = v.replace(/(\d)/,"0,0$1");
												 else if (2 == len)
													v = v.replace(/(\d)/,"0,$1");
												 else if (len > 2) {
													v = v.replace(/(\d{2})$/,',$1');
												 }
												 return v;
											  };
											  setTimeout(function(){
												 el.value = exec(el.value);
											  },1);
										   }
										}
										$(function(){
										   $('#val').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="lo_acrescimo" id="acrescimo" value="<?php echo $linha['lo_acrescimo']?>" placeholder="Digite o Valor do Acréscimo" required>
										<script>
										var mask = {
										   money: function() {
											  var el = this
											  ,exec = function(v) {
												 v = v.replace(/\D/g,"");
												 v = new String(Number(v));
												 var len = v.length;
												 if (1== len)
													v = v.replace(/(\d)/,"0,0$1");
												 else if (2 == len)
													v = v.replace(/(\d)/,"0,$1");
												 else if (len > 2) {
													v = v.replace(/(\d{2})$/,',$1');
												 }
												 return v;
											  };
											  setTimeout(function(){
												 el.value = exec(el.value);
											  },1);
										   }
										}
										$(function(){
										   $('#acrescimo').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="lo_desconto" id="desconto" value="<?php echo $linha['lo_desconto']?>" placeholder="Porcentagem de Desconto" required>
										
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="lo_total" id="valTotal" value="<?php echo $linha['lo_total']?>" placeholder="Valor Total:">
									</div>
									<?php
									require_once "../../../sql/conectar.php";
									require_once "../../../sql/valida_session.php";
									$buscar_user = mysql_query("SELECT user_nome FROM usuario WHERE user_login = '$_SESSION[user_login]'");

									if(mysql_num_rows($buscar_user)>=1)
									{
										$dado = mysql_fetch_array($buscar_user);

									}
								?>
										<input type="hidden" name="lo_userAlterado" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
								</div>
								  </div>
								  <div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									<button type="submit" class="btn btn-primary">Alterar</button>
									</form>
								  </div>
								</div>
							  </div>
							</div>
								</th>
								<th class="text-center">
							<form action="../pesquisar/imprimir.php" method="post">
            					<input name="lo_id" type="hidden" id="lo_id" value="<?php echo $linha['lo_id'];?>" />
								<button type="submit" class="btn btn-warning"><i class="fa fa-print nav_icon"></i>Imprimir</button>
							</form>
						</th>
								<th class="text-center">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#info<?php echo $linha['lo_id'] ?>" data-whatever="@mdo"></i>Informações</button>
									<div class="modal fade" id="info<?php echo $linha['lo_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info<?php echo $linha['lo_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="alterar<?php echo $linha['lo_id'] ?>Label">REGISTRO DE CONTRATO DE LOCAÇÃO: (<b style="color: midnightblue;"><?php echo $linha['lo_id'] ?></b>)</h4>
								  </div>
								  <div class="modal-body">
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Dados Gerais</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#89FFB7"> 
														<tr> 
															<th style="text-align: center;">Cliente</th> 
															<th style="text-align: center;">Tipo de Contrato</th> 
															<th style="text-align: center;">Data Gerado</th> 
															<th style="text-align: center;">Situação</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_nome'] ?></small></td>
															<td><small><?php echo $linha['lo_tipo'] ?></small></td>
															<td><small><?php echo $linha['lo_dtabertura'] ?></small></td>
															<td><small><?php echo $linha['lo_situacao'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Registro</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#438DFF"> 
														<tr> 
															<th style="text-align: center;">Registrado pelo Usuário</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_user'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Faturamento</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFBB77"> 
														<tr> 
															<th style="text-align: center;">Dias</th> 
															<th style="text-align: center;">Quantidade de Vezes</th> 
															<th style="text-align: center;">Forma de Pagamento</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_fadia'] ?></small></td>
															<td><small><?php echo $linha['lo_faquantidade'] ?></small></td>
															<td><small><?php echo $linha['lo_faforma'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Produtos</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 1</th> 
															<th style="text-align: center;">Tipo 1</th> 
															<th style="text-align: center;">Quantidade 1</th>
															<th style="text-align: center;">Valor Unitário 1</th>
															<th style="text-align: center;">Valor Total 1</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idOne'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoOne'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeOne'] ?></small></td>
															<td><small><?php echo $linha['lo_valorOne'] ?></small></td>
															<td><small><?php echo $linha['lo_valTOne'] ?></small></td>
														</tr>
													</tbody>
													<?php if($linha['lo_idTwo'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 2</th> 
															<th style="text-align: center;">Tipo 2</th> 
															<th style="text-align: center;">Quantidade 2</th>
															<th style="text-align: center;">Valor Unitário 2</th>
															<th style="text-align: center;">Valor Total 2</th>
														</tr> 
													</thead>													
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTwo'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTwo'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTwo'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTwo'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idThree'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 3</th> 
															<th style="text-align: center;">Tipo 3</th> 
															<th style="text-align: center;">Quantidade 3</th>
															<th style="text-align: center;">Valor Unitário 3</th>
															<th style="text-align: center;">Valor Total 3</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idThree'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoThree'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeThree'] ?></small></td>
															<td><small><?php echo $linha['lo_valorThree'] ?></small></td>
															<td><small><?php echo $linha['lo_valTThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idFour'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 4</th> 
															<th style="text-align: center;">Tipo 4</th> 
															<th style="text-align: center;">Quantidade 4</th>
															<th style="text-align: center;">Valor Unitário 4</th>
															<th style="text-align: center;">Valor Total 4</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idFour'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoFour'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeFour'] ?></small></td>
															<td><small><?php echo $linha['lo_valorFour'] ?></small></td>
															<td><small><?php echo $linha['lo_valTFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idFive'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 5</th> 
															<th style="text-align: center;">Tipo 5</th> 
															<th style="text-align: center;">Quantidade 5</th>
															<th style="text-align: center;">Valor Unitário 5</th>
															<th style="text-align: center;">Valor Total 5</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idFive'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoFive'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeFive'] ?></small></td>
															<td><small><?php echo $linha['lo_valorFive'] ?></small></td>
															<td><small><?php echo $linha['lo_valTFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idSix'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 6</th> 
															<th style="text-align: center;">Tipo 6</th> 
															<th style="text-align: center;">Quantidade 6</th>
															<th style="text-align: center;">Valor Unitário 6</th>
															<th style="text-align: center;">Valor Total 6</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idSiv'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoSix'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeSix'] ?></small></td>
															<td><small><?php echo $linha['lo_valorSix'] ?></small></td>
															<td><small><?php echo $linha['lo_valTSix'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idSev'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 7</th> 
															<th style="text-align: center;">Tipo 7</th> 
															<th style="text-align: center;">Quantidade 7</th>
															<th style="text-align: center;">Valor Unitário 7</th>
															<th style="text-align: center;">Valor Total 7</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idSev'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoSev'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeSev'] ?></small></td>
															<td><small><?php echo $linha['lo_valorSev'] ?></small></td>
															<td><small><?php echo $linha['lo_valTSev'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idEig'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 8</th> 
															<th style="text-align: center;">Tipo 8</th> 
															<th style="text-align: center;">Quantidade 8</th>
															<th style="text-align: center;">Valor Unitário 8</th>
															<th style="text-align: center;">Valor Total 8</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idEig'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoEig'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeEig'] ?></small></td>
															<td><small><?php echo $linha['lo_valorEig'] ?></small></td>
															<td><small><?php echo $linha['lo_valTEig'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idNine'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 9</th> 
															<th style="text-align: center;">Tipo 9</th> 
															<th style="text-align: center;">Quantidade 9</th>
															<th style="text-align: center;">Valor Unitário 9</th>
															<th style="text-align: center;">Valor Total 9</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idNine'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoNine'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeNine'] ?></small></td>
															<td><small><?php echo $linha['lo_valorNine'] ?></small></td>
															<td><small><?php echo $linha['lo_valTNine'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idTen'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 10</th> 
															<th style="text-align: center;">Tipo 10</th> 
															<th style="text-align: center;">Quantidade 10</th>
															<th style="text-align: center;">Valor Unitário 10</th>
															<th style="text-align: center;">Valor Total 10</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTen'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTen'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTen'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTen'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTen'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idTenO'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 11</th> 
															<th style="text-align: center;">Tipo 11</th> 
															<th style="text-align: center;">Quantidade 11</th>
															<th style="text-align: center;">Valor Unitário 11</th>
															<th style="text-align: center;">Valor Total 11</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTenO'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTenO'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTenO'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTenO'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTenO'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idTenTw'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 12</th> 
															<th style="text-align: center;">Tipo 12</th> 
															<th style="text-align: center;">Quantidade 12</th>
															<th style="text-align: center;">Valor Unitário 12</th>
															<th style="text-align: center;">Valor Total 12</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTenTw'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTenTw'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTenTw'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTenTw'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTenTw'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idTenTr'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 13</th> 
															<th style="text-align: center;">Tipo 13</th> 
															<th style="text-align: center;">Quantidade 13</th>
															<th style="text-align: center;">Valor Unitário 13</th>
															<th style="text-align: center;">Valor Total 13</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTenTr'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTenTr'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTenTr'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTenTr'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTenTr'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idTenFour'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 14</th> 
															<th style="text-align: center;">Tipo 14</th> 
															<th style="text-align: center;">Quantidade 14</th>
															<th style="text-align: center;">Valor Unitário 14</th>
															<th style="text-align: center;">Valor Total 14</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTenFour'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTenFour'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTenFour'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTenFour'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTenFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['lo_idTenFive'] == ''){
									
													}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Código Produto 15</th> 
															<th style="text-align: center;">Tipo 15</th> 
															<th style="text-align: center;">Quantidade 15</th>
															<th style="text-align: center;">Valor Unitário 15</th>
															<th style="text-align: center;">Valor Total 15</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_idTenFive'] ?></small></td>
															<td><small><?php echo $linha['lo_tipoTenFive'] ?></small></td>
															<td><small><?php echo $linha['lo_quantidadeTenFive'] ?></small></td>
															<td><small><?php echo $linha['lo_valorTenFive'] ?></small></td>
															<td><small><?php echo $linha['lo_valTTenFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
												</table>
												<table class="table table-responsive table-bordered">
													<thead bgcolor="#B12BFF"> 
														<tr> 
															<th style="text-align: center;">Valor Total fo Aluguel</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><?php echo $linha['lo_total'] ?></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Entrega</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFF972"> 
														<tr> 
															<th style="text-align: center;">Data Entrega</th> 
															<th style="text-align: center;">Cep</th> 
															<th style="text-align: center;">Complemento</th>
															<th style="text-align: center;">Bairro</th>
															<th style="text-align: center;">Cidade</th>
															<th style="text-align: center;">Logradouro</th>
															<th style="text-align: center;">N°</th>
															<th style="text-align: center;">UF</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $dataE ?></small></td>
															<td><small><?php echo $linha['lo_ecep'] ?></small></td>
															<td><small><?php echo $linha['lo_ecomplemento'] ?></small></td>
															<td><small><?php echo $linha['lo_ebairro'] ?></small></td>
															<td><small><?php echo $linha['lo_ecidade'] ?></small></td>
															<td><small><?php echo $linha['lo_elogradouro'] ?></small></td>
															<td><small><?php echo $linha['lo_enumero'] ?></small></td>
															<td><small><?php echo $linha['lo_euf'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Retirada</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFF972"> 
														<tr> 
															<th style="text-align: center;">Data Entrega</th> 
															<th style="text-align: center;">Cep</th> 
															<th style="text-align: center;">Complemento</th>
															<th style="text-align: center;">Bairro</th>
															<th style="text-align: center;">Cidade</th>
															<th style="text-align: center;">Logradouro</th>
															<th style="text-align: center;">N°</th>
															<th style="text-align: center;">UF</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $dataR ?></small></td>
															<td><small><?php echo $linha['lo_rcep'] ?></small></td>
															<td><small><?php echo $linha['lo_rcomplemento'] ?></small></td>
															<td><small><?php echo $linha['lo_rbairro'] ?></small></td>
															<td><small><?php echo $linha['lo_rcidade'] ?></small></td>
															<td><small><?php echo $linha['lo_rlogradouro'] ?></small></td>
															<td><small><?php echo $linha['lo_rnumero'] ?></small></td>
															<td><small><?php echo $linha['lo_ruf'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Alterado</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFF972"> 
														<tr> 
															<th style="text-align: center;">Contrato Alterado Pelo Usuário</th> 
															<th style="text-align: center;">Data e Hora Alterado</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['lo_userAlterado'] ?></small></td>
															<td><small><?php echo $dataA ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
								  </div>
								  <div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
								  </div>
								</div>
							  </div>
							</div>
								</th>
								<th class="text-center">
									<form action="../../../sql/excluir_locacao.php" method="post">
            							<input name="lo_id" type="hidden" id="lo_id" value="<?php echo $linha['lo_id'];?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt nav_icon"></i>Excluir</button>
									</form>
								</th>
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									---
								</th>
							</tr>
							
						<?php
							}
						?>
							
						</table>
					<hr>
<div align="center">
<SCRIPT Language="Javascript"> 
function printit(){ 
if (NS) { 
window.print() ; 
} else { 
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>'; 
document.body.insertAdjacentHTML('beforeEnd', WebBrowser); 
WebBrowser1.ExecWB(6,11);//Use a 1 vs. a 2 for a prompting dialog box WebBrowser1.outerHTML = ""; 
} 
} 
</script>
<SCRIPT Language="Javascript">
var NS = (navigator.appName == "Netscape"); 
var VERSION = parseInt(navigator.appVersion); 
if (VERSION > 3) { 
document.write('<form><button id="noprint" class="btn btn-info" name="Print" onClick="printit()"><i class="material-icons">local_printshop</i> Imprimir Página Inteira</button>'); 
}
</script>
</div>
					<hr>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2019. Todos os Direitos Reservados | <a href="https://reparsul.com.br/" target="_blank">Reparsul</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
	<script type="text/javascript">
		function calcular() {
			  var quant1 = document.getElementById("quantidade").value;
			  var valor = document.getElementById("valor").value;
			  var vbruto = parseFloat(valor.replace(',', '.'));
				if(quant1 ==''){
				   var valorT = 0;
				   document.getElementById('valorT').value = valorT.toFixed(2).replace('.',',');
				}else{
				 var valorT = 0;
				 valorT = quant1 * vbruto;
				 document.getElementById('valorT').value = valorT.toFixed(2).replace('.',',');
				}
			
			  var quant2 = document.getElementById("quantidade2").value;
			  var valor2 = document.getElementById("valor2").value;
			  var vbruto2 = parseFloat(valor2.replace(',', '.'));
				if(quant2 ==''){
				   var valorT2 = 0;
				   document.getElementById('valorT2').value = valorT2.toFixed(2).replace('.',',');
				}else{
				 var valorT2 = 0;
				 valorT2 = quant2 * vbruto2;
				 document.getElementById('valorT2').value = valorT2.toFixed(2).replace('.',',');
				}
			
			  var quant3 = document.getElementById("quantidade3").value;
			  var valor3 = document.getElementById("valor3").value;
			  var vbruto3 = parseFloat(valor3.replace(',', '.'));
				if(quant3 ==''){
				   var valorT3 = 0;
				   document.getElementById('valorT3').value = valorT3.toFixed(2).replace('.',',');
				}else{
				 var valorT3 = 0;
				 valorT3 = quant3 * vbruto3;
				 document.getElementById('valorT3').value = valorT3.toFixed(2).replace('.',',');
				}
			
			  var quant4 = document.getElementById("quantidade4").value;
			  var valor4 = document.getElementById("valor4").value;
			  var vbruto4 = parseFloat(valor4.replace(',', '.'));
				if(quant4 ==''){
				   var valorT4 = 0;
				   document.getElementById('valorT4').value = valorT4.toFixed(2).replace('.',',');
				}else{
				 var valorT4 = 0;
				 valorT4 = quant4 * vbruto4;
				 document.getElementById('valorT4').value = valorT4.toFixed(2).replace('.',',');
				}
			
			  var quant5 = document.getElementById("quantidade5").value;
			  var valor5 = document.getElementById("valor5").value;
			  var vbruto5 = parseFloat(valor5.replace(',', '.'));
				if(quant5 ==''){
				   var valorT5 = 0;
				   document.getElementById('valorT5').value = valorT5.toFixed(2).replace('.',',');
				}else{
				 var valorT5 = 0;
				 valorT5 = quant5 * vbruto5;
				 document.getElementById('valorT5').value = valorT5.toFixed(2).replace('.',',');
				}
			
			  var quant6 = document.getElementById("quantidade6").value;
			  var valor6 = document.getElementById("valor6").value;
			  var vbruto6 = parseFloat(valor6.replace(',', '.'));
				if(quant6 ==''){
				   var valorT6 = 0;
				   document.getElementById('valorT6').value = valorT6.toFixed(2).replace('.',',');
				}else{
				 var valorT6 = 0;
				 valorT6 = quant6 * vbruto6;
				 document.getElementById('valorT6').value = valorT6.toFixed(2).replace('.',',');
				}
			
			  var quant7 = document.getElementById("quantidade7").value;
			  var valor7 = document.getElementById("valor7").value;
			  var vbruto7 = parseFloat(valor7.replace(',', '.'));
				if(quant7 ==''){
				   var valorT7 = 0;
				   document.getElementById('valorT7').value = valorT7.toFixed(2).replace('.',',');
				}else{
				 var valorT7 = 0;
				 valorT7 = quant7 * vbruto7;
				 document.getElementById('valorT7').value = valorT7.toFixed(2).replace('.',',');
				}
			
			  var quant8 = document.getElementById("quantidade8").value;
			  var valor8 = document.getElementById("valor8").value;
			  var vbruto8 = parseFloat(valor8.replace(',', '.'));
				if(quant8 ==''){
				   var valorT8 = 0;
				   document.getElementById('valorT8').value = valorT8.toFixed(2).replace('.',',');
				}else{
				 var valorT8 = 0;
				 valorT8 = quant8 * vbruto8;
				 document.getElementById('valorT8').value = valorT8.toFixed(2).replace('.',',');
				}
			
			  var quant9 = document.getElementById("quantidade9").value;
			  var valor9 = document.getElementById("valor9").value;
			  var vbruto9 = parseFloat(valor9.replace(',', '.'));
				if(quant9 ==''){
				   var valorT9 = 0;
				   document.getElementById('valorT9').value = valorT9.toFixed(2).replace('.',',');
				}else{
				 var valorT9 = 0;
				 valorT9 = quant9 * vbruto9;
				 document.getElementById('valorT9').value = valorT9.toFixed(2).replace('.',',');
				}
			
			  var quant10 = document.getElementById("quantidade10").value;
			  var valor10 = document.getElementById("valor10").value;
			  var vbruto10 = parseFloat(valor10.replace(',', '.'));
				if(quant10 ==''){
				   var valorT10 = 0;
				   document.getElementById('valorT10').value = valorT10.toFixed(2).replace('.',',');
				}else{
				 var valorT10 = 0;
				 valorT10 = quant10 * vbruto10;
				 document.getElementById('valorT10').value = valorT10.toFixed(2).replace('.',',');
				}
			
			  var quant11 = document.getElementById("quantidade11").value;
			  var valor11 = document.getElementById("valor11").value;
			  var vbruto11 = parseFloat(valor11.replace(',', '.'));
				if(quant11 ==''){
				   var valorT11 = 0;
				   document.getElementById('valorT11').value = valorT11.toFixed(2).replace('.',',');
				}else{
				 var valorT11 = 0;
				 valorT11 = quant11 * vbruto11;
				 document.getElementById('valorT11').value = valorT11.toFixed(2).replace('.',',');
				}
			
			  var quant12 = document.getElementById("quantidade12").value;
			  var valor12 = document.getElementById("valor12").value;
			  var vbruto12 = parseFloat(valor12.replace(',', '.'));
				if(quant12 ==''){
				   var valorT12 = 0;
				   document.getElementById('valorT12').value = valorT12.toFixed(2).replace('.',',');
				}else{
				 var valorT12 = 0;
				 valorT12 = quant12 * vbruto12;
				 document.getElementById('valorT12').value = valorT12.toFixed(2).replace('.',',');
				}
			
			  var quant13 = document.getElementById("quantidade13").value;
			  var valor13 = document.getElementById("valor13").value;
			  var vbruto13 = parseFloat(valor13.replace(',', '.'));
				if(quant13 ==''){
				   var valorT13 = 0;
				   document.getElementById('valorT13').value = valorT13.toFixed(2).replace('.',',');
				}else{
				 var valorT13 = 0;
				 valorT13 = quant13 * vbruto13;
				 document.getElementById('valorT13').value = valorT13.toFixed(2).replace('.',',');
				}
			
			  var quant14 = document.getElementById("quantidade14").value;
			  var valor14 = document.getElementById("valor14").value;
			  var vbruto14 = parseFloat(valor14.replace(',', '.'));
				if(quant14 ==''){
				   var valorT14 = 0;
				   document.getElementById('valorT14').value = valorT14.toFixed(2).replace('.',',');
				}else{
				 var valorT14 = 0;
				 valorT14 = quant14 * vbruto14;
				 document.getElementById('valorT14').value = valorT14.toFixed(2).replace('.',',');
				}
			
			  var quant15 = document.getElementById("quantidade15").value;
			  var valor15 = document.getElementById("valor15").value;
			  var vbruto15 = parseFloat(valor15.replace(',', '.'));
				if(quant15 ==''){
				   var valorT15 = 0;
				   document.getElementById('valorT15').value = valorT15.toFixed(2).replace('.',',');
				}else{
				 var valorT15 = 0;
				 valorT15 = quant15 * vbruto15;
				 document.getElementById('valorT15').value = valorT15.toFixed(2).replace('.',',');
				}
			
			  
			  var valt = 0;
			      valt = valorT + valorT2 + valorT3 + valorT4 + valorT5 + valorT6 + valorT7 + valorT8 + valorT9 + valorT10 + valorT11 + valorT12 + valorT13 + valorT14 + valorT15;
				 document.getElementById('val').value = valt.toFixed(2).replace('.',',');
				
				
			  var juros = document.getElementById("acrescimo").value;
			  var vJuros = parseFloat(juros.replace(',', '.'));
				if(juros == ''){
				 var jurost = 0;
					document.getElementById('acrescimo').value = jurost.toFixed(2).replace('.',',');
				   }else{
					   var jurost = 0;
					   jurost = vJuros;
					   document.getElementById('acrescimo').value = jurost.toFixed(2).replace('.',',');
				   }
				
			  var descontoT = document.getElementById("desconto").value;
			  var porcento = 0;
			  porcento = descontoT/100;
			
			  var valTotal = 0;
			  var valSoma = 0;
			  valSoma = valt + jurost;
			  valTotal = valSoma - (valSoma * porcento);
		      document.getElementById('valTotal').value = valTotal.toFixed(2).replace('.',',');
			}
	</script>
	<!-- Mascara placeholder Data -->
		<script>
			$('input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="time"], input[type="week"]').each(function() {
    		var el = this, type = $(el).attr('type');
    			if ($(el).val() == '') $(el).attr('type', 'text');
    				$(el).focus(function() {
        				$(el).attr('type', type);
        				el.click();
    				});
    				$(el).blur(function() {
        		if ($(el).val() == '') $(el).attr('type', 'text');
    				});
					});
		</script>
	<!--// Mascara placeholder Data -->
		<script src="../../../js/classie.js"></script>
		<script type="text/javascript">
		function calcular() {
			  var valor = document.getElementById("val").value;
			  var bruto = parseFloat(valor.replace(',', '.'));
				
			  var juros = document.getElementById("acrescimo").value;
			  var vJuros = parseFloat(juros.replace(',', '.'));
				
			  var desconto = document.getElementById("desconto").value;
			  var vDesconto = 0;
			  vDesconto = desconto;
				
			  var valSoma = 0;
			  var porcentagem = 0;
			  var valTotal = 0;
			
			  valSoma = bruto + vJuros;
			  porcentagem = (vDesconto/100);
			  valTotal = valSoma - (porcentagem * 100);			  
				
		      document.getElementById('valTotal').value = "R$" + valTotal.toFixed(2).replace('.',',');
			}
	</script>
		<script>
		$('input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="time"], input[type="week"]').each(function() {
    	var el = this, type = $(el).attr('type');
    	if ($(el).val() == '') $(el).attr('type', 'text');
    	$(el).focus(function() {
        	$(el).attr('type', type);
        	el.click();
    				});
    		$(el).blur(function() {
        	if ($(el).val() == '') $(el).attr('type', 'text');
    			});
				});
	</script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="../../../js/jquery.nicescroll.js"></script>
	<script src="../../../js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="../../../js/bootstrap.js"> </script>
</body>
</html>