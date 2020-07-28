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

@ $id = $_POST['ve_id'];

$query = "SELECT DISTINCT * FROM contrato_vendas WHERE ve_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {
	?>
			<?php
				$ano = date ("Y");
			?>
			<div align="center" class="col-md-12">
				<h5><b>Contrato de Vendas de Containers e Serviços -  REPARSUL SOLUÇÕES EM CONTAINERS Nº. <?php echo $linha['ve_id']?>/<?php echo " $ano" ?></b></h5>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>Vendedor:</th>
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
								<th>Comprador:</th>
								<td><b><?php echo $linha['ve_nome']?>,</b> com endereço: <?php echo $linha['ve_rua']?>, N°: <?php echo $linha['ve_numero']?> , Bairro: <?php echo $linha['ve_bairro']?> , Cidade: <?php echo $linha['ve_cidade']?> , CEP: <?php echo $linha['ve_cep']?>, inscrita no CPF/CNPJ: <?php echo $linha['ve_cpf']?></td>
								<td class="thumbnail col-xs-2"><img src="../../../images/galeria/<?php echo $linha['ve_anexar']?>" class="img-responsive img-thumbnail"  onerror="this.style.display='none'"></td>
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
require_once("../../../classes/extenso.php");
@ $id = $_POST['ve_id'];

$query = "SELECT DISTINCT * FROM contrato_vendas WHERE ve_id = '$id'";
$query = mysql_query($query);


while ($linha = mysql_fetch_array($query)) {

   $var = $linha['ve_dtvenda'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
	
   $zarE = $linha['ve_dtentrega'];
   $zarE = explode(" ",$zarE);
   $diaE = $zarE[0];
   $diaE = explode("-",$diaE);
   $dataE = "$diaE[2]/$diaE[1]/$diaE[0]";
		
   ?>
	
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div class="col-md-8 col-xs-8">
				Pelo presente instrumento particular de promessa de venda e compra de unidades (containers) de um lado <b><?php echo $linha['ve_nome']?>,</b> inscrito no CPF/CNPJ <b><?php echo $linha['ve_cpf']?>,</b> com endereço na <b><?php echo $linha['ve_rua']?></b>, bairro <b><?php echo $linha['ve_bairro']?></b>, na cidade de <b><?php echo $linha['ve_cidade']?></b> - <b><?php echo $linha['ve_uf']?></b>, de ora em diante chamado simplesmente de <b>Comprador</b> e de outro Reparsul Reparo e Manutenção de Containers LTDA-ME, inscrita no CNPJ 20.160.079/0001-25, endereço Rod. SC 416 km 23, Sai Mirim, Itapoá – SC, CEP: 89.249-000, de ora em diante chamada simplesmente vendedor.
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div class="col-md-8 col-xs-8">
				<br />
				Considerando o interesse do comprador em adquirir os containers a seguir discriminado que, por já estar em uso, foi classificado como sendo não adequado para operação de transporte, e em especial para operação de transporte marítimo.
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div class="col-md-8 col-xs-8">
				<br />
				Considerando que o comprador expressamente, neste ato, reconhece as condições em que o container se encontram e que minuciosamente já os averiguou, sendo assegurado pelo vendedor que o container não apresenta infiltrações ou quaisquer outras avarias que o tornem inapto para a utilização.				
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div class="col-md-8 col-xs-8">
				<br />
				Resolvem de comum acordo firmar o presente instrumento consoante as cláusulas e condições pactuadas no anexo ao final deste contrato
			</div>
		<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row"><hr></div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600;">1. OBJETO:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12"><b>1.1 </b> - 
				O objeto do presente contrato é a compra e venda das unidades discriminada, informada na tabela abaixo:
			</div>
		</div>
			<br />
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-10 col-xs-10">
				<table class="table table-bordered">
					<thead>
						<tr style="color: blue;">
							<th>CONTAINER N°</th>
							<th>TAMANHO</th>
							<th>MODELO</th>
							<th>QUANTIDADE</th>
							<th>VALOR UNITÁRIO</th>
							<th>VALOR TOTAL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idOne']?></td>
							<td><?php echo $linha['ve_comprimentoOne']?> X <?php echo $linha['ve_larguraOne']?> X <?php echo $linha['ve_alturaOne']?></td>
							<td><?php echo $linha['ve_tipoOne']?></td>
							<td><?php echo $linha['ve_quantOne']?></td>
							<td>R$<?php echo $linha['ve_valorOne']?></td>
							<td>R$<?php echo $linha['ve_valorTOne']?></td>
						</tr>
					</tbody>
					<?php if($linha['ve_idTwo']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTwo']?></td>
							<td><?php echo $linha['ve_comprimentoTwo']?> X <?php echo $linha['ve_larguraTwo']?> X <?php echo $linha['ve_alturaTwo']?></td>
							<td><?php echo $linha['ve_tipoTwo']?></td>
							<td><?php echo $linha['ve_quantTwo']?></td>
							<td>R$<?php echo $linha['ve_valorTwo']?></td>
							<td>R$<?php echo $linha['ve_valorTTwo']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idThree']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idThree']?></td>
							<td><?php echo $linha['ve_comprimentoTwo']?> X <?php echo $linha['ve_larguraThree']?> X <?php echo $linha['ve_alturaThree']?></td>
							<td><?php echo $linha['ve_tipoThree']?></td>
							<td><?php echo $linha['ve_quantThree']?></td>
							<td>R$<?php echo $linha['ve_valorThree']?></td>
							<td>R$<?php echo $linha['ve_valorTThree']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idFour']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idFour']?></td>
							<td><?php echo $linha['ve_comprimentoFour']?> X <?php echo $linha['ve_larguraFour']?> X <?php echo $linha['ve_alturaFour']?></td>
							<td><?php echo $linha['ve_tipoFour']?></td>
							<td><?php echo $linha['ve_quantFour']?></td>
							<td>R$<?php echo $linha['ve_valorFour']?></td>
							<td>R$<?php echo $linha['ve_valorTFour']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idFive']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idFive']?></td>
							<td><?php echo $linha['ve_comprimentoFive']?> X <?php echo $linha['ve_larguraFive']?> X <?php echo $linha['ve_alturaFive']?></td>
							<td><?php echo $linha['ve_tipoFive']?></td>
							<td><?php echo $linha['ve_quantFive']?></td>
							<td>R$<?php echo $linha['ve_valorFive']?></td>
							<td>R$<?php echo $linha['ve_valorTFive']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idSix']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idSix']?></td>
							<td><?php echo $linha['ve_comprimentoSix']?> X <?php echo $linha['ve_larguraSix']?> X <?php echo $linha['ve_alturaSix']?></td>
							<td><?php echo $linha['ve_tipoSix']?></td>
							<td><?php echo $linha['ve_quantSix']?></td>
							<td>R$<?php echo $linha['ve_valorSix']?></td>
							<td>R$<?php echo $linha['ve_valorTSix']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idSev']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idSev']?></td>
							<td><?php echo $linha['ve_comprimentoSev']?> X <?php echo $linha['ve_larguraSev']?> X <?php echo $linha['ve_alturaSev']?></td>
							<td><?php echo $linha['ve_tipoSev']?></td>
							<td><?php echo $linha['ve_quantSev']?></td>
							<td>R$<?php echo $linha['ve_valorSev']?></td>
							<td>R$<?php echo $linha['ve_valorTSev']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idEig']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idEig']?></td>
							<td><?php echo $linha['ve_comprimentoEig']?> X <?php echo $linha['ve_larguraEig']?> X <?php echo $linha['ve_alturaEig']?></td>
							<td><?php echo $linha['ve_tipoEig']?></td>
							<td><?php echo $linha['ve_quantEig']?></td>
							<td>R$<?php echo $linha['ve_valorEig']?></td>
							<td>R$<?php echo $linha['ve_valorTEig']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idNine']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idNine']?></td>
							<td><?php echo $linha['ve_comprimentoNine']?> X <?php echo $linha['ve_larguraNine']?> X <?php echo $linha['ve_alturaNine']?></td>
							<td><?php echo $linha['ve_tipoNine']?></td>
							<td><?php echo $linha['ve_quantNine']?></td>
							<td>R$<?php echo $linha['ve_valorNine']?></td>
							<td>R$<?php echo $linha['ve_valorTNine']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idTen']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTen']?></td>
							<td><?php echo $linha['ve_comprimentoTen']?> X <?php echo $linha['ve_larguraTen']?> X <?php echo $linha['ve_alturaTen']?></td>
							<td><?php echo $linha['ve_tipoTen']?></td>
							<td><?php echo $linha['ve_quantTen']?></td>
							<td>R$<?php echo $linha['ve_valorTen']?></td>
							<td>R$<?php echo $linha['ve_valorTTen']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idTenO']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTenO']?></td>
							<td><?php echo $linha['ve_comprimentoTenO']?> X <?php echo $linha['ve_larguraTenO']?> X <?php echo $linha['ve_alturaTenO']?></td>
							<td><?php echo $linha['ve_tipoTenO']?></td>
							<td><?php echo $linha['ve_quantTenO']?></td>
							<td>R$<?php echo $linha['ve_valorTenO']?></td>
							<td>R$<?php echo $linha['ve_valorTTenO']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idTenTwo']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTenTwo']?></td>
							<td><?php echo $linha['ve_comprimentoTenTwo']?> X <?php echo $linha['ve_larguraTenTwo']?> X <?php echo $linha['ve_alturaTenTwo']?></td>
							<td><?php echo $linha['ve_tipoTenTwo']?></td>
							<td><?php echo $linha['ve_quantTenTwo']?></td>
							<td>R$<?php echo $linha['ve_valorTenTwo']?></td>
							<td>R$<?php echo $linha['ve_valorTTenTwo']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idTenThree']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTenThree']?></td>
							<td><?php echo $linha['ve_comprimentoTenThree']?> X <?php echo $linha['ve_larguraTenThree']?> X <?php echo $linha['ve_alturaTenThree']?></td>
							<td><?php echo $linha['ve_tipoTenThree']?></td>
							<td><?php echo $linha['ve_quantTenThree']?></td>
							<td>R$<?php echo $linha['ve_valorTenThree']?></td>
							<td>R$<?php echo $linha['ve_valorTTenThree']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idTenFour']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTenFour']?></td>
							<td><?php echo $linha['ve_comprimentoTenFour']?> X <?php echo $linha['ve_larguraTenFour']?> X <?php echo $linha['ve_alturaTenFour']?></td>
							<td><?php echo $linha['ve_tipoTenFour']?></td>
							<td><?php echo $linha['ve_quantTenFour']?></td>
							<td>R$<?php echo $linha['ve_valorTenFour']?></td>
							<td>R$<?php echo $linha['ve_valorTTenFour']?></td>
						</tr>
					</tbody>
					<?php } ?>
					<?php if($linha['ve_idTenFive']==''){
   							}else{
	   				?>
					<tbody>
						<tr>
							<td><?php echo $linha['ve_idTenFive']?></td>
							<td><?php echo $linha['ve_comprimentoTenFive']?> X <?php echo $linha['ve_larguraTenFive']?> X <?php echo $linha['ve_alturaTenFive']?></td>
							<td><?php echo $linha['ve_tipoTenFive']?></td>
							<td><?php echo $linha['ve_quantTenFive']?></td>
							<td>R$<?php echo $linha['ve_valorTenFive']?></td>
							<td>R$<?php echo $linha['ve_valorTTenFive']?></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>				
			</div>
			<div class="col-md-1 col-xs-1"></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
				<div class="col-md-8 col-xs-8">
				<table class="table table-bordered">
					<thead>
						<tr style="color: red; font-weight: 600;">
							<td>VALOR PRODUTOS</td>
							<td>VALOR FRETE</td>
							<td>DESCONTO</td>
							<td>VALOR TOTAL</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>R$<?php echo $linha['ve_valPt']?></td>
							<td>R$<?php echo $linha['ve_transVt']?></td>
							<td>R$<?php echo $linha['ve_desVt']?></td>
							<td>R$<?php echo $linha['ve_total']?></td>
						</tr>
					</tbody>
				</table>
				</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12"><b>1.2 </b> - 
				Ambos sem maquinário;
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12"><b>1.3 </b> - 
				Ambos sem piso canaletado;
			</div>
		</div>
			<br />
		<div class="row">
			<hr>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-transform: uppercase;">2. Valor e forma de pagamento:</h4></div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>2. 1 - </b> Com base nas condições estipuladas neste contrato, neste ato, o comprador compra e a vendedor vende,__________unidades, pelo valor total de R$<b><?php echo $linha['ve_total']?>(<?php echo Monetary::numberToExt($linha['ve_total']); ?>)</b>, sendo pago ____________________________________________________________________________________________ _____________________________________________________________________________________________________________
			</div>
		</div>
		<div class="row">
			<br />
			<hr>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-transform: uppercase;">3. Entrega e prazo de entrega:</h4></div>
		</div>
		<div class="row">
			<br />
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>3. 1 - </b> Container estará liberado para carregamento dia <b><?php echo $dataE ?></b>. Frete por conta do comprador.
			</div>
		</div>
		<div class="row">
			<br />
			<hr>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-transform: uppercase;">4. Reivindicações com Garantia, responsabilidade da vendedora:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>4. 1 - </b> O container é vendido conforme vistoriado.  
			</div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>4. 2 - </b> A compradora responsabiliza-se, única e exclusivamente, diante da inexistência de qualquer vínculo empregatício entre os propostos e profissionais da compradora e a vendedora, eximindo a vendedora de quaisquer ônus e / ou responsabilidade penal/civil trabalhista ou previdenciária, bem como pela indenização respectiva.   
			</div>
		</div>
		<div class="row">
			<hr>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-transform: uppercase;">5. Confidencialidade:</h4></div>
		</div>
		<div class="row"><br/></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>5. 1 - </b> As partes se comprometem a manter sigilo em relação ao conteúdo do presente contrato, bom como em relação a quaisquer dados, informações ou documentos.    
			</div>
		</div>
		<div class="row">
			<hr>
		</div>
		<div class="row">
			<div class="col-md-1 col-xs-1"></div>
			<div class="col-md-11 col-xs-11"><h4 style="font-weight: 600; text-transform: uppercase;">6. Foro:</h4></div>
		</div>

		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>6. 1 - </b> As partes elegem o foro de Itapoá, SC, para todas as disputas que se apresentem entre vendedor e comprador decorrentes do presente instrumento, renunciando a qualquer outro por mais privilegiado que seja.
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<b>   </b> E assim, por estarem justas e contratadas, compradora e vendedora assinam o presente contrato, em duas vias de igual teor e forma, juntamente com testemunha.
			</div>
		</div>
	
		<div class="row"><br/></div>


		<div class="row"><br /></div>
		<div class="row"><br /></div>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-2 col-xs-2"></div>
			<div align="center" class="col-md-8 col-xs-8">
				<hr style="border-color: black;margin-bottom: 0;">
				<b>Reparsul Reparo e Manutenção de Conteiner LTDA - ME - CNPJ: 20.160.079/0001-25 </b>
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row"><br /></div>
		<div class="row"><br /></div>
		<div class="row">
			<div class="col-md-2 col-xs-2"></div>
			<div align="center" class="col-md-8 col-xs-8">
				<hr style="border-color: black;margin-bottom: 0;">
				<b><?php echo $linha['ve_nome'] ?> - CNPJ/CPF: <?php echo $linha['ve_cpf'] ?> </b>
			</div>
			<div class="col-md-2 col-xs-2"></div>
		</div>
		<div class="row"><br /></div>
		<div class="row"><br /><hr></div>
		
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
