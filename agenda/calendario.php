<link href="estilo.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<?php
include "config.php";

if (isset($_GET["month"])) {
	$month = $_GET["month"];
}

if (isset($_GET["year"])) {
	$year = $_GET["year"];
}

if (isset($show_month)) {
	if ($show_month==">") {
		if($month==12) {
			$month=1;
			$year++;
		} 
		else {
			$month++;
		}
	}
	if ($show_month=="<") {
		if($month==1) {
			$month=12;
			$year--;
		} 
		else {
			$month--;
		}
	}
}
if (isset($day)) {
	if ($day<="9"&ereg("(^[1-9]{1})",$day)) {
		$day="0".$day;
	}
}
if (isset($month)) {
	if ($month<="9"&ereg("(^[1-9]{1})",$month)) {
		$month="0".$month;
	}
}
if (!isset($year)) {
	$year=date("Y",time());
}
if (!isset($month)) {
	$month=date("m",time());
}
if (!isset($day)) {
	$day=date("d",time());
}
//echo "dia =$day / mes = $month / ano = $year";
$SQL="select * from calendario where mes = $month and ano = $year"; 
$result = mysql_db_query($DB,$SQL,$link);
$linha=mysql_num_rows($result);
  
$thisday="$year-$month-$day";
$day_name=array("Seg","Ter","Qua","Qui","Sex","Sáb"	,"<font color=\"#FF0000\">Dom</font>");

$month_abbr=array("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

$y=date("Y");
   switch ($month) {
    case 1:  $month_name = "Janeiro";	break;
    case 2:  $month_name = "Fevereiro";	break;
    case 3:  $month_name = "Março";	break;
    case 4:  $month_name = "Abril";	break;
    case 5:  $month_name = "Maio";	break;
    case 6:  $month_name = "Junho";	break;
    case 7:  $month_name = "Julho";	break;
    case 8:  $month_name = "Agosto";	break;
    case 9:  $month_name = "Setembro";	break;
    case 10: $month_name = "Outubro";	break;
    case 11: $month_name = "Novembro";	break;
    case 12: $month_name = "Dezembro";	break;
   }
?>
<?php
$next = mktime(0,0,0,$month + 1,1,$year); 
$nextano = date("Y",$next); 
$nextmes = date("m",$next); 

$prev = mktime(0,0,0,$month - 1,1,$year); 
$prevano = date("Y",$prev); 
$prevmes = date("m",$prev); 

$d = mktime(0,0,0,$month,1,$year); 
$diaSem = date('w',$d); 
?> 

<table class="table table-bordered" width="400" border="0" align="center" cellpadding="1" cellspacing="1"> 
<tr> 
     <td width="70" ><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><a href="?month=<?php echo $prevmes; ?>&year=<?php echo $prevano; ?>"><i class="fa fa-arrow-circle-left nav_icon"></i></a></font></div></td> 
   <td colspan="5"><div align="center"><font size="4" face="Verdana" color=blue><b><?php echo "$month_name $year"; ?></b></font></div></td> 
    <td width="70"><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><a href="?month=<?php echo $nextmes; ?>&year=<?php echo $nextano; ?>"><i class="fa fa-arrow-circle-right nav_icon"></i></a></font></div></td> 

 <tr  align="center">
  <?php
  for ($i=0;$i<7;$i++) { ?>
  <td width="70" align="center" bgcolor=#C0C0C0><b><?php echo "$day_name[$i]"; ?></td>
  <?php } ?>
 </tr>
 <tr  align="center">
               <?php
  if (date("w",mktime(0,0,0,$month,1,$year))==0) {
    $start=7;
  } else {
    $start=date ("w",mktime(0,0,0,$month,1,$year));
    }
  for($a=($start-2);$a>=0;$a--)
     {
      $d=date("t",mktime(0,0,0,$month,0,$year))-$a;
  ?>

  <td bgcolor="#EEEEEE" align="center"><?=$d?></td>
              <?php }
  for($d=1;$d<=date("t",mktime(0,0,0,($month+1),0,$year));$d++)
        {
		global $linha;
	 if($month==date("m") && $year==date("Y") && $d==date("d")) {
      $bg="bgcolor=\"#EE9090\"";
	$links="<a>";
	$alinks="</a>";
		$st="";
	$sb="";

	} else {
      $bg="bgcolor=\"#CDCDCD\"";
  	$links="<a>";
	$alinks="</a>";
		$st="";
	$sb="";

	  }
	for ($i=0;$i<$linha;$i++){
	global $month,$year,$d;
	$id_sql=mysql_result($result,$i,'id');
	$dia_sql=mysql_result($result,$i,'dia');
	$mes_sql=mysql_result($result,$i,'mes');
	$ano_sql=mysql_result($result,$i,'ano');
	$id = ltrim(rtrim($id_sql));
	$ano = ltrim(rtrim($ano_sql));
	$mes = ltrim(rtrim($mes_sql));
	$dia = ltrim(rtrim($dia_sql));
	if($d==$dia&$year==$ano&$month==$mes) {
	$bg="bgcolor=\"orange\"";
	$links="<a title=\"Ver Compromisso\" href=\"vercompromissos.php?dia=$dia&mes=$mes&ano=$ano\" target=\"agenda\">";
	$alinks="</a>";
	$st="<strong>";
	$sb="</strong>";
	  } }
  ?>
  <td <?php echo $bg; ?>><?php echo $links; ?>
<?php echo $st; ?>
<?php echo $d;?>
<?php echo $sb; ?>
<?php echo $alinks; ?></td>
              <?php
  if(date("w",mktime(0,0,0,$month,$d,$year))==0&date("t",mktime(0,0,0,($month+1),0,$year))>$d)
  {
  ?>
 </tr>
 <tr align="center">
              <?php   }}
  $da=$d+1;
  if(date("w",mktime(0,0,0,$month+1,1,$year))<>1)
         {
          $d=1;
          while(date("w",mktime(0,0,0,($month+1),$d,$year))<>1)
                  {
  ?>
  <td bgcolor="#EEEEEE" align="center"><?=$d?></td>
  <?php
            $d++;
                  }
        }
  ?>
</tr>
</table>

<table width="394" align="center" border="0" cellspacing="1" cellpadding="1">

<tr align="center"><td>
  Os dias em <font color="orange"><b><i class="fa fa-calendar nav_icon"></i></b></font> são dias de Compromissos!</td></tr>
	<tr><td><br>
</td></tr>
<tr align="center"><td>
  <a class="btn btn-info" href="agendarcompromissos.php" target="agenda">Agendar Compromissos</a></td></tr>
</table>