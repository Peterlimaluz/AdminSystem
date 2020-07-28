<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Pesquisa :: Data de Venda</title>
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
	  var $pro_valor = $("#valor5");
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
						<a href="#" style="color: slateblue; font-weight: 600; text-transform: uppercase;"><div class="titlePg">Pesquisa Vendas</div></a>
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
					<h3 class="title1"><i class="material-icons">border_color </i> Pesquisa Data de Venda</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Pesquisa por Data de Venda:</h4>
<?php
$inicio = $_POST['dtinicio'];
$fim = $_POST['dtfim'];
$begin = @$_GET['begin'];
if (!$begin) { $begin = 0; }					
$query = "SELECT COUNT(*) FROM contrato_vendas WHERE ve_dtvenda BETWEEN ('$inicio') AND ('$fim')";
$query = mysql_query($query);
$query = mysql_fetch_array($query);
$total = $query[0];

if($total==0){
     $anteriores = 'Anteriores';
     $proximos = 'Pr&oacute;ximos';
}
else {
if (($begin > 0) and ($begin <= 10)) {
   $anteriores = '<a href="index.php?begin=0">Anteriores</a>';
} elseif (($begin > 0) and ($begin > 10)) {
   $anteriores = '<a href="index.php?begin=' . ($begin-10) . '">Anteriores</a>';
} else {
   $anteriores = 'Anteriores';
}

if (($begin < $total) and (($begin+10) >= $total)) {
   $proximos = 'Pr&oacute;ximos';
} else {
   $proximos = '<a href="index.php?begin=' . ($begin+10) . '">Pr&oacute;ximos</a>';
}
}
?>
						<div class="row text-center">
				<h3>Total de Contrato Cadastrados : <strong style="color: crimson;"><?php echo $total ?></strong></h3>
							<br>
		<?php echo $anteriores . " | " . $proximos; ?>
	</div>
						<br>
						<table class="table table-striped table-responsive table-hover bg-warning"> 
							<thead> 
								<tr> 
									<th>CÓDIGO</th> 
									<th>CPF/CNPJ</th> 
									<th>DATA VENDA</th> 
									<th>CLIENTE</th> 
									<th>CANAL</th>
									<th>SITUAÇÃO</th>
									<th>FORMA PAG.</th>
									<th>EXPANDIR</th>
								</tr> 
							</thead>
	<?php
	
$inicio = $_POST['dtinicio'];
$fim = $_POST['dtfim'];
$query = "SELECT DISTINCT * FROM contrato_vendas WHERE ve_dtvenda BETWEEN ('$inicio') AND ('$fim')";
$query = mysql_query($query);

$c = 2;
$cores = array("#ecfeef","#fcffe0");

while ($linha = mysql_fetch_array($query)) {

  $var = $linha['ve_dtvenda'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
 
   $varE = $linha['ve_dtentrega'];
   $varE = explode(" ",$varE);
   $diaE = $varE[0];
   $diaE = explode("-",$diaE);
   $dataE = "$diaE[2]/$diaE[1]/$diaE[0]";

   $varR = $linha['ve_dtAlterado'];
   $varR = explode(" ",$varR);
   $diaR = $varR[0];
   $diaR = explode("-",$diaR);
   $dataR = "$diaR[2]/$diaR[1]/$diaR[0]";
   
   $index = $c % 2;
   $c++;
   $cor = $cores[$index];
 
?> 
							<tbody> 
								<tr> 
									<th scope="row"><?php echo $linha['ve_id'] ?></th> 
									<td><?php echo $linha['ve_cpf'] ?></td> 
									<th style="background-color: aquamarine"><?php echo $data ?></th> 
									<td><?php echo $linha['ve_nome'] ?></td>
									<td><?php echo $linha['ve_canal'] ?></td>
									<td><?php echo $linha['ve_situacao'] ?></td>
									<td><?php echo $linha['ve_forma'] ?></td>
									<td><a class="btn btn-primary" id="noprint" data-toggle="collapse" href="#<?php echo $linha['ve_id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo $linha['ve_id'] ?>"><i class="fa fa-plus-square nav_icon"></i></a></td>
								</tr>
							</tbody>
							<tr class="collapse" id="<?php echo $linha['ve_id'] ?>" style="background: #FFF6A9;">
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterar<?php echo $linha['ve_id'] ?>" data-whatever="@mdo"><i class="fa fa-pencil-alt nav_icon"></i> Alterar</button>
							<div class="modal fade" id="alterar<?php echo $linha['ve_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="alterar<?php echo $linha['ve_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="info<?php echo $linha['ve_id'] ?>Label">REGISTRO DO CONTRATO DE VENDAS: (<b style="color: midnightblue;"><?php echo $linha['ve_id'] ?></b>)</h4>
									  <hr>
										<label>Contrato Gerado Pelo Usuário: <small style="color: crimson;"><?php echo $linha['ve_user']?></small></label>
										
								  </div>
								  <div class="modal-body">
									<form action="../../../sql/update-venda.php" method="post" enctype="multipart/form-data">
										<div class="form-group">											
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $linha['ve_id'] ?>">Dados Gerais :</a></i></u></div>
											<div id="collapseOne<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $linha['ve_id'] ?>">
												<div class="row">
													<div class="col-md-3">
														<input type="hidden" name="ve_id" value="<?php echo $linha['ve_id']?>">
														<label>CPF/CNPJ</label>
													<input type="text" name="ve_cpf" id="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="14" class="form-control" value="<?php echo $linha['ve_cpf']?>" placeholder="CPF/CNPJ - Cliente">
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
														<input type="text" name="ve_cep" id="cep" value="<?php echo $linha['ve_cep']?>" class="form-control" placeholder="Cep">
													</div>
													<div class="col-md-3">
														<label>CIDADE</label>
														<input type="text" name="ve_cidade" id="cidade" value="<?php echo $linha['ve_cidade']?>" class="form-control" placeholder="Cidade">
													</div>
													<div class="col-md-3">
														<label>BAIRRO</label>
														<input type="text" name="ve_bairro" id="bairro" value="<?php echo $linha['ve_bairro']?>" class="form-control" placeholder="Bairro">
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<label>LOGRADOURO</label>
														<input type="text" name="ve_rua" id="rua" value="<?php echo $linha['ve_rua']?>" class="form-control" placeholder="Endereço">
													</div>
													<div class="col-md-2">
														<label>NUMERO</label>
														<input type="text" name="ve_numero" id="num" value="<?php echo $linha['ve_numero']?>" class="form-control" placeholder="Número">
													</div>
													<div class="col-md-2">
														<label>UF</label>
														<input type="text" name="ve_uf" id="ac" value="<?php echo $linha['ve_uf']?>" class="form-control" placeholder="UF">
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<label class="control-label">Cliente</label>
														<input class="form-control" name="ve_nome" value="<?php echo $linha['ve_nome'] ?>">
													</div>
													<div class="col-md-4">
														<label class="control-label">Data Venda:<?php echo $data ?></label>
														<input class="form-control" name="ve_dtvenda" value="<?php echo $linha['ve_dtvenda'] ?>">
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-4">
														<label>Data Entrega: <b style="color: crimson;"><?php echo $dataE ?></b></label>
														<input class="form-control" name="ve_dtentrega" value="<?php echo $linha['ve_dtentrega'] ?>">
													</div>
													<div class="col-md-4">
														<label>Canal de Venda: <b style="color: crimson;"><?php echo $linha['ve_canal'] ?></b></label>
														<select class="form-control" name="ve_canal">
															<option value="<?php echo $linha['ve_canal']?>"><?php echo $linha['ve_canal']?></option>
															<option value="INTERNET">INTERNET</option>
															<option value="PRESENCIAL">PRESENCIAL</option>
															<option value="INDICAÇÃO">INDICAÇÃO</option>
														</select>
													</div>
													<div class="col-md-4">
														<label>SITUAÇÃO : <b style="color: crimson;"><?php echo $linha['ve_situacao'] ?></b></label>
														<select class="form-control" name="ve_situacao">
															<option value="<?php echo $linha['ve_situacao'] ?>"></option>
														  	<option value="ABERTO">ABERTO</option>
															<option value="ATIVO">ATIVO</option>
															<option value="FINALIZADO">FINALIZADO</option>
															<option value="CANCELADO">CANCELADO</option>
														</select>
													</div>
													<input type="hidden" name="ve_user" value="<?php echo $linha['ve_user']?>">
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $linha['ve_id'] ?>">Faturamento :</a></i></u></div>
											<div id="collapseTwo<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $linha['ve_id'] ?>">
												<div class="row">
													<div class="col-md-2">
														<label>Dias: <b style="color: crimson;"><?php echo $linha['ve_vencimento'] ?></b></label>
														<select class="form-control" name="ve_vencimento">
														  <option value="<?php echo $linha['ve_vencimento'] ?>">Dias</option>
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
														<label>Quantidade de Vezes: <b style="color: crimson;"><?php echo $linha['ve_faqua'] ?></b></label>
														<select name="ve_faqua" class="form-control">
															<option value="<?php echo $linha['ve_faqua'] ?>"></option>
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
														<label>Forma de Pagamento: <b style="color: crimson;"><?php echo $linha['ve_forma'] ?></b></label>
														<select class="form-control" name="ve_forma">
															<option value="<?php echo $linha['ve_forma'] ?>">FORMA DE PAGAMENTO</option>
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
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseThree<?php echo $linha['ve_id'] ?>">Produtos :</a></i></u></div>
								<div id="collapseThree<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código Produto</label>
										<input type="text" class="form-control" name="ve_idOne" id="cod" placeholder="Cod. Produto :" value="<?php echo $linha['ve_idOne'] ?>" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoOne" id="tipo" class="form-control" placeholder="Tipo :" value="<?php echo $linha['ve_tipoOne'] ?>">
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantOne" id="quant1" class="form-control" placeholder="Quantidade :" value="<?php echo $linha['ve_quantOne'] ?>">
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorOne" id="valor" class="form-control" placeholder="Valor Unitario:" value="<?php echo $linha['ve_valorOne'] ?>">
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTOne" id="valorT" class="form-control" placeholder="Valor Unitario:" value="<?php echo $linha['ve_valorTOne'] ?>">
									</div>
									<!-- Medição de Produto 1 -->
									<input type="hidden" name="ve_larguraOne" id="largura" value="<?php echo $linha['ve_larguraOne']?>">
									<input type="hidden" name="ve_comprimentoOne" id="comprimento" value="<?php echo $linha['ve_comprimentoOne']?>">
									<input type="hidden" name="ve_alturaOne" id="altura" value="<?php echo $linha['ve_alturaOne']?>">
									<input type="hidden" name="ve_pesoOne" id="peso" value="<?php echo $linha['ve_pesoOne']?>">
									<!-- FIM Medição Produto 1 -->
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP2<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP2<?php echo $linha['ve_id'] ?>"> -- Produtos 2 :</a></i></u></div>
								</div>
								<div id="collapseP2<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTwo" id="cod2" value="<?php echo $linha['ve_idTwo'] ?>" placeholder="Cod. Produto 2 :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod2').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTwo" id="tipo2" value="<?php echo $linha['ve_tipoTwo'] ?>" class="form-control" placeholder="Tipo 2:">
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTwo" id="quant2" class="form-control" value="<?php echo $linha['ve_quantTwo'] ?>" placeholder="Quantidade 2:">
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTwo" id="valor2" value="<?php echo $linha['ve_valorTwo'] ?>" class="form-control" placeholder="Valor Unitario 2:">
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTwo" id="valorT2" value="<?php echo $linha['ve_valorTTwo'] ?>" class="form-control" placeholder="Valor Unitario 2:">
									</div>
									<input type="hidden" name="ve_larguraTwo" id="largura2" value="<?php echo $linha['ve_larguraTwo']?>">
									<input type="hidden" name="ve_comprimentoTwo" id="comprimento2" value="<?php echo $linha['ve_comprimentoTwo']?>">
									<input type="hidden" name="ve_alturaTwo" id="altura2" value="<?php echo $linha['ve_alturaTwo']?>">
									<input type="hidden" name="ve_pesoTwo" id="peso2" value="<?php echo $linha['ve_pesoTwo']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP3<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP3<?php echo $linha['ve_id'] ?>"> -- Produtos 3 :</a></i></u></div>
								</div>								
								<div id="collapseP3<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idThree" value="<?php echo $linha['ve_idThree'] ?>" id="cod3" placeholder="Cod. Produto 3:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod3').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoThree" id="tipo3" value="<?php echo $linha['ve_tipoThree'] ?>" class="form-control" placeholder="Tipo 3:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantThree" id="quant3" value="<?php echo $linha['ve_quantThree'] ?>" class="form-control" placeholder="Quantidade 3:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorThree" value="<?php echo $linha['ve_valorThree'] ?>" id="valor3" class="form-control" placeholder="Valor Unitario 3:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTThree" value="<?php echo $linha['ve_valorTThree'] ?>" id="valorT3" class="form-control" placeholder="Valor Total 3:"/>
									</div>
									<input type="hidden" name="ve_larguraThree" id="largura3" value="<?php echo $linha['ve_larguraOne']?>">
									<input type="hidden" name="ve_comprimentoThree" id="comprimento3" value="<?php echo $linha['ve_comprimentoThree']?>">
									<input type="hidden" name="ve_alturaThree" id="altura3" value="<?php echo $linha['ve_alturaThree']?>">
									<input type="hidden" name="ve_pesoThree" id="peso3" value="<?php echo $linha['ve_pesoThree']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP4<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP4<?php echo $linha['ve_id'] ?>"> -- Produtos 4 :</a></i></u></div>
								</div>								
								<div id="collapseP4<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idFour" id="cod4" value="<?php echo $linha['ve_idFour'] ?>" placeholder="Cod. Produto 4:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod4').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoFour" id="tipo4" value="<?php echo $linha['ve_tipoFour'] ?>" class="form-control" placeholder="Tipo 4:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantFour" id="quant4" value="<?php echo $linha['ve_quantFour'] ?>" class="form-control" placeholder="Quantidade 4:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorFour" value="<?php echo $linha['ve_valorFour'] ?>" id="valor4" class="form-control" placeholder="Valor Unitario 4:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTFour" value="<?php echo $linha['ve_valorTFour'] ?>" id="valorT4" class="form-control" placeholder="Valor Unitario 4:"/>
									</div>
									<input type="hidden" name="ve_larguraFour" id="largura4" value="<?php echo $linha['ve_larguraFour']?>">
									<input type="hidden" name="ve_comprimentoFour" id="comprimento4" value="<?php echo $linha['ve_comprimentoFour']?>">
									<input type="hidden" name="ve_alturaFour" id="altura4" value="<?php echo $linha['ve_alturaFour']?>">
									<input type="hidden" name="ve_pesoFour" id="peso4" value="<?php echo $linha['ve_pesoFour']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP5<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP5<?php echo $linha['ve_id'] ?>"> -- Produtos 5 :</a></i></u></div>
								</div>								
								<div id="collapseP5<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idFive" value="<?php echo $linha['ve_idFive'] ?>" id="cod5" placeholder="Cod. Produto 5:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod5').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoFive" value="<?php echo $linha['ve_tipoFive'] ?>" id="tipo5" class="form-control" placeholder="Tipo 5:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantFive" id="quant5" value="<?php echo $linha['ve_quantFive'] ?>" class="form-control" placeholder="Quantidade 5:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorFive" id="valor5" value="<?php echo $linha['ve_valorFive'] ?>" class="form-control" placeholder="Valor Unitario 5:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTFive" id="valor5" value="<?php echo $linha['ve_valorTFive'] ?>" class="form-control" placeholder="Valor Unitario 5:"/>
									</div>
									<input type="hidden" name="ve_larguraFive" id="largura5" value="<?php echo $linha['ve_larguraFive']?>">
									<input type="hidden" name="ve_comprimentoFive" id="comprimento5" value="<?php echo $linha['ve_comprimentoFive']?>">
									<input type="hidden" name="ve_alturaFive" id="altura5" value="<?php echo $linha['ve_alturaFive']?>">
									<input type="hidden" name="ve_pesoFive" id="peso5" value="<?php echo $linha['ve_pesoFive']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP6<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP6<?php echo $linha['ve_id'] ?>"> -- Produtos 6 :</a></i></u></div>
								</div>								
								<div id="collapseP6<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idSix" value="<?php echo $linha['ve_idSix'] ?>" id="cod6" placeholder="Cod. Produto 6:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod6').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoSix" value="<?php echo $linha['ve_tipoSix'] ?>" id="tipo6" class="form-control" placeholder="Tipo 6:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantSix" id="quant6" value="<?php echo $linha['ve_quantSix'] ?>" class="form-control" placeholder="Quantidade 6:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorSix" id="valor6" value="<?php echo $linha['ve_valorSix'] ?>" class="form-control" placeholder="Valor Unitario 6:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTSix" id="valor6" value="<?php echo $linha['ve_valorTSix'] ?>" class="form-control" placeholder="Valor Unitario 6:"/>
									</div>
									<input type="hidden" name="ve_larguraSix" id="largura6" value="<?php echo $linha['ve_larguraSix']?>">
									<input type="hidden" name="ve_comprimentoSix" id="comprimento6" value="<?php echo $linha['ve_comprimentoSix']?>">
									<input type="hidden" name="ve_alturaSix" id="altura6" value="<?php echo $linha['ve_alturaSix']?>">
									<input type="hidden" name="ve_pesoSix" id="peso6" value="<?php echo $linha['ve_pesoSix']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP7<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP7<?php echo $linha['ve_id'] ?>"> -- Produtos 7 :</a></i></u></div>
								</div>								
								<div id="collapseP7<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP7<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idSev" value="<?php echo $linha['ve_idSev'] ?>" id="cod7" placeholder="Cod. Produto 7:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod7').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoSev" value="<?php echo $linha['ve_tipoSev'] ?>" id="tipo7" class="form-control" placeholder="Tipo 7:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantSev" id="quant7" value="<?php echo $linha['ve_quantSev'] ?>" class="form-control" placeholder="Quantidade 7:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorSev" id="valor7" value="<?php echo $linha['ve_valorSev'] ?>" class="form-control" placeholder="Valor Unitario 7:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTSev" id="valor7" value="<?php echo $linha['ve_valorTSev'] ?>" class="form-control" placeholder="Valor Unitario 7:"/>
									</div>
									<input type="hidden" name="ve_larguraSev" id="largura7" value="<?php echo $linha['ve_larguraSev']?>">
									<input type="hidden" name="ve_comprimentoSev" id="comprimento7" value="<?php echo $linha['ve_comprimentoSev']?>">
									<input type="hidden" name="ve_alturaSev" id="altura7" value="<?php echo $linha['ve_alturaSev']?>">
									<input type="hidden" name="ve_pesoSev" id="peso7" value="<?php echo $linha['ve_pesoSev']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP8<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP8<?php echo $linha['ve_id'] ?>"> -- Produtos 8 :</a></i></u></div>
								</div>								
								<div id="collapseP8<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP8<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idEig" value="<?php echo $linha['ve_idEig'] ?>" id="cod8" placeholder="Cod. Produto 5:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod8').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoEig" value="<?php echo $linha['ve_tipoEig'] ?>" id="tipo8" class="form-control" placeholder="Tipo 8:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantEig" id="quant8" value="<?php echo $linha['ve_quantEig'] ?>" class="form-control" placeholder="Quantidade 8:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorEig" id="valor8" value="<?php echo $linha['ve_valorEig'] ?>" class="form-control" placeholder="Valor Unitario 8:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTEig" id="valor8" value="<?php echo $linha['ve_valorTEig'] ?>" class="form-control" placeholder="Valor Unitario 8:"/>
									</div>
									<input type="hidden" name="ve_larguraEig" id="largura8" value="<?php echo $linha['ve_larguraEig']?>">
									<input type="hidden" name="ve_comprimentoEig" id="comprimento8" value="<?php echo $linha['ve_comprimentoEig']?>">
									<input type="hidden" name="ve_alturaEig" id="altura8" value="<?php echo $linha['ve_alturaEig']?>">
									<input type="hidden" name="ve_pesoEig" id="peso8" value="<?php echo $linha['ve_pesoEig']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP9<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP9<?php echo $linha['ve_id'] ?>"> -- Produtos 9 :</a></i></u></div>
								</div>								
								<div id="collapseP9<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP9<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idNine" value="<?php echo $linha['ve_idNine'] ?>" id="cod9" placeholder="Cod. Produto 9:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod9').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoNine" value="<?php echo $linha['ve_tipoNine'] ?>" id="tipo9" class="form-control" placeholder="Tipo 9:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantNine" id="quant9" value="<?php echo $linha['ve_quantNine'] ?>" class="form-control" placeholder="Quantidade 5:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorNine" id="valor9" value="<?php echo $linha['ve_valorNine'] ?>" class="form-control" placeholder="Valor Unitario 9:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTNine" id="valor9" value="<?php echo $linha['ve_valorTNine'] ?>" class="form-control" placeholder="Valor Unitario 9:"/>
									</div>
									<input type="hidden" name="ve_larguraNine" id="largura9" value="<?php echo $linha['ve_larguraNine']?>">
									<input type="hidden" name="ve_comprimentoNine" id="comprimento9" value="<?php echo $linha['ve_comprimentoNine']?>">
									<input type="hidden" name="ve_alturaNine" id="altura9" value="<?php echo $linha['ve_alturaNine']?>">
									<input type="hidden" name="ve_pesoNine" id="peso9" value="<?php echo $linha['ve_pesoNine']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP10<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP10<?php echo $linha['ve_id'] ?>"> -- Produtos 10 :</a></i></u></div>
								</div>								
								<div id="collapseP10<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTen" value="<?php echo $linha['ve_idTen'] ?>" id="cod10" placeholder="Cod. Produto 10:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod10').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTen" value="<?php echo $linha['ve_tipoTen'] ?>" id="tipo10" class="form-control" placeholder="Tipo 10:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTen" id="quant10" value="<?php echo $linha['ve_quantTen'] ?>" class="form-control" placeholder="Quantidade 10:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTen" id="valor10" value="<?php echo $linha['ve_valorTen'] ?>" class="form-control" placeholder="Valor Unitario 10:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTen" id="valor10" value="<?php echo $linha['ve_valorTTen'] ?>" class="form-control" placeholder="Valor Unitario 10:"/>
									</div>
									<input type="hidden" name="ve_larguraTen" id="largura10" value="<?php echo $linha['ve_larguraTen']?>">
									<input type="hidden" name="ve_comprimentoTen" id="comprimento10" value="<?php echo $linha['ve_comprimentoTen']?>">
									<input type="hidden" name="ve_alturaTen" id="altura10" value="<?php echo $linha['ve_alturaTen']?>">
									<input type="hidden" name="ve_pesoTen" id="peso10" value="<?php echo $linha['ve_pesoTen']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP11<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP11<?php echo $linha['ve_id'] ?>"> -- Produtos 11 :</a></i></u></div>
								</div>								
								<div id="collapseP11<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP11<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTenO" value="<?php echo $linha['ve_idTenO'] ?>" id="cod11" placeholder="Cod. Produto 11:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod11').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTenO" value="<?php echo $linha['ve_tipoTenO'] ?>" id="tipo11" class="form-control" placeholder="Tipo 11:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTenO" id="quant11" value="<?php echo $linha['ve_quantTenO'] ?>" class="form-control" placeholder="Quantidade 11:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTenO" id="valor11" value="<?php echo $linha['ve_valorTenO'] ?>" class="form-control" placeholder="Valor Unitario 11:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTenO" id="valor11" value="<?php echo $linha['ve_valorTTenO'] ?>" class="form-control" placeholder="Valor Unitario 11:"/>
									</div>
									<input type="hidden" name="ve_larguraTenO" id="largura11" value="<?php echo $linha['ve_larguraTenO']?>">
									<input type="hidden" name="ve_comprimentoTenO" id="comprimento11" value="<?php echo $linha['ve_comprimentoTenO']?>">
									<input type="hidden" name="ve_alturaTenO" id="altura11" value="<?php echo $linha['ve_alturaTenO']?>">
									<input type="hidden" name="ve_pesoTenO" id="peso11" value="<?php echo $linha['ve_pesoTenO']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP12<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP12<?php echo $linha['ve_id'] ?>"> -- Produtos 12 :</a></i></u></div>
								</div>								
								<div id="collapseP12<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP12<?php echo $linha['ve_id'] ?>">
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

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTenTwo" value="<?php echo $linha['ve_idTenTwo'] ?>" id="cod12" placeholder="Cod. Produto 12:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod12').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTenTwo" value="<?php echo $linha['ve_tipoTenTwo'] ?>" id="tipo12" class="form-control" placeholder="Tipo 12:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTenTwo" id="quant12" value="<?php echo $linha['ve_quantTenTwo'] ?>" class="form-control" placeholder="Quantidade 12:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTenTwo" id="valor12" value="<?php echo $linha['ve_valorTenTwo'] ?>" class="form-control" placeholder="Valor Unitario 12:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTenTwo" id="valor12" value="<?php echo $linha['ve_valorTTenTwo'] ?>" class="form-control" placeholder="Valor Unitario 12:"/>
									</div>
									<input type="hidden" name="ve_larguraTenTwo" id="largura12" value="<?php echo $linha['ve_larguraTenTwo']?>">
									<input type="hidden" name="ve_comprimentoTenTwo" id="comprimento12" value="<?php echo $linha['ve_comprimentoTenTwo']?>">
									<input type="hidden" name="ve_alturaTenTwo" id="altura12" value="<?php echo $linha['ve_alturaTenTwo']?>">
									<input type="hidden" name="ve_pesoTenTwo" id="peso12" value="<?php echo $linha['ve_pesoTenTwo']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP13<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP13<?php echo $linha['ve_id'] ?>"> -- Produtos 13 :</a></i></u></div>
								</div>								
								<div id="collapseP13<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10<?php echo $linha['ve_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod13" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod13').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS13"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTenThree" value="<?php echo $linha['ve_idTenThree'] ?>" id="cod13" placeholder="Cod. Produto 13:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod13').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTenThree" value="<?php echo $linha['ve_tipoTenThree'] ?>" id="tipo13" class="form-control" placeholder="Tipo 13:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTenThree" id="quant13" value="<?php echo $linha['ve_quantTenThree'] ?>" class="form-control" placeholder="Quantidade 13:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTenThree" id="valor13" value="<?php echo $linha['ve_valorTenThree'] ?>" class="form-control" placeholder="Valor Unitario 13:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTenThree" id="valor13" value="<?php echo $linha['ve_valorTTenThree'] ?>" class="form-control" placeholder="Valor Unitario 13:"/>
									</div>
									<input type="hidden" name="ve_larguraTenThree" id="largura13" value="<?php echo $linha['ve_larguraTenThree']?>">
									<input type="hidden" name="ve_comprimentoTenThree" id="comprimento13" value="<?php echo $linha['ve_comprimentoTenThree']?>">
									<input type="hidden" name="ve_alturaTenThree" id="altura13" value="<?php echo $linha['ve_alturaTenThree']?>">
									<input type="hidden" name="ve_pesoTenThree" id="peso13" value="<?php echo $linha['ve_pesoTenThree']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP14<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP14<?php echo $linha['ve_id'] ?>"> -- Produtos 14 :</a></i></u></div>
								</div>								
								<div id="collapseP14<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP14<?php echo $linha['ve_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod14" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod14').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS14"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTenFour" value="<?php echo $linha['ve_idTenFour'] ?>" id="cod14" placeholder="Cod. Produto 14:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod14').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTenFour" value="<?php echo $linha['ve_tipoTenFour'] ?>" id="tipo14" class="form-control" placeholder="Tipo 14:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTenFour" id="quant14" value="<?php echo $linha['ve_quantTenFour'] ?>" class="form-control" placeholder="Quantidade 14:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTenFour" id="valor14" value="<?php echo $linha['ve_valorTenFour'] ?>" class="form-control" placeholder="Valor Unitario 14:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTenFour" id="valor14" value="<?php echo $linha['ve_valorTTenFour'] ?>" class="form-control" placeholder="Valor Unitario 14:"/>
									</div>
									<input type="hidden" name="ve_larguraTenFour" id="largura14" value="<?php echo $linha['ve_larguraTenFour']?>">
									<input type="hidden" name="ve_comprimentoTenFour" id="comprimento14" value="<?php echo $linha['ve_comprimentoTenFour']?>">
									<input type="hidden" name="ve_alturaTenFour" id="altura14" value="<?php echo $linha['ve_alturaTenFour']?>">
									<input type="hidden" name="ve_pesoTenFour" id="peso14" value="<?php echo $linha['ve_pesoTenFour']?>">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP15<?php echo $linha['ve_id'] ?>" aria-expanded="false" aria-controls="collapseP15<?php echo $linha['ve_id'] ?>"> -- Produtos 15 :</a></i></u></div>
								</div>								
								<div id="collapseP15<?php echo $linha['ve_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10<?php echo $linha['ve_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control" id="cod15" placeholder="Cod. Produto :" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod15').mask('***********');
										</script>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="codS15"> 
											<option>Lista de Código de Produtos</option>
											<?php

												$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id` ASC';
												$query = mysql_query($query);

												while ($linha = mysql_fetch_array($query)) {

											?>
											<option value="<?php echo $linha['pro_cod']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Código</label>
										<input class="form-control" name="ve_idTenFive" value="<?php echo $linha['ve_idTenFive'] ?>" id="cod15" placeholder="Cod. Produto 15:" style="text-transform: uppercase;">
										<script type="application/javascript">
											$('#cod15').mask('***********');
										</script>
									</div>
									<div class="col-md-2">
										<label>Tipo</label>
										<input type="text" name="ve_tipoTenFive" value="<?php echo $linha['ve_tipoTenFive'] ?>" id="tipo15" class="form-control" placeholder="Tipo 15:"/>
									</div>
									<div class="col-md-2">
										<label>Quantidade</label>
										<input type="text" name="ve_quantTenFive" id="quant15" value="<?php echo $linha['ve_quantTenFive'] ?>" class="form-control" placeholder="Quantidade 15:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Unitário</label>
										<input type="text" name="ve_valorTenFive" id="valor15" value="<?php echo $linha['ve_valorTenFive'] ?>" class="form-control" placeholder="Valor Unitario 15:"/>
									</div>
									<div class="col-md-3">
										<label>Valor Total</label>
										<input type="text" name="ve_valorTTenFive" id="valor15" value="<?php echo $linha['ve_valorTTenFive'] ?>" class="form-control" placeholder="Valor Unitario 15:"/>
									</div>
									<input type="hidden" name="ve_larguraTenFive" id="largura15" value="<?php echo $linha['ve_larguraTenFive']?>">
									<input type="hidden" name="ve_comprimentoTenFive" id="comprimento15" value="<?php echo $linha['ve_comprimentoTenFive']?>">
									<input type="hidden" name="ve_alturaTenFive" id="altura15" value="<?php echo $linha['ve_alturaTenFive']?>">
									<input type="hidden" name="ve_pesoTenFive" id="peso15" value="<?php echo $linha['ve_pesoTenFive']?>">
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Transporte :</a></i></u></div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">								
								<div class="row">
									<div class="col-md-3">
										<input type="type" class="form-control" name="ve_frete" onKeyUp="calcular(this.value)" id="vfrete" placeholder="Valor do Frete :" value="<?php echo $linha['ve_frete']?>">
										<script>
										$(function(){
										   $('#vfrete').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-6">
										<input type="type" class="form-control" name="ve_transportadora" placeholder="Transportadora :" value="<?php echo $linha['ve_transportadora']?>">
									</div>
									<div class="col-md-3">
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
										<input type="text" name="ve_ecep" class="form-control" id="cepE" placeholder="Cep Entrega :" value="<?php echo $linha['ve_ecep']?>">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" name="ve_ecidade" class="form-control" id="cidadeE" placeholder="Cidade Entrega :" value="<?php echo $linha['ve_ecidade']?>">
									</div>
									<div class="col-md-3">
										<input type="text" name="ve_ebairro" class="form-control" id="bairroE" placeholder="Bairro Entrega:" value="<?php echo $linha['ve_ebairro']?>">
									</div>
									<div class="col-md-6">
										<input type="text" name="ve_erua" class="form-control" id="ruaE" placeholder="Rua Entrega:" value="<?php echo $linha['ve_erua']?>">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" name="ve_enumero" class="form-control" placeholder="N° Entrega :" value="<?php echo $linha['ve_enumero']?>">
									</div>
									<div class="col-md-2">
										<input type="text" name="ve_euf" class="form-control" id="ufE" placeholder="UF Entrega:" value="<?php echo $linha['ve_euf']?>">
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion"?>Valor do Contrato :</a></i></u></div>
								<div class="row">
									<div class="col-md-2 col-xs-12">
										<label>Total Produtos</label>
										<input type="text" class="form-control" name="ve_valPt" id="valPt" onKeyUp="calcular(this.value)" value="<?php echo $linha['ve_valPt']?>" placeholder="Total dos Produtos:">
										<script>
										$(function(){
										   $('#valPt').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-2 col-xs-12">
										<label>Total Serviços</label>
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ve_serVt" id="serVt" value="<?php echo $linha['ve_serVt']?>" placeholder="Total dos Serviços">
										<script>
										$(function(){
										   $('#serVt').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-2 col-xs-12">
										<label>Total Transporte</label>
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ve_transVt" id="transVt" value="<?php echo $linha['ve_transVt']?>" placeholder="Total Transporte">
									</div>
									<div class="col-md-3 col-xs-12">
										<label>Total Descontos</label>
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ve_desVt" id="desVt" value="<?php echo $linha['ve_desVt']?>" placeholder="Total Desconto">
									</div>
									<div class="col-md-3 col-xs-12">
										<label>Valor Total</label>
										<input type="text" class="form-control" name="ve_total" id="Total" value="<?php echo $linha['ve_total']?>" placeholder="Valor Total:">
									</div>
								  </div>
								  <div class="row">
									<div class="col-md-4 col-xs-12">
										<label class="control-label">PAGAMENTO: <?php echo $linha['ve_pag'] ?></label>
										<select class="form-control" name="ve_pag">
											<option value="<?php echo $linha['ve_pag'] ?>"></option>
											<option value="Á VISTA">Á VISTA</option>
											<option value="PARCELADO">PARCELADO</option>
										</select>
									</div>
									<div class="col-md-6 col-xs-12">										
										<label class="control-label">ANEXAR ARQUIVO:<a href="../../../images/galeria/<?php echo $linha['ve_anexar'] ?>"><?php echo $linha['ve_anexar'] ?></a></label>
										<input type="hidden" name="ve_anexar" value="<?php echo $linha['ve_anexar']?>">
										<input class="btn btn-info" type="file" name="ve_anexar" value="<?php echo $linha['ve_anexar'] ?>">
										<img width="20%" height="auto">
										<script>
										function readURL(input) {
											if (input.files && input.files[0]) {
												var reader = new FileReader();
												reader.onload = function (e) {
												$(input).next()
												.attr('src', e.target.result)
											};
											reader.readAsDataURL(input.files[0]);
											}
											else {
												var img = input.value;
												$(input).next().attr('src',img);
											}
										} 

										function verificaMostraBotao(){
											$('input[type=file]').each(function(index){
												if ($('input[type=file]').eq(index).val() != ""){
													readURL(this);
													$('.hide').show();
												}
											});
										}

										$('input[type=file]').on("change", function(){
										  verificaMostraBotao();
										});

										$('.hide').on("click", function(){
											$(document.body).append($('<input />', {type: "file" }).change(verificaMostraBotao));
											$(document.body).append($('<img />'));
											$('.hide').hide();
										});

									</script>
									</div>
								  </div>
								  <div class="row">
									  <div class="col-md-12">
										  <label>Observações/Detalhes</label>
										  <textarea class="form-control" name="ve_obs" rows="2" value="<?php echo $linha['ve_obs'] ?>"><?php echo $linha['ve_obs'] ?></textarea>
									  </div>
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
										<input type="hidden" name="ve_userAlterado" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
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
            					<input name="ve_id" type="hidden" id="ve_id" value="<?php echo $linha['ve_id'];?>" />
								<button type="submit" class="btn btn-warning"><i class="fa fa-print nav_icon"></i>Imprimir</button>
							</form>
						</th>
								<th class="text-center">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#info<?php echo $linha['ve_id'] ?>" data-whatever="@mdo"></i>Informações</button>
									<div class="modal fade" id="info<?php echo $linha['ve_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info<?php echo $linha['ve_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="alterar<?php echo $linha['ve_id'] ?>Label">REGISTRO DE CONTRATO DE LOCAÇÃO: (<b style="color: midnightblue;"><?php echo $linha['ve_id'] ?></b>)</h4>
								  </div>
								  <div class="modal-body">
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Dados Gerais</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#A3FFD2"> 
														<tr> 
															<th style="text-align: center;">Cliente</th> 
															<th style="text-align: center;">Data da Venda</th> 
															<th style="text-align: center;">Data Entrega</th> 
															<th style="text-align: center;">Canal</th>
															<th style="text-align: center;">Situação</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ve_nome'] ?></small></td>
															<td><small><?php echo $linha['ve_dtvenda'] ?></small></td>
															<td><small><?php echo $linha['ve_dtentrega'] ?></small></td>
															<td><small><?php echo $linha['ve_canal'] ?></small></td>
															<td><small><?php echo $linha['ve_situacao'] ?></small></td>
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
													<thead bgcolor="#FF7E80"> 
														<tr> 
															<th style="text-align: center;">Registrado pelo Usuário</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ve_user'] ?></small></td>
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
													<thead bgcolor="#FFF4BD"> 
														<tr> 
															<th style="text-align: center;">Dia Venc.</th> 
															<th style="text-align: center;">Quantidade Vezes</th> 
															<th style="text-align: center;">Forma de Pagamento</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ve_vencimento'] ?></small></td>
															<td><small><?php echo $linha['ve_faqua'] ?></small></td>
															<td><small><?php echo $linha['ve_forma'] ?></small></td>
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
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idOne'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoOne'] ?></small></td>
															<td><small><?php echo $linha['ve_quantOne'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorOne'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTOne'] ?></small></td>
														</tr>
													</tbody>
													<?php if($linha['ve_idTwo']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTwo'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTwo'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTwo'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTwo'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idThree']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idThree'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoThree'] ?></small></td>
															<td><small><?php echo $linha['ve_quantThree'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorThree'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idFour']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idFour'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoFour'] ?></small></td>
															<td><small><?php echo $linha['ve_quantFour'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorFour'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idFive']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idFive'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoFive'] ?></small></td>
															<td><small><?php echo $linha['ve_quantFive'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorFive'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idSix']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idSix'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoSix'] ?></small></td>
															<td><small><?php echo $linha['ve_quantSix'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorSix'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTSix'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idSev']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idSev'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoSev'] ?></small></td>
															<td><small><?php echo $linha['ve_quantSev'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorSev'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTSev'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idEig']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idEig'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoEig'] ?></small></td>
															<td><small><?php echo $linha['ve_quantEig'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorEig'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTEig'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idNine']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idNine'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoNine'] ?></small></td>
															<td><small><?php echo $linha['ve_quantNine'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorNine'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTNine'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idTen']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTen'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTen'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTen'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTen'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTen'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idTenO']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTenO'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTenO'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTenO'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTenO'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTenO'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idTenTwo']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTenTwo'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTenTwo'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTenTwo'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTenTwo'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTenTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idTenThree']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTenThree'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTenThree'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTenThree'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTenThree'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTenThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idTenFour']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTenFour'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTenFour'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTenFour'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTenFour'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTenFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ve_idTenFive']==''){
															}else{?>
													<thead bgcolor="#E2AAFF"> 
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
															<td><small><?php echo $linha['ve_idTenFive'] ?></small></td>
															<td><small><?php echo $linha['ve_tipoTenFive'] ?></small></td>
															<td><small><?php echo $linha['ve_quantTenFive'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTenFive'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valorTTenFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
												</table>
											</div>
										</div>									    
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Transporte</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#A6FF8C"> 
														<tr> 
															<th style="text-align: center;">Valor Frete</th> 
															<th style="text-align: center;">Transportadora</th> 
															<th style="text-align: center;">Cep-Entrega</th>
															<th style="text-align: center;">Cidade-Entrega</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small>R$<?php echo $linha['ve_frete'] ?></small></td>
															<td><small><?php echo $linha['ve_transportadora'] ?></small></td>
															<td><small><?php echo $linha['ve_ecep'] ?></small></td>
															<td><small><?php echo $linha['ve_ecidade'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Valor Contrato</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFF972"> 
														<tr> 
															<th style="text-align: center;">Tipo Pagamento</th>
															<th style="text-align: center;">Total Produto</th> 
															<th style="text-align: center;">Total Transporte</th>
															<th style="text-align: center;">Desconto</th>
															<th style="text-align: center;">Valor Total</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ve_pag'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_valPt'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_transVt'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_desVt'] ?></small></td>
															<td><small>R$<?php echo $linha['ve_total'] ?></small></td>
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
															<td><small><?php echo $linha['ve_userAlterado'] ?></small></td>
															<td><small><?php echo $dataR ?></small></td>
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
									<form action="../../../sql/excluir_venda.php" method="post">
            							<input name="ve_id" type="hidden" id="ve_id" value="<?php echo $linha['ve_id'];?>" />
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
			  var quant1 = document.getElementById("quant1").value;
			  var valor = document.getElementById("valor").value;
			  var valor = parseFloat(valor.replace(',', '.'));	
				if(quant1 ==''){
				var valorT = 0;
				document.getElementById('valorT').value = valorT.toFixed(2).replace('.',',');
				}else{
			  var valorT = 0;
			  valorT = quant1 * valor;			
			  document.getElementById('valorT').value = valorT.toFixed(2).replace('.',',');
				}
			
			  var quant2 = document.getElementById("quant2").value;
			  var valor2 = document.getElementById("valor2").value;
			  var valor2 = parseFloat(valor2.replace(',', '.'));	
				if(quant2 ==''){
				var valorT2 = 0;
				document.getElementById('valorT2').value = valorT2.toFixed(2).replace('.',',');
				}else{
			  var valorT2 = 0;
			  valorT2 = quant2 * valor2;			
			  document.getElementById('valorT2').value = valorT2.toFixed(2).replace('.',',');
				}
			
			  var quant3 = document.getElementById("quant3").value;
			  var valor3 = document.getElementById("valor3").value;
			  var valor3 = parseFloat(valor3.replace(',', '.'));	
				if(quant3 ==''){
				var valorT3 = 0;
				document.getElementById('valorT3').value = valorT3.toFixed(2).replace('.',',');
				}else{
			  var valorT3 = 0;
			  valorT3 = quant3 * valor3;			
			  document.getElementById('valorT3').value = valorT3.toFixed(2).replace('.',',');
				}
			
			  var quant4 = document.getElementById("quant4").value;
			  var valor4 = document.getElementById("valor4").value;
			  var valor4 = parseFloat(valor4.replace(',', '.'));	
				if(quant4 ==''){
				var valorT4 = 0;
				document.getElementById('valorT4').value = valorT4.toFixed(2).replace('.',',');
				}else{
			  var valorT4 = 0;
			  valorT4 = quant4 * valor4;			
			  document.getElementById('valorT4').value = valorT4.toFixed(2).replace('.',',');
				}
			
			  var quant5 = document.getElementById("quant5").value;
			  var valor5 = document.getElementById("valor5").value;
			  var valor5 = parseFloat(valor5.replace(',', '.'));	
				if(quant5 ==''){
				var valorT5 = 0;
				document.getElementById('valorT5').value = valorT5.toFixed(2).replace('.',',');
				}else{
			  var valorT5 = 0;
			  valorT5 = quant5 * valor5;			
			  document.getElementById('valorT5').value = valorT5.toFixed(2).replace('.',',');
				}
			
			  var quant6 = document.getElementById("quant6").value;
			  var valor6 = document.getElementById("valor6").value;
			  var valor6 = parseFloat(valor6.replace(',', '.'));	
				if(quant6 ==''){
				var valorT6 = 0;
				document.getElementById('valorT6').value = valorT6.toFixed(2).replace('.',',');
				}else{
			  var valorT6 = 0;
			  valorT6 = quant6 * valor6;			
			  document.getElementById('valorT6').value = valorT6.toFixed(2).replace('.',',');
				}
			
			  var quant7 = document.getElementById("quant7").value;
			  var valor7 = document.getElementById("valor7").value;
			  var valor7 = parseFloat(valor7.replace(',', '.'));	
				if(quant7 ==''){
				var valorT7 = 0;
				document.getElementById('valorT7').value = valorT7.toFixed(2).replace('.',',');
				}else{
			  var valorT7 = 0;
			  valorT7 = quant7 * valor7;			
			  document.getElementById('valorT7').value = valorT7.toFixed(2).replace('.',',');
				}
			
			  var quant8 = document.getElementById("quant8").value;
			  var valor8 = document.getElementById("valor8").value;
			  var valor8 = parseFloat(valor8.replace(',', '.'));	
				if(quant8 ==''){
				var valorT8 = 0;
				document.getElementById('valorT8').value = valorT8.toFixed(2).replace('.',',');
				}else{
			  var valorT8 = 0;
			  valorT8 = quant8 * valor8;			
			  document.getElementById('valorT8').value = valorT8.toFixed(2).replace('.',',');
				}
			
			  var quant9 = document.getElementById("quant9").value;
			  var valor9 = document.getElementById("valor9").value;
			  var valor9 = parseFloat(valor9.replace(',', '.'));	
				if(quant9 ==''){
				var valorT9 = 0;
				document.getElementById('valorT9').value = valorT9.toFixed(2).replace('.',',');
				}else{
			  var valorT9 = 0;
			  valorT9 = quant9 * valor9;			
			  document.getElementById('valorT9').value = valorT9.toFixed(2).replace('.',',');
				}
			
			  var quant10 = document.getElementById("quant10").value;
			  var valor10 = document.getElementById("valor10").value;
			  var valor10 = parseFloat(valor10.replace(',', '.'));	
				if(quant10 ==''){
				var valorT10 = 0;
				document.getElementById('valorT10').value = valorT10.toFixed(2).replace('.',',');
				}else{
			  var valorT10 = 0;
			  valorT10 = quant10 * valor10;			
			  document.getElementById('valorT10').value = valorT10.toFixed(2).replace('.',',');
				}
			
			  var quant11 = document.getElementById("quant11").value;
			  var valor11 = document.getElementById("valor11").value;
			  var valor11 = parseFloat(valor11.replace(',', '.'));	
				if(quant11 ==''){
				var valorT11 = 0;
				document.getElementById('valorT11').value = valorT11.toFixed(2).replace('.',',');
				}else{
			  var valorT11 = 0;
			  valorT11 = quant11 * valor11;			
			  document.getElementById('valorT11').value = valorT11.toFixed(2).replace('.',',');
				}
			
			  var quant12 = document.getElementById("quant12").value;
			  var valor12 = document.getElementById("valor12").value;
			  var valor12 = parseFloat(valor12.replace(',', '.'));	
				if(quant12 ==''){
				var valorT12 = 0;
				document.getElementById('valorT12').value = valorT12.toFixed(2).replace('.',',');
				}else{
			  var valorT12 = 0;
			  valorT12 = quant12 * valor12;			
			  document.getElementById('valorT12').value = valorT12.toFixed(2).replace('.',',');
				}
			
			  var quant13 = document.getElementById("quant13").value;
			  var valor13 = document.getElementById("valor13").value;
			  var valor13 = parseFloat(valor13.replace(',', '.'));	
				if(quant13 ==''){
				var valorT13 = 0;
				document.getElementById('valorT13').value = valorT13.toFixed(2).replace('.',',');
				}else{
			  var valorT13 = 0;
			  valorT13 = quant13 * valor13;			
			  document.getElementById('valorT13').value = valorT13.toFixed(2).replace('.',',');
				}
			
			  var quant14 = document.getElementById("quant14").value;
			  var valor14 = document.getElementById("valor14").value;
			  var valor14 = parseFloat(valor14.replace(',', '.'));	
				if(quant14 ==''){
				var valorT14 = 0;
				document.getElementById('valorT14').value = valorT14.toFixed(2).replace('.',',');
				}else{
			  var valorT14 = 0;
			  valorT14 = quant14 * valor14;			
			  document.getElementById('valorT14').value = valorT14.toFixed(2).replace('.',',');
				}
			
			  var quant15 = document.getElementById("quant15").value;
			  var valor15 = document.getElementById("valor15").value;
			  var valor15 = parseFloat(valor15.replace(',', '.'));	
				if(quant15 ==''){
				var valorT15 = 0;
				document.getElementById('valorT15').value = valorT15.toFixed(2).replace('.',',');
				}else{
			  var valorT15 = 0;
			  valorT15 = quant15 * valor15;			
			  document.getElementById('valorT15').value = valorT15.toFixed(2).replace('.',',');
				}
			
			  var valPt = 0;
			  valPt = valorT + valorT2 + valorT3 + valorT4 + valorT5 + valorT6 + valorT7 + valorT8 + valorT9 + valorT10 + valorT11 + valorT12 + valorT13 + valorT14 + valorT15;
			  document.getElementById('valPt').value = valPt.toFixed(2).replace('.',',');
			 
			  
			  var vfrete = document.getElementById("vfrete").value;
			  var vFrete = parseFloat(vfrete.replace(',', '.'));
				if(vfrete == ''){
				   var transVt = 0;
					document.getElementById('transVt').value = transVt.toFixed(2).replace('.',',');
				   }else{
			  var transVt = 0;
			  transVt = vFrete;
			  document.getElementById('transVt').value = transVt.toFixed(2).replace('.',',');
				   }
			
			  var descontoT = document.getElementById("desVt").value;
			  var porcento = 0;
			  porcento = descontoT/100;
        
			  var total = 0;
			  total = valPt + transVt;
			  total = total - (total * porcento);
			  document.getElementById('total').value = total.toFixed(2).replace('.',',');

		}
    	</script> 
    	<!-- FIM CALCULAR-->
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