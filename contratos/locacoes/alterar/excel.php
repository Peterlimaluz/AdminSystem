<?php 
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="sample.xls"');
echo "
    <html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">
    <html>
        <head><meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\" /></head>
        <body>";
//incluimos nossa conexão
    require_once "../../../sql/conectar.php";
	require_once "../../../sql/valida_session.php";	

    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);   
		
    echo "
    <table border='1'>
	<tr>
    <th rowspan=\"0\" nowrap=\"nowrap\">Registro</th>
    <th>CPF Cliente</th>
    <th>Cep</th>
    <th>Cidade</th>
    <th>Bairro</th>
    <th>Logradouro</th>
    <th>Número</th>
    <th>UF</th>
    <th>Cliente</th>
    <th>Tipo de Contrato</th>
    <th>Data Gerado</th>
    <th>Situação</th>
    <th>Dia de Faturamento</th>
    <th>Parcelas</th>
    <th>Forma de Pag.</th>
    <th>Códigos dos Produtos</th>
    <th>Data de ENTREGA/RETIRADA</th>
    <th>Cep ENTREGA/RETIRADA</th>
    <th>Complemento ENTREGA/RETIRADA</th>
    <th>Bairro ENTREGA/RETIRADA</th>
    <th>Cidade ENTREGA/RETIRADA</th>
    <th>Logradouro ENTREGA/RETIRADA</th>
    <th>Número ENTREGA/RETIRADA</th>
    <th>UF ENTREGA/RETIRADA</th>
    <th>Acréscimo</th>
    <th>Desconto</th>
    <th>Total</th>
    <th>Valor da Reposição</th>
    </tr>";

	 //varremos o array com o foreach para pegar os dados
   $query = 'SELECT DISTINCT * FROM contrato_locacao ORDER BY `lo_id` ASC';
   $query = mysql_query($query);
   while ($linha = mysql_fetch_array($query)) {

   $var = $linha['lo_dtabertura'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
	echo "
	<tr>
    <td>".$linha['lo_id']."</td>
    <td>".$linha['lo_cpf']."</td>
	<td>".$linha['lo_cep']."</td>
    <td>".$linha['lo_cidade']."</td>
    <td>".$linha['lo_bairro']."</td>
    <td>".$linha['lo_logradouro']."</td>
    <td>".$linha['lo_numero']."</td>
    <td>".$linha['lo_ac']."</td>
    <td>".$linha['lo_nome']."</td>
    <td>".$linha['lo_tipo']."</td>
    <td>".$data."</td>
    <td>".$linha['lo_situacao']."</td>
    <td>".$linha['lo_fadia']."</td>
    <td>".$linha['lo_faquantidade']."</td>
    <td>".$linha['lo_faforma']."</td>
    <td>".$linha['lo_idOne']."  ".$linha['lo_idTwo']."  ".$linha['lo_idThree']." 												".$linha['lo_idFour']." ".$linha['lo_idFive']." ".$linha['lo_idSix']." ".$linha['lo_idSev']." 							  ".$linha['lo_idEig']." ".$linha['lo_idNine']." ".$linha['lo_idTen']." ".$linha['lo_idTen']." 							   ".$linha['lo_idTenTw']." ".$linha['lo_idTenTr']." ".$linha['lo_idTenFour']."											".$linha['lo_idTenFive']."</td>
	<td>".$linha['lo_edhentrega']." ".$linha['lo_rdentrega']."</td>
	<td>".$linha['lo_ecep']." ".$linha['lo_rcep']."</td>
	<td>".$linha['lo_ecomplemento']." ".$linha['lo_rcomplemento']."</td>
	<td>".$linha['lo_ebairro']." ".$linha['lo_rbairro']."</td>
	<td>".$linha['lo_ecidade']." ".$linha['lo_rcidade']."</td>
	<td>".$linha['lo_elogradouro']." ".$linha['lo_rlogradouro']."</td>
	<td>".$linha['lo_enumero']." ".$linha['lo_rnumero']."</td>
	<td>".$linha['lo_euf']." ".$linha['lo_ruf']."</td>
	<td>".$linha['lo_acrescimo']."</td>
	<td>".$linha['lo_desconto']."</td>
	<td>".$linha['lo_total']."</td>
	<td>".$linha['lo_valReposicao']."</td>
    </tr>";
	}

	$query = mysql_query("SELECT SUM(REPLACE(lo_total,'.','')) as soma FROM contrato_locacao");
		$cont = mysql_fetch_array($query);
		$total = $cont["soma"];

		$query2 = mysql_query("SELECT SUM(REPLACE(lo_desconto,'.','')) as desconto FROM contrato_locacao");
		$cont2 = mysql_fetch_array($query2);
		$descont = $cont2["desconto"];

		$query3 = mysql_query("SELECT SUM(REPLACE(lo_acrescimo,'.','')) as acrescimo FROM contrato_locacao");
		$cont3 = mysql_fetch_array($query3);
		$acrescim = $cont2["acrescimo"];
	echo "
	<tr>
	</tr>
	<tr>
	</tr>
	<tr>
	<td><b style='font-size: 24px;'>Valor Total</b></td>
	<td><b style='font-size: 24px;'>".$total." ,00<b></td>
	
	<td><b style='font-size: 24px;'>Total Desconto</b></td>
	<td><b style='font-size: 24px;'>".$descont." ,00<b></td>
		
	<td><b style='font-size: 24px;'>Total Acréscimo</b></td>
	<td><b style='font-size: 24px;'>".$acrescim." ,00<b></td>
		
	</tr>
    </table>
	";
 
    // Envia o conteúdo do arquivo  
    echo "</body></html>";  
?>