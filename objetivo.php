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
<body id="page2">
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
						<li id="menu_active"><a href="objetivo.php">Objetivos</a></li>
						<li><a href="depoimentos.php">depoimentos</a></li>
						<li><a href="como-ajudar.php">Como Ajudar</a></li>
						<li><a href="eventos.php">Eventos</a></li>
   						<li><a href="fotos.php">Fotos</a></li><!--<li><a href="sobre.php">Sobre</a></li>-->
					</ul>
				</nav>
			</div>
			</header>
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrapper">
				<div class="box1">
					<div class="line1 wrapper">
						<section class="col1">
							<h2><strong>E</strong>ndere&ccedil;o</h2>
							<strong class="address">
								Pa&iacute;s:<br>
								Cidade:<br>
								Cep:<br>
								Telefone:<br>
								
								E-mail:
							</strong>
							BRASIL<br>
							Rio de Janeiro<br>
							21550-130<br>
							+55(21) 3372-1706<br>
							
							<a href="mailto:">contato@inacre.org.br</a>
						</section>
						<section class="col2 pad_left1">
							<h2 class="color2"><strong>S</strong>obre N&oacute;s</h2>
							<p class="pad_bot1">
								A INACRE é uma Instituição sem fins lucrativos é mantida integralmente através de doações de pessoas físicas e jurídicas que se sensibilizam com as crianças especiais e não recebemos nenhuma ajuda governamental.
							</p>
							
						</section>
					</div>
				</div>	
			</div>
				<div class="wrapper">
					<div class="wrapper">
						<h3>Nosso Objetivo</h3>
					</div>
                    <div class="wrapper">
					<ul class="box" style="margin-left:35px;margin-right:10px">
						
						<br>Todas as crianças são muito especiais, mas algumas precisam de um apoio, de um olhar, de uma atenção especial, de um acompanhamento e acima de tudo muito carinho.<br><br>

É por isso que a INACRE existe, para apoiar, ajudar e abraçar a causa das crianças especiais.
<br><br>
					</ul>
				</div>
					<?php /*?><?php
			include "../administracao/config_db.php";
              
              		$busca = "SELECT * FROM $tb6";
              		$total_reg = "1"; // n&uacute;mero de registros por p&aacute;gina
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
              		$tp = $tr / $total_reg; // verifica o n&uacute;mero total de p&aacute;gina
					
					while ($dados = mysql_fetch_array($limite)) {
	                $id = $dados['id'];
	                $texto = $dados['texto'];
	                $texto = nl2br(stripslashes($texto));
					
					}
					echo "$texto";
              		?><?php */?>
				</div><br />
				
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
<script type="text/javascript">Cufon.now();</script>
</body>
</html>