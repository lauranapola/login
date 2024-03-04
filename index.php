<?php
$login_cookie = $_COOKIE['login'];
if(isset($login_cookie)){
    echo"Bem vindo,$login_cookie <br>";
    echo "Essas informacoes <font color='red'>PODEM</font> ser acessadas por voce"; 
}else{
    echo"Bem vindo, convidado <br>";
    echo"Essas informacaoes <font color='red' >NAO PODEM</font> ser acessadas por voce";
    echo"<br><a href='login.html'> Faça Login </a> Para ler o conteúdo";
}
?>