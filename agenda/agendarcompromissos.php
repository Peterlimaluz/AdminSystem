<html>
<head>
<title>Agendar Compromisso</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="template.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	font-family: Tahoma;
	font-size: 11px;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
		scrollbar-face-color: #cccccc;
	scrollbar-shadow-color: #cccccc;
	scrollbar-highlight-color: #cccccc;
	scrollbar-3dlight-color: #eeeeee;
	scrollbar-darkshadow-color: #666666;
	scrollbar-track-color: #eeeeee;
	scrollbar-arrow-color: #555555;
	background: #444444;
	background-color: #FFFFFF;

}
.categoria {
	font-family: Tahoma;
	font-size: 11px;
	font-weight: bold;
}
-->
</style>
<SCRIPT LANGUAGE="JavaScript">
function setDataHoje() {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1;
	var yyyy = today.getFullYear();
	if(dd<10) { dd='0'+dd } 
	if(mm<10) {	mm='0'+mm } 
	today = dd+'/'+mm+'/'+yyyy;	
	var arr = today.split("/");
	document.getElementById("dia").selectedIndex = arr[0];	
	document.getElementById("mes").selectedIndex = arr[1];
	document.getElementById("ano").value = arr[2];	
}

function valida_data() {
	var Form;
    Form = document.cadastro;
    var lDay = parseInt(Form.dia.value), 
		lMon = parseInt(Form.mes.value), 
		lYear = parseInt(Form.ano.value),
        BiY = (lYear % 4 == 0 && lYear % 100 != 0) || lYear % 400 == 0,
        MT = [1, BiY ? -1 : -2, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1];
    return lMon <= 12 && lMon > 0 && lDay <= MT[lMon - 1] + 30 && lDay > 0;
}


function valida_form() {
    var Form;
    Form = document.cadastro;
    if (Form.dia.value.length == 0) {
        alert("Selecione o Dia!");
        Form.dia.focus();
        return false;
    }
    if (Form.mes.value.length == 0) {
        alert("Selecione o Mês!");
        Form.mes.focus();
        return false;
    }
    if (Form.ano.value.length == 0) {
        alert("Selecione o Ano!");
        Form.ano.focus();
        return false;
    }
	if (valida_data() == false) {
		alert("Data inválida!");
        Form.dia.focus();
        return false;
	}	
    if (Form.assunto.value.length == 0) {
        alert("Campo Assunto não pode ser vazio!");
        Form.assunto.focus();
        return false;
    }
    if (Form.categoria.value.length == 0) {
        alert("Selecione uma Categoria!");
        Form.categoria.focus();
        return false;
    }
    if (Form.local.value.length == 0) {
        alert("Campo Local não pode ser vazio!");
        Form.local.focus();
        return false;
    }
    if (Form.descricao.value.length == 0) {
        alert("Campo Descrição não pode ser vazio!");
        Form.descricao.focus();
        return false;
    }

    return true;
}
</script>
</head>

<body>
<table style="width: 90%; height: 100%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF" class="texto">
  
  <tr>
    <td class="text" valign="top">
<br>
<table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="text">
	<fieldset><legend>CADASTRO DE COMPROMISSOS</legend>

<?php
include "config.php";

if (isset($_POST['Submit'])) {
	if($_POST['Submit']){
	
	$codusuario = 1; // criar rotina para pegar o usuario correto
	
	$dia = $_POST["dia"];
	$mes = $_POST["mes"];
	$ano = $_POST["ano"];
	$assunto = $_POST["assunto"];
	$categoria = $_POST["categoria"];
	$local = $_POST["local"];
	$descricao = $_POST["descricao"];

		$sql = mysql_query("insert into calendario 
								(dia, mes, ano, assunto, categoria, local, descricao, dh_inclusao, codusuario) 
		                    values 
								('$dia','$mes','$ano','$assunto','$categoria','$local','$descricao', now(), $codusuario);");
		
		echo "<br>";
		echo "<center><strong>Compromisso publicado com sucesso.</strong><br><br></center><meta http-equiv='refresh' content='2;URL=agendarcompromissos.php'>"; 
		echo "<script language='javascript'>parent.frames[1].location.reload()</script>";
		echo "<br><br>";
	} 
}
?>				
	
	
	<form name="cadastro" method="post" onSubmit="return valida_form()">
      <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="text">
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td width="92"><div align="right"><strong>Data:</strong></div></td>
          <td>
            <select name="dia" class="menu_inferior" id="dia">
              <option></option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>&nbsp;&nbsp;
            <select name="mes" class="menu_inferior" id="mes">
              <option></option>
              <option value="01">Janeiro</option>
              <option value="02">Fevereiro</option>
              <option value="03">Março</option>
              <option value="04">Abril</option>
              <option value="05">Maio</option>
              <option value="06">Junho</option>
              <option value="07">Julho</option>
              <option value="08">Agosto</option>
              <option value="09">Setembro</option>
              <option value="10">Outubro</option>
              <option value="11">Novembro</option>
              <option value="12">Dezembro</option>
            </select>&nbsp;&nbsp;
            <select name="ano" class="menu_inferior" id="ano">
              <option></option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select> &nbsp         <input name="hoje" type="button" class="menu_inferior" id="hoje" value="Hoje" onclick="setDataHoje()"></td> 
          </tr>
        <tr>
          <td><div align="right"><strong>Compromisso:</strong></div></td>
          <td><input name="assunto" type="text" class="menu_inferior" id="assunto" style="width: 50%"></td>
          </tr>
        <tr>
          <td><div align="right"><strong>Entidade:</strong></div></td>
          <td><select name="categoria" class="categoria" id="categoria">
		  <option></option>
		  <option value="1" style="font-weight: bold; color:#666666">Nenhuma</option>
		  <option value="2" style="font-weight: bold; color:#CC3300">Cliente</option>
		  <option value="3" style="font-weight: bold; color:#6666CC">Fornecedor</option>
		  <option value="4" style="font-weight: bold; color:#669900">Transportadora</option>
		  <option value="5" style="font-weight: bold; color:#999900">Funcionario</option>
		  <option value="6" style="font-weight: bold; color:#FF9900">Outros</option>
          </select>          </td>
          </tr>
        <tr>
          <td valign="top"><div align="right"><strong>Descri&ccedil;&atilde;o:</strong></div></td>
          <td><textarea name="descricao" wrap="virtual" class="menu_inferior" id="descricao" style="width: 50%; height: 130px"></textarea></td>
          </tr>
        
        <tr>
          <td colspan="2" height="10"></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="Submit" type="submit" class="menu_inferior" value="Gravar">
            <input name="Reset" type="reset" class="menu_inferior" id="Reset" value="Limpar"></td>
          </tr>
      </table>
        </form></fieldset>		</td>
  </tr>
</table>    </td>
  </tr>
</table>
<script language='javascript'>setDataHoje()</script>
</body>
</html>
