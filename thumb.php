<?
  header("Content-type: image/jpeg");

$im = imagecreatefromjpeg($_GET['imagem']);
$largura = imagesx($im);
$altura = imagesy($im);
$thumb = 70;

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
imagedestroy($im);
?>
