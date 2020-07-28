<!DOCTYPE HTML>
<html>
<head>
<title>Reparsul | Orçamento :: Pesquisar</title>
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
						<a href="#" style="color: slateblue; font-weight: 600; text-transform: uppercase;"><div class="titlePg">Orçamento</div></a>
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
					<h3 class="title1"><i class="material-icons">border_color </i> Pesquisar Cadastros de Orçamentos</h3>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Clique no botão do campo que será utilizado para pesquisar os Orçamentos:</h4>
						<br>
						<div align="center" class="row">
							<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#dtGera">
							  Data de Geração
							</button>
							<!-- Modal -->
							<div class="modal fade" id="dtGera" tabindex="-1" role="dialog" aria-labelledby="gera" aria-hidden="true">
							  <div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gera">Pesquisa por Data de Geração</h4>
								  </div>
								  <div class="modal-body">
									<form method="post" name="form_dtgeracao">
										<div class="row">
											<input type="date" name="dtInicio" class="form-control" placeholder="Data Inicial:" >
										</div>
										<div class="row">
											<input type="date" name="dtFinal" class="form-control" placeholder="Data Final:" >
										</div>
								  </div>
								  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
										<input type="submit" class="btn btn-info" onclick="acao_buscarOne();" value="Buscar"/>
										<button type="submit" class="btn btn-success" onclick="acao_excelOne();" ><i class="fa fa-file-excel"></i> Excel</button>
												 </form>
												  <script language="Javascript">
													function acao_buscarOne()
													{
														document.form_dtgeracao.action = "pesquisa-dtgerar.php";
														// document.Form1.target = "_blank";    // Open in a new window
														document.form_dtgeracao.submit();             // Submit the page
														return true;
													}

													function acao_excelOne()
													{
														document.form_dtgeracao.action = "excel-dtgerar.php"
														//document.form_check.target = "_blank";    // Open in a new window

														document.form_dtgeracao.submit();             // Submit the page

														return true;
													}
													</script>
									 
								  </div>
								</div>
							  </div>
							</div>
							<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#cpf">
								  CPF/CNPJ
								</button>
								<!-- Modal -->
								<div class="modal fade" id="cpf" tabindex="-1" role="dialog" aria-labelledby="cnpj" aria-hidden="true">
							 		<div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="Cnpj">Pesquisa por Cpf/Cnpj</h4>
										  </div>
											  <div class="modal-body">
												<form method="post" name="form_cnpj">
													<div class="row">
														<input type="text" name="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" id="cpf" maxlength="20" class="form-control" placeholder="Pesquisa por CPF/CNPJ:" >
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
											  </div>
											  <div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
													<input type="submit" class="btn btn-info" onclick="acao_buscartwo();" value="Buscar"/>
												  <button type="submit" class="btn btn-success" onclick="acao_exceltwo();" ><i class="fa fa-file-excel"></i> Excel</button>
												 </form>
												  <script language="Javascript">
													function acao_buscartwo()
													{
														document.form_cnpj.action = "pesquisa-cnpj.php";
														// document.Form1.target = "_blank";    // Open in a new window
														document.form_cnpj.submit();             // Submit the page
														return true;
													}

													function acao_exceltwo()
													{
														document.form_cnpj.action = "excel-cnpj.php"
														//document.form_check.target = "_blank";    // Open in a new window

														document.form_cnpj.submit();             // Submit the page

														return true;
													}
													</script>
											  </div>
										</div>
							  		</div>
								</div>
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#nContrato">
								  Número de Contrato
								</button>
								<!-- Modal -->
								<div class="modal fade" id="nContrato" tabindex="-1" role="dialog" aria-labelledby="contra" aria-hidden="true">
							 		<div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="contra">Pesquisa por Número de Contrato</h4>
										  </div>
											  <div class="modal-body">
												<form name="form_id" method="post">
													<div class="row">
														<input type="text" name="contrato" class="form-control" placeholder="Número do Contrato:" >
													</div>
											  </div>
											  <div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
													<input type="submit" class="btn btn-info" onclick="acao_buscarThree();" value="Buscar"/>
										<button type="submit" class="btn btn-success" onclick="acao_excelThree();" ><i class="fa fa-file-excel"></i> Excel</button>
												 </form>
												  <script language="Javascript">
													function acao_buscarThree()
													{
														document.form_id.action = "pesquisa-id.php";
														// document.Form1.target = "_blank";    // Open in a new window
														document.form_id.submit();             // Submit the page
														return true;
													}

													function acao_excelThree()
													{
														document.form_id.action = "excel-id.php"
														//document.form_check.target = "_blank";    // Open in a new window

														document.form_id.submit();             // Submit the page

														return true;
													}
													</script>
											  </div>
										</div>
							  		</div>
								</div>
								<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#tipo">
								  Pagamento
								</button>
								<!-- Modal -->
								<div class="modal fade" id="tipo" tabindex="-1" role="dialog" aria-labelledby="forma" aria-hidden="true">
							 		<div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="forma">Pesquisar por Pagamento</h4>
										  </div>
											  <div class="modal-body">
												<form name="form_tipo.php" method="post">
													<div class="row">
														<select class="form-control" name="pag">
															<option value="MANUTENÇÃO">MANUTENÇÃO</option>
															<option value="ALUGUEL">ALUGUEL</option>
															<option value="VENDA">VENDA</option>
															<option value="SERVIÇO">SERVIÇO</option>
														</select>
													</div>
											  </div>
											  <div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
													<input type="submit" class="btn btn-info" onclick="acao_buscarFour();" value="Buscar"/>
										<button type="submit" class="btn btn-success" onclick="acao_excelFour();" ><i class="fa fa-file-excel"></i> Excel</button>
												 </form>
												  <script language="Javascript">
													function acao_buscarFour()
													{
														document.form_tipo.action = "pesquisa-tipo.php";
														// document.Form1.target = "_blank";    // Open in a new window
														document.form_tipo.submit();             // Submit the page
														return true;
													}

													function acao_excelFour()
													{
														document.form_tipo.action = "excel-tipo.php"
														//document.form_check.target = "_blank";    // Open in a new window

														document.form_tipo.submit();             // Submit the page

														return true;
													}
													</script>
											  </div>
										</div>
							  		</div>
								</div>
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
		<script src="../../../js/classie.js"></script>
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