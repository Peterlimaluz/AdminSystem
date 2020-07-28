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
    <th>Tipo</th>
    <th>CPF Cliente</th>
    <th>Nome Cliente</th>
    <th>Data Gerado</th>
    <th>Manutenção / Serviços</th>
    <th>Transportadora</th>
    <th>Observações</th>
    <th>Valor do Frete</th>
    <th>Total</th>
    </tr>";

    //mandamos nossa query para nosso método dentro de conexao dando um return $stmt->fetchAll(PDO::FETCH_ASSOC);
   	$cpf = $_POST['cpf'];
	$query = "SELECT DISTINCT * FROM orcamento WHERE orca_cpf LIKE '%$cpf%' ORDER BY orca_id ASC";
	$query = mysql_query($query);

	while ($linha = mysql_fetch_array($query)) {

	  $var = $linha['orca_dtgerado'];
	   $var = explode(" ",$var);
	   $dia = $var[0];
	   $dia = explode("-",$dia);
	   $data = "$dia[2]/$dia[1]/$dia[0]";

    echo"
        <tr>
        <td>".$linha['orca_id']."</td>
        <td>".$linha['orca_tipo']."</td>
        <td>".$linha['orca_cpf']."</td>
        <td>".$linha['orca_nome']."</td>
        <td>".$data."</td>
        <td>".$linha['orca_maNmOne']."  ".$linha['orca_maNmTwo']."  ".$linha['orca_maNmThree']." 	".$linha['orca_maNmFour']." ".$linha['orca_maNmFive']." ".$linha['orca_maNmSix']." ".$linha['orca_maNmSev']." ".$linha['orca_maNmEig']." ".$linha['orca_maNmNine']." ".$linha['orca_maNmTen']." ".$linha['orca_maNmTenO']." ".$linha['orca_maNmTenTwo']." ".$linha['orca_maNmTenThree']." ".$linha['orca_maNmTenFour']." 	".$linha['orca_maNmTenFive']."</td>
		<td>".$linha['orca_transNome']."</td>
		<td>".$linha['orca_obs']."</td>
		<td>".$linha['orca_transV']."</td>
		<td>".$linha['orca_valTotal']."</td>
        </tr>";
    }
		echo"
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			<td>Dados Utilizados para Gerar o Relatório:</td>	
			<td>CPF/CNPJ:(<b>$cpf</b>)</td>	
			</tr>	
			<tr>	
			</tr>	
			<tr>	
			<td><b style='font-size: 24px;'>Valor Total</b></td>";

		$cpf = $_POST['cpf'];
		$query = mysql_query("SELECT SUM(REPLACE(orca_valTotal,'.','')) as soma FROM orcamento WHERE orca_cpf LIKE '%$cpf%' ORDER BY orca_id ASC");

		$cont = mysql_fetch_array($query);

		$total = $cont["soma"];

		echo"
		<td><b style='font-size: 24px;'>Valor Total</b></td>
		<td><b style='font-size: 24px;'>".$total." ,00<b></td>
		</tr>
    </table>
	";
 
    // Envia o conteúdo do arquivo  
    echo "</body></html>"; 
?>