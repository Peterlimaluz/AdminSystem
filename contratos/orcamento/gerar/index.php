<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Orçamento :: Gerar</title>
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
<!--//webfonts--> 
<!--animate-->
<link href="../../../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../../../js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="../../../js/metisMenu.min.js"></script>
<script src="../../../js/custom.js"></script>
<link href="../../../css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
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
							<a href="cadastro"><i class="fa fa-cogs nav_icon"></i>Cadastro <span class="fa arrow"></span></a>
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
									<a href="../../../cadastro/transportes/">Transportes <span class="nav-badge-btm"><?php echo $total5 ?></span></a>
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
						<a href="../../usuarios/"><div class="titlePg">Orçamento</div></a>
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
			<div class="main-page compose">
				<div class="col-md-12 compose widget-shadow">
					<div class="panel-default">
						<br>
						<div class="panel-heading bg-primary text-center" style="background-color: crimson; color: aliceblue; text-transform: uppercase; font-weight: 600; font-size: 20px;">
							GERAR ORçamento
						</div>
						<div class="panel-body">
							<div class="alert alert-alert text-center">
								Informe os detalhes para gerar o orçamento.
							</div>
							<form action="../../../sql/cadastrar_orca.php" method="post">
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Dados Gerais :</a></i></u></div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="row">
									<div class="col-md-8">
										<label>TIPO DE ORÇAMENTO:</label>
										<div class="btn-group" data-toggle="buttons">										  
										  <label class="btn btn-warning">
											<input type="radio" name="tipo" id="option2" value="SERVIÇO">SERVIÇO
										  </label>
										  <label class="btn btn-info">
											<input type="radio" name="tipo" id="option3" value="LOCAÇÃO">LOCAÇÃO
										  </label>
										  <label class="btn btn-danger">
											<input type="radio" name="tipo" id="option4" value="VENDA">VENDA
										  </label>
										  <label class="btn btn-success">
											<input type="radio" name="tipo" id="option5" value="MANUTENÇÃO">MANUTENÇÃO
										  </label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" name="cpf" id="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="18" class="form-control" placeholder="CPF/CNPJ - Cliente">
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
									<div class="col-md-9">
										<input type="text" name="nome" id="rsocial" class="form-control" placeholder="Nome do Cliente: " required>
									</div>
								</div>
									<?php
									$buscar_user = mysql_query("SELECT user_nome FROM usuario WHERE user_login = '$_SESSION[user_login]'");

									if(mysql_num_rows($buscar_user)>=1)
									{
										$dado = mysql_fetch_array($buscar_user);

									}
								?>
										<input type="hidden" name="user" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
								</div>
								<hr>								
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Informar 1° item do Orçamento :</a></i></u></div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
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
											<option value="<?php print $linhap['pro_id']?>"><?php echo $linhap['pro_id']?> - <?php echo $linhap['pro_cod']?></option>
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

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmOne" id="nome" placeholder="Nome do Item Selecionado 1 :" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQOne" id="quantidade" placeholder="Quantidade 1 :" required>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVOne" id="total" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitário 1 :" required>
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
										<input type="text" name="maVTOne" id="totalT" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 1 :" required>
										<script>
										$(function(){
										   $('#totalT').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP2" aria-expanded="false" aria-controls="collapseP2"> -- Informar 2° item do Orçamento :</a></i></u></div>
								</div>								
								<div id="collapseP2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Produtos</label>
										<select class="form-control" id="cod2">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar Serviços</label>
										<select class="form-control" id="codT2"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTwo" id="nome2" placeholder="Nome do Item Selecionado 2 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTwo" id="quantidade2" placeholder="Quantidade 2 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTwo" onKeyUp="calcular(this.value)" id="total2" class="form-control" placeholder="Valor Unitario 2 :">
									<script>
										$(function(){
										   $('#total2').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTwo" onKeyUp="calcular(this.value)" id="totalT2" class="form-control" placeholder="Valor Total 2 :">
									<script>
										$(function(){
										   $('#totalT2').bind('keypress',mask.money)
										});
									</script>
									</div>								
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP3" aria-expanded="false" aria-controls="collapseP3"> -- Nome do Item Selecionado 3 :</a></i></u></div>
								</div>								
								<div id="collapseP3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod3">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT3"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmThree" id="nome3" placeholder="Nome do Item Selecionado 3 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" name="maQThree" id="quantidade3" onKeyUp="calcular(this.value)" placeholder="Quantidade 3 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVThree" id="total3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitário 3 :">
										<script>
										$(function(){
										   $('#total3').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTThree" id="totalT3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 3 :">
										<script>
										$(function(){
										   $('#totalT3').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP4" aria-expanded="false" aria-controls="collapseP4"> -- Nome do Item Selecionado 4 :</a></i></u></div>
								</div>								
								<div id="collapseP4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod4">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT4"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmFour" id="nome4" placeholder="Nome do Item Selecionado 4 :"></textarea>
									</div>
								</div>
								<div class="row">									
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQFour" id="quantidade4" placeholder="Quantidade 4 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVFour" id="total4" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitário 4 :">
										<script>
										$(function(){
										   $('#total4').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTFour" id="totalT4" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 4 :">
										<script>
										$(function(){
										   $('#totalT4').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP5" aria-expanded="false" aria-controls="collapseP5"> -- Nome do Item Selecionado 5 :</a></i></u></div>
								</div>								
								<div id="collapseP5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod5">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT5"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmFive" id="nome5" placeholder="Nome do Item Selecionado 5 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQFive" id="quantidade5" placeholder="Quantidade 5 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVFive" id="total5" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 5 :">
										<script>
										$(function(){
										   $('#total5').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTFive" id="totalT5" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 5 :">
										<script>
										$(function(){
										   $('#totalT5').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP6" aria-expanded="false" aria-controls="collapseP6"> -- Nome do Item Selecionado 6 :</a></i></u></div>
								</div>								
								<div id="collapseP6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP6">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod6">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT6"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmSix" id="nome6" placeholder="Nome do Item Selecionado 6 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQSix" id="quantidade6" placeholder="Quantidade 6 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVSix" id="total6" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 6 :">
										<script>
										$(function(){
										   $('#total6').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTSix" id="totalT6" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 6 :">
										<script>
										$(function(){
										   $('#totalT6').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP7" aria-expanded="false" aria-controls="collapseP7"> -- Nome do Item Selecionado 7 :</a></i></u></div>
								</div>								
								<div id="collapseP7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP7">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod7">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT7"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmSev" id="nome7" placeholder="Nome do Item Selecionado 7 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQSev" id="quantidade7" placeholder="Quantidade 7 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVSev" id="total7" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 7 :">
										<script>
										$(function(){
										   $('#total7').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTSev" id="totalT7" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 7 :">
										<script>
										$(function(){
										   $('#totalT7').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP8" aria-expanded="false" aria-controls="collapseP8"> -- Nome do Item Selecionado 8 :</a></i></u></div>
								</div>								
								<div id="collapseP8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP8">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod8">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT8"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmEig" id="nome8" placeholder="Nome do Item Selecionado 8 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQEig" id="quantidade8" placeholder="Quantidade 8 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVEig" id="total8" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 8 :">
										<script>
										$(function(){
										   $('#total8').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTEig" id="totalT8" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 8 :">
										<script>
										$(function(){
										   $('#totalT8').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP9" aria-expanded="false" aria-controls="collapseP9"> -- Nome do Item Selecionado 9 :</a></i></u></div>
								</div>								
								<div id="collapseP9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP9">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod9">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT9"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmNine" id="nome9" placeholder="Nome do Item Selecionado 9 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQNine" id="quantidade9" placeholder="Quantidade 9 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVNine" id="total9" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 9 :">
										<script>
										$(function(){
										   $('#total9').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTNine" id="totalT9" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 9 :">
										<script>
										$(function(){
										   $('#totalT9').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP10" aria-expanded="false" aria-controls="collapseP10"> -- Nome do Item Selecionado 10 :</a></i></u></div>
								</div>								
								<div id="collapseP10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod10">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT10"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTen" id="nome10" placeholder="Nome do Item Selecionado 10 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTen" id="quantidade10" placeholder="Quantidade 10 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTen" id="total10" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 10 :">
										<script>
										$(function(){
										   $('#total10').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTen" id="totalT10" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 10 :">
										<script>
										$(function(){
										   $('#totalT10').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP11" aria-expanded="false" aria-controls="collapseP11"> -- Nome do Item Selecionado 11 :</a></i></u></div>
								</div>								
								<div id="collapseP11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP11">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod11">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT11"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTenO" id="nome11" placeholder="Nome do Item Selecionado 11 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTenO" id="quantidade11" placeholder="Quantidade 11 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTenO" id="total11" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 11 :">
										<script>
										$(function(){
										   $('#total11').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTenO" id="totalT11" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 11 :">
										<script>
										$(function(){
										   $('#totalT11').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP12" aria-expanded="false" aria-controls="collapseP12"> -- Nome do Item Selecionado 12 :</a></i></u></div>
								</div>								
								<div id="collapseP12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP12">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod12">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT12"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTenTwo" id="nome12" placeholder="Nome do Item Selecionado 12 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTenTwo" id="quantidade12" placeholder="Quantidade 12 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTenTwo" id="total12" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 12 :">
										<script>
										$(function(){
										   $('#total12').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTenTwo" id="totalT12" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 12 :">
										<script>
										$(function(){
										   $('#totalT12').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP13" aria-expanded="false" aria-controls="collapseP13"> -- Nome do Item Selecionado 13 :</a></i></u></div>
								</div>								
								<div id="collapseP13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP13">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod13">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT13"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTenThree" id="nome13" placeholder="Nome do Item Selecionado 13 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTenThree" id="quantidade13" placeholder="Quantidade 13 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTenThree" id="total13" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 13 :">
										<script>
										$(function(){
										   $('#total13').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTenThree" id="totalT13" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 13 :">
										<script>
										$(function(){
										   $('#totalT13').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP14" aria-expanded="false" aria-controls="collapseP14"> -- Nome do Item Selecionado 14 :</a></i></u></div>
								</div>								
								<div id="collapseP14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP14">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod14">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT14"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTenFour" id="nome14" placeholder="Nome do Item Selecionado 14 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTenFour" id="quantidade14" placeholder="Quantidade 14 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTenFour" id="total14" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 14 :">
										<script>
										$(function(){
										   $('#total14').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTenFour" id="totalT14" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 14 :">
										<script>
										$(function(){
										   $('#totalT14').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP15" aria-expanded="false" aria-controls="collapseP15"> -- Nome do Item Selecionado 15 :</a></i></u></div>
								</div>								
								<div id="collapseP15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP15">
								<div class="row">
									<div class="col-md-3">
										<label>Pesquisar Código</label>
										<select class="form-control" id="cod15">
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM produtos WHERE pro_status = "disponivel" ORDER BY `pro_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['pro_id']?>"><?php echo $linha['pro_id']?> - <?php echo $linha['pro_cod']?></option>
<?php
	}
?>
										</select>
									</div>
									<div class="col-md-9">
										<label>Pesquisar pelo Nome</label>
										<select class="form-control" id="codT15"> 
											<option></option>
<?php

	$query = 'SELECT DISTINCT * FROM servicos ORDER BY `tabela_id`';
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {
 
?>
											<option value="<?php echo $linha['tabela_id']?>"><?php echo $linha['tabela_id']?> - <?php echo $linha['tabela_nome']?></option>
<?php
	}
?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="maNmTenFive" id="nome15" placeholder="Nome do Item Selecionado 15 :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="maQTenFive" id="quantidade15" placeholder="Quantidade 15 :">
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTenFive" id="total15" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor unitário 15 :">
										<script>
										$(function(){
										   $('#total15').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-3">
										<input type="text" name="maVTTenFive" id="totalT15" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 15 :">
										<script>
										$(function(){
										   $('#totalT15').bind('keypress',mask.money)
										});
									</script>
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a>Valor Total :</a></i></u></div>
								<div class="row">
									<div class="col-md-8">
										<input type="text" name="transNome" class="form-control" placeholder="Digite o Nome da Transportadora :">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" name="obs" placeholder="Informe os detalhes do Transporte :"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
										<input type="text" class="form-control" name="transV" id="acrescimo" onKeyUp="calcular(this.value)" placeholder="Valor Adicional do Transporte:">
										<script>
										$(function(){
										   $('#acrescimo').bind('keypress',mask.money)
										});
									</script>									
									</div>									
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" class="form-control input-lg" name="valTotal" id="valSoma" onKeyUp="calcular(this.value)" placeholder="Valor Total:">
										<script>
										$(function(){
										   $('#valSoma').bind('keypress',mask.money)
										});
									</script>									
									</div>									
								</div>
								<hr>
								<input class="btn btn-lg btn-info" type="submit" value="Gerar Contrato de Manutenção" onClick="validar()">
								<hr>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2019. Todos os Direitos Reservados | <a href="https://reparsul.com.br/" target="_blank">Reparsul</a></p>
		</div>
        <!--//footer-->
	</div>
	<!--Alert-->
	<script>
		function validar() {
			var $nomeM = document.querySelector('#rsocial');
			var $servicoM = document.querySelector('#nome');
			var $quantidadeM = document.querySelector('#quantidade');
			var $totalM = document.querySelector('#total');
			var $totalTM = document.querySelector('#totalT');
			
			if(!$nomeM.value){
				swal("Campo Vazio", "Campo NOME CLIENTE está em branco ou Inválido", "error");
				return false;
			}else if(!$servicoM.value){
				swal("Vazio", "Campo NOME DO ITEM ORÇADO está incorreto ou em branco", "error");
				return false;
			}else if(!$quantidadeM.value){
				swal("Vazio", "Campo QUANTIDADE DO ITEM está incorreto ou em branco", "error");
				return false;
			}else if(!$totalM.value){
				swal("Vazio", "Campo VALOR UNITARIO está incorreto ou em branco", "error");
				return false;
			}else if(!$totalTM.value){
				swal("Vazio", "Campo VALOR TOTAL está incorreto ou em branco", "error");
				return false;
			}
		}
	</script>
	<!--//Alert-->
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
	<!-- Classie -->
		<script src="../../../js/classie.js"></script>
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

	<!-- Bootstrap Core JavaScript -->
	<script src="../../../js/bootstrap.js"> </script>
</body>
</html>