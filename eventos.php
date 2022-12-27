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
						<li><a href="noticias.php">Notícias</a></li>
						<li><a href="objetivo.php">Objetivos</a></li>
						<li><a href="depoimentos.php">depoimentos</a></li>
						<li><a href="como-ajudar.php">Como Ajudar</a></li>
						<li id="menu_active"><a href="eventos.php">Eventos</a></li>
   						<li><a href="fotos.php">Fotos</a></li><!--<li><a href="sobre.php">Sobre</a></li>-->
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
								<h2><strong>E</strong>ventos<span></span></h2>
							</section>
						</div>
					</div>	
				</div>
				<div class="wrapper">
					
						
						<?php
	include "../administracao/config_db.php";

	$busca = "SELECT * FROM $tb8 ORDER BY id DESC";
	$total_reg = "10"; // n&uacute;mero de registros por p&aacute;gina
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

	if($todos){
	
	echo "<br><center class=\"txt_tahoma_black12b\">Total de <font color=\"#CC0000\">$tr</font> eventos cadastrados até o momento...</center><br><br>";

		while ($dados = mysql_fetch_array($limite)){
			$id = $dados['id'];
			$titulo = $dados['titulo'];
			$texto = $dados['texto'];
			$imagem = $dados['imagem'];
            $extencao = $dados['extencao'];
			$data_evento = $dados['data_evento'];
			$texto =nl2br($texto);
			//$texto = str_replace("\n","",$texto);
/*$res=getimagesize("../fotos_coluna_social/$imagem");
      if ($res[1]>160){
      $height=160;
      $width=($res[0]*$height)/$res[1];
      }  else {
      $height=$res[1];
      $width=$res[0];
      }
      $width=ceil($width);
      $height=ceil($height);*/
			
if($imagem){ 
$mostra_foto = "<img src=\"thumbnail.php?imagem=../fotos_eventos/$imagem\" align=\"right\" class=\"borda_admin\">";
 } else { 
 $mostra_foto = "<img src=\"../imgs/img_semfoto.jpg\" align=\"right\">";
 } 
?>
                      <table width="100%" border="0" cellspacing="1" cellpadding="1">
                        <tr>
                          <td width="10" height="25" style="padding-left:40px"><img src="images/icone_lista_eventos.gif" width="10" height="10" style="padding-top:6px;padding-right:10px"><a href="abre_evento.php?id=<? echo $id; ?>" class="linkred"><? echo "$titulo"; ?></a></td>
                        </tr>
                      </table>
                      
                    <?	

		}




		echo "<br><center>";
		$intervalo = 10;
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
						echo "<span class=aviso><u>" . $pi . "</u></span>&nbsp;";
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
		echo "<span class=\"aviso\">Nenhum evento disponível no momento...</span>";
	}

?>
<br><br>
					
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
<script type="text/javascript">Cufon.now(); tabs.init();</script>
</body>
</html>