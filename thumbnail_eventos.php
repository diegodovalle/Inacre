<?
 header("Content-type: image/jpeg");

/*$im = imagecreatefromjpeg($_GET['imagem']);
$largura = imagesx($im);
$altura = imagesy($im);
$thumb = 100;

if ($largura>$altura) {
$largura_thumb = ($largura*$thumb)/$altura;
$nova = imagecreatetruecolor($thumb,$thumb);
imagecopyresized($nova,$im,0,0,0,0,$largura_thumb,$thumb,$largura,$altura);
}
else {
$altura_thumb = ($altura*$thumb)/$largura;
$nova = imagecreatetruecolor($thumb,$thumb);
imagecopyresized($nova,$im,0,0,0,0,$thumb,$altura_thumb,$largura,$altura);
}

imagejpeg($nova);
imagedestroy($nova);
imagedestroy($im);*/
   header("Content-type: image/jpeg");

    $im       = imagecreatefromjpeg($_GET['imagem']);
    $largurao = imagesx($im);
	$alturao  = imagesy($im);
	$alturad  = 200;
    $largurad = ($largurao*$alturad)/$alturao;

	$nova     = imagecreatetruecolor($largurad,$alturad);
	imagecopyresized($nova,$im,0,0,0,0,$largurad,$alturad,$largurao,$alturao);
    imagejpeg($nova);
    imagedestroy($nova);
	imagedestroy($im);
?>

