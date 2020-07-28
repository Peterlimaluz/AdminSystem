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

echo"
    <table border='1' >
	<tr>
    <th>Registro</th>
    <th>CPF Cliente</th>
    <th>Cep</th>
    <th>Cidade</th>
    <th>Bairro</th>
    <th>Rua</th>
    <th>Número</th>
    <th>UF</th>
    <th>Cliente</th>
    <th>Data da Venda</th>
    <th>Data de entrega</th>
    <th>Canal</th>
    <th>Situação</th>
    <th>Data de Vencimento</th>
    <th>Parcelas</th>
    <th>Forma de Pag.</th>
    <th>Códigos dos Produtos</th>
    <th>Valor de Frete</th>
    <th>Nome Transportadora</th>
    <th>Cep</th>
    <th>Cidade</th>
    <th>Bairro</th>
    <th>Rua</th>
    <th>Número</th>
    <th>UF</th>
    <th>Valor Transporte</th>
    <th>Desconto</th>
    <th>Total</th>
    <th>Pagamento</th>
    <th>Item Anexado</th>
    <th>Observações</th>
    </tr>";

    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
	$canal = $_POST['canal'];
$query = "SELECT DISTINCT * FROM contrato_vendas WHERE ve_canal LIKE '%$canal%'";
$query = mysql_query($query);

    //varremos o array com o foreach para pegar os dados
    while ($linha = mysql_fetch_array($query)) {

   $var = $linha['ve_dtvenda'];
   $var = explode(" ",$var);
   $dia = $var[0];
   $dia = explode("-",$dia);
   $data = "$dia[2]/$dia[1]/$dia[0]";
		
   $twodt = $linha['ve_dtentrega'];
   $twodt = explode(" ",$twodt);
   $day = $twodt[0];
   $day = explode("-",$day);
   $dataTwo = "$day[2]/$day[1]/$day[0]";
 

        echo"
        <tr>
        <td>".$linha['cove_id']."</td>
        <td>".$linha['cove_cpf']."</td>
        <td>".$linha['cove_cep']."</td>
        <td>".$linha['cove_cidade']."</td>
        <td>".$linha['cove_bairro']."</td>
        <td>".$linha['cove_rua']."</td>
        <td>".$linha['cove_numero']."</td>
        <td>".$linha['cove_uf']."</td>
        <td>".$linha['cove_nome']."</td>
        <td>".$data."</td>
        <td>".$dataTwo."</td>
        <td>".$linha['cove_canal']."</td>
        <td>".$linha['cove_situacao']."</td>
        <td>".$linha['cove_vencimento']."</td>
        <td>".$linha['cove_faqua']."</td>
        <td>".$linha['cove_forma']."</td>
        <td>".$linha['cove_idOne']."  ".$linha['cove_idTwo']."  ".$linha['cove_idThree']." 												".$linha['cove_idFour']." ".$linha['cove_idFive']." ".$linha['cove_idSix']." ".$linha['cove_idSev']." 							  ".$linha['cove_idEig']." ".$linha['cove_idNine']." ".$linha['cove_idTen']." ".$linha['cove_idTenO']." 							   ".$linha['cove_idTenTwo']." ".$linha['cove_idTenThree']." ".$linha['cove_idTenFour']." 											".$linha['cove_idTenFive']."</td>
		<td>".$linha['cove_frete']."</td>
		<td>".$linha['cove_transportadora']."</td>
		<td>".$linha['cove_ecep']."</td>
		<td>".$linha['cove_ecidade']."</td>
		<td>".$linha['cove_ebairro']."</td>
		<td>".$linha['cove_erua']."</td>
		<td>".$linha['cove_enumero']."</td>
		<td>".$linha['cove_euf']."</td>
		<td>".$linha['cove_transVt']."</td>
		<td>".$linha['cove_desVt']."</td>
		<td>".$linha['cove_total']."</td>
		<td>".$linha['cove_pag']."</td>
		<td>".$linha['cove_anexar']."</td>
		<td>".$linha['cove_obs']."</td>
        </tr>";
    }
		echo"
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		<td>Dados Utilizados para Gerar o Relatório:</td>
		<td>Tipo de Canal:(<b>$canal</b>)</td>
		</tr>
		<tr>
		</tr>
		<tr>
		<td><b style='font-size: 24px;'>Valor Total</b></td>";

		$canal = $_POST['canal'];
		$query = mysql_query("SELECT SUM(REPLACE(ve_total,'.','')) as soma FROM contrato_vendas WHERE ve_canal LIKE '%$canal%'");

		$cont = mysql_fetch_array($query);

		$total = $cont["soma"];

		$query2 = mysql_query("SELECT SUM(REPLACE(cove_desVt,'.','')) as desconto FROM contrato_vendas WHERE ve_canal LIKE '%$canal%'");
		$cont2 = mysql_fetch_array($query2);
		$descont = $cont2["desconto"];

		

		echo"
		<td><b style='font-size: 24px;'>Valor Total</b></td>
		<td><b style='font-size: 24px;'>".$total." ,00<b></td>
		<td><b style='font-size: 24px;'>Total Desconto</b></td>
		<td><b style='font-size: 24px;'>".$descont." ,00<b></td>
		</tr>
    </table>
	";
 
    // Envia o conteúdo do arquivo  
    echo "</body></html>"; 
?>