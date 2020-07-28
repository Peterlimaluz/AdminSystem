<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Pesquisa :: Tipo de Contrato</title>
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
<!-- Search Servicos 1 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod").blur(function(){
      var $tabela_nome = $("#nome");
	  var $tabela_total = $("#total");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 1 -->
<!-- Search Servicos 2 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod2").blur(function(){
      var $tabela_nome = $("#nome2");
	  var $tabela_total = $("#total2");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 2 -->
<!-- Search Servicos 3 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod3").blur(function(){
      var $tabela_nome = $("#nome3");
	  var $tabela_total = $("#total3");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 3 -->
<!-- Search Servicos 4 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod4").blur(function(){
      var $tabela_nome = $("#nome4");
	  var $tabela_total = $("#total4");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 4 -->
<!-- Search Servicos 5 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod5").blur(function(){
      var $tabela_nome = $("#nome5");
	  var $tabela_total = $("#total5");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 5 -->
<!-- Search Servicos 6 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod6").blur(function(){
      var $tabela_nome = $("#nome6");
	  var $tabela_total = $("#total6");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 6 -->
<!-- Search Servicos 7 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod7").blur(function(){
      var $tabela_nome = $("#nome7");
	  var $tabela_total = $("#total7");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 7 -->
<!-- Search Servicos 8 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod8").blur(function(){
      var $tabela_nome = $("#nome8");
	  var $tabela_total = $("#total8");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 8 -->
<!-- Search Servicos 9 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod9").blur(function(){
      var $tabela_nome = $("#nome9");
	  var $tabela_total = $("#total9");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 9 -->
<!-- Search Servicos 10 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod10").blur(function(){
      var $tabela_nome = $("#nome10");
	  var $tabela_total = $("#total10");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 10 -->
<!-- Search Servicos 11 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod11").blur(function(){
      var $tabela_nome = $("#nome11");
	  var $tabela_total = $("#total11");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 11 -->
<!-- Search Servicos 12 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod12").blur(function(){
      var $tabela_nome = $("#nome12");
	  var $tabela_total = $("#total12");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 12 -->
<!-- Search Servicos 13 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod13").blur(function(){
      var $tabela_nome = $("#nome13");
	  var $tabela_total = $("#total13");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 13 -->
<!-- Search Servicos 14 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod14").blur(function(){
      var $tabela_nome = $("#nome14");
	  var $tabela_total = $("#total14");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 14 -->
<!-- Search Servicos 15 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod15").blur(function(){
      var $tabela_nome = $("#nome15");
	  var $tabela_total = $("#total15");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos 5 -->
<!-- Search Servicos T 1 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT").blur(function(){
      var $tabela_nome = $("#nome");
	  var $tabela_total = $("#total");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 1 -->
<!-- Search Servicos T 2 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT2").blur(function(){
      var $tabela_nome = $("#nome2");
	  var $tabela_total = $("#total2");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 2 -->
<!-- Search Servicos T 3 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT3").blur(function(){
      var $tabela_nome = $("#nome3");
	  var $tabela_total = $("#total3");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 3 -->
<!-- Search Servicos T 4 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT4").blur(function(){
      var $tabela_nome = $("#nome4");
	  var $tabela_total = $("#total4");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 4 -->
<!-- Search Servicos T 5 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT5").blur(function(){
      var $tabela_nome = $("#nome5");
	  var $tabela_total = $("#total5");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 5 -->
<!-- Search Servicos T 6 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT6").blur(function(){
      var $tabela_nome = $("#nome6");
	  var $tabela_total = $("#total6");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 6 -->
<!-- Search Servicos T 7 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT7").blur(function(){
      var $tabela_nome = $("#nome7");
	  var $tabela_total = $("#total7");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 7 -->
<!-- Search Servicos T 8 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT8").blur(function(){
      var $tabela_nome = $("#nome8");
	  var $tabela_total = $("#total8");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 8 -->
<!-- Search Servicos T 9 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT9").blur(function(){
      var $tabela_nome = $("#nome9");
	  var $tabela_total = $("#total9");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 9 -->
<!-- Search Servicos T 10 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT10").blur(function(){
      var $tabela_nome = $("#nome10");
	  var $tabela_total = $("#total10");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 10 -->
<!-- Search Servicos T 11 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT11").blur(function(){
      var $tabela_nome = $("#nome11");
	  var $tabela_total = $("#total11");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 11 -->
<!-- Search Servicos T 12 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT12").blur(function(){
      var $tabela_nome = $("#nome12");
	  var $tabela_total = $("#total12");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 12 -->
<!-- Search Servicos T 13 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT13").blur(function(){
      var $tabela_nome = $("#nome13");
	  var $tabela_total = $("#total13");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 13 -->
<!-- Search Servicos T 14 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT14").blur(function(){
      var $tabela_nome = $("#nome14");
	  var $tabela_total = $("#total14");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 14 -->
<!-- Search Servicos T 15 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codT15").blur(function(){
      var $tabela_nome = $("#nome15");
	  var $tabela_total = $("#total15");

      $tabela_nome.val('Carregando...');
      $tabela_total.val('Carregando...');

        $.getJSON(
          '../../../sql/select_servicos.php',
          { tabela_id: $( this ).val() },
          function( json )
          {
            $tabela_nome.val( json.tabela_nome );
            $tabela_total.val( json.tabela_total );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH servicos T 15 -->
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
					<h3 class="title1"><i class="material-icons">border_color </i> Pesquisa Contrato de Manutenção</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Pesquisa por Tipo de Contrato:</h4>
<?php

$begin = @$_GET['begin'];
if (!$begin) { $begin = 0; }
$tipo = $_POST['pag'];						
$query = "SELECT COUNT(*) FROM manutencao WHERE ma_pag LIKE '%$tipo%'";
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
									<th>REGISTRO</th> 
                                    <th>CLIENTE</th> 
                                    <th>DATA GERADO</th> 
                                    <th>FORMA PAG</th>
                                    <th>PAGAMENTO</th>
                                    <th>DATA SERVIÇO</th>
                                    <th>EXPANDIR</th>
								</tr> 
							</thead>
	<?php
	
$tipo = $_POST['pag'];
$query = "SELECT DISTINCT * FROM manutencao WHERE ma_pag LIKE '%$tipo%' ORDER BY ma_id DESC";
$query = mysql_query($query);

$c = 2;
$cores = array("#ecfeef","#fcffe0");

while ($linha = mysql_fetch_array($query)) {

  $var = $linha['ma_dtgerado'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
 
   $varE = $linha['ma_dtserv'];
   $varE = explode(" ",$varE);
   $diaE = $varE[0];
   $diaE = explode("-",$diaE);
   $dataE = "$diaE[2]/$diaE[1]/$diaE[0]";
	
   $varA = $linha['ma_dtAlterado'];
   $varA = explode(" ",$varA);
   $diaA = $varA[0];
   $diaA = explode("-",$diaA);
  @ $dataA = "$diaA[2]/$diaA[1]/$diaA[0]";
   
   $index = $c % 2;
   $c++;
   $cor = $cores[$index];
 
?> 
							<tbody> 
								<tr> 
									<th scope="row"><?php echo $linha['ma_id'] ?></th> 
									<td><?php echo $linha['ma_nome'] ?></td> 
									<td><?php echo $data ?></td> 
									<td><?php echo $linha['ma_forma'] ?></td>
									<th style="background-color: darksalmon"><?php echo $linha['ma_pag'] ?></th>
									<td><?php echo $dataE ?></td>
									<td><a class="btn btn-danger" id="noprint" data-toggle="collapse" href="#<?php echo $linha['ma_id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo $linha['ma_id'] ?>"><i class="fa fa-plus-square nav_icon"></i></a></td>
								</tr>
							</tbody>
							<tr class="collapse" id="<?php echo $linha['ma_id'] ?>" style="background: #FFF6A9;">
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterar<?php echo $linha['ma_id'] ?>" data-whatever="@mdo"><i class="fa fa-pencil-alt nav_icon"></i> Alterar</button>
							<div class="modal fade" id="alterar<?php echo $linha['ma_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="alterar<?php echo $linha['ma_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="info<?php echo $linha['ma_id'] ?>Label">REGISTRO DO CONTRATO DE MANUTENÇÃO: (<b style="color: midnightblue;"><?php echo $linha['ma_id'] ?></b>)</h4>
									  <hr>
										<label>Contrato Gerado Pelo Usuário: <small style="color: crimson;"><?php echo $linha['ma_user']?></small></label>
										
								  </div>
								  <div class="modal-body">
									<form action="../../../sql/update_manutencao.php" method="post">
										<div class="form-group">
											<input type="hidden" name="ma_id" value="<?php echo $linha['ma_id']?>">
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $linha['ma_id'] ?>">Dados Gerais :</a></i></u></div>
											<div id="collapseOne<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $linha['ma_id'] ?>">
												<div class="row">
													<div class="col-md-3">
														<label>CPF/CNPJ</label>
													<input type="text" name="ma_cpf" id="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="14" class="form-control" value="<?php echo $linha['ma_cpf']?>" placeholder="CPF/CNPJ - Cliente">
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
														<input type="text" name="ma_cep" id="cep" value="<?php echo $linha['ma_cep']?>" class="form-control" placeholder="Cep">
													</div>
													<div class="col-md-3">
														<label>CIDADE</label>
														<input type="text" name="ma_cidade" id="cidade" value="<?php echo $linha['ma_cidade']?>" class="form-control" placeholder="Cidade">
													</div>
													<div class="col-md-3">
														<label>BAIRRO</label>
														<input type="text" name="ma_bairro" id="bairro" value="<?php echo $linha['ma_bairro']?>" class="form-control" placeholder="Bairro">
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<label>LOGRADOURO</label>
														<input type="text" name="ma_rua" id="rua" value="<?php echo $linha['ma_rua']?>" class="form-control" placeholder="Endereço">
													</div>
													<div class="col-md-2">
														<label>NUMERO</label>
														<input type="text" name="ma_numero" id="num" value="<?php echo $linha['ma_numero']?>" class="form-control" placeholder="Número">
													</div>
													<div class="col-md-2">
														<label>AC</label>
														<input type="text" name="ma_uf" id="ac" value="<?php echo $linha['ma_uf']?>" class="form-control" placeholder="UF">
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<label class="control-label">Cliente</label>
														<input class="form-control" name="ma_nome" value="<?php echo $linha['ma_nome'] ?>">
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-4"></div>
													<div class="col-md-4">
														<label>Data Gerado: <b style="color: crimson;"><?php echo $data ?></b></label>
														<input type="date" name="ma_dtgerado" class="form-control" placeholder="Data Gerado:" value="<?php echo $linha['ma_dtgerado']?>">
													</div>
													<input type="hidden" name="ma_user" value="<?php echo $linha['ma_user']?>">
													<div class="col-md-4"></div>
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $linha['ma_id'] ?>">Faturamento :</a></i></u></div>
											<div id="collapseTwo<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $linha['ma_id'] ?>">
												<div class="row">
													<div class="col-md-4">
														<label>Quantidade de Vezes: <b style="color: crimson;"><?php echo $linha['ma_quantidade'] ?></b></label>
														<select name="ma_quantidade" class="form-control">
															<option value="<?php echo $linha['ma_quantidade'] ?>"></option>
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
													<div class="col-md-8">
														<label>Forma de Pagamento: <b style="color: crimson;"><?php echo $linha['ma_forma'] ?></b></label>
														<select class="form-control" name="ma_forma">
															<option value="<?php echo $linha['ma_forma'] ?>">FORMA DE PAGAMENTO</option>
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
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseThree<?php echo $linha['ma_id'] ?>">Manutenção/Reparo 1 :</a></i></u></div>
								<div id="collapseThree<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label>Manutenção/Reparo 1</label>
										<textarea class="form-control" name="ma_mrOne" id="nome" placeholder="Nome da Manutenção/Reparo - Detalhes 1 :"><?php echo $linha['ma_mrOne'] ?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQOne" id="quantidade" value="<?php echo $linha['ma_mrQOne'] ?>" placeholder="Quantidade 1 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVOne" id="total" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVOne']?>" placeholder="Valor Unitário 1 :">
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
										   $('#total').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTOne" id="totalT" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTOne'] ?>" placeholder="Valor Total 1 :">
										<script>
										$(function(){
										   $('#totalT').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>								
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP2<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP2<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 2 :</a></i></u></div>
								</div>
								<div id="collapseP2<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod2">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT2"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTwo" id="nome2" placeholder="Nome da Manutenção/Reparo - Detalhes 2 :"><?php echo $linha['ma_mrTwo']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="number" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTwo" id="quantidade2" value="<?php echo $linha['ma_mrQTwo']?>" placeholder="Quantidade 2 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTwo" onKeyUp="calcular(this.value)" id="total2" class="form-control" value="<?php echo $linha['ma_mrVTwo']?>" placeholder="Valor Unitario 2 :">
									<script>
										$(function(){
										   $('#total2').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTwo" onKeyUp="calcular(this.value)" id="totalT2" class="form-control" value="<?php echo $linha['ma_mrVTTwo']?>" placeholder="Valor Total 2 :">
									<script>
										$(function(){
										   $('#totalT2').bind('keypress',mask.money)
										});
									</script>
									</div>								
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP3<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP3<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 3 :</a></i></u></div>
								</div>
								<div id="collapseP3<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod3">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT3"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrThree" id="nome3" placeholder="Nome da Manutenção/Reparo - Detalhes 3 :"><?php echo $linha['ma_mrThree']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="number" class="form-control" name="ma_mrQThree" id="quantidade3" onKeyUp="calcular(this.value)" value="<?php echo $linha['ma_mrQThree']?>" placeholder="Quantidade 3 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVThree" id="total3" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVThree']?>" placeholder="Valor Unitário 3 :">
										<script>
										$(function(){
										   $('#total3').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTThree" id="totalT3" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTThree']?>" placeholder="Valor Total 3 :">
										<script>
										$(function(){
										   $('#totalT3').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP4<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP4<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 4 :</a></i></u></div>
								</div>
								<div id="collapseP4<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod4">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT4"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrFour" id="nome4" placeholder="Nome da Manutenção/Reparo - Detalhes 4 :"><?php echo $linha['ma_mrFour']?></textarea>
									</div>
								</div>
								<div class="row">									
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQFour" id="quantidade4" value="<?php echo $linha['ma_mrQFour']?>" placeholder="Quantidade 4 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVFour" id="total4" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVFour']?>" placeholder="Valor Unitário 4 :">
										<script>
										$(function(){
										   $('#total4').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTFour" id="totalT4" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTFour']?>" placeholder="Valor Total 4 :">
										<script>
										$(function(){
										   $('#totalT4').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP5<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP5<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 5 :</a></i></u></div>
								</div>
								<div id="collapseP5<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod5">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT5"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrFive" id="nome5" placeholder="Nome da Manutenção/Reparo - Detalhes 5 :"><?php echo $linha['ma_mrFive']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQFive" id="quantidade5" value="<?php echo $linha['ma_mrQFive']?>" placeholder="Quantidade 5 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVFive" id="total5" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVFive']?>" placeholder="Valor unitário 5 :">
										<script>
										$(function(){
										   $('#total5').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTFive" id="totalT5" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTFive']?>" placeholder="Valor Total 5 :">
										<script>
										$(function(){
										   $('#totalT5').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP6<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP6<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 6 :</a></i></u></div>
								</div>
								<div id="collapseP6<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP6<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod6">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT6"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrSix" id="nome6" placeholder="Nome da Manutenção/Reparo - Detalhes 6 :"><?php echo $linha['ma_mrSix']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQSix" id="quantidade6" value="<?php echo $linha['ma_mrQSix']?>" placeholder="Quantidade 6 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVSix" id="total6" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVSix']?>" placeholder="Valor unitário 6 :">
										<script>
										$(function(){
										   $('#total6').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTSix" id="totalT6" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTSix']?>" placeholder="Valor Total 6 :">
										<script>
										$(function(){
										   $('#totalT6').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP7<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP7<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 7 :</a></i></u></div>
								</div>
								<div id="collapseP7<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP7<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod7">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT7"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrSev" id="nome7" placeholder="Nome da Manutenção/Reparo - Detalhes 7 :"><?php echo $linha['ma_mrSev']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQSev" id="quantidade7" value="<?php echo $linha['ma_mrQSev']?>" placeholder="Quantidade 7 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVSev" id="total7" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVSev']?>" placeholder="Valor unitário 7 :">
										<script>
										$(function(){
										   $('#total7').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTSev" id="totalT7" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTSev']?>" placeholder="Valor Total 7 :">
										<script>
										$(function(){
										   $('#totalT7').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP8<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP8<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 8 :</a></i></u></div>
								</div>
								<div id="collapseP8<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP8<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod8">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT8"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrEig" id="nome8" placeholder="Nome da Manutenção/Reparo - Detalhes 8 :"><?php echo $linha['ma_mrEig']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQEig" id="quantidade8" value="<?php echo $linha['ma_mrQEig']?>" placeholder="Quantidade 8 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVEig" id="total8" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVEig']?>" placeholder="Valor unitário 8 :">
										<script>
										$(function(){
										   $('#total8').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTEig" id="totalT8" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTEig']?>" placeholder="Valor Total 8 :">
										<script>
										$(function(){
										   $('#totalT8').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP9<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP9<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 9 :</a></i></u></div>
								</div>
								<div id="collapseP9<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP9<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod9">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT9"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrNine" id="nome9" placeholder="Nome da Manutenção/Reparo - Detalhes 9 :"><?php echo $linha['ma_mrNine']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQNine" id="quantidade9" value="<?php echo $linha['ma_mrQNine']?>" placeholder="Quantidade 9 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVNine" id="total9" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVNine']?>" placeholder="Valor unitário 9 :">
										<script>
										$(function(){
										   $('#total9').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTNine" id="totalT9" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTNine']?>" placeholder="Valor Total 9 :">
										<script>
										$(function(){
										   $('#totalT9').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP10<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP10<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 10 :</a></i></u></div>
								</div>
								<div id="collapseP10<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod10">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT10"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTen" id="nome10" placeholder="Nome da Manutenção/Reparo - Detalhes 10 :"><?php echo $linha['ma_mrTen']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTen" id="quantidade10" value="<?php echo $linha['ma_mrQTen']?>" placeholder="Quantidade 10 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTen" id="total10" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTen']?>" placeholder="Valor unitário 10 :">
										<script>
										$(function(){
										   $('#total10').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTen" id="totalT10" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTTen']?>" placeholder="Valor Total 10 :">
										<script>
										$(function(){
										   $('#totalT10').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP11<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP11<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 11 :</a></i></u></div>
								</div>
								<div id="collapseP11<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP11<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod11">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT11"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTenOne" id="nome11" placeholder="Nome da Manutenção/Reparo - Detalhes 11 :"><?php echo $linha['ma_mrTenOne']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTenOne" id="quantidade11" value="<?php echo $linha['ma_mrQTenOne']?>" placeholder="Quantidade 11 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTenOne" id="total11" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTenOne']?>" placeholder="Valor unitário 11 :">
										<script>
										$(function(){
										   $('#total11').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTenOne" id="totalT11" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTTenOne']?>" placeholder="Valor Total 11 :">
										<script>
										$(function(){
										   $('#totalT11').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP12<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP12<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 12 :</a></i></u></div>
								</div>
								<div id="collapseP12<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP12<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod12">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT12"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTenTwo" id="nome12" placeholder="Nome da Manutenção/Reparo - Detalhes 12 :"><?php echo $linha['ma_mrTenTwo']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTenTwo" id="quantidade12" value="<?php echo $linha['ma_mrQTenTwo']?>" placeholder="Quantidade 12 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTenTwo" id="total12" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTenTwo']?>" placeholder="Valor unitário 12 :">
										<script>
										$(function(){
										   $('#total12').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTenTwo" id="totalT12" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTTenTwo']?>" placeholder="Valor Total 12 :">
										<script>
										$(function(){
										   $('#totalT12').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP13<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP13<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 13 :</a></i></u></div>
								</div>
								<div id="collapseP13<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP13<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod13">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT13"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTenThree" id="nome13" placeholder="Nome da Manutenção/Reparo - Detalhes 13 :"><?php echo $linha['ma_mrTenThree']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTenThree" id="quantidade13" value="<?php echo $linha['ma_mrQTenThree']?>" placeholder="Quantidade 13 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTenThree" id="total13" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTenThree']?>" placeholder="Valor unitário 13 :">
										<script>
										$(function(){
										   $('#total13').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTenThree" id="totalT13" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTTenThree']?>" placeholder="Valor Total 13 :">
										<script>
										$(function(){
										   $('#totalT13').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>								
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP14<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP14<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 14 :</a></i></u></div>
								</div>
								<div id="collapseP14<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP14<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod14">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT14"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTenFour" id="nome14" placeholder="Nome da Manutenção/Reparo - Detalhes 14 :"><?php echo $linha['ma_mrTenFour']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTenFour" id="quantidade14" value="<?php echo $linha['ma_mrQTenFour']?>" placeholder="Quantidade 14 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTenFour" id="total14" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTenFour']?>" placeholder="Valor unitário 14 :">
										<script>
										$(function(){
										   $('#total14').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTenFour" id="totalT14" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTTenFour']?>" placeholder="Valor Total 14 :">
										<script>
										$(function(){
										   $('#totalT14').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP15<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseP15<?php echo $linha['ma_id'] ?>"> -- Manutenção/Reparo 15 :</a></i></u></div>
								</div>
								<div id="collapseP15<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP15<?php echo $linha['ma_id'] ?>">
								<div class="row">
									<div class="col-md-2">
										<label>Pesquisar Código</label>
										<input class="form-control" type="text" id="cod15">
									</div>
									<div class="col-md-10">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT15"> 
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['tabela_id']?>"><?php echo $linhap['tabela_id']?> - <?php echo $linhap['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="ma_mrTenFive" id="nome15" placeholder="Nome da Manutenção/Reparo - Detalhes 15 :"><?php echo $linha['ma_mrTenFive']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="ma_mrQTenFive" id="quantidade15" value="<?php echo $linha['ma_mrQTenFive']?>" placeholder="Quantidade 15 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTenFive" id="total15" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTenFive']?>" placeholder="Valor unitário 15 :">
										<script>
										$(function(){
										   $('#total15').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="ma_mrVTTenFive" id="totalT15" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['ma_mrVTTenFive']?>" placeholder="Valor Total 15 :">
										<script>
										$(function(){
										   $('#totalT15').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFourE<?php echo $linha['ma_id'] ?>" aria-expanded="false" aria-controls="collapseFourE<?php echo $linha['ma_id'] ?>">Endereço de atendimento :</a></i></u></div>
								<div id="collapseFourE<?php echo $linha['ma_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourE<?php echo $linha['ma_id'] ?>">
								<div class="row">
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
										<label class="control-label">Cep</label>
										<input type="text" name="ma_ecep" class="form-control" id="cepE" value="<?php echo $linha['ma_ecep']?>" placeholder="Cep :">
									</div>
									<div class="col-md-3">
										<label class="control-label">Complemento</label>
										<input type="text" name="ma_ecomplemento" class="form-control" value="<?php echo $linha['ma_ecomplemento']?>" placeholder="Complemento :">
									</div>
									<div class="col-md-3">
										<label class="control-label">Bairro</label>
										<input type="text" name="ma_ebairro" class="form-control" value="<?php echo $linha['ma_ebairro']?>" id="bairroE" placeholder="Bairro:">
									</div>
									<div class="col-md-3">
										<label class="control-label">Cidade</label>
										<input type="text" name="ma_ecidade" class="form-control" id="cidadeE" value="<?php echo $linha['ma_ecidade']?>" placeholder="Cidade:">
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<label class="control-label">Rua</label>
										<input type="text" name="ma_erua" class="form-control" id="ruaE" value="<?php echo $linha['ma_erua']?>" placeholder="Logradouro :">
									</div>
									<div class="col-md-2">
										<label class="control-label">Número</label>
										<input type="text" name="ma_enumero" class="form-control" value="<?php echo $linha['ma_enumero']?>" placeholder="N° :">
									</div>
									<div class="col-md-2">
										<label class="control-label">UF</label>
										<input type="text" name="ma_euf" class="form-control" id="ufE" value="<?php echo $linha['ma_euf']?>" placeholder="UF :">
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a>Valor Total e Outras Informações :</a></i></u></div>
								<div class="row">
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="ma_vSoma" id="valSoma" onKeyUp="calcular(this.value)" placeholder="Digite o Valor:" value="<?php echo $linha['ma_vSoma']?>">
										<script>
										$(function(){
										   $('#valSoma').bind('keypress',mask.money)
										});
									</script>									
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="ma_vAcrescimo" id="acrescimo" onKeyUp="calcular(this.value)" value="<?php echo $linha['ma_vAcrescimo']?>" placeholder="Digite o Acrescimo:">
										<script>
										$(function(){
										   $('#acrescimo').bind('keypress',mask.money)
										});
									</script>
									
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="ma_vDesconto" onKeyUp="calcular(this.value)" id="desconto" value="<?php echo $linha['ma_vDesconto']?>" placeholder="Valor de Desconto :">
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="ma_vTotal" id="valTotal" value="<?php echo $linha['ma_vTotal']?>" placeholder="Valor Total:">
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-2">
										<label class="control-label">Pagamento: <b style="color: crimson"><?php echo $linha['ma_pag']?></b></label>
										<select class="form-control" name="ma_pag">
											<option value="<?php echo $linha['ma_pag']?>">Selecione o Pagamento</option>
											<option value="A VISTA">A VISTA</option>
											<option value="PARCELADO">PARCELADO</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="control-label">Data de Atendimento: <b style="color: crimson"><?php echo $dataE?></b></label>
										<input class="form-control" type="date" value="<?php echo $linha['ma_dtserv']?>" name="ma_dtserv" placeholder="Data de Realização de Serviço">
									</div>									
									<div class="col-md-7">
										<label class="control-label">Obs:Detalhes</label>
										<textarea class="form-control" name="ma_obs" placeholder="Obs/Detalhes :"><?php echo $linha['ma_obs']?></textarea>
										<?php
									require_once "../../../sql/conectar.php";
									require_once "../../../sql/valida_session.php";
									$buscar_user = mysql_query("SELECT user_nome FROM usuario WHERE user_login = '$_SESSION[user_login]'");

									if(mysql_num_rows($buscar_user)>=1)
									{
										$dado = mysql_fetch_array($buscar_user);

									}
								?>
										<input type="hidden" name="ma_userAlterado" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
									</div>
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
            					<input name="ma_id" type="hidden" value="<?php echo $linha['ma_id']?>">
								<button type="submit" class="btn btn-warning"><i class="fa fa-print nav_icon"></i>Imprimir</button>
							</form>
						</th>
								<th class="text-center">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#info<?php echo $linha['ma_id'] ?>" data-whatever="@mdo"></i>Informações</button>
									<div class="modal fade" id="info<?php echo $linha['ma_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info<?php echo $linha['ma_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="alterar<?php echo $linha['ma_id'] ?>Label">REGISTRO DE CONTRATO DE MANUTENÇÃO: (<b style="color: midnightblue;"><?php echo $linha['ma_id'] ?></b>)</h4>
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
															<th style="text-align: center;">Data Gerado</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_nome'] ?></small></td>
															<td><small><?php echo $linha['ma_dtgerado'] ?></small></td>
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
															<td><small><?php echo $linha['ma_user'] ?></small></td>
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
															<th style="text-align: center;">Quantidade de Vezes</th> 
															<th style="text-align: center;">Forma de Pagamento</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_quantidade'] ?></small></td>
															<td><small><?php echo $linha['ma_forma'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Manutenção / Reparo</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 1</th>
															<th style="text-align: center;">Quantidade 1</th> 
															<th style="text-align: center;">Valor Unitário 1</th>
															<th style="text-align: center;">Valor Total 1</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrOne'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQOne'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVOne'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTOne'] ?></small></td>
														</tr>
													</tbody>
													<?php if($linha['ma_mrTwo']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 2</th>
															<th style="text-align: center;">Quantidade 2</th> 
															<th style="text-align: center;">Valor Unitário 2</th>
															<th style="text-align: center;">Valor Total 2</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTwo'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTwo'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTwo'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrThree']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 3</th>
															<th style="text-align: center;">Quantidade 3</th> 
															<th style="text-align: center;">Valor Unitário 3</th>
															<th style="text-align: center;">Valor Total 3</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrThree'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQThree'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVThree'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrFour']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 4</th>
															<th style="text-align: center;">Quantidade 4</th> 
															<th style="text-align: center;">Valor Unitário 4</th>
															<th style="text-align: center;">Valor Total 4</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrFour'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQFour'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVFour'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrFive']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 5</th>
															<th style="text-align: center;">Quantidade 5</th> 
															<th style="text-align: center;">Valor Unitário 5</th>
															<th style="text-align: center;">Valor Total 5</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrFive'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQFive'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVFive'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrSix']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 6</th>
															<th style="text-align: center;">Quantidade 6</th> 
															<th style="text-align: center;">Valor Unitário 6</th>
															<th style="text-align: center;">Valor Total 6</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrSix'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQSix'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVSix'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTSix'] ?></small></td>

														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrSev']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 7</th>
															<th style="text-align: center;">Quantidade 7</th> 
															<th style="text-align: center;">Valor Unitário 7</th>
															<th style="text-align: center;">Valor Total 7</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrSev'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQSev'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVSev'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTSev'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrEig']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 8</th>
															<th style="text-align: center;">Quantidade 8</th> 
															<th style="text-align: center;">Valor Unitário 8</th>
															<th style="text-align: center;">Valor Total 8</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrEig'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQEig'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVEig'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTEig'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrNine']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 9</th>
															<th style="text-align: center;">Quantidade 9</th> 
															<th style="text-align: center;">Valor Unitário 9</th>
															<th style="text-align: center;">Valor Total 9</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrNine'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQNine'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVNine'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTNine'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrTen']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 10</th>
															<th style="text-align: center;">Quantidade 10</th> 
															<th style="text-align: center;">Valor Unitário 10</th>
															<th style="text-align: center;">Valor Total 10</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTen'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTen'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTen'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTen'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrTenOne']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 11</th>
															<th style="text-align: center;">Quantidade 11</th> 
															<th style="text-align: center;">Valor Unitário 11</th>
															<th style="text-align: center;">Valor Total 11</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTenOne'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTenOne'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTenOne'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTenOne'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrTenTwo']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 12</th>
															<th style="text-align: center;">Quantidade 12</th> 
															<th style="text-align: center;">Valor Unitário 12</th>
															<th style="text-align: center;">Valor Total 12</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTenTwo'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTenTwo'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTenTwo'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTenTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrTenThree']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 13</th>
															<th style="text-align: center;">Quantidade 13</th> 
															<th style="text-align: center;">Valor Unitário 13</th>
															<th style="text-align: center;">Valor Total 13</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTenThree'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTenThree'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTenThree'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTenThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrTenFour']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 14</th>
															<th style="text-align: center;">Quantidade 14</th> 
															<th style="text-align: center;">Valor Unitário 14</th>
															<th style="text-align: center;">Valor Total 14</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTenFour'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTenFour'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTenFour'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTenFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['ma_mrTenFive']==''){
															}else{?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Detalhes 15</th>
															<th style="text-align: center;">Quantidade 15</th> 
															<th style="text-align: center;">Valor Unitário 15</th>
															<th style="text-align: center;">Valor Total 15</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_mrTenFive'] ?></small></td>
															<td><small><?php echo $linha['ma_mrQTenFive'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTenFive'] ?></small></td>
															<td><small><?php echo $linha['ma_mrVTTenFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
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
															<td><small><?php echo $linha['ma_ecep'] ?></small></td>
															<td><small><?php echo $linha['ma_ecomplemento'] ?></small></td>
															<td><small><?php echo $linha['ma_ebairro'] ?></small></td>
															<td><small><?php echo $linha['ma_ecidade'] ?></small></td>
															<td><small><?php echo $linha['ma_erua'] ?></small></td>
															<td><small><?php echo $linha['ma_enumero'] ?></small></td>
															<td><small><?php echo $linha['ma_euf'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Valor Final</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFF972"> 
														<tr> 
															<th style="text-align: center;">Valor de Todos os Itens</th> 
															<th style="text-align: center;">Acréscimo</th> 
															<th style="text-align: center;">Desconto</th> 
															<th style="text-align: center;">Valor Total</th>
															<th style="text-align: center;">Pagamento</th>
															<th style="text-align: center;">Data de Atendimento</th>
															<th style="text-align: center;">Obs</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['ma_vSoma'] ?></small></td>
															<td><small><?php echo $linha['ma_vAcrescimo'] ?></small></td>
															<td><small><?php echo $linha['ma_vDesconto'] ?></small></td>
															<td><small><?php echo $linha['ma_vTotal'] ?></small></td>
															<td><small><?php echo $linha['ma_pag'] ?></small></td>
															<td><small><?php echo $dataE ?></small></td>
															<td><small><?php echo $linha['ma_obs'] ?></small></td>
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
															<td><small><?php echo $linha['ma_userAlterado'] ?></small></td>
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
            							<input name="ma_id" type="hidden" id="ma_id" value="<?php echo $linha['ma_id'];?>" />
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
			  var valor = document.getElementById("total").value;
			  var vbruto = parseFloat(valor.replace(',', '.'));
				if(quant1 ==''){
				   var valorT = 0;
				   document.getElementById('totalT').value = valorT.toFixed(2).replace('.',',');
				}else{
				 var valorT = 0;
				 valorT = quant1 * vbruto;
				 document.getElementById('totalT').value = valorT.toFixed(2).replace('.',',');
				}
			
			  var quant2 = document.getElementById("quantidade2").value;
			  var valor2 = document.getElementById("total2").value;
			  var vbruto2 = parseFloat(valor2.replace(',', '.'));
				if(quant2 ==''){
				   var valorT2 = 0;
				   document.getElementById('totalT2').value = valorT2.toFixed(2).replace('.',',');
				}else{
				 var valorT2 = 0;
				 valorT2 = quant2 * vbruto2;
				 document.getElementById('totalT2').value = valorT2.toFixed(2).replace('.',',');
				}
			
			  var quant3 = document.getElementById("quantidade3").value;
			  var valor3 = document.getElementById("total3").value;
			  var vbruto3 = parseFloat(valor3.replace(',', '.'));
				if(quant3 ==''){
				   var valorT3 = 0;
				   document.getElementById('totalT3').value = valorT3.toFixed(2).replace('.',',');
				}else{
				 var valorT3 = 0;
				 valorT3 = quant3 * vbruto3;
				 document.getElementById('totalT3').value = valorT3.toFixed(2).replace('.',',');
				}
			
			  var quant4 = document.getElementById("quantidade4").value;
			  var valor4 = document.getElementById("total4").value;
			  var vbruto4 = parseFloat(valor4.replace(',', '.'));
				if(quant4 ==''){
				   var valorT4 = 0;
				   document.getElementById('totalT4').value = valorT4.toFixed(2).replace('.',',');
				}else{
				 var valorT4 = 0;
				 valorT4 = quant4 * vbruto4;
				 document.getElementById('totalT4').value = valorT4.toFixed(2).replace('.',',');
				}
			
			  var quant5 = document.getElementById("quantidade5").value;
			  var valor5 = document.getElementById("total5").value;
			  var vbruto5 = parseFloat(valor5.replace(',', '.'));
				if(quant5 ==''){
				   var valorT5 = 0;
				   document.getElementById('totalT5').value = valorT5.toFixed(2).replace('.',',');
				}else{
				 var valorT5 = 0;
				 valorT5 = quant5 * vbruto5;
				 document.getElementById('totalT5').value = valorT5.toFixed(2).replace('.',',');
				}
			
			  var quant6 = document.getElementById("quantidade6").value;
			  var valor6 = document.getElementById("total6").value;
			  var vbruto6 = parseFloat(valor6.replace(',', '.'));
				if(quant6 ==''){
				   var valorT6 = 0;
				   document.getElementById('totalT6').value = valorT6.toFixed(2).replace('.',',');
				}else{
				 var valorT6 = 0;
				 valorT6 = quant6 * vbruto6;
				 document.getElementById('totalT6').value = valorT6.toFixed(2).replace('.',',');
				}
			
			  var quant7 = document.getElementById("quantidade7").value;
			  var valor7 = document.getElementById("total7").value;
			  var vbruto7 = parseFloat(valor7.replace(',', '.'));
				if(quant7 ==''){
				   var valorT7 = 0;
				   document.getElementById('totalT7').value = valorT7.toFixed(2).replace('.',',');
				}else{
				 var valorT7 = 0;
				 valorT7 = quant7 * vbruto7;
				 document.getElementById('totalT7').value = valorT7.toFixed(2).replace('.',',');
				}
			
			  var quant8 = document.getElementById("quantidade8").value;
			  var valor8 = document.getElementById("total8").value;
			  var vbruto8 = parseFloat(valor8.replace(',', '.'));
				if(quant8 ==''){
				   var valorT8 = 0;
				   document.getElementById('totalT8').value = valorT8.toFixed(2).replace('.',',');
				}else{
				 var valorT8 = 0;
				 valorT8 = quant8 * vbruto8;
				 document.getElementById('totalT8').value = valorT8.toFixed(2).replace('.',',');
				}
			
			  var quant9 = document.getElementById("quantidade9").value;
			  var valor9 = document.getElementById("total9").value;
			  var vbruto9 = parseFloat(valor9.replace(',', '.'));
				if(quant9 ==''){
				   var valorT9 = 0;
				   document.getElementById('totalT9').value = valorT9.toFixed(2).replace('.',',');
				}else{
				 var valorT9 = 0;
				 valorT9 = quant9 * vbruto9;
				 document.getElementById('totalT9').value = valorT9.toFixed(2).replace('.',',');
				}
			
			  var quant10 = document.getElementById("quantidade10").value;
			  var valor10 = document.getElementById("total10").value;
			  var vbruto10 = parseFloat(valor10.replace(',', '.'));
				if(quant10 ==''){
				   var valorT10 = 0;
				   document.getElementById('totalT10').value = valorT10.toFixed(2).replace('.',',');
				}else{
				 var valorT10 = 0;
				 valorT10 = quant10 * vbruto10;
				 document.getElementById('totalT10').value = valorT10.toFixed(2).replace('.',',');
				}
			
			  var quant11 = document.getElementById("quantidade11").value;
			  var valor11 = document.getElementById("total11").value;
			  var vbruto11 = parseFloat(valor11.replace(',', '.'));
				if(quant11 ==''){
				   var valorT11 = 0;
				   document.getElementById('totalT11').value = valorT11.toFixed(2).replace('.',',');
				}else{
				 var valorT11 = 0;
				 valorT11 = quant11 * vbruto11;
				 document.getElementById('totalT11').value = valorT11.toFixed(2).replace('.',',');
				}
			
			  var quant12 = document.getElementById("quantidade12").value;
			  var valor12 = document.getElementById("total12").value;
			  var vbruto12 = parseFloat(valor12.replace(',', '.'));
				if(quant12 ==''){
				   var valorT12 = 0;
				   document.getElementById('totalT12').value = valorT12.toFixed(2).replace('.',',');
				}else{
				 var valorT12 = 0;
				 valorT12 = quant12 * vbruto12;
				 document.getElementById('totalT12').value = valorT12.toFixed(2).replace('.',',');
				}
			
			  var quant13 = document.getElementById("quantidade13").value;
			  var valor13 = document.getElementById("total13").value;
			  var vbruto13 = parseFloat(valor13.replace(',', '.'));
				if(quant13 ==''){
				   var valorT13 = 0;
				   document.getElementById('totalT13').value = valorT13.toFixed(2).replace('.',',');
				}else{
				 var valorT13 = 0;
				 valorT13 = quant13 * vbruto13;
				 document.getElementById('totalT13').value = valorT13.toFixed(2).replace('.',',');
				}
			
			  var quant14 = document.getElementById("quantidade14").value;
			  var valor14 = document.getElementById("total14").value;
			  var vbruto14 = parseFloat(valor14.replace(',', '.'));
				if(quant14 ==''){
				   var valorT14 = 0;
				   document.getElementById('totalT14').value = valorT14.toFixed(2).replace('.',',');
				}else{
				 var valorT14 = 0;
				 valorT14 = quant14 * vbruto14;
				 document.getElementById('totalT14').value = valorT14.toFixed(2).replace('.',',');
				}
			
			  var quant15 = document.getElementById("quantidade15").value;
			  var valor15 = document.getElementById("total15").value;
			  var vbruto15 = parseFloat(valor15.replace(',', '.'));
				if(quant15 ==''){
				   var valorT15 = 0;
				   document.getElementById('totalT15').value = valorT15.toFixed(2).replace('.',',');
				}else{
				 var valorT15 = 0;
				 valorT15 = quant15 * vbruto15;
				 document.getElementById('totalT15').value = valorT15.toFixed(2).replace('.',',');
				}
			  
			  var valt = 0;
			      valt = valorT + valorT2 + valorT3 + valorT4 + valorT5;
				 document.getElementById('valSoma').value = valt.toFixed(2).replace('.',',');
				
				
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