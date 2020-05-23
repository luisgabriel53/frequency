<?php 
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$host = 'root';
$password = 'harrycorp22668';
$connect = mysql_connect($db, $host, $password);
$db = mysql_select_db('frequency');
  if (isset($entrar)) {
           
    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = 
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos!'); window.location.href='index.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>