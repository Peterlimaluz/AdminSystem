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
    <table border='1' >
		<tr>
    	<th>Registro</th>
    	<th>CPF Cliente</th>
    	<th>Cep</th>
    	<th>Cidade</th>
    	<th>Bairro</th>
    	<th>Logradouro</th>
    	<th>Número</th>
    	<th>UF</th>
    	<th>Cliente</th>
    	<th>Data Gerado</th>
    	<th>Quantidade</th>
    	<th>Forma de Pag.</th>
    	<th>Manutenção / Serviços</th>
    	<th>Cep</th>
    	<th>Complemento</th>
    	<th>Bairro</th>
    	<th>Cidade</th>
    	<th>Logradouro</th>
    	<th>Número</th>
    	<th>UF</th>
    	<th>SOMA</th>
    	<th>Acréscimo</th>
    	<th>Desconto</th>
    	<th>Total</th>
    	<th>Pagamento</th>
    	<th>Data do Serviço</th>
    	<th>Observações</th>
    </tr>";

    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
   $query = 'SELECT DISTINCT * FROM manutencao ORDER BY `ma_id` ASC';
   $query = mysql_query($query);

    //varremos o array com o foreach para pegar os dados
    while ($linha = mysql_fetch_array($query)) {

   $var = $linha['ma_dtgerado'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
 

   echo"
   <tr>
   <td>".$linha['ma_id']."</td>
   	<td>".$linha['ma_cpf']."</td>
    <td>".$linha['ma_cep']."</td>
    <td>".$linha['ma_cidade']."</td>
    	<td>".$linha['ma_bairro']."</td>
    	<td>".$linha['ma_rua']."</td>
    	<td>".$linha['ma_numero']."</td>
    	<td>".$linha['ma_uf']."</td>
    	<td>".$linha['ma_nome']."</td>
    	<td>".$data."</td>
    	<td>".$linha['ma_quantidade']."</td>
    	<td>".$linha['ma_forma']."</td>
    	<td>".$linha['ma_mrOne']."  ".$linha['ma_mrTwo']."  ".$linha['ma_mrThree']." 												".$linha['ma_mrFour']." ".$linha['ma_mrFive']." ".$linha['ma_mrSix']." ".$linha['ma_mrSev']." 							  ".$linha['ma_mrEig']." ".$linha['ma_mrNine']." ".$linha['ma_mrTen']." 												".$linha['ma_mrTenOne']." ".$linha['ma_mrTenTwo']." ".$linha['ma_mrTenThree']." 										".$linha['ma_mrTenFour']." 	".$linha['ma_mrTenFive']."</td>
		<td>".$linha['ma_ecep']."</td>
		<td>".$linha['ma_ecomplemento']."</td>
		<td>".$linha['ma_ebairro']."</td>
		<td>".$linha['ma_ecidade']."</td>
		<td>".$linha['ma_erua']."</td>
		<td>".$linha['ma_enumero']."</td>
		<td>".$linha['ma_euf']."</td>
		<td>".$linha['ma_vSoma']."</td>
		<td>".$linha['ma_vAcrescimo']."</td>
		<td>".$linha['ma_vDesconto']."</td>
		<td>".$linha['ma_vTotal']."</td>
		<td>".$linha['ma_pag']."</td>
		<td>".$linha['ma_dtserv']."</td>
		<td>".$linha['ma_obs']."</td>
    </tr>";
    }
	echo"
	<tr>
	</tr>
	<tr>
	</tr>";

		$query = mysql_query("SELECT SUM(REPLACE(ma_vTotal,'.','')) as soma FROM manutenção");

		$cont = mysql_fetch_array($query);

		$total = $cont["soma"];

		$query2 = mysql_query("SELECT SUM(REPLACE(ma_vDesconto,'.','')) as desconto FROM manutenção");
		$cont2 = mysql_fetch_array($query2);
		$descont = $cont2["desconto"];

		$query3 = mysql_query("SELECT SUM(REPLACE(ma_vAcrescimo,'.','')) as acrescimo FROM manutenção");
		$cont3 = mysql_fetch_array($query3);
		$acrescim = $cont2["acrescimo"];

		echo"
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