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
						<li id="menu_active"><a href="noticias.php">Notícias</a></li>
						<li><a href="objetivo.php">Objetivos</a></li>
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
							<h2><strong>E</strong>ndereço</h2>
							<strong class="address">
								País:<br>
								Cidade:<br>
								Cep:<br>
								Telefone:<br>
								
								E-mail:
							</strong>
							BRASIL<br>
							Rio de Janeiro<br>
							21550-130<br>
							+55(21) 3372-1706<br>
							
							<a href="contato.php">contato@inacre.org.br</a>
						</section>
						<section class="col2 pad_left1">
							<h2 class="color2"><strong>S</strong>obre Nós</h2>
							<p class="pad_bot1">
								conteúdo do gerenciador administrativo
							</p>
							
						</section>
					</div>
				</div>	
			</div>
				
                <?php
	include "../administracao/config_db.php";

$id = addslashes($_GET["id"]);
	if(!$id){
		echo "<script>alert(\"Ação inválida!!!\")</script>
			<meta http-equiv='refresh' content='0;URL=noticias.php'>";
	}else{
	
	$busca = "SELECT * FROM $tb4 WHERE id=$id";
	
	$todos = mysql_query("$busca");

	$tr = mysql_num_rows($todos);
	
	if($tr == 0){
			echo "<script>alert(\"Ação inválida!!!\")</script>
			<meta http-equiv='refresh' content='0;URL=colunasocial.php'>";
		
		}else{
	
			while ($dados = mysql_fetch_array($todos)){
			$id = $dados['id'];
			$titulo = $dados['titulo'];
			$texto = $dados['texto'];
			$imagem = $dados['imagem'];
            $extencao = $dados['extencao'];
			$data = $dados['data'];
			$texto =nl2br($texto);
			
			
if($imagem){ 
$mostra_foto = "<a href=\"../fotos_noticias/$imagem\" rel=\"lytebox[vacation]\" title=\"$titulo\"><img src=\"thumbnail_noticia.php?imagem=../fotos_noticias/$imagem\" align=\"center\" border=0 class=\"borda_fotos\"></a>";
 } else { 
 $mostra_foto = "";
 } 
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col" align="left" width="50%" style="padding-top: 40px;padding-left:35px;font-weight:100"><b>Data do evento:</b> <? echo "$data"; ?><br><b>Título:</b> <? echo "$titulo"; ?><br><br><? echo "$texto"; ?></th>
    <th scope="col" width="50%" align="center" style="padding-top: 40px;vertical-align:middle;padding-left:45px;"><? echo "$mostra_foto"; ?></th>
  </tr>
</table>


			<br>
			<br>
			<center><a href="noticias.php" >[+] notícias</a></center>
			<br>
			<?	

		}
	}
	}

?> 
             <!--p class="pad_left2"><br />include das notícias</p>
  				<p class="pad_left2"><br /></p>
                <p class="pad_left2"><br /></p-->	
                    
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
<script type="text/javascript">Cufon.now();</script>
</body>
</html>