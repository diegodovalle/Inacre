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
						<li><a href="eventos.php">Eventos</a></li>
   						<li id="menu_active"><a href="fotos.php">Fotos</a></li><li><a href="sobre.php">Sobre</a></li>
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
                <? include("..\administracao/config_db.php");

$id = $_REQUEST["id"];


$sql = @mysql_query("SELECT * FROM $tb2 WHERE id = '$id'");
$dados = @mysql_fetch_array($sql);
$id = $dados['id'];
$nome = $dados['nome'];
$dia = $dados['dia'];
$mes = $dados['mes'];
$ano = $dados['ano'];
$local = $dados['local'];
$pasta = $dados["pasta"];
$foto01 = $dados["foto01"];
$clicks = $dados["clicks"];
$credito = $dados["credito"];

if($id){


$clicks = $clicks + 1; // Fim deste modo para vcs entenderem
$sql = @mysql_query("UPDATE fotos_galeria SET clicks = '$clicks' WHERE id = '$id'");

?>		
<br>		
<table width="100%" border="0" cellspacing="2" cellpadding="3">
                  <tr>
                    <td width="470" class="txt_preto10"><span class="data"><b>Data:</b></span> <span class="data"><? echo "$dia/$mes/$ano"; ?></span></td>
              </tr>
                  <tr>
                    <td class="txt_tahoma_black"><b>Evento:</b> <? echo "$nome"; ?></td>
              </tr>
              <tr>
                    <td class="txt_tahoma_black"><span class="txt_branco"><b>Local:</b></span> <? echo "$local"; ?></td>
              </tr>
              <tr>
                    <td class="txt_tahoma_black">&nbsp</td>
              </tr>
              
                  <tr>
                    <td valign="top" class="txt_tahoma_black">
  <?
$pg = $_GET['pg'];
if (strstr($pg,".")== TRUE){
$pg=ceil($pg);
$pg=$pg-1;
}
if (!$pg==0)
{
$cont=$pg * 10;
} else {
$cont=0;
}
?>
  <?
$dir = "../images/galeria/$pasta/";
$handle = opendir($dir);
$ext = "jpg";
$indice = 0;
$ipp = 26;

while (false !== ($file = readdir($handle)))
{
   $pathdata = pathinfo($file);
   if (!is_dir($file) && ($pathdata["extension"] == strtolower($ext)) || ($pathdata["extension"] == strtoupper($ext)))
   {
      @sort($imagens);
       $imagens[$indice] = $file;
       $indice++;
   }
}

$pagina = 1;
if ($_GET['pg'])
   $pagina = $_GET['pg'];

$paginas = ceil(count($imagens) / $ipp);
$inicio = $pg * $ipp;
$thumb="thumb.php?imagem=";
$var1 = "&id=$id";

for ($i=$inicio; $i<($inicio+$ipp); $i++)
if($imagens[$i] != ""){ ?>
                      <? $cont=$cont+1; ?>
                      
                      <a href="<? echo "$dir$imagens[$i]";?>" rel="lytebox[vacation]" title="<? echo "$nome || Local das fotos: $local"; ?>">
                        <img src="<? echo "$thumb$dir$imagens[$i]"; ?>" border="0" class="borda_fotos" width="68" height="68"></a><? }?><br><br>
                      <? 
	   $total = ceil(count($imagens));
	   if($total){
	   ?>
                      <center><span class="txt_branco">total de 
                        <font color=\"#CC0000\"><? 
	   echo $total; ?></font>
                        fotos. </span></center><br>
                      <?
	   }else{
	   echo "<span class=txt_branco10>em breve você terá acesso as fotos deste evento...</span>";
	   }
	   ?>
                      <center><?
	 
for($i=0; $i<$paginas; $i++){
$url = "?pg=$i&id=$id";
  if ($i==$pg) {
  echo " <span class=txt_branco>".($i+1)."</span> |";
  } else {
  echo " <a href='$url' class=linkbranco>".($i+1)."</a> |";
  }
} 
?>		</center>		<br>	</td>
                  </tr>
                </table>
				
	    <?  
}else{
echo "<br><br><br><center><span class=\"aviso\">ação inválida!!!<br><br>redirecionando...</span></center>";
echo"<meta http-equiv='refresh' content='2;URL=fotos.php'>";
}
?>
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