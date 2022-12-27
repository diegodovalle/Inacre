<?php
	header('charset=iso-8859-1');
    ob_start();
?>
<?php
    session_start();
    ob_flush();
    
    $_SESSION['name'] = $_POST['name'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['website'] = $_POST['website'];
	$_SESSION['message'] = $_POST['message'];
?>
<?php
    if ($_POST["palavra"] == $_SESSION["palavra"]){
        echo" <script>document.location.href='contact.php'</script>";
    }else{
        echo "<script>alert('Captcha Incorreto! Digite a letras diferenciando Maiúscula da Minúscula.');</script>";
        echo" <script>history.go(-1);</script>";
    }
?>