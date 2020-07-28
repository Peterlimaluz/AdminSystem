<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Locação :: Gerar</title>
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

<!-- Search Produto S 1 -->
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
						<a href="../../usuarios/"><div class="titlePg">Locação</div></a>
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
								<li> <a name="form1" href="../../../cadastro/usuarios/alterar/meu_cadastro.php"><i class="fa fa-user"></i> Perfil</a> </li> 
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
						<div class="panel-heading bg-primary text-center" style="background-color: mediumslateblue; color: aliceblue; text-transform: uppercase; font-weight: 600; font-size: 20px;">
							GERAR CONTRATO DE LOCAÇÃO
						</div>
						<div class="panel-body">
							<div class="alert alert-info text-center">
								Informe os detalhes para gerar o contrato.
							</div>
							<form action="../../../sql/cadastrar_locacao.php" method="post">
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Dados Gerais :</a></i></u></div>
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
										<input type="text" name="logradouro" id="rua" class="form-control" placeholder="Endereço">
									</div>
									<div class="col-md-2">
										<input type="text" name="numero" id="num" class="form-control" placeholder="Número">
									</div>
									<div class="col-md-2">
										<input type="text" name="ac" id="ac" class="form-control" placeholder="UF">
									</div>
								</div>
								<div class="row">
									<div class="col-md-7">
										<input type="text" name="nome" id="rsocial" class="form-control" placeholder="NOME DO CLIENTE :" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<label>TIPO DE CONTRATO:</label>
										<div class="btn-group" data-toggle="buttons">										  
										  <label class="btn btn-warning">
											<input type="radio" name="tipo" id="option2" value="ALUGUEL">ALUGUEL
										  </label>
										  <label class="btn btn-info">
											<input type="radio" name="tipo" id="option3" value="EMPRÉSTIMO">EMPRÉSTIMO
										  </label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<input type="date" name="dtabertura" class="form-control" placeholder="Data-Gerado:">
									</div>									
									<div class="col-md-8">
										<div class="btn-group" data-toggle="buttons">
										  <label class="btn btn-default">
											<input type="checkbox"> SITUAÇÃO :
										  </label>
										  <label class="btn btn-success">
											<input type="radio" name="situacao" value="ABERTO" id="option1"> ABERTO
										  </label>
										  <label class="btn btn-primary">
											<input type="radio" name="situacao" value="ATIVO" id="option2"> ATIVO
										  </label>
										  <label class="btn btn-warning">
											<input type="radio" name="situacao" value="FINALIZADO" id="option3"> FINALIZADO
										  </label>
									      <label class="btn btn-danger">
											<input type="radio" name="situacao" value="CANCELADO" id="option4"> CANCELADO
										  </label>
										</div>
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
										<select class="form-control" name="fadia">
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
										<select name="faquantidade" class="form-control">
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
										<select class="form-control" name="faforma">
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
										<input type="text" name="idOne" id="codigo" class="form-control" placeholder="Cod. Produto :" maxlength="11" required>										
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoOne" id="tipo" class="form-control" placeholder="Tipo :" required>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantidadeOne" id="quantidade" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade :" required>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorOne" id="valor" class="form-control" placeholder="Valor Unitario:" required>
									</div>		
									<div class="col-md-3">
										<input type="text" name="valTOne" id="valorT" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 1:" required>
									</div>	
									<input type="hidden" name="larguraOne" id="largura">
									<input type="hidden" name="comprimentoOne" id="comprimento">
									<input type="hidden" name="alturaOne" id="altura">
									<input type="hidden" name="pesoOne" id="peso">								
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
										<input type="text" name="quantidadeTwo" id="quantidade2" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 2:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTwo" id="valor2" class="form-control" placeholder="Valor Unitario 2:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTwo" id="valorT2" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 2:">
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
										<input type="text" name="quantidadeThree" id="quantidade3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 3:"/>
									</div>
									<div class="col-md-2">
										<input type="text"name="valorThree" id="valor3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Unitario 3:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTThree" id="valorT3" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 3:">
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
										<input type="text" name="quantidadeFour" id="quantidade4" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 4:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorFour" id="valor4" class="form-control" placeholder="Valor Unitario 4:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTFour" id="valorT4" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 4:">
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
										<input type="text" name="idFive" id="codigo5" class="form-control" placeholder="Cod. Produto :">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoFive" id="tipo5" class="form-control" placeholder="Tipo 5:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantidadeFive" id="quantidade5" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 5:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorFive" id="valor5" class="form-control" placeholder="Valor Unitario 5:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTFive" id="valorT5" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 5:">
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
										<input type="text" name="quantidadeSix" id="quantidade6" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 6:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorSix" id="valor6" class="form-control" placeholder="Valor Unitario 6:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTSix" id="valorT6" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 6:">
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
										<input type="text" name="quantidadeSev" id="quantidade7" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 7:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorSev" id="valor7" class="form-control" placeholder="Valor Unitario 7:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTSev" id="valorT7" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 7:">
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
										<input type="text" name="quantidadeEig" id="quantidade8" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 8:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorEig" id="valor8" class="form-control" placeholder="Valor Unitario 8:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTEig" id="valorT8" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total: 8">
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
										<input type="text" name="quantidadeNine" id="quantidade9" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 9:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorNine" id="valor9" class="form-control" placeholder="Valor Unitario 9:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTNine" id="valorT9" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 9:">
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
										<input type="text" name="quantidadeTen" id="quantidade10" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 10:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTen" id="valor10" class="form-control" placeholder="Valor Unitario 10:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTen" id="valorT10" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 10:">
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
										<input type="text" name="quantidadeTenO" id="quantidade11" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 11:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTenO" id="valor11" class="form-control" placeholder="Valor Unitario 11:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTenO" id="valorT11" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 11:">
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
										<input type="text" name="idTenTw" id="codigo12" class="form-control" placeholder="Cod. Produto 12:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenTw" id="tipo12" class="form-control" placeholder="Tipo 12:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantidadeTenTw" id="quantidade12" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 12:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTenTw" id="valor12" class="form-control" placeholder="Valor Unitario 12:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTenTw" id="valorT12" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 12:">
									</div>
									<input type="hidden" name="larguraTenTw" id="largura12">
									<input type="hidden" name="comprimentoTenTw" id="comprimento12">
									<input type="hidden" name="alturaTenTw" id="altura12">
									<input type="hidden" name="pesoTenTw" id="peso12">
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
										<input type="text" name="idTenTr" id="codigo13" class="form-control" placeholder="Cod. Produto 13:">
									</div>
									<div class="col-md-2">
										<input type="text" name="tipoTenTr" id="tipo13" class="form-control" placeholder="Tipo 13:"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="quantidadeTenTr" id="quantidade13" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 13:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTenTr" id="valor13" class="form-control" placeholder="Valor Unitario 13:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTenTr" id="valorT13" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 13:">
									</div>
									<input type="hidden" name="larguraTenTr" id="largura13">
									<input type="hidden" name="comprimentoTenTr" id="comprimento13">
									<input type="hidden" name="alturaTenTr" id="altura13">
									<input type="hidden" name="pesoTenTr" id="peso13">
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
										<input type="text" name="quantidadeTenFour" id="quantidade14" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 14:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTenFour" id="valor14" class="form-control" placeholder="Valor Unitario 14:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTenFour" id="valorT14" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 14:">
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
										<input type="text" name="quantidadeTenFive" id="quantidade15" onKeyUp="calcular(this.value)" class="form-control" placeholder="Quantidade 15:"/>
									</div>
									<div class="col-md-2">
										<input type="text" onKeyUp="calcular(this.value)" name="valorTenFive" id="valor15" class="form-control" placeholder="Valor Unitario 15:"/>
									</div>
									<div class="col-md-3">
										<input type="text" name="valTTenFive" id="valorT15" onKeyUp="calcular(this.value)" class="form-control" placeholder="Valor Total 15:">
									</div>
									<input type="hidden" name="larguraTenFive" id="largura15">
									<input type="hidden" name="comprimentoTenFive" id="comprimento15">
									<input type="hidden" name="alturaTenFive" id="altura15">
									<input type="hidden" name="pesoTenFive" id="peso15">
								</div>
									
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Entrega :</a></i></u></div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">								
								<div class="row">
									<div class="col-md-3">
										<input type="date" class="form-control" name="edhentrega" placeholder="Data/Hora Entrega :">
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
										<input type="text" name="ecep" class="form-control" id="cepE" placeholder="Cep :">
									</div>
									<div class="col-md-3">
										<input type="text" name="ecomplemento" class="form-control" placeholder="Complemento :">
									</div>
									<div class="col-md-2">
										<input type="text" name="ebairro" class="form-control" id="bairroE" placeholder="Bairro:">
									</div>
									<div class="col-md-2">
										<input type="text" name="ecidade" class="form-control" id="cidadeE" placeholder="Cidade:">
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<input type="text" name="elogradouro" class="form-control" id="ruaE" placeholder="Logradouro :">
									</div>
									<div class="col-md-2">
										<input type="text" name="enumero" class="form-control" placeholder="N° :">
									</div>
									<div class="col-md-2">
										<input type="text" name="euf" class="form-control" id="ufE" placeholder="UF :">
									</div>
								</div>
								</div>
								<hr>
								<div class="row"><u><i><a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Retirada :</a></i></u></div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">	
								<div class="row">
									<div class="col-md-3">
										<input type="date" class="form-control" name="rdentrega" placeholder="Data/Hora Entrega :">
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
										<input type="text" name="rcep" class="form-control" id="cep2" placeholder="Cep :">
									</div>
									<div class="col-md-3">
										<input type="text" name="rcomplemento" class="form-control" placeholder="Complemento :">
									</div>
									<div class="col-md-2">
										<input type="text" name="rbairro" class="form-control" id="bairro2" placeholder="Bairro:">
									</div>
									<div class="col-md-2">
										<input type="text" name="rcidade" class="form-control" id="cidade2" placeholder="Cidade:">
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<input type="text" name="rlogradouro" class="form-control" id="rua2" placeholder="Logradouro :"/>
									</div>
									<div class="col-md-2">
										<input type="text" name="rnumero" class="form-control" placeholder="N° :">
									</div>
									<div class="col-md-2">
										<input type="text" name="ruf" class="form-control" id="uf2" placeholder="UF :">
									</div>
									<input type="hidden" name="userAlterado" value="<?php echo $dado['user_nome'] ?>">
								</div>								
								</div>
								<hr>
								<div class="row"><u><i><a>Valor da Locação :</a></i></u></div>
								<div class="row">
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="valor" id="val" onKeyUp="calcular(this.value)" placeholder="Digite o Valor:">
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
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="acrescimo" id="acrescimo" placeholder="Digite o Valor do Acréscimo">
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
										<input type="text" class="form-control" onKeyUp="calcular(this.value)" name="desconto" id="desconto" placeholder="Porcentagem de Desconto">
										
									</div>
									<div class="col-md-3 col-xs-12">
										<input type="text" class="form-control" name="total" id="valTotal" placeholder="Valor Total:">
									</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control input-lg" name="valReposicao" id="reposicao" placeholder="Valor de Reposição do Container">
											<script>
											$(function(){
											   $('#reposicao').bind('keypress',mask.money)
											});
											</script>	
										</div>
									</div>
								
								<hr>
								<input class="btn btn-lg btn-info" type="submit" value="Gerar Contrato de Locação" onclick="validar()">
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
			var $quantidadeCo = document.querySelector('#quantidade');
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