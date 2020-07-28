<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Reparsul - Reparos e Manutenção de Containers" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link href="admin/css/style.css" rel="stylesheet" type="text/css" />
<!-- Favicon -->
<link rel="shortcut icon" href="admin/favicon.png">
<!-- font-awesome icons -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
<!--//webfonts--> 
<!--animate-->
<link href="admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="admin/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<!-- Search Cliente 1 -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#email").blur(function(){
      var $user_nome = $("#nome");
      var $user_email = $("#useremail");
      var $user_login = $("#login");
      var $user_senha = $("#senha");

      $user_nome.val('Carregando...');
      $user_email.val('Carregando...');
      $user_login.val('Carregando...');
      $user_senha.val('Carregando...');

        $.getJSON(
          'select_user.php',
          { user_email: $( this ).val() },
          function( json )
          {
            $user_nome.val( json.user_nome );
            $user_email.val( json.user_email );
            $user_login.val( json.user_login );
            $user_senha.val( json.user_senha );
          }
        );
    });
  });
  </script>
<!-- // FIM SEARCH Cliente 1 -->
<body class="cbp-spmenu-push">
	<div class="main-content">

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="admin/index.php">
						<h1>REPARSUL</h1>
						<span>............</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<a href="admin/index.php"><div class="titlePg">Recuperar Acesso</div></a>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

							</a>
						</li>
					</ul>
				</div>	
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div style="margin-top: 120px;">
			<div class="main-page login-page">
				<h3 class="title1">Página de Recuperação de acesso</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<a href="http://reparsul.com.br"><img src="admin/images/logo.jpeg" alt="Logo da empresa"/></a>
					</div>
					<div class="login-body">
						<form action="admin/sql/email_rec.php" method="post">
							<small>Insira o email que foi utilizado no cadastro, e clique fora do campo, aguarde alguns segundos para aparecer o nome do Usuário no segundo campo.</small>
							<input type="text" name="user_email" id="email" placeholder="Informe o Email que foi Cadastrado o Login:">							
							<input type="text" disabled id="nome" placeholder="Confirme o nome do Usuário Neste Campo:">
							<input type="hidden" name="nome" id="nome">
							<input type="hidden" name="email" id="useremail">
							<input type="hidden" name="login" id="login">
							<input type="hidden" name="senha" id="senha">
							<input type="submit" value="Recuperar Senha">
							<div class="forgot-grid">								
								<div class="clearfix"> </div>
							</div>
						</form>
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
		<script src="admin/js/classie.js"></script>
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js"> </script>
</body>
</html>