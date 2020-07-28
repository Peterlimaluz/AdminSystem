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
			<div align="center" class="col-md-12 col-xs-12">
				<img src="../../../images/logo2.png" width="40%" height="auto">
			</div>
		</div>
			<?php
				date_default_timezone_set('America/Sao_Paulo');
				$matricula = date ("d/m/Y - H:i");
			?>
		<div class="row">
			<div align="center" class="col-md-12 col-xs-12">
				<p>Rd SC 416 – KM 23, Sai Mirin - Itapoá – SC – CEP 89.249-000 </p>
				<p>Fone: (47) 99219 - 0789 | Email: vendas@reparsul.com.br </p>
			</div>
		</div>
		<hr>
		<div class="row">			
		<?php

include "../../../sql/conectar.php";
@ $id = $_POST['ma_id'];

$query = "SELECT DISTINCT * FROM manutencao WHERE ma_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {
	?>
			<?php
				$ano = date ("Y");
			?>
			<div align="center" class="col-md-12">
				<h5><b>Contrato de Manutenção e Reparos de Equipamentos REPARSUL SOLUÇÕES EM CONTAINERS Nº. <?php echo $linha['ma_id']?>/<?php echo " $ano" ?></b></h5>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Prestador:</th>
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
								<th>Solicitante:</th>
								<td><b><?php echo $linha['ma_nome']?>,</b> com endereço: <?php echo $linha['ma_rua']?>, N°: <?php echo $linha['ma_numero']?> , Bairro: <?php echo $linha['ma_bairro']?> , Cidade: <?php echo $linha['ma_cidade']?> , CEP: <?php echo $linha['ma_cep']?>, inscrita no CPF/CNPJ: <?php echo $linha['ma_cpf']?></td>
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

@ $id = $_POST['ma_id'];

$query = "SELECT DISTINCT * FROM manutencao WHERE ma_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {

   $var = $linha['ma_dtgerado'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
	
   $zarE = $linha['ma_dtserv'];
   $zarE = explode(" ",$zarE);
   $diaE = $zarE[0];
   $diaE = explode("-",$diaE);
   $dataE = "$diaE[2]/$diaE[1]/$diaE[0]";
		
   ?>
	
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">1. OBJETO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12"><b>1.1 </b> - 
				Este contrato tem por objeto a manutenção ou reparo dos containers, os serviços a ser feito, estarão listados abaixo.
			</div>
		</div>
			<br />
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead>
						<tr style="color: blue;">
							<th>DETALHES</th>
							<th>QUANTIDADE</th>
							<th>VALOR UNITÁRIO</th>
							<th>VALOR TOTAL</th>
						</tr>
					</thead>
					<?php if($linha['ma_mrOne'] =='') {
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrOne']?></td>
							<td><?php echo $linha['ma_mrQOne']?></td>
							<td>R$<?php echo $linha['ma_mrVOne']?></td>
							<td>R$<?php echo $linha['ma_mrVTOne']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTwo'] =='') {
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTwo']?></td>
							<td><?php echo $linha['ma_mrQTwo']?></td>
							<td>R$<?php echo $linha['ma_mrVTwo']?></td>
							<td>R$<?php echo $linha['ma_mrVTTwo']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrThree'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrThree']?></td>
							<td><?php echo $linha['ma_mrQThree']?></td>
							<td>R$<?php echo $linha['ma_mrVThree']?></td>
							<td>R$<?php echo $linha['ma_mrVTThree']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrFour'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrFour']?></td>
							<td><?php echo $linha['ma_mrQFour']?></td>
							<td>R$<?php echo $linha['ma_mrVFour']?></td>
							<td>R$<?php echo $linha['ma_mrVTFour']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrFive'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrFive']?></td>
							<td><?php echo $linha['ma_mrQFive']?></td>
							<td>R$<?php echo $linha['ma_mrVFive']?></td>
							<td>R$<?php echo $linha['ma_mrVTFive']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrSix'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrSix']?></td>
							<td><?php echo $linha['ma_mrQSix']?></td>
							<td>R$<?php echo $linha['ma_mrVSix']?></td>
							<td>R$<?php echo $linha['ma_mrVTSix']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrSev'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrSev']?></td>
							<td><?php echo $linha['ma_mrQSev']?></td>
							<td>R$<?php echo $linha['ma_mrVSev']?></td>
							<td>R$<?php echo $linha['ma_mrVTSev']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrEig'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrEig']?></td>
							<td><?php echo $linha['ma_mrQEig']?></td>
							<td>R$<?php echo $linha['ma_mrVEig']?></td>
							<td>R$<?php echo $linha['ma_mrVTEig']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrNine'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrNine']?></td>
							<td><?php echo $linha['ma_mrQNine']?></td>
							<td>R$<?php echo $linha['ma_mrVNine']?></td>
							<td>R$<?php echo $linha['ma_mrVTNine']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTen'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTen']?></td>
							<td><?php echo $linha['ma_mrQTen']?></td>
							<td>R$<?php echo $linha['ma_mrVTen']?></td>
							<td>R$<?php echo $linha['ma_mrVTTen']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTenO'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTenO']?></td>
							<td><?php echo $linha['ma_mrQTenO']?></td>
							<td>R$<?php echo $linha['ma_mrVTenO']?></td>
							<td>R$<?php echo $linha['ma_mrVTTenO']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTenTwo'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTenTwo']?></td>
							<td><?php echo $linha['ma_mrQTenTwo']?></td>
							<td>R$<?php echo $linha['ma_mrVTenTwo']?></td>
							<td>R$<?php echo $linha['ma_mrVTTenTwo']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTenThree'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTenThree']?></td>
							<td><?php echo $linha['ma_mrQTenThree']?></td>
							<td>R$<?php echo $linha['ma_mrVTenThree']?></td>
							<td>R$<?php echo $linha['ma_mrVTTenThree']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTenFour'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTenFour']?></td>
							<td><?php echo $linha['ma_mrQTenFour']?></td>
							<td>R$<?php echo $linha['ma_mrVTenFour']?></td>
							<td>R$<?php echo $linha['ma_mrVTTenFour']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ma_mrTenFive'] ==''){	   
   					}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['ma_mrTenFive']?></td>
							<td><?php echo $linha['ma_mrQTenFive']?></td>
							<td>R$<?php echo $linha['ma_mrVTenFive']?></td>
							<td>R$<?php echo $linha['ma_mrVTTenFive']?></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		<div class="row">
			<br />
			<hr>
			<br />
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">2. PREÇO E FORMA DE PAGAMENTO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 1 - </b> Pela execução do serviço objeto deste Contrato o Solicitante pagará ao
PRESTADOR, o valor de <b>R$<?php echo $linha['ma_vTotal'] ?></b>, combinado na forma de pagamento <b><?php echo $linha['ma_forma'] ?></b>. Será Realizado em <b><?php echo $linha['ma_quantidade']?> Vez(es).</b> Pagamento <b><?php echo $linha['ma_pag']?>.</b>
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 2 - </b> É expressamente proibido a sublocação, empréstimo ou cessão do CONTAINER, objeto deste contrato, para uso de terceiros, ainda que gratuitamente, implicando no imediato cancelamento do mesmo.  
			</div>
		</div>
		<div class="row"><br/></div>
		<hr>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-decoration-line: underline">3. PRAZOS:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>3. 1 - </b> O prazo para ser realizado o serviço citado acima, será realizado me <b><?php echo $dataE?></b>:
			</div>
		</div>
		<div class="row"><br /></div>
		<hr>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-decoration-line: underline">4. ENDEREÇO DE ATENDIMENTO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>4. 1 - </b> O Endereço de Atendimento é : <b><?php echo $linha['ma_erua']?>, N°: <?php echo $linha['ma_enumero']?>, Bairro: <?php echo $linha['ma_ebairro']?>, Cidade: <?php echo $linha['ma_ecidade']?>, Cep: <?php echo $linha['ma_ecep']?>.</b>
			</div>
		</div>
		<hr>
		<div class="row"><br /></div>
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
				<b><?php echo $linha['ma_nome'] ?> - CNPJ: <?php echo $linha['ma_cpf'] ?> </b>
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
