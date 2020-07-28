<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//PT-BR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Peterson de Lima Luz. All rights reserved. -->
<title>P&aacute;gina de Impress&atilde;o</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../../../favicon.png" type="image/x-icon" />
<script language="JavaScript" type="text/javascript">

//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("Janeiro","Fevereiro","MarÃƒÂ§o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
//Ensure correct for language. English is "January, 2015"
var TODAY = monthname[d.getMonth()] + " "  + d.getDate() + ", " + d.getFullYear();
var HOJE = d.getDate() + " de "  + monthname[d.getMonth()] + " de " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<link href="../../../css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style type="text/css">

.s1 {
	font-size: 20px;
	font-weight: bold;
	color: crimson;
}
@media print { 
                    #noprint { display:none; } 
                    body { background: #fff; }
                }

/* -- Responsive Screen */
@media screen and (max-width: 480px) {
	.s1 {
		font-size: 14px;
	}
}


</style>
<body>
	<div class="container">
		<div class="row">
			<br />
		</div>
		<div class="row">
			<div align="center" class="col-md-8 col-xs-8">
				<img src="../../../images/logo2.png" width="70%" height="auto">
			</div>

			<?php
				date_default_timezone_set('America/Sao_Paulo');
				$matricula = date ("d/m/Y - H:i");
			?>

			<div align="right" class="col-md-4 col-xs-4">
				<p>Rd SC 416 – KM 23, Sai Mirin - Itapoá – SC – CEP 89.249-000 </p>
				<p>Fone: (47) 99219 - 0789 | Email: vendas@reparsul.com.br </p>
			</div>
		</div>
		<hr>
		<div class="row">			
		<?php

include "../../../sql/conectar.php";

@ $id = $_POST['orca_id'];

$query = "SELECT DISTINCT * FROM orcamento WHERE orca_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {
	?>
			<?php
				$ano = date ("Y");
			?>
			<div align="center" class="col-md-12">
				<h3><b>ORÇAMENTO DE <?php echo $linha['orca_tipo']?> Nº DE REGISTRO. <?php echo $linha['orca_id']?>/<?php echo " $ano" ?></b></h3>
			</div>
			
			<div class="row"><hr></div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11">
					<h4><i><b>Dados Gerais:</b></i></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Orçamento Gerado:</th>
								<td>REPARSUL REPARO E MANUTENÇÃO DE CONTEINER LTDA - ME, situada à RD SC 416 – KM 23, Sai Mirim na cidade de Itapoá, no estado de Santa Catarina, inscrita no MF/CNPJ sob o número 20.160.079/0001-25.</td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Orçado para:</th>
								<td>Nome, Razão Social do Solicitante: <b><?php echo $linha['orca_nome']?>,</b> CPF/CNPJ: <?php echo $linha['orca_cpf']?></td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			
			
			
	<?php
	  }
	  ?>
		<div class="row">
			<hr>
		</div>
<?php

include "../../../sql/conectar.php";

@ $id = $_POST['orca_id'];

$query = "SELECT DISTINCT * FROM orcamento WHERE orca_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {

   $var = $linha['orca_dtgerado'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
		
   ?>
	
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">1. DETALHES DO ORÇAMENTO:</h4></div>
		</div>
			<br />
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead>
						<tr style="color: blue;">
							<th>ITEM A SER ORÇADO</th>
							<th>QUANTIDADE</th>
							<th>VALOR UNITÁRIO</th>
							<th>VALOR TOTAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmOne']?></td>
							<td><?php echo $linha['orca_maQOne']?></td>
							<td>R$<?php echo $linha['orca_maVOne']?></td>
							<td>R$<?php echo $linha['orca_maVTOne']?></td>
						</tr>
					</tbody>
					<?php if($linha['orca_maNmTwo'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTwo']?></td>
							<td><?php echo $linha['orca_maQTwo']?></td>
							<td>R$<?php echo $linha['orca_maVTwo']?></td>
							<td>R$<?php echo $linha['orca_maVTTwo']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmThree'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmThree']?></td>
							<td><?php echo $linha['orca_maQThree']?></td>
							<td>R$<?php echo $linha['orca_maVThree']?></td>
							<td>R$<?php echo $linha['orca_maVTThree']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmFour'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmFour']?></td>
							<td><?php echo $linha['orca_maQFour']?></td>
							<td>R$<?php echo $linha['orca_maVFour']?></td>
							<td>R$<?php echo $linha['orca_maVTFour']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmFive'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmFive']?></td>
							<td><?php echo $linha['orca_maQFive']?></td>
							<td>R$<?php echo $linha['orca_maVFive']?></td>
							<td>R$<?php echo $linha['orca_maVTFive']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmSix'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmSix']?></td>
							<td><?php echo $linha['orca_maQSix']?></td>
							<td>R$<?php echo $linha['orca_maVSix']?></td>
							<td>R$<?php echo $linha['orca_maVTSix']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmSev'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmSev']?></td>
							<td><?php echo $linha['orca_maQSev']?></td>
							<td>R$<?php echo $linha['orca_maVSev']?></td>
							<td>R$<?php echo $linha['orca_maVTSev']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmEig'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmEig']?></td>
							<td><?php echo $linha['orca_maQEig']?></td>
							<td>R$<?php echo $linha['orca_maVEig']?></td>
							<td>R$<?php echo $linha['orca_maVTEig']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmNine'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmNine']?></td>
							<td><?php echo $linha['orca_maQNine']?></td>
							<td>R$<?php echo $linha['orca_maVNine']?></td>
							<td>R$<?php echo $linha['orca_maVTNine']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmTen'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTen']?></td>
							<td><?php echo $linha['orca_maQTen']?></td>
							<td>R$<?php echo $linha['orca_maVTen']?></td>
							<td>R$<?php echo $linha['orca_maVTTen']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmTenO'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTenO']?></td>
							<td><?php echo $linha['orca_maQTenO']?></td>
							<td>R$<?php echo $linha['orca_maVTenO']?></td>
							<td>R$<?php echo $linha['orca_maVTTenO']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmTenTwo'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTenTwo']?></td>
							<td><?php echo $linha['orca_maQTenTwo']?></td>
							<td>R$<?php echo $linha['orca_maVTenTwo']?></td>
							<td>R$<?php echo $linha['orca_maVTTenTwo']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmTenThree'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTenThree']?></td>
							<td><?php echo $linha['orca_maQTenThree']?></td>
							<td>R$<?php echo $linha['orca_maVTenThree']?></td>
							<td>R$<?php echo $linha['orca_maVTTenThree']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmTenFour'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTenFour']?></td>
							<td><?php echo $linha['orca_maQTenFour']?></td>
							<td>R$<?php echo $linha['orca_maVTenFour']?></td>
							<td>R$<?php echo $linha['orca_maVTTenFour']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['orca_maNmTenFive'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_maNmTenFive']?></td>
							<td><?php echo $linha['orca_maQTenFive']?></td>
							<td>R$<?php echo $linha['orca_maVTenFive']?></td>
							<td>R$<?php echo $linha['orca_maVTTenFive']?></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		<div class="row">
			<hr>
		</div>
			<?php if($linha['orca_transNome'] == ''){
   							}else{?>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">2. INFORMAÇÕES DE TRANSPORTE:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead style="color: blue;">
						<tr>
							<th>INFORMAÇÕES DO TRANSPORTE</th>
							<th>VALORES SOBRE O TRANSPORTE</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_transNome'] ?></td>
							<td>R$<?php echo $linha['orca_transV'] ?></td>
						</tr>
					</tbody>
				</table>				
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
			<?php } ?>
		<div class="row">
			<hr>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">3. INFORMAÇÕES FINAIS:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead style="color: blue;">
						<tr>
							<th>OBS/DETALHES</th>
							<th>VALOR TOTAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $linha['orca_obs'] ?></td>
							<td>R$<?php echo $linha['orca_valTotal'] ?></td>
						</tr>
					</tbody>
				</table>				
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		<div class="row">
			<hr>
		</div>		
		<div class="row"><br /></div><div class="row"><br /></div><div class="row"><br /></div><div class="row"><br /></div>
		<div align="center" class="row">
			<h4>Data e Hora Impresso : <?php echo " $matricula" ?></h4>
		</div>
		<div class="row"><br /></div>
		<div class="row"><br /></div>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-1 col-xs-1"></div>
			<div align="center" class="col-md-4 col-xs-4">
				<hr style="border-color: black;margin-bottom: 0;">
				<b>Reparsul Reparo e Manutenção de Conteiner LTDA - ME - CNPJ: 20.160.079/0001-25 </b>
			</div>
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-1 col-xs-1"></div>
			<div align="center" class="col-md-4 col-xs-4">
				<hr style="border-color: black;margin-bottom: 0;">
				<b><?php echo $linha['orca_nome'] ?> - CPF/CNPJ: <?php echo $linha['orca_cpf'] ?> </b>
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		
	<?php
	  }
	  ?>
	</div>
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
document.write('<form><button id="noprint" class="btn btn-success" name="Print" onClick="printit()"><i class="material-icons">local_printshop</i> Imprimir Página</button>'); 
}
</script>
<br /><br />
<a href="../alterar/" class="btn btn-danger" id="noprint">Voltar</a>
<br />
<br />
</div>
</body>
</html>
