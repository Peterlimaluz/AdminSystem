<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Vendas :: Gerar</title>
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
    $("#codS").blur(function(){
	  var $pro_cod = $("#codigo");
      var $pro_tipo = $("#tipo");
	  var $pro_valor = $("#valor");
	  var $pro_largura = $("#largura");
	  var $pro_comprimento = $("#comprimento");
	  var $pro_altura = $("#altura");
	  var $pro_peso = $("#peso");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 1 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS0").blur(function(){
	  var $pro_cod = $("#codigo");
      var $pro_tipo = $("#tipo");
	  var $pro_valor = $("#valor");
	  var $pro_largura = $("#largura");
	  var $pro_comprimento = $("#comprimento");
	  var $pro_altura = $("#altura");
	  var $pro_peso = $("#peso");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 1 -->
<!-- Search Produto 2 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod2").blur(function(){
	  var $pro_cod = $("#codigo2");
      var $pro_tipo = $("#tipo2");
	  var $pro_valor = $("#valor2");
	  var $pro_largura = $("#largura2");
	  var $pro_comprimento = $("#comprimento2");
	  var $pro_altura = $("#altura2");
	  var $pro_peso = $("#peso2");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 2 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS2").blur(function(){
	  var $pro_cod = $("#codigo2");
      var $pro_tipo = $("#tipo2");
	  var $pro_valor = $("#valor2");
	  var $pro_largura = $("#largura2");
	  var $pro_comprimento = $("#comprimento2");
	  var $pro_altura = $("#altura2");
	  var $pro_peso = $("#peso2");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 2 -->
<!-- Search Produto 3 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod3").blur(function(){
	  var $pro_cod = $("#codigo3");
      var $pro_tipo = $("#tipo3");
	  var $pro_valor = $("#valor3");
	  var $pro_largura = $("#largura3");
	  var $pro_comprimento = $("#comprimento3");
	  var $pro_altura = $("#altura3");
	  var $pro_peso = $("#peso3");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 3 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS3").blur(function(){
	  var $pro_cod = $("#codigo3");
      var $pro_tipo = $("#tipo3");
	  var $pro_valor = $("#valor3");
	  var $pro_largura = $("#largura3");
	  var $pro_comprimento = $("#comprimento3");
	  var $pro_altura = $("#altura3");
	  var $pro_peso = $("#peso3");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 3 -->
<!-- Search Produto 4 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod4").blur(function(){
	  var $pro_cod = $("#codigo4");
      var $pro_tipo = $("#tipo4");
	  var $pro_valor = $("#valor4");
	  var $pro_largura = $("#largura4");
	  var $pro_comprimento = $("#comprimento4");
	  var $pro_altura = $("#altura4");
	  var $pro_peso = $("#peso4");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 4 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS4").blur(function(){
	  var $pro_cod = $("#codigo4");
      var $pro_tipo = $("#tipo4");
	  var $pro_valor = $("#valor4");
	  var $pro_largura = $("#largura4");
	  var $pro_comprimento = $("#comprimento4");
	  var $pro_altura = $("#altura4");
	  var $pro_peso = $("#peso4");

	  $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 4 -->
<!-- Search Produto 5 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod5").blur(function(){
	  var $pro_cod = $("#codigo5");
      var $pro_tipo = $("#tipo5");
	  var $pro_valor = $("#valor5");
	  var $pro_largura = $("#largura5");
	  var $pro_comprimento = $("#comprimento5");
	  var $pro_altura = $("#altura5");
	  var $pro_peso = $("#peso5");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 5 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS5").blur(function(){
	  var $pro_cod = $("#codigo5");
      var $pro_tipo = $("#tipo5");
	  var $pro_valor = $("#valor5");
	  var $pro_largura = $("#largura5");
	  var $pro_comprimento = $("#comprimento5");
	  var $pro_altura = $("#altura5");
	  var $pro_peso = $("#peso5");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 5 -->
<!-- Search Produto 6 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod6").blur(function(){
	  var $pro_cod = $("#codigo6");
      var $pro_tipo = $("#tipo6");
	  var $pro_valor = $("#valor6");
	  var $pro_largura = $("#largura6");
	  var $pro_comprimento = $("#comprimento6");
	  var $pro_altura = $("#altura6");
	  var $pro_peso = $("#peso6");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 6 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS6").blur(function(){
	  var $pro_cod = $("#codigo6");
      var $pro_tipo = $("#tipo6");
	  var $pro_valor = $("#valor6");
	  var $pro_largura = $("#largura6");
	  var $pro_comprimento = $("#comprimento6");
	  var $pro_altura = $("#altura6");
	  var $pro_peso = $("#peso6");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 6 -->
<!-- Search Produto 7 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod7").blur(function(){
	  var $pro_cod = $("#codigo7");
      var $pro_tipo = $("#tipo7");
	  var $pro_valor = $("#valor7");
	  var $pro_largura = $("#largura7");
	  var $pro_comprimento = $("#comprimento7");
	  var $pro_altura = $("#altura7");
	  var $pro_peso = $("#peso7");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 7 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS7").blur(function(){
	  var $pro_cod = $("#codigo7");
      var $pro_tipo = $("#tipo7");
	  var $pro_valor = $("#valor7");
	  var $pro_largura = $("#largura7");
	  var $pro_comprimento = $("#comprimento7");
	  var $pro_altura = $("#altura7");
	  var $pro_peso = $("#peso7");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 7 -->
<!-- Search Produto 8 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod8").blur(function(){
	  var $pro_cod = $("#codigo8");
      var $pro_tipo = $("#tipo8");
	  var $pro_valor = $("#valor8");
	  var $pro_largura = $("#largura8");
	  var $pro_comprimento = $("#comprimento8");
	  var $pro_altura = $("#altura8");
	  var $pro_peso = $("#peso8");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 8 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS8").blur(function(){
	  var $pro_cod = $("#codigo8");
      var $pro_tipo = $("#tipo8");
	  var $pro_valor = $("#valor8");
	  var $pro_largura = $("#largura8");
	  var $pro_comprimento = $("#comprimento8");
	  var $pro_altura = $("#altura8");
	  var $pro_peso = $("#peso8");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 8 -->
<!-- Search Produto 9 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod9").blur(function(){
      var $pro_cod = $("#codigo9");
      var $pro_tipo = $("#tipo9");
	  var $pro_valor = $("#valor9");
	  var $pro_largura = $("#largura9");
	  var $pro_comprimento = $("#comprimento9");
	  var $pro_altura = $("#altura9");
	  var $pro_peso = $("#peso9");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 9 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS9").blur(function(){
	  var $pro_cod = $("#codigo9");
      var $pro_tipo = $("#tipo9");
	  var $pro_valor = $("#valor9");
	  var $pro_largura = $("#largura9");
	  var $pro_comprimento = $("#comprimento9");
	  var $pro_altura = $("#altura9");
	  var $pro_peso = $("#peso9");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 9 -->
<!-- Search Produto 10 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod10").blur(function(){
	  var $pro_cod = $("#codigo10");
      var $pro_tipo = $("#tipo10");
	  var $pro_valor = $("#valor10");
	  var $pro_largura = $("#largura10");
	  var $pro_comprimento = $("#comprimento10");
	  var $pro_altura = $("#altura10");
	  var $pro_peso = $("#peso10");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 10 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS10").blur(function(){
	  var $pro_cod = $("#codigo10");
      var $pro_tipo = $("#tipo10");
	  var $pro_valor = $("#valor10");
	  var $pro_largura = $("#largura10");
	  var $pro_comprimento = $("#comprimento10");
	  var $pro_altura = $("#altura10");
	  var $pro_peso = $("#peso10");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 10 -->
<!-- Search Produto 11 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod11").blur(function(){
	  var $pro_cod = $("#codigo11");
      var $pro_tipo = $("#tipo11");
	  var $pro_valor = $("#valor11");
	  var $pro_largura = $("#largura11");
	  var $pro_comprimento = $("#comprimento11");
	  var $pro_altura = $("#altura11");
	  var $pro_peso = $("#peso11");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 11 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS11").blur(function(){
	  var $pro_cod = $("#codigo11");
      var $pro_tipo = $("#tipo11");
	  var $pro_valor = $("#valor11");
	  var $pro_largura = $("#largura11");
	  var $pro_comprimento = $("#comprimento11");
	  var $pro_altura = $("#altura11");
	  var $pro_peso = $("#peso11");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 11 -->
<!-- Search Produto 12 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod12").blur(function(){
	  var $pro_cod = $("#codigo12");
      var $pro_tipo = $("#tipo12");
	  var $pro_valor = $("#valor12");
	  var $pro_largura = $("#largura12");
	  var $pro_comprimento = $("#comprimento12");
	  var $pro_altura = $("#altura12");
	  var $pro_peso = $("#peso12");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 12 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS12").blur(function(){
	  var $pro_cod = $("#codigo12");
      var $pro_tipo = $("#tipo12");
	  var $pro_valor = $("#valor12");
	  var $pro_largura = $("#largura12");
	  var $pro_comprimento = $("#comprimento12");
	  var $pro_altura = $("#altura12");
	  var $pro_peso = $("#peso12");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 12 -->
<!-- Search Produto 13 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod13").blur(function(){
	  var $pro_cod = $("#codigo13");
      var $pro_tipo = $("#tipo13");
	  var $pro_valor = $("#valor13");
	  var $pro_largura = $("#largura13");
	  var $pro_comprimento = $("#comprimento13");
	  var $pro_altura = $("#altura13");
	  var $pro_peso = $("#peso13");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 13 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS13").blur(function(){
	  var $pro_cod = $("#codigo13");
      var $pro_tipo = $("#tipo13");
	  var $pro_valor = $("#valor13");
	  var $pro_largura = $("#largura13");
	  var $pro_comprimento = $("#comprimento13");
	  var $pro_altura = $("#altura13");
	  var $pro_peso = $("#peso13");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 13 -->
<!-- Search Produto 14 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod14").blur(function(){
	  var $pro_cod = $("#codigo14");
      var $pro_tipo = $("#tipo14");
	  var $pro_valor = $("#valor14");
	  var $pro_largura = $("#largura14");
	  var $pro_comprimento = $("#comprimento14");
	  var $pro_altura = $("#altura14");
	  var $pro_peso = $("#peso14");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 14 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS14").blur(function(){
	  var $pro_cod = $("#codigo14");
      var $pro_tipo = $("#tipo14");
	  var $pro_valor = $("#valor14");
	  var $pro_largura = $("#largura14");
	  var $pro_comprimento = $("#comprimento14");
	  var $pro_altura = $("#altura14");
	  var $pro_peso = $("#peso14");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 14 -->
<!-- Search Produto 15 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#cod15").blur(function(){
	  var $pro_cod = $("#codigo15");
      var $pro_tipo = $("#tipo15");
	  var $pro_valor = $("#valor15");
	  var $pro_largura = $("#largura15");
	  var $pro_comprimento = $("#comprimento15");
	  var $pro_altura = $("#altura15");
	  var $pro_peso = $("#peso15");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- Search Produto S 15 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#codS15").blur(function(){
	  var $pro_cod = $("#codigo15");
      var $pro_tipo = $("#tipo15");
	  var $pro_valor = $("#valor15");
	  var $pro_largura = $("#largura15");
	  var $pro_comprimento = $("#comprimento15");
	  var $pro_altura = $("#altura15");
	  var $pro_peso = $("#peso15");

      $pro_cod.val('Carregando...');
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
			$pro_cod.val( json.pro_cod );
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
<!-- // FIM SEARCH PRODUTO S 15 -->
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
						<a href="../../usuarios/"><div class="titlePg">Vendas</div></a>
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
						<div class="panel-heading bg-success text-center" style="background-color: forestgreen; color: aliceblue; text-transform: uppercase; font-weight: 600; font-size: 20px;">
							GERAR CONTRATO DE VENDA
						</div>
						<div class="panel-body">
							<div class="alert alert-info text-center">
								Informe os detalhes para gerar o contrato.
							</div>
							<form action="../../../sql/cadastrar_venda.php" method="post" enctype="multipart/form-data">
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Dados Gerais : </a></i></u></div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
									<div class="col-md-3">
										<input type="text" name="cep" id="cep" class="form-control" placeholder="Cep">
									</div>
									<div class="col-md-3">
										<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">
									</div>
									<div class="col-md-3">
										<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro">
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<input type="text" name="rua" id="rua" class="form-control" placeholder="Endereço">
									</div>
									<div class="col-md-2">
										<input type="text" name="numero" id="num" class="form-control" placeholder="Número">
									</div>
									<div class="col-md-2">
										<input type="text" name="uf" id="ac" class="form-control" placeholder="UF">
									</div>
								</div>
								<div class="row">
									<div class="col-md-7">
										<input type="text" name="nome" id="rsocial" class="form-control" placeholder="NOME DO CLIENTE :" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="date" class="form-control" name="dtvenda" placeholder="Data da Venda:">
									</div>
									<div class="col-md-3">
										<input type="date" class="form-control" name="dtentrega" placeholder="Prazo de Entrega:">
									</div>
									<div class="col-md-3">
										<label>CANAL DE VENDA:</label>
										<select class="form-control" name="canal">											
											<option></option>
											<option value="INTERNET">INTERNET</option>
											<option value="PRESENCIAL">PRESENCIAL</option>
											<option value="INDICAÇÃO">INDICAÇÃO</option>
										</select>
									</div>
									<div class="col-md-3">
										<label>SITUAÇÃO:</label>
										<select class="form-control" name="situacao">											
											<option></option>
											<option value="EM ABERTO">EM ABERTO</option>
											<option value="ATIVO">ATIVO</option>
											<option value="FINALIZADO">FINALIZADO</option>
											<option value="CANCELADO">CANCELADO</option>
										</select>
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
										<input type="hidden" name="user" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Faturamento :</a></i></u></div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="row">
									<div class="col-md-2">
										<select class="form-control" name="vencimento">
										  <option>Dias</option>
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
									<div class="col-md-3">
										<select name="faqua" class="form-control">
											<option>Quantidade de Vezes</option>
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
								</div>									
								<div class="row">
									<div class="col-md-4">
										<select class="form-control" name="forma">
											<option>FORMA DE PAGAMENTO</option>
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
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Produtos :</a></i></u></div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
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
										<input type="text" name="idOne" id="codigo" class="form-control" placeholder="Cod. Produto :" required>
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoOne" id="tipo" class="form-control" placeholder="Tipo :" required>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantOne" onKeyUp="calcular(this.value)" id="quant1" class="form-control" placeholder="Quantidade :" required>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorOne" id="valor" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario:" required>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTOne" id="valorT" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total:" required>
									</div>	
									<input type="text" name="larguraOne" id="largura" hidden>
									<input type="text" name="comprimentoOne" id="comprimento" hidden>
									<input type="text" name="alturaOne" id="altura" hidden>
									<input type="text" name="pesoOne" id="peso" hidden>
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP2" aria-expanded="false" aria-controls="collapseP2"> -- Produtos 2 :</a></i></u></div>
								</div>									
								<div id="collapseP2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2">
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
										<input type="text" name="idTwo" id="codigo2" class="form-control" placeholder="Cod. Produto 2:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTwo" id="tipo2" class="form-control" placeholder="Tipo 2:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTwo" onKeyUp="calcular(this.value)" id="quant2" class="form-control" placeholder="Quantidade 2:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTwo" id="valor2" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 2:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTwo" id="valorT2" onKeyUp="calcular(this.value)" value="0" class="form-control" placeholder="Valor Total 2:"/>
									</div>
									<input type="hidden" name="larguraTwo" id="largura2">
									<input type="hidden" name="comprimentoTwo" id="comprimento2">
									<input type="hidden" name="alturaTwo" id="altura2">
									<input type="hidden" name="pesoTwo" id="peso2">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP3" aria-expanded="false" aria-controls="collapseP3"> -- Produtos 3 :</a></i></u></div>
								</div>								
								<div id="collapseP3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3">
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
										<input type="text" name="idThree" id="codigo3" class="form-control" placeholder="Cod. Produto 3:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoThree" id="tipo3" class="form-control" placeholder="Tipo 3:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantThree" onKeyUp="calcular(this.value)" id="quant3" class="form-control" placeholder="Quantidade 3:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorThree" id="valor3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 3:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTThree" id="valorT3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 3:"/>
									</div>
									<input type="hidden" name="larguraThree" id="largura3">
									<input type="hidden" name="comprimentoThree" id="comprimento3">
									<input type="hidden" name="alturaThree" id="altura3">
									<input type="hidden" name="pesoThree" id="peso3">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP4" aria-expanded="false" aria-controls="collapseP4"> -- Produtos 4 :</a></i></u></div>
								</div>								
								<div id="collapseP4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4">
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
										<input type="text" name="idFour" id="codigo4" class="form-control" placeholder="Cod. Produto 4:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoFour" id="tipo4" class="form-control" placeholder="Tipo 4:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantFour" onKeyUp="calcular(this.value)" id="quant4" class="form-control" placeholder="Quantidade 4:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorFour" id="valor4" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 4:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTFour" id="valorT4" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 4:"/>
									</div>
									<input type="hidden" name="larguraFour" id="largura4">
									<input type="hidden" name="comprimentoFour" id="comprimento4">
									<input type="hidden" name="alturaFour" id="altura4">
									<input type="hidden" name="pesoFour" id="peso4">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP5" aria-expanded="false" aria-controls="collapseP5"> -- Produtos 5 :</a></i></u></div>
								</div>								
								<div id="collapseP5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5">
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
										<input type="text" name="idFive" id="codigo5" class="form-control" placeholder="Cod. Produto 5:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoFive" id="tipo5" class="form-control" placeholder="Tipo 5:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantFive" onKeyUp="calcular(this.value)" id="quant5" class="form-control" placeholder="Quantidade 5:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorFive" id="valor5" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 5:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTFive" id="valorT5" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 5:"/>
									</div>
									<input type="hidden" name="larguraFive" id="largura5">
									<input type="hidden" name="comprimentoFive" id="comprimento5">
									<input type="hidden" name="alturaFive" id="altura5">
									<input type="hidden" name="pesoFive" id="peso5">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP6" aria-expanded="false" aria-controls="collapseP6"> -- Produtos 6 :</a></i></u></div>
								</div>								
								<div id="collapseP6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP6">
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
										<input type="text" name="idSix" id="codigo6" class="form-control" placeholder="Cod. Produto 6:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoSix" id="tipo6" class="form-control" placeholder="Tipo 6:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantSix" onKeyUp="calcular(this.value)" id="quant6" class="form-control" placeholder="Quantidade 6:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorSix" id="valor6" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 6:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTSix" id="valorT6" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 6:"/>
									</div>
									<input type="hidden" name="larguraSix" id="largura6">
									<input type="hidden" name="comprimentoSix" id="comprimento6">
									<input type="hidden" name="alturaSix" id="altura6">
									<input type="hidden" name="pesoSix" id="peso6">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP7" aria-expanded="false" aria-controls="collapseP7"> -- Produtos 7 :</a></i></u></div>
								</div>								
								<div id="collapseP7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP7">
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
										<input type="text" name="idSev" id="codigo7" class="form-control" placeholder="Cod. Produto 7:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoSev" id="tipo7" class="form-control" placeholder="Tipo 7:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantSev" onKeyUp="calcular(this.value)" id="quant7" class="form-control" placeholder="Quantidade 7:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorSev" id="valor7" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 7:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTSev" id="valorT7" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 7:"/>
									</div>
									<input type="hidden" name="larguraSev" id="largura7">
									<input type="hidden" name="comprimentoSev" id="comprimento7">
									<input type="hidden" name="alturaSev" id="altura7">
									<input type="hidden" name="pesoSev" id="peso7">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP8" aria-expanded="false" aria-controls="collapseP8"> -- Produtos 8 :</a></i></u></div>
								</div>								
								<div id="collapseP8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP8">
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
										<input type="text" name="idEig" id="codigo8" class="form-control" placeholder="Cod. Produto 8:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoEig" id="tipo8" class="form-control" placeholder="Tipo 8:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantEig" onKeyUp="calcular(this.value)" id="quant8" class="form-control" placeholder="Quantidade 8:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorEig" id="valor8" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 8:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTEig" id="valorT8" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 8:"/>
									</div>
									<input type="hidden" name="larguraEig" id="largura8">
									<input type="hidden" name="comprimentoEig" id="comprimento8">
									<input type="hidden" name="alturaEig" id="altura8">
									<input type="hidden" name="pesoEig" id="peso8">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP9" aria-expanded="false" aria-controls="collapseP9"> -- Produtos 9 :</a></i></u></div>
								</div>								
								<div id="collapseP9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP9">
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
										<input type="text" name="idNine" id="codigo9" class="form-control" placeholder="Cod. Produto 9:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoNine" id="tipo9" class="form-control" placeholder="Tipo 9:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantNine" onKeyUp="calcular(this.value)" id="quant9" class="form-control" placeholder="Quantidade 9:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorNine" id="valor9" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 9:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTNine" id="valorT9" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 9:"/>
									</div>
									<input type="hidden" name="larguraNine" id="largura9">
									<input type="hidden" name="comprimentoNine" id="comprimento9">
									<input type="hidden" name="alturaNine" id="altura9">
									<input type="hidden" name="pesoNine" id="peso9">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP10" aria-expanded="false" aria-controls="collapseP10"> -- Produtos 10 :</a></i></u></div>
								</div>								
								<div id="collapseP10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP10">
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
										<input type="text" name="idTen" id="codigo10" class="form-control" placeholder="Cod. Produto 10:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTen" id="tipo10" class="form-control" placeholder="Tipo 10:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTen" onKeyUp="calcular(this.value)" id="quant10" class="form-control" placeholder="Quantidade 10:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTen" id="valor10" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 10:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTen" id="valorT10" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 10:"/>
									</div>
									<input type="hidden" name="larguraTen" id="largura10">
									<input type="hidden" name="comprimentoTen" id="comprimento10">
									<input type="hidden" name="alturaTen" id="altura10">
									<input type="hidden" name="pesoTen" id="peso10">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP11" aria-expanded="false" aria-controls="collapseP11"> -- Produtos 11 :</a></i></u></div>
								</div>								
								<div id="collapseP11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP11">
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
										<input type="text" name="idTenO" id="codigo11" class="form-control" placeholder="Cod. Produto 11:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenO" id="tipo11" class="form-control" placeholder="Tipo 11:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTenO" onKeyUp="calcular(this.value)" id="quant11" class="form-control" placeholder="Quantidade 11:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTenO" id="valor11" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 11:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTenO" id="valorT11" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 11:"/>
									</div>
									<input type="hidden" name="larguraTenO" id="largura11">
									<input type="hidden" name="comprimentoTenO" id="comprimento11">
									<input type="hidden" name="alturaTenO" id="altura11">
									<input type="hidden" name="pesoTenO" id="peso11">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP12" aria-expanded="false" aria-controls="collapseP12"> -- Produtos 12 :</a></i></u></div>
								</div>								
								<div id="collapseP12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP12">
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
										<input type="text" name="idTenTwo" id="codigo12" class="form-control" placeholder="Cod. Produto 12:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenTwo" id="tipo12" class="form-control" placeholder="Tipo 12:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTenTwo" onKeyUp="calcular(this.value)" id="quant12" class="form-control" placeholder="Quantidade 12:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTenTwo" id="valor12" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 12:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTenTwo" id="valorT12" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 12:"/>
									</div>
									<input type="hidden" name="larguraTenTwo" id="largura12">
									<input type="hidden" name="comprimentoTenTwo" id="comprimento12">
									<input type="hidden" name="alturaTenTwo" id="altura12">
									<input type="hidden" name="pesoTenTwo" id="peso12">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP13" aria-expanded="false" aria-controls="collapseP13"> -- Produtos 13 :</a></i></u></div>
								</div>								
								<div id="collapseP13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP13">
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
										<input type="text" name="idTenThree" id="codigo13" class="form-control" placeholder="Cod. Produto 13:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenThree" id="tipo13" class="form-control" placeholder="Tipo 13:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTenThree" onKeyUp="calcular(this.value)" id="quant13" class="form-control" placeholder="Quantidade 13:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTenThree" id="valor13" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 13:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTenThree" id="valorT13" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 13:"/>
									</div>
									<input type="hidden" name="larguraTenThree" id="largura13">
									<input type="hidden" name="comprimentoTenThree" id="comprimento13">
									<input type="hidden" name="alturaTenThree" id="altura13">
									<input type="hidden" name="pesoTenThree" id="peso13">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP14" aria-expanded="false" aria-controls="collapseP14"> -- Produtos 14 :</a></i></u></div>
								</div>								
								<div id="collapseP14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP14">
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
										<input type="text" name="idTenFour" id="codigo14" class="form-control" placeholder="Cod. Produto 14:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenFour" id="tipo14" class="form-control" placeholder="Tipo 14:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTenFour" onKeyUp="calcular(this.value)" id="quant14" class="form-control" placeholder="Quantidade 14:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTenFour" id="valor14" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 14:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTenFour" id="valorT14" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 14:"/>
									</div>
									<input type="hidden" name="larguraTenFour" id="largura14">
									<input type="hidden" name="comprimentoTenFour" id="comprimento14">
									<input type="hidden" name="alturaTenFour" id="altura14">
									<input type="hidden" name="pesoTenFour" id="peso14">
								</div>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseP15" aria-expanded="false" aria-controls="collapseP15"> -- Produtos 15 :</a></i></u></div>
								</div>								
								<div id="collapseP15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP15">
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
										<input type="text" name="idTenFive" id="codigo15" class="form-control" placeholder="Cod. Produto 15:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenFive" id="tipo15" class="form-control" placeholder="Tipo 15:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantTenFive" onKeyUp="calcular(this.value)" id="quant15" class="form-control" placeholder="Quantidade 15:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTenFive" id="valor15" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 15:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="valorTTenFive" id="valorT15" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 15:"/>
									</div>
									<input type="hidden" name="larguraTenFive" id="largura15">
									<input type="hidden" name="comprimentoTenFive" id="comprimento15">
									<input type="hidden" name="alturaTenFive" id="altura15">
									<input type="hidden" name="pesoTenFive" id="peso15">
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Transporte :</a></i></u></div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">								
								<div class="row">
									<div class="col-md-3">
										<input type="type" class="form-control" name="frete" onKeyUp="calcular(this.value)" id="vfrete" placeholder="Valor do Frete :">
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
												 }
												 return v;
											  };
											  setTimeout(function(){
												 el.value = exec(el.value);
											  },1);
										   }
										}
										$(function(){
										   $('#vfrete').bind('keypress',mask.money)
										});
									</script>
									</div>
									<div class="col-md-6">
										<input type="type" class="form-control" name="transportadora" placeholder="Transportadora :">
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
										<input type="text" name="ecep" class="form-control" id="cepE" placeholder="Cep Entrega :">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<input type="text" name="ecidade" class="form-control" id="cidadeE" placeholder="Cidade Entrega :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ebairro" class="form-control" id="bairroE" placeholder="Bairro Entrega:">
									</div>
									<div class="col-md-6">
										<input type="text" name="erua" class="form-control" id="ruaE" placeholder="Rua Entrega:">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<input type="text" name="enumero" class="form-control" placeholder="N° Entrega :">
									</div>
									<div class="col-md-2">
										<input type="text" name="euf" class="form-control" id="ufE" placeholder="UF Entrega:">
									</div>
								</div>
								</div>								
								<hr>
								<div class="row"><u><i><a>Valor do Contrato :</a></i></u></div>
								<div class="row">
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="valPt" id="valPt" onKeyUp="calcular(this.value)" placeholder="Valor Total Produtos:">										
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="transVt" id="transVt" onKeyUp="calcular(this.value)" placeholder="Valor Total Transporte">
										
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="desVt" id="desVt" onKeyUp="calcular(this.value)" placeholder="Desconto %:">
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control input-lg" name="total" id="total" placeholder="Valor Total:">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<label class="control-label">PAGAMENTO:</label>
										<select class="form-control" name="pag">
											<option></option>
											<option value="Á VISTA">Á VISTA</option>
											<option value="PARCELADO">PARCELADO</option>
										</select>
									</div>
									<div class="col-md-5">
										<label class="control-label">ANEXAR ARQUIVO:</label>
										<input class="btn btn-info" type="file" name="anexar">
										<img / width="20%" height="auto">
									</div>
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
								<div class="row">
									<div class="col-md-10">
										<textarea class="form-control" name="obs" placeholder="Obseração:" rows="2"></textarea>
									</div>
								</div>
								<input type="hidden" name="userAlterado" class="form-control" value="<?php echo $dado['user_nome'] ?>"/>
								<hr>
								<input class="btn btn-lg btn-success" type="submit" value="Gerar Contrato de Venda" onClick="validar()">
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
			var $nome = document.querySelector('#rsocial');
			var $container = document.querySelector('#codigo');
			var $tipoCo = document.querySelector('#tipo');
			var $quantidadeCo = document.querySelector('#quant1');
			var $valorCo = document.querySelector('#valor');
			var $valortCo = document.querySelector('#valorT');
			
			if(!$nome.value){
				swal("Campo Vazio", "Campo NOME está em branco ou Inválido", "error");
				return false;
			}else if(!$container.value){
				swal("Vazio", "Campo Produto está incorreto ou em branco", "error");
				return false;
			}else if(!$tipoCo.value){
				swal("Vazio", "Campo TIPO está incorreto ou em branco", "error");
				return false;
			}else if(!$quantidadeCo.value){
				swal("Vazio", "Campo QUANTIDADE está incorreto ou em branco", "error");
				return false;
			}else if(!$valorCo.value){
				swal("Vazio", "Campo VALOR está incorreto ou em branco", "error");
				return false;
			}else if(!$valortCo.value){
				swal("Vazio", "Campo VALOR TOTAL está incorreto ou em branco", "error");
				return false;
			}
		}
	</script>
	<!--//Alert-->
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