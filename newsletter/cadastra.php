<?php

$acao = $_POST['acao'];
$nome = strip_tags($_POST['nome']);
$email = strip_tags($_POST['email']);
$email = strtolower($email);

if(!$acao){

echo "<meta http-equiv=\"refresh\" content=\"0;URL=../\">";

}else{

include "../../administracao/config_db.php";

if(($nome == "") || ($email == "") || ($nome == "Seu nome...") || ($email == "Seu e-mail...")){
echo "<html>
		<meta http-equiv=refresh content=1;URL=http://www.inacre.org.br/novo/newsletter/erro.php></html>";
}else{
if(strpos($email,"@")<3||strrpos($email,".")<7||strlen($email)>255){
echo "<html>
		<meta http-equiv=refresh content=1;URL=http://www.inacre.org.br/novo/newsletter/email_invalido.php></html>";
		}else{

if($acao==cadastra){
$n = mysql_query("SELECT * FROM $tb5 WHERE email='$email'");
$linhas = mysql_num_rows($n);
if ($linhas==1){
echo"<html>
		<meta http-equiv=refresh content=1;URL=http://www.inacre.org.br/novo/newsletter/jacadastrado.php></html>";
} else{
$sql = mysql_query("INSERT INTO $tb5 (nome,email) VALUES ('$nome','$email')");
if (!$sql){
echo "Não foi possível a consulta.";}
else{
echo"<html>
		<meta http-equiv=refresh content=1;URL=http://www.inacre.org.br/novo/newsletter/sucesso.php></html>";
}
}
}
if($acao==remover){
$select = mysql_query("SELECT * FROM $tb5 WHERE email='$email'");
$result = mysql_num_rows($select);
if(!$result){
echo"<html>
		<meta http-equiv=refresh content=1;URL=http://www.inacre.org.br/novo/newsletter/email_falso.php></html>";

}else{

$remove_mail = mysql_query("DELETE FROM $tb5 WHERE email='$email'");

if (!$remove_mail){
echo "Não foi possível excluir o usuario.";
}else{
echo"<html>
		<meta http-equiv=refresh content=1;URL=http://www.inacre.org.br/novo/newsletter/email_removido.php></html>";//echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
} // fecha else do $remove_mail
} //fecha  else de $result
} // fecha $acao == remover
} // fecha confere mail
} // fecha else de confere campos
} // fecha $acao
?>
