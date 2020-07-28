<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Pesquisa :: Número Orçamento</title>
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
	  
	  var $pro_cod = $("#nome");
	  var $pro_valor = $("#total");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome2");
	  var $pro_valor = $("#total2");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome3");
	  var $pro_valor = $("#total3");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome4");
	  var $pro_valor = $("#total4");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome5");
	  var $pro_valor = $("#total5");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome6");
	  var $pro_valor = $("#total6");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome7");
	  var $pro_valor = $("#total7");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome8");
	  var $pro_valor = $("#total8");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome9");
	  var $pro_valor = $("#total9");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome10");
	  var $pro_valor = $("#total10");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome11");
	  var $pro_valor = $("#total11");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome12");
	  var $pro_valor = $("#total12");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome13");
	  var $pro_valor = $("#total13");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome14");
	  var $pro_valor = $("#total14");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
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
	  
	  var $pro_cod = $("#nome15");
	  var $pro_valor = $("#total15");	
		
	  $pro_cod.val('Carregando...');
      $pro_valor.val('Carregando...');

        $.getJSON(
          '../../../sql/select_produtos2.php',
          { pro_id: $( this ).val() },
          function( json )
          {
			$pro_cod.val( json.pro_cod );
            $pro_valor.val( json.pro_valor );
          }
        );
    });
  });
</script>
<!-- // FIM SEARCH PRODUTO 15 -->
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
						<a href="#" style="color: slateblue; font-weight: 600; text-transform: uppercase;"><div class="titlePg">Pesquisa Orçamento</div></a>
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
					<h3 class="title1"><i class="material-icons">border_color </i> Pesquisa Orçamento</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Pesquisa por número de Registro do Orçamento:</h4>
<?php

$begin = @$_GET['begin'];
if (!$begin) { $begin = 0; }
$contrato = $_POST['contrato'];						
$query = "SELECT COUNT(*) FROM orcamento WHERE orca_id LIKE '%$contrato%'";
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
	
$contrato = $_POST['contrato'];
$query = "SELECT DISTINCT * FROM orcamento WHERE orca_id LIKE '%$contrato%' ORDER BY orca_id DESC";
$query = mysql_query($query);

$c = 2;
$cores = array("#ecfeef","#fcffe0");

while ($linha = mysql_fetch_array($query)) {

  $var = $linha['orca_dtgerado'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
	
   $varA = $linha['orca_dtAlterado'];
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
									<th scope="row"><?php echo $linha['orca_id'] ?></th> 
									<td><?php echo $linha['orca_nome'] ?></td> 
									<td><?php echo $linha['orca_tipo'] ?></td> 
									<td><?php echo $data ?></td> 
									<td><?php echo $linha['orca_transNome'] ?></td>
									<td><?php echo $linha['orca_obs'] ?></td>
									<td><a class="btn btn-danger" id="noprint" data-toggle="collapse" href="#<?php echo $linha['orca_id'] ?>" role="button" aria-expanded="false" aria-controls="<?php echo $linha['orca_id'] ?>"><i class="fa fa-plus-square nav_icon"></i></a></td>
								</tr>
							</tbody>
							<tr class="collapse" id="<?php echo $linha['orca_id'] ?>" style="background: #FFF6A9;">
								<th class="text-center">
									---
								</th>
								<th class="text-center">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alterar<?php echo $linha['orca_id'] ?>" data-whatever="@mdo"><i class="fa fa-pencil-alt nav_icon"></i> Alterar</button>
							<div class="modal fade" id="alterar<?php echo $linha['orca_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="alterar<?php echo $linha['orca_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="info<?php echo $linha['orca_id'] ?>Label">REGISTRO DO ORÇAMENTO: (<b style="color: midnightblue;"><?php echo $linha['orca_id'] ?></b>)</h4>
									  <hr>
										<label>Orçamento Gerado Pelo Usuário: <small style="color: crimson;"><?php echo $linha['orca_user']?></small></label>
										
								  </div>
								  <div class="modal-body">
									<form action="../../../sql/update_orca.php" method="post">
										<div class="form-group">
											<input type="hidden" name="orca_id" value="<?php echo $linha['orca_id']?>">
											<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseOne<?php echo $linha['orca_id'] ?>">Dados Gerais :</a></i></u></div>
											<div id="collapseOne<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $linha['orca_id'] ?>">
												<div class="row">
													<div class="col-md-3">
														<label class="control-label">Tipo: <b style="color: crimson;"><?php echo $linha['orca_tipo'] ?></b></label>
														<select class="form-control" name="orca_tipo">
															<option value="<?php echo $linha['orca_tipo'] ?>"></option>
															<option value="SERVIÇO">SERVIÇO</option>
															<option value="MANUTENÇÃO">MANUTENÇÃO</option>
															<option value="VENDA">VENDA</option>
															<option value="LOCAÇÃO">LOCAÇÃO</option>
														</select>
													</div>
													<div class="col-md-3">
														<label>CPF/CNPJ</label>
													<input type="text" name="orca_cpf" id="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="14" class="form-control" value="<?php echo $linha['orca_cpf']?>" placeholder="CPF/CNPJ - Cliente">
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
													<div class="col-md-6">
														<label class="control-label">Cliente</label>
														<input class="form-control" name="orca_nome" value="<?php echo $linha['orca_nome'] ?>">
													</div>													
												</div>
												<hr>
												<div class="row">
													<div class="col-md-4"></div>
													<div class="col-md-4">
														<label>Data Gerado: <b style="color: crimson;"><?php echo $data ?></b></label>
														<input type="hidden" name="orca_dtgerado" class="form-control" placeholder="Data Gerado:" value="<?php echo $linha['orca_dtgerado']?>">
													</div>
													<input type="hidden" name="orca_user" value="<?php echo $linha['orca_user']?>">
													<div class="col-md-4"></div>
												</div>
											</div>
										</div>										
										<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseThree<?php echo $linha['orca_id'] ?>">Nome do Item Selecionado 1 :</a></i></u></div>
								<div id="collapseThree<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label>Item 1</label>
										<textarea class="form-control" name="orca_maNmOne" id="nome" placeholder="Nome do Item Selecionado 1 :"><?php echo $linha['orca_maNmOne'] ?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQOne" id="quantidade" value="<?php echo $linha['orca_maQOne'] ?>" placeholder="Quantidade 1 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVOne" id="total" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVOne']?>" placeholder="Valor Unitário 1 :">
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
										<input type="text" name="orca_maVTOne" id="totalT" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTOne'] ?>" placeholder="Valor Total 1 :">
										<script>
										$(function(){
										   $('#totalT').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>								
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP2<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP2<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 2 :</a></i></u></div>
								</div>
								<div id="collapseP2<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod2">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT2"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTwo" id="nome2" placeholder="Nome do Item Selecionado 2 :"><?php echo $linha['orca_maNmTwo']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="number" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTwo" id="quantidade2" value="<?php echo $linha['orca_maQTwo']?>" placeholder="Quantidade 2 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTwo" onKeyUp="calcular(this.value)" id="total2" class="form-control" value="<?php echo $linha['orca_maVTwo']?>" placeholder="Valor Unitario 2 :">
									<script>
										$(function(){
										   $('#total2').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTwo" onKeyUp="calcular(this.value)" id="totalT2" class="form-control" value="<?php echo $linha['orca_maVTTwo']?>" placeholder="Valor Total 2 :">
									<script>
										$(function(){
										   $('#totalT2').bind('keypress',mask.money)
										});
									</script>
									</div>								
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP3<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP3<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 3 :</a></i></u></div>
								</div>
								<div id="collapseP3<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod3">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT3"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmThree" id="nome3" placeholder="Nome do Item Selecionado 3 :"><?php echo $linha['orca_maNmThree']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="number" class="form-control" name="orca_maQThree" id="quantidade3" onKeyUp="calcular(this.value)" value="<?php echo $linha['orca_maQThree']?>" placeholder="Quantidade 3 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVThree" id="total3" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVThree']?>" placeholder="Valor Unitário 3 :">
										<script>
										$(function(){
										   $('#total3').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTThree" id="totalT3" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTThree']?>" placeholder="Valor Total 3 :">
										<script>
										$(function(){
										   $('#totalT3').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP4<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP4<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 4 :</a></i></u></div>
								</div>
								<div id="collapseP4<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod4">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT4"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmFour" id="nome4" placeholder="Nome do Item Selecionado 4 :"><?php echo $linha['orca_maNmFour']?></textarea>
									</div>
								</div>
								<div class="row">									
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQFour" id="quantidade4" value="<?php echo $linha['orca_maQFour']?>" placeholder="Quantidade 4 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVFour" id="total4" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVFour']?>" placeholder="Valor Unitário 4 :">
										<script>
										$(function(){
										   $('#total4').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTFour" id="totalT4" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTFour']?>" placeholder="Valor Total 4 :">
										<script>
										$(function(){
										   $('#totalT4').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP5<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP5<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 5 :</a></i></u></div>
								</div>
								<div id="collapseP5<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod5">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT5"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmFive" id="nome5" placeholder="Nome do Item Selecionado 5 :"><?php echo $linha['orca_maNmFive']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQFive" id="quantidade5" value="<?php echo $linha['orca_maQFive']?>" placeholder="Quantidade 5 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVFive" id="total5" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVFive']?>" placeholder="Valor unitário 5 :">
										<script>
										$(function(){
										   $('#total5').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTFive" id="totalT5" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTFive']?>" placeholder="Valor Total 5 :">
										<script>
										$(function(){
										   $('#totalT5').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP6<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP6<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 6 :</a></i></u></div>
								</div>
								<div id="collapseP6<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP6<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod6">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT6"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmSix" id="nome6" placeholder="Nome do Item Selecionado 6 :"><?php echo $linha['orca_maNmSix']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQSix" id="quantidade6" value="<?php echo $linha['orca_maQSix']?>" placeholder="Quantidade 6 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVSix" id="total6" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVSix']?>" placeholder="Valor unitário 6 :">
										<script>
										$(function(){
										   $('#total6').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTSix" id="totalT6" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTSix']?>" placeholder="Valor Total 6 :">
										<script>
										$(function(){
										   $('#totalT6').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP7<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP7<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 7 :</a></i></u></div>
								</div>
								<div id="collapseP7<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP7<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod7">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT7"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmSev" id="nome7" placeholder="Nome do Item Selecionado 7 :"><?php echo $linha['orca_maNmSev']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQSev" id="quantidade7" value="<?php echo $linha['orca_maQSev']?>" placeholder="Quantidade 7 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVSev" id="total7" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVSev']?>" placeholder="Valor unitário 7 :">
										<script>
										$(function(){
										   $('#total7').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTSev" id="totalT7" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTSev']?>" placeholder="Valor Total 7 :">
										<script>
										$(function(){
										   $('#totalT7').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP8<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP8<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 8 :</a></i></u></div>
								</div>
								<div id="collapseP8<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP8<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod8">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT8"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmEig" id="nome8" placeholder="Nome do Item Selecionado 8 :"><?php echo $linha['orca_maNmEig']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQEig" id="quantidade8" value="<?php echo $linha['orca_maQEig']?>" placeholder="Quantidade 8 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVEig" id="total8" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVEig']?>" placeholder="Valor unitário 8 :">
										<script>
										$(function(){
										   $('#total8').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTEig" id="totalT8" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTEig']?>" placeholder="Valor Total 8 :">
										<script>
										$(function(){
										   $('#totalT8').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP9<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP9<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 9 :</a></i></u></div>
								</div>
								<div id="collapseP9<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP9<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod9">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT9"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmNine" id="nome9" placeholder="Nome do Item Selecionado 9 :"><?php echo $linha['orca_maNmNine']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQNine" id="quantidade9" value="<?php echo $linha['orca_maQNine']?>" placeholder="Quantidade 9 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVNine" id="total9" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVNine']?>" placeholder="Valor unitário 9 :">
										<script>
										$(function(){
										   $('#total9').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTNine" id="totalT9" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTNine']?>" placeholder="Valor Total 9 :">
										<script>
										$(function(){
										   $('#totalT9').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP10<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP10<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 10 :</a></i></u></div>
								</div>
								<div id="collapseP10<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod10">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT10"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTen" id="nome10" placeholder="Nome do Item Selecionado 10 :"><?php echo $linha['orca_maNmTen']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTen" id="quantidade10" value="<?php echo $linha['orca_maQTen']?>" placeholder="Quantidade 10 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTen" id="total10" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTen']?>" placeholder="Valor unitário 10 :">
										<script>
										$(function(){
										   $('#total10').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTen" id="totalT10" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTTen']?>" placeholder="Valor Total 10 :">
										<script>
										$(function(){
										   $('#totalT10').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP11<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP11<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 11 :</a></i></u></div>
								</div>
								<div id="collapseP11<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP11<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod11">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT11"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTenO" id="nome11" placeholder="Nome do Item Selecionado 11 :"><?php echo $linha['orca_maNmTenO']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTenO" id="quantidade11" value="<?php echo $linha['orca_maQTenO']?>" placeholder="Quantidade 11 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTenO" id="total11" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTenO']?>" placeholder="Valor unitário 11 :">
										<script>
										$(function(){
										   $('#total11').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTenO" id="totalT11" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTTenO']?>" placeholder="Valor Total 11 :">
										<script>
										$(function(){
										   $('#totalT11').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP12<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP12<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 12 :</a></i></u></div>
								</div>
								<div id="collapseP12<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP12<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod12">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT12"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTenTwo" id="nome12" placeholder="Nome do Item Selecionado 12 :"><?php echo $linha['orca_maNmTenTwo']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTenTwo" id="quantidade12" value="<?php echo $linha['orca_maQTenTwo']?>" placeholder="Quantidade 12 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTenTwo" id="total12" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTenTwo']?>" placeholder="Valor unitário 12 :">
										<script>
										$(function(){
										   $('#total12').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTenTwo" id="totalT12" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTTenTwo']?>" placeholder="Valor Total 12 :">
										<script>
										$(function(){
										   $('#totalT12').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP13<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP13<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 13 :</a></i></u></div>
								</div>
								<div id="collapseP13<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP13<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod13">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT13"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTenThree" id="nome13" placeholder="Nome do Item Selecionado 13 :"><?php echo $linha['orca_maNmTenThree']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTenThree" id="quantidade13" value="<?php echo $linha['orca_maQTenThree']?>" placeholder="Quantidade 13 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTenThree" id="total13" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTenThree']?>" placeholder="Valor unitário 13 :">
										<script>
										$(function(){
										   $('#total13').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTenThree" id="totalT13" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTTenThree']?>" placeholder="Valor Total 13 :">
										<script>
										$(function(){
										   $('#totalT13').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP14<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP14<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 14 :</a></i></u></div>
								</div>
								<div id="collapseP14<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP14<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod14">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT14"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTenFour" id="nome14" placeholder="Nome do Item Selecionado 14 :"><?php echo $linha['orca_maNmTenFour']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTenFour" id="quantidade14" value="<?php echo $linha['orca_maQTenFour']?>" placeholder="Quantidade 14 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTenFour" id="total14" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTenFour']?>" placeholder="Valor unitário 14 :">
										<script>
										$(function(){
										   $('#total14').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTenFour" id="totalT14" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTTenFour']?>" placeholder="Valor Total 14 :">
										<script>
										$(function(){
										   $('#totalT14').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP15<?php echo $linha['orca_id'] ?>" aria-expanded="false" aria-controls="collapseP15<?php echo $linha['orca_id'] ?>"> -- Nome do Item Selecionado 15 :</a></i></u></div>
								</div>
								<div id="collapseP15<?php echo $linha['orca_id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP15<?php echo $linha['orca_id'] ?>">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produto</label>
										<select class="form-control" id="cod15">
											<option></option>
<?php

	$queryp = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$queryp = mysql_query($queryp);

	while ($linhap = mysql_fetch_array($queryp)) {
 
?>
											<option value="<?php echo $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviço</label>
										<select class="form-control" id="codT15"> 
											<option></option>
<?php

	$querys = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$querys = mysql_query($querys);

	while ($linhas = mysql_fetch_array($querys)) {
 
?>
											<option value="<?php echo $linhas['tabela_id']?>"><?php echo $linhas['tabela_id']?> - <?php echo $linhas['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="orca_maNmTenFive" id="nome15" placeholder="Nome do Item Selecionado 15 :"><?php echo $linha['orca_maNmTenFive']?></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="orca_maQTenFive" id="quantidade15" value="<?php echo $linha['orca_maQTenFive']?>" placeholder="Quantidade 15 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTenFive" id="total15" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTenFive']?>" placeholder="Valor unitário 15 :">
										<script>
										$(function(){
										   $('#total15').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="orca_maVTTenFive" id="totalT15" onKeyUp="calcular(this.value)" class="form-control" value="<?php echo $linha['orca_maVTTenFive']?>" placeholder="Valor Total 15 :">
										<script>
										$(function(){
										   $('#totalT15').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a>Valor Total e Outras Informações :</a></i></u></div>
								<div class="row">
									<div class="col-md-12">
										<label>Nome da Tranportadora</label>
										<input type="text" name="orca_transNome" class="form-control" value="<?php echo $linha['orca_transNome']?>">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label>Observações/Detalhes</label>
										<textarea name="orca_obs" class="form-control" value="<?php echo $linha['orca_obs']?>"><?php echo $linha['orca_obs']?></textarea>
									</div>
								</div>
								<div class="row">									
									<div class="col-md-4 col-xs-12">
										<label>Valor de Acréscimo Transporte</label>
										<input type="text" class="form-control" name="orca_transV" id="acrescimo" onKeyUp="calcular(this.value)" value="<?php echo $linha['orca_transV']?>" placeholder="Digite o Acrescimo:">
										<script>
										$(function(){
										   $('#acrescimo').bind('keypress',mask.money)
										});
									</script>									
									</div>									
									<div class="col-md-4 col-xs-12">
										<label>Valor Total</label>
										<input type="text" class="form-control input-lg" name="orca_valTotal" id="valSoma" onKeyUp="calcular(this.value)" placeholder="Digite o Valor:" value="<?php echo $linha['orca_valTotal']?>">
										<script>
										$(function(){
										   $('#valSoma').bind('keypress',mask.money)
										});
									</script>									
									</div>									
								</div>
								<hr>
								<div class="row">							
										<?php
									require_once "../../../sql/conectar.php";
									require_once "../../../sql/valida_session.php";
									$buscar_user = mysql_query("SELECT user_nome FROM usuario WHERE user_login = '$_SESSION[user_login]'");

									if(mysql_num_rows($buscar_user)>=1)
									{
										$dado = mysql_fetch_array($buscar_user);

									}
								?>
										<input type="hidden" name="orca_alterUser" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
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
            					<input name="orca_id" type="hidden" value="<?php echo $linha['orca_id']?>">
								<button type="submit" class="btn btn-warning"><i class="fa fa-print nav_icon"></i>Imprimir</button>
							</form>
						</th>
								<th class="text-center">
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#info<?php echo $linha['orca_id'] ?>" data-whatever="@mdo"></i>Informações</button>
									<div class="modal fade" id="info<?php echo $linha['orca_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="info<?php echo $linha['orca_id'] ?>Label">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="alterar<?php echo $linha['orca_id'] ?>Label">REGISTRO DE CONTRATO DE MANUTENÇÃO: (<b style="color: midnightblue;"><?php echo $linha['orca_id'] ?></b>)</h4>
								  </div>
								  <div class="modal-body">
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Dados Gerais</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#89FFB7"> 
														<tr>
															<th style="text-align: center;">Tipo</th> 
															<th style="text-align: center;">Cpf/Cnpj</th> 
															<th style="text-align: center;">Nome Cliente</th> 
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_tipo'] ?></small></td>
															<td><small><?php echo $linha['orca_cpf'] ?></small></td>
															<td><small><?php echo $linha['orca_nome'] ?></small></td>
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
															<td><small><?php echo $linha['orca_user'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
									  </div>
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Item Selecionado 1</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 1</th>
															<th style="text-align: center;">Quantidade 1</th> 
															<th style="text-align: center;">Valor Unitário 1</th>
															<th style="text-align: center;">Valor Total 1</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmOne'] ?></small></td>
															<td><small><?php echo $linha['orca_maQOne'] ?></small></td>
															<td><small><?php echo $linha['orca_maVOne'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTOne'] ?></small></td>
														</tr>
													</tbody>
													<?php if($linha['orca_maNmTwo']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 2</th>
															<th style="text-align: center;">Quantidade 2</th> 
															<th style="text-align: center;">Valor Unitário 2</th>
															<th style="text-align: center;">Valor Total 2</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTwo'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTwo'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTwo'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmThree']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 3</th>
															<th style="text-align: center;">Quantidade 3</th> 
															<th style="text-align: center;">Valor Unitário 3</th>
															<th style="text-align: center;">Valor Total 3</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmThree'] ?></small></td>
															<td><small><?php echo $linha['orca_maQThree'] ?></small></td>
															<td><small><?php echo $linha['orca_maVThree'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmFour']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 4</th>
															<th style="text-align: center;">Quantidade 4</th> 
															<th style="text-align: center;">Valor Unitário 4</th>
															<th style="text-align: center;">Valor Total 4</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmFour'] ?></small></td>
															<td><small><?php echo $linha['orca_maQFour'] ?></small></td>
															<td><small><?php echo $linha['orca_maVFour'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmFive']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 5</th>
															<th style="text-align: center;">Quantidade 5</th> 
															<th style="text-align: center;">Valor Unitário 5</th>
															<th style="text-align: center;">Valor Total 5</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmFive'] ?></small></td>
															<td><small><?php echo $linha['orca_maQFive'] ?></small></td>
															<td><small><?php echo $linha['orca_maVFive'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmSix']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 6</th>
															<th style="text-align: center;">Quantidade 6</th> 
															<th style="text-align: center;">Valor Unitário 6</th>
															<th style="text-align: center;">Valor Total 6</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmSix'] ?></small></td>
															<td><small><?php echo $linha['orca_maQSix'] ?></small></td>
															<td><small><?php echo $linha['orca_maVSix'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTSix'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmSev']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 7</th>
															<th style="text-align: center;">Quantidade 7</th> 
															<th style="text-align: center;">Valor Unitário 7</th>
															<th style="text-align: center;">Valor Total 7</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmSev'] ?></small></td>
															<td><small><?php echo $linha['orca_maQSev'] ?></small></td>
															<td><small><?php echo $linha['orca_maVSev'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTSev'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmEig']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 8</th>
															<th style="text-align: center;">Quantidade 8</th> 
															<th style="text-align: center;">Valor Unitário 8</th>
															<th style="text-align: center;">Valor Total 8</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmEig'] ?></small></td>
															<td><small><?php echo $linha['orca_maQEig'] ?></small></td>
															<td><small><?php echo $linha['orca_maVEig'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTEig'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmNine']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 9</th>
															<th style="text-align: center;">Quantidade 9</th> 
															<th style="text-align: center;">Valor Unitário 9</th>
															<th style="text-align: center;">Valor Total 9</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmNine'] ?></small></td>
															<td><small><?php echo $linha['orca_maQNine'] ?></small></td>
															<td><small><?php echo $linha['orca_maVNine'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTNine'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmTen']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 10</th>
															<th style="text-align: center;">Quantidade 10</th> 
															<th style="text-align: center;">Valor Unitário 10</th>
															<th style="text-align: center;">Valor Total 10</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTen'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTen'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTen'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTen'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmTenO']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 11</th>
															<th style="text-align: center;">Quantidade 11</th> 
															<th style="text-align: center;">Valor Unitário 11</th>
															<th style="text-align: center;">Valor Total 11</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTenO'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTenO'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTenO'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTenO'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmTenTwo']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 12</th>
															<th style="text-align: center;">Quantidade 12</th> 
															<th style="text-align: center;">Valor Unitário 12</th>
															<th style="text-align: center;">Valor Total 12</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTenTwo'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTenTwo'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTenTwo'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTenTwo'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmTenThree']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 13</th>
															<th style="text-align: center;">Quantidade 13</th> 
															<th style="text-align: center;">Valor Unitário 13</th>
															<th style="text-align: center;">Valor Total 13</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTenThree'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTenThree'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTenThree'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTenThree'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmTenFour']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 14</th>
															<th style="text-align: center;">Quantidade 14</th> 
															<th style="text-align: center;">Valor Unitário 14</th>
															<th style="text-align: center;">Valor Total 14</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTenFour'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTenFour'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTenFour'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTenFour'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
													<?php if($linha['orca_maNmTenFive']==''){
																}else{ ?>
													<thead bgcolor="#B069FF"> 
														<tr> 
															<th style="text-align: center;">Item 15</th>
															<th style="text-align: center;">Quantidade 15</th> 
															<th style="text-align: center;">Valor Unitário 15</th>
															<th style="text-align: center;">Valor Total 15</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_maNmTenFive'] ?></small></td>
															<td><small><?php echo $linha['orca_maQTenFive'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTenFive'] ?></small></td>
															<td><small><?php echo $linha['orca_maVTTenFive'] ?></small></td>
														</tr>
													</tbody>
													<?php } ?>
												</table>
											</div>
										</div>										
										<hr>
										<div class="form-group">
											<div class="row">
												<label style="color: blue;font-weight: 400;"><u><i>Outras Informações</i></u></label>
												<br>
												<table class="table table-responsive table-bordered"> 
													<thead bgcolor="#FFF972"> 
														<tr> 
															<th style="text-align: center;">Transportadora</th> 
															<th style="text-align: center;">Obs</th> 
															<th style="text-align: center;">Valor add Trans</th> 
															<th style="text-align: center;">Valor Total</th>
														</tr> 
													</thead>
													<tbody style="font-weight: 400;">
														<tr>
															<td><small><?php echo $linha['orca_transNome'] ?></small></td>
															<td><small><?php echo $linha['orca_obs'] ?></small></td>
															<td><small><?php echo $linha['orca_transV'] ?></small></td>
															<td><small><?php echo $linha['orca_valTotal'] ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<hr>
									  <?php if($linha['orca_alterUser'] ==''){
									
									  }else{ ?>
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
															<td><small><?php echo $linha['orca_alterUser'] ?></small></td>
															<td><small><?php echo $dataA ?></small></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									  <?php }?>
								  </div>
								  <div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
								  </div>
								</div>
							  </div>
							</div>
								</th>
								<th class="text-center">
									<form action="../../../sql/excluir_orcamento.php" method="post">
            							<input name="orca_id" type="hidden" id="orca_id" value="<?php echo $linha['orca_id'];?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt nav_icon"></i>Excluir</button>
									</form>
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
			      valt = valorT + valorT2 + valorT3 + valorT4 + valorT5 + valorT6 + valorT7 + valorT8 + valorT9 + valorT10 + valorT11 + valorT12 + valorT13 + valorT14 + valorT15;
				 document.getElementById('valSoma').value = valt.toFixed(2).replace('.',',');
				
				
			  var juros = document.getElementById("acrescimo").value;
			  var vJuros = parseFloat(juros.replace(',', '.'));
				if(juros == ''){
				 var jurost = 0;
				   }else{
					   var jurost = 0;
					   jurost = vJuros;
					   document.getElementById('acrescimo').value = jurost.toFixed(2).replace('.',',');
				   }
				
			
			  var valTotal = 0;
			  var valSoma = 0;
			  valSoma = valt + jurost;
			  valTotal = valSoma;
		      document.getElementById('valSoma').value = valTotal.toFixed(2).replace('.',',');
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