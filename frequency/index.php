<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
     echo"<script language='javascript' type='text/javascript'>;window.location.href='system.html';</script>";
    }else{
      echo"<br><a href='index.html'>Faça Login</a> Para ler acessar o sistema!";
    }
?>