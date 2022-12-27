<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<title>Instituição de Apoio a Criança Especial</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/myriad-pro.cufonfonts.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/backgroundPosition.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
</head>
<body id="page3">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
			<div class="wrapper">
				<h6><a href="index.php" id="logo"></a></h6>
				<nav>
					<ul id="top_nav">
						<li><a href="index.php"><img src="images/top_icon1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
						<li class="end"><a href="contato.php"><img src="images/top_icon3.gif" alt=""></a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
						<li><a href="noticias.php">Not&iacute;cias</a></li>
						<li><a href="objetivo.php">Objetivos</a></li>
						<li><a href="depoimentos.php">depoimentos</a></li>
						<li><a href="como-ajudar.php">Como Ajudar</a></li>
						<li><a href="eventos.php">Eventos</a></li>
   						<li id="menu_active"><a href="fotos.php">Fotos</a></li><!--<li><a href="sobre.php">Sobre</a></li>-->
					</ul>
				</nav>
			</div>
			
		</header>
<!-- / header -->
<!-- content -->
			<article id="content" class="tabs">
				<div class="wrapper">
					<div class="box1">
						<div class="wrapper">
							<section class="col1">
								<h2><strong>F</strong>otos<span></span></h2>
							</section>
						</div>
					</div>	
				</div>
				<div class="wrapper">
					
						
						<? 
include "../administracao/config_db.php";
$busca = "SELECT * FROM $tb2 ORDER BY id DESC";
$total_reg = "9"; // n&uacute;mero de registros por p&aacute;gina
$pagina = $_GET['pagina'];
if (!$pagina) {
    $pc = "1";
} else {
    $pc = $pagina;
}
$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos); // verifica o n&uacute;mero total de registros
$tp = ceil($tr / $total_reg); // verifica o n&uacute;mero total de p&aacute;ginas

// Agora vamos montar o código. Pegue o valor total de resultados: 
$total = mysql_num_rows($limite); 
?><?
if($total){
echo "<br><center class=titulos>Total de <font color=\"#CC0000\">$total</font> galerias disponíveis no momento...</center><br>";

?><?
		// Defina o número de colunas que você deseja exibir: 
$colunas = "3"; 
// Agora vamos ao "truque": 
if ($total>0) { 
for ($i = 0; $i < $total; $i++) { 
if (($i%$colunas)==0) { 
?>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%" height="98">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr> 

<? }?>
<?
$dados= mysql_fetch_array($limite) ;
?>
<td width="33%" height="93" align="center" valign="top">
<? if($dados[foto01] != ""){?><? }?>

<?
$dir="../images/galeria/$dados[pasta]";
$handle = opendir($dir);
$ext = "jpg";
$indice = 0;
$dir1=opendir($dir);
$cont=0;

?>
<table width="100%" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <td  align="center"><a href="abrefotos.php?id=<? echo $dados['id']; ?>"><img src="<? echo $dir?>/<? echo $dados['foto01']?>" width=180 height =120 border="0" class="borda_fotos" style="margin-top: 20px"></a></font></td>
  </tr>
  
  <tr>
    <td align="center" class="txt_tahoma_black" style="font-size:12px"><? echo $dados['nome']?></td>
  </tr>
  
  <tr>
    <td align="center" class="txt_tahoma_black">clicks: <? echo $dados['clicks'] ?></td>
  </tr>
  
</table>

</td>
<? }}?>
</TR>
</table>
</td>
  </tr>
</table>
<? 
echo "<br><center>";
$intervalo = 15; 
$anterior = $pc -1; 
$proximo = $pc +1; 
$flag1 = floor($pc/$intervalo); 
$pi = ($flag1 * $intervalo ); 
$pf = $pi + $intervalo; 
if ($pc > 1) { 
echo "<a href='?pagina=$anterior' class=paginacao>&laquo; Anterior</a> &nbsp;&nbsp;"; 
}
for ($pi; $pi < $pf; $pi++) { 
// Se número da página for menor que total de páginas 
if ($pi <= $tp) { 
if ($pc == $pi) { 
// se página atual for igual a página selecionada 
if ($pi > "0") { 
echo "<span class=aviso><b>" . $pi . "</b></span>&nbsp;"; 
} 
} else { 
// se for diferente, aparece o link para a página 
if ($pi > "0") { 
echo "&nbsp;<a href='?pagina=" . $pi . "' class=paginacao>" . $pi . "</a>&nbsp;"; 
} 

} 
} 
} 
if ($pc < $tp) { 
echo "&nbsp;&nbsp;<a href='?pagina=$proximo' class=paginacao>Próxima &raquo;</a>"; 
}
}else{
echo "<center class=\"titulos\">Nenhuma galeria de fotos disponível no momento...</center>";
}

echo "</center><br>";
?>      

					
				</div>
               </div>
             
				
			</article>
            
<!-- / content -->
<!-- footer -->
		<footer>
			
			<div class="wrapper">
				<ul id="icons">
					<li><a href="https://www.facebook.com/acaosocialedmundoeolga" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
					<!--<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>-->
					
				</ul>
                <nav>
						<ul id="footer_menu">
							<li><a href="noticias.php">Notícias</a></li>
							<li><a href="objetivo.php">Objetivos</a></li>
							<li><a href="depoimentos.php">Depoimentos</a></li>
							<li><a href="como-ajudar.php">Como Ajudar</a></li>
                            <li><a href="eventos.php">Eventos</a></li>
                            <li><a href="fotos.php">Fotos</a></li>
							<li class="end"><a href="contato.php">Contato</a></li>
						</ul>
					</nav>
				<!--<div class="tel"><span>21 </span>3372-1706</div>-->
			</div>
			<div id="footer_text">
				<a>2013 © Inacre / Instituição de Apoio a Criança Especial</a><br>Todos os Direitos Reservados. Rua Duarte de Azevedo, 66, Madureira - RJ - CEP. 21550-130 - Tel. (021) 3372-1706<br>www.inacre.org.br<br>
				
			</div>
		</footer>
<!-- / footer -->
		</div>
	</div>
<script type="text/javascript">    Cufon.now(); tabs.init();</script>
</body>
</html>