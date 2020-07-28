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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
@ $id = $_POST['lo_id'];

$query = "SELECT DISTINCT * FROM contrato_locacao WHERE lo_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {
	?>
			<?php
				$ano = date ("Y");
			?>
			<div align="center" class="col-md-12">
				<h5><b>Contrato de Locação Mensal de Equipamentos REPARSUL SOLUÇÕES EM CONTAINERS Nº. <?php echo $linha['lo_id']?>/<?php echo " $ano" ?></b></h5>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Locador:</th>
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
								<th>LOCATARIO:</th>
								<td><b><?php echo $linha['lo_nome']?>,</b> com endereço: <?php echo $linha['lo_logradouro']?>, N°: <?php echo $linha['lo_numero']?> , Bairro: <?php echo $linha['lo_bairro']?> , Cidade: <?php echo $linha['lo_cidade']?> , CEP: <?php echo $linha['lo_cep']?>, inscrita no CPF/CNPJ: <?php echo $linha['lo_cpf']?></td>
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

@ $id = $_POST['lo_id'];

$query = "SELECT DISTINCT * FROM contrato_locacao WHERE lo_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {

   $var = $linha['lo_dtabertura'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
	
   $zarE = $linha['lo_edhentrega'];
   $zarE = explode(" ",$zarE);
   $diaE = $zarE[0];
   $diaE = explode("-",$diaE);
   $dataE = "$diaE[2]/$diaE[1]/$diaE[0]";
	
   $zarR = $linha['lo_rdentrega'];
   $zarR = explode(" ",$zarR);
   $diaR = $zarR[0];
   $diaR = explode("-",$diaR);
   $dataR = "$diaR[2]/$diaR[1]/$diaR[0]";
		
   ?>
	
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">1. OBJETO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12"><b>1.1 </b> - 
				Aluguel De <b><?php echo $linha['lo_quantidadeOne'] ?></b> CONTAINER(s) de propriedade do LOCADOR, padrão geral. O modelo <?php echo $linha['lo_tipoOne']?>, ou seja, com <?php echo $linha['lo_comprimentoOne'] ?> metros de comprimento por <?php echo $linha['lo_larguraOne'] ?> metros de largura, conforme modelo enumerado abaixo, doravante denominado CONTAINER com as características abaixo relacionadas:  
			</div>
		</div>
			<br />
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered grid">
					<thead>
						<tr style="color: blue;">
							<th>CONTAINER N°</th>
							<th>TAMANHO</th>
							<th>MODELO</th>
						</tr>
					</thead>					
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idOne']?></td>
							<td><?php echo $linha['lo_comprimentoOne']?> X <?php echo $linha['lo_larguraOne']?> X <?php echo $linha['lo_alturaOne']?></td>
							<td><?php echo $linha['lo_tipoOne']?></td>
						</tr>
					</tbody>	
					<?php if($linha['lo_idTwo'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTwo']?></td>
							<td><?php echo $linha['lo_comprimentoTwo']?> X <?php echo $linha['lo_larguraTwo']?> X <?php echo $linha['lo_alturaTwo']?></td>
							<td><?php echo $linha['lo_tipoTwo']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idThree'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idThree']?></td>
							<td><?php echo $linha['lo_comprimentoThree']?> X <?php echo $linha['lo_larguraThree']?> X <?php echo $linha['lo_alturaThree']?></td>
							<td><?php echo $linha['lo_tipoThree']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idFour'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idFour']?></td>
							<td><?php echo $linha['lo_comprimentoFour']?> X <?php echo $linha['lo_larguraFour']?> X <?php echo $linha['lo_alturaFour']?></td>
							<td><?php echo $linha['lo_tipoFour']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idFive'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idFive']?></td>
							<td><?php echo $linha['lo_comprimentoFive']?> X <?php echo $linha['lo_larguraFive']?> X <?php echo $linha['lo_alturaFive']?></td>
							<td><?php echo $linha['lo_tipoFive']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idSix'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idSix']?></td>
							<td><?php echo $linha['lo_comprimentoSix']?> X <?php echo $linha['lo_larguraSix']?> X <?php echo $linha['lo_alturaSix']?></td>
							<td><?php echo $linha['lo_tipoSix']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idSev'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idSev']?></td>
							<td><?php echo $linha['lo_comprimentoSev']?> X <?php echo $linha['lo_larguraSev']?> X <?php echo $linha['lo_alturaSev']?></td>
							<td><?php echo $linha['lo_tipoSev']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idEig'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idEig']?></td>
							<td><?php echo $linha['lo_comprimentoEig']?> X <?php echo $linha['lo_larguraEig']?> X <?php echo $linha['lo_alturaEig']?></td>
							<td><?php echo $linha['lo_tipoEig']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idNine'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idNine']?></td>
							<td><?php echo $linha['lo_comprimentoNine']?> X <?php echo $linha['lo_larguraNine']?> X <?php echo $linha['lo_alturaNine']?></td>
							<td><?php echo $linha['lo_tipoNine']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idTen'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTen']?></td>
							<td><?php echo $linha['lo_comprimentoTen']?> X <?php echo $linha['lo_larguraTen']?> X <?php echo $linha['lo_alturaTen']?></td>
							<td><?php echo $linha['lo_tipoTen']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idTenO'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTenO']?></td>
							<td><?php echo $linha['lo_comprimentoTenO']?> X <?php echo $linha['lo_larguraTenO']?> X <?php echo $linha['lo_alturaTenO']?></td>
							<td><?php echo $linha['lo_tipoTenO']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idTenTw'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTenTw']?></td>
							<td><?php echo $linha['lo_comprimentoTenTw']?> X <?php echo $linha['lo_larguraTenTw']?> X <?php echo $linha['lo_alturaTenTw']?></td>
							<td><?php echo $linha['lo_tipoTenTw']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idTenTr'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTenTr']?></td>
							<td><?php echo $linha['lo_comprimentoTenTr']?> X <?php echo $linha['lo_larguraTenTr']?> X <?php echo $linha['lo_alturaTenTr']?></td>
							<td><?php echo $linha['lo_tipoTenTr']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idTenFour'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTenFour']?></td>
							<td><?php echo $linha['lo_comprimentoTenFour']?> X <?php echo $linha['lo_larguraTenFour']?> X <?php echo $linha['lo_alturaTenFour']?></td>
							<td><?php echo $linha['lo_tipoTenFour']?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_idTenFive'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_idTenFive']?></td>
							<td><?php echo $linha['lo_comprimentoTenFive']?> X <?php echo $linha['lo_larguraTenFive']?> X <?php echo $linha['lo_alturaTenFive']?></td>
							<td><?php echo $linha['lo_tipoTenFive']?></td>
						</tr>
					</tbody>
					<?php }?>
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
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">2. DO PRAZO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 1 - </b> O prazo do presente contrato inicia-se em <?php echo $dataE ?> na efetiva entrega do CONTAINER locado à LOCATÁRIA, mediante assinatura do Anexo II <b> – Termo de Recebimento do CONTAINER - </b> parte integrante deste contrato, com duração de 3 DIAS. Sendo renovado automaticamente por mais um DIA indefinidamente até a devolução ao LOCADOR do CONTAINER locado ou finalização dos reparos necessários. Em casos de avarias e danos causados pelo LOCATÁRIO, implicando desde já na aceitação por parte do LOCATÁRIO, do pagamento integral do período mensal ou ainda por vencer das respectivas tarifas de aluguel. 
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 2 - </b> É expressamente proibido a sublocação, empréstimo ou cessão do CONTAINER, objeto deste contrato, para uso de terceiros, ainda que gratuitamente, implicando no imediato cancelamento do mesmo.  
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 3 - </b> Não sendo devolvido em perfeitas condições de funcionamento ou com avarias, o prazo de locação somente se dará por findo do quando o objeto tiver recebido os devidos consertos e a substituição ou complementação de peças e acessórios estragados, faltantes ou avariados.   
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 4 - </b> Este contrato poderá ser renovado mediante Termo Aditivo, confeccionado, de comum acordo pelas partes.    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-decoration-line: underline">3. TARIFAS DE ALUGUEL, TRANSPORTE E VALORES DE REPOSIÇÃO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>3. 1 - </b> O valor das tarifas de aluguel e transporte para o CONTAINER objeto deste contrato e seus valores de reposição em caso de perda total, inadimplência e extravio, bem como acidentes com danos de monta, de tal forma que inviabilizem a recuperação econômica das características originais do CONTAINER estão definidas abaixo:				
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead style="color: blue;">
						<tr>
							<th>QTDE</th>
							<th>CONTAINER NÚMERO</th>
							<th>MODELO</th>
							<th>VALOR POR UNIDADE</th>
							<th>VALOR TOTAL</th>
						</tr>
					</thead>
					<?php if($linha['lo_quantidadeOne'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeOne'] ?></td>
							<td><?php echo $linha['lo_idOne'] ?></td>
							<td><?php echo $linha['lo_tipoOne'] ?></td>
							<td>R$<?php echo $linha['lo_valorOne'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTOne'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTwo'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTwo'] ?></td>
							<td><?php echo $linha['lo_idTwo'] ?></td>
							<td><?php echo $linha['lo_tipoTwo'] ?></td>
							<td>R$<?php echo $linha['lo_valorTwo'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTwo'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeThree'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeThree'] ?></td>
							<td><?php echo $linha['lo_idThree'] ?></td>
							<td><?php echo $linha['lo_tipoThree'] ?></td>
							<td>R$<?php echo $linha['lo_valorThree'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTThree'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeFour'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeFour'] ?></td>
							<td><?php echo $linha['lo_idFour'] ?></td>
							<td><?php echo $linha['lo_tipoFour'] ?></td>
							<td>R$<?php echo $linha['lo_valorFour'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTFour'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeFive'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeFive'] ?></td>
							<td><?php echo $linha['lo_idFive'] ?></td>
							<td><?php echo $linha['lo_tipoFive'] ?></td>
							<td>R$<?php echo $linha['lo_valorFive'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTFive'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeSix'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeSix'] ?></td>
							<td><?php echo $linha['lo_idSix'] ?></td>
							<td><?php echo $linha['lo_tipoSix'] ?></td>
							<td>R$<?php echo $linha['lo_valorSix'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTSix'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeSev'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeSev'] ?></td>
							<td><?php echo $linha['lo_idSev'] ?></td>
							<td><?php echo $linha['lo_tipoSev'] ?></td>
							<td>R$<?php echo $linha['lo_valorSev'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTSev'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeEig'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeEig'] ?></td>
							<td><?php echo $linha['lo_idEig'] ?></td>
							<td><?php echo $linha['lo_tipoEig'] ?></td>
							<td>R$<?php echo $linha['lo_valorEig'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTEig'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeNine'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeNine'] ?></td>
							<td><?php echo $linha['lo_idNine'] ?></td>
							<td><?php echo $linha['lo_tipoNine'] ?></td>
							<td>R$<?php echo $linha['lo_valorNine'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTNine'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTen'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTen'] ?></td>
							<td><?php echo $linha['lo_idTen'] ?></td>
							<td><?php echo $linha['lo_tipoTen'] ?></td>
							<td>R$<?php echo $linha['lo_valorTen'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTen'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTenO'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTenO'] ?></td>
							<td><?php echo $linha['lo_idTenO'] ?></td>
							<td><?php echo $linha['lo_tipoTenO'] ?></td>
							<td>R$<?php echo $linha['lo_valorTenO'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTenO'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTenTw'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTenTw'] ?></td>
							<td><?php echo $linha['lo_idTenTw'] ?></td>
							<td><?php echo $linha['lo_tipoTenTw'] ?></td>
							<td>R$<?php echo $linha['lo_valorTenTw'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTenTw'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTenTr'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTenTr'] ?></td>
							<td><?php echo $linha['lo_idTenTr'] ?></td>
							<td><?php echo $linha['lo_tipoTenTr'] ?></td>
							<td>R$<?php echo $linha['lo_valorTenTr'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTenTr'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTenFour'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTenFour'] ?></td>
							<td><?php echo $linha['lo_idTenFour'] ?></td>
							<td><?php echo $linha['lo_tipoTenFour'] ?></td>
							<td>R$<?php echo $linha['lo_valorTenFour'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTenFour'] ?></td>
						</tr>
					</tbody>
					<?php }?>
					<?php if($linha['lo_quantidadeTenFive'] == ''){
   							}else{?>
					<tbody>
						<tr>
							<td><?php echo $linha['lo_quantidadeTenFive'] ?></td>
							<td><?php echo $linha['lo_idTenFive'] ?></td>
							<td><?php echo $linha['lo_tipoTenFive'] ?></td>
							<td>R$<?php echo $linha['lo_valorTenFive'] ?>,00</td>
							<td>R$<?php echo $linha['lo_valTTenFive'] ?></td>
						</tr>
					</tbody>
					<?php }?>
				</table>				
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead style="color: blue;">
						<tr>
							<th style="color: crimson;">DESMOBILIZAÇÃO/MOBILIZAÇÃO</th>
							<th style="color: crimson;">VALOR DE REPOSIÇÃO</th>
							<th>VALOR DO ALUGUEL</th>							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>R$<input type="text" id="desmobi" placeholder="Sem valor - Altere aqui" style="border: 0px transparent;"></td>
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
										   $('#desmobi').bind('keypress',mask.money)
										});
									</script>
							<td>R$<input type="text" id="reposi" value="<?php echo $linha['lo_valReposicao'] ?>" style="border: 0px transparent;" placeholder="Sem Valor - Altere aqui"></td>
							<script>
							$(function(){
								$('#reposi').bind('keypress',mask.money)
							});
							</script>
							<td>R$<?php echo $linha['lo_total'] ?></td>
						</tr>
					</tbody>
				</table>				
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>3. 2 - </b> As despesas decorrentes com o transporte de saída, bem como de devolução do CONTAINER, são únicas e exclusivas do locatário.    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-decoration-line: underline">4. REAJUSTE:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>4. 1 - </b> Os valores tratados no item 3 serão reajustados, com periodicidade de 12 (doze) meses a contar da data da assinatura do presente contrato, com base na variação do IGP-M (divulgado pela FUNDAÇÃO Getúlio Vargas), calculado pró rata dies, ficando desde já convencionado entre as partes a redução automática e vigência automática de periodicidade menor, caso a legislação aplicável assim o permita, até a mínima mensal.    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">5. LOCAL PARA RETIRADA E REENTREGA:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>5. 1 - </b> O CONTAINER deverá ser retirado e devolvido de segunda à sexta-feira das 8:00 as 11:00 e das 13:00 as 17:00, no seguinte endereço:     
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11">
				<b style="color: crimson;">RD SC 416 – KM 23, Sai Mirim na cidade de Itapoá, no estado de Santa Catarina  </b>
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">6. LOCAL DE UTILIZAÇÃO:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>6. 1 - </b> O locatário compromete-se a manter o locador informado sobre eventuais mudanças de local de utilização do CONTAINER, a partir, do local definido abaixo como sendo definitivo:  
				<?php echo $linha['lo_elogradouro'] ?><?php echo $linha['lo_rlogradouro'] ?>, <?php echo $linha['lo_enumero'] ?><?php echo $linha['lo_rnumero'] ?>, Bairro: <?php echo $linha['lo_ebairro'] ?><?php echo $linha['lo_rbairro'] ?>, cidade: <?php echo $linha['lo_ecidade'] ?><?php echo $linha['lo_rcidade'] ?> - CEP:<?php echo $linha['lo_ecep'] ?><?php echo $linha['lo_rcep'] ?>
     
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>6. 2 - </b>O locatário se responsabiliza em atender todas as exigências legais quanto aos documentos necessários para a colocação do CONTAINER no local de utilização, sejam autoridades municipais, estaduais ou federais, isentando o locador de eventuais multas, infrações ou taxas que possam vir a ser aplicada quanto à utilização do CONTAINER.      
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">7. INSPEÇÃO DE ENTREGA E REENTREGA:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>7. 1 - </b>O CONTAINER deverá ser inspecionado pelo LOCATÁRIO (TERMO E DECLARAÇÃO DE RECEBIMENTO DO CONTAINER, na data da entrega, uma vez que o mesmo encontra-se em perfeitas condições de uso, sem avarias ou peças falantes, neste ato assim aceito pelo locatário).      
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>7. 2 - </b>Quaisquer divergências concernentes às condições do CONTAINER deverão ser obrigatoriamente, por escrito, no TERMO DE RECEBIMENTO, no campo: OBSERVAÇÕES.       
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>7. 3 - </b>Quando da devolução do CONTAINER ao término de período de aluguel, o mesmo será inspecionado pelo LOCADOR, sendo que avarias, partes falantes, partes substituídas sem autorização do LOCADOR, utilização de materiais não conformes com projeto de construção inicial.       
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>7. 4 - </b>Na data da entrega do CONTAINER, caso haja discrepâncias descritas no item anterior, ou outras que depreciem o CONTAINER, constarão, por escrito será emitido o TERMO E DECLARAÇÃO DE ENTREGA DO CONTAINER, tendo o LOCATÁRIO um prazo de 01 (um) dia para a aprovação da estimativa de reparos. Período após o qual será emitida fatura de serviços, com cobrança através de boleto bancário, sendo o seu pagamento de total responsabilidade do LOCATÁRIO.      
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">8. MANUTENÇÃO:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>8. 1 - </b>Caso seja necessário qualquer serviço de manutenção durante o período de locação, desde que decorrentes de errônea utilização pelo LOCATÁRIO, serão de responsabilidade deste, bem como os gastos com o transporte, alojamento, refeições, locomoção, pernoite, viagens, combustível, hora técnica, e demais gastos, sempre que requisitados ao LOCADOR.   
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>8. 2 - </b>Em casos de avarias, roubos, quebras, danos à pintura (pichação, chapisco de cimento, fogo) ou defeitos apresentados durante este período, e outros que não causado por desgaste natural, estes deverão ser reparados pelo LOCATÁRIO, com a utilização de mão de obra de firmas experientes, bem como materiais e peças apropriadas e de qualidade similar aos utilizados no CONTAINER original.  
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">9. RESPONSABILIDADE POR UTILIZAÇÃO DO CONTAINER</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>9. 1 - </b>É expressamente vedada à utilização do CONTAINER para outra finalidade que não a concebida originalmente, ou seja, almoxarifado, oficina, escritório, refeitório, banheiro, depósito,  vestiário etc.   
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>9. 2 - </b>O LOCATÁRIO concorda em não utilizar o CONTAINER em atividades ilícitas, coibidas pela lei, na armazenagem de produtos perigosos, inflamáveis ou radioativos, de mercadorias de origem duvidosa, bem como aceita, implícita e explicitamente, em ser ele o único responsável legal sobre o CONTAINER conteúdos. Métodos apropriados de armazenagem, manuseio e transporte, isentando o locador de todos e quaisquer riscos e ônus causados a mercadorias, materiais, propriedades ou pessoas durante a vigência do presente contrato e até efetiva devolução do CONTAINER ao locador. O LOCÁTARIO deverá fazer as ligações com profissionais habilitados (eletricista e encanador) de entrada de energia no quadro elétrico e aterramento do mesmo, bem como proceder às ligações de água e esgoto sempre na rede pública, sendo o responsável pelo destino final dos resíduos do CONTAINER que possuam banheiros.   
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">10. RESCISÃO:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>10. 1 - </b>O presente contrato será considerado como rescindido, através da manifestação de qualquer das partes, com notificação, somente, por escrito, com antecedência de 30 (trinta) dias, sem prejuízo do pagamento dos alugueis, e demais encargos até a data da efetiva devolução sem prejuízo do conteúdo das demais cláusulas, ou ainda, nas seguintes hipóteses:   
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>• </b>Inadimplência por período superior a 30 (trinta) dias, 					
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>• </b>Em caso de falência ou recuperação judicial da locatária ou locador, 
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>• </b>Constatação do uso indevido do CONTAINER ou em contrariedade com a legislação em vigor,   
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>• </b>Título protestado ou devolução de cheque sem fundo.    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">13. DOCUMENTOS:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>13. 1 - </b>Fazem parte integrante do presente contrato, como se neste estivessem transcritos, os seguintes documentos, cujo teor das partes declara ter pleno conhecimento: 
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>a) Anexo I - </b>Termo e Declaração de Entrega do CONTAINER;     
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>b) Anexo II - </b>Termo e Declaração de Devolução do CONTAINER;    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>13. 2 - </b>Em caso de divergência entre os documentos integrantes e este contrato, prevalecerá este último.  
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>13. 3 - </b>Os documentos referidos na presente Cláusula são considerados suficientes para, em complemento a este contrato, definir a sua extensão e intenção, e, desta forma, reger a execução adequada do objeto contratado, dentro dos mais altos padrões da técnica atual.  
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>13. 3 - </b>A partir da assinatura deste instrumento contratual, todos os termos de aditamento que vierem a ser celebrados passam a serem aplicáveis, bem como os que importem alteração de qualquer condição contratual, observados os limites e as formalidades legais. 
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">14. SOBERANIA:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				O locatário reconhece e aceita que o locador é proprietário e /ou detentor dos direitos de uso do CONTAINER ou equipamentos em questão, não podendo o mesmo ser oferecido pelo locatário como garantia de suas dívidas ou à penhora, bem como não poderá permitir quaisquer ônus sobre o CONTAINER sob pena de responder judicialmente por todas as despesas incorridas pelo locatário, decorrentes de tais situações.    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">15. SUCESSORES:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				Em caso de morte do representante do locatário, em caso de venda parcial ou total da parte societária, ou ainda, em caso de fusão do locatário com outras empresas, seus sucessores obriga-se a cumprir o presente contrato em sua totalidade.   
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">16. DA DENUNCIAÇÃO DA LIDE, NOMEAÇÃO À AUTORIA </h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				Sempre que demandada judicialmente por questões relacionadas à locação objeto deste contrato, a LOCADORA estará autorizada e legitimada a chamar a LOCATARIA ao processo judicial, via <b><u>Denunciação de Lide (Artigo 70, II, CPC) ou Nomeação a Autoria (art. 62, CPC),</u></b> para que esta assuma diretamente suas responsabilidades indenizatórias, ou para que a LOCADORA possa exercer direitos regressivos, diante de eventual condenação solidária e pagamento que vier a fazer por conta da LOCATARIA, quando cabível.   
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">17. DA NOVAÇÃO </h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				A eventual tolerância da LOCADORA para com a LOCATARIA, em relação às obrigações assumidas por esta última no presente contrato significarão mera liberalidade, não importando, em nenhuma hipótese, novação ou alteração das cláusulas e condições estipuladas.    
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">18. FORO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				Fica eleito o foro a cidade de Itapoá, estado do Santa Catarina, para dirimir quaisquer questões de ordem legal. E por estarem de comum acordo, assinam o presente contrato em 2 (duas) vias de igual teor, para seus devidos efeitos jurídicos e regulamentares, na presença de testemunhas, declarando o signatário representante do locatário, estar investido em poderes para assinatura do contrato, ficando nesta data constituído no cargo de FIEL DEPOSITÁRIO do CONTAINER, <b><?php echo $linha['lo_nome']?></b>.     
			</div>
		</div>
		<div class="row"><br /></div>
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
				<b><?php echo $linha['lo_nome'] ?> - CNPJ: <?php echo $linha['lo_cpf'] ?> </b>
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
	<script type="text/javascript">
		function calcular() {
			var valor = document.getElementById("val").value;
		}
	</script>
<br /><br />
<a href="../alterar/" class="btn btn-danger" id="noprint">Voltar</a>
<br />
<br />
</div>
<!-- Bootstrap Core JavaScript -->
<script src="../../../js/bootstrap.js"> </script>
</body>
</html>
