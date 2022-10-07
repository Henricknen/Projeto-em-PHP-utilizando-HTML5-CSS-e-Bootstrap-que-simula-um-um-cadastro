<?php

if(isset($_POST['logar'])) {
    $user = $_POST['email'];
    $senha = $_POST['senha']; 

    if(($user != "admin") or ($senha != "123" )) {
        header('Location: login.html');
    } else {
        $chave1 = "abcdefghijlmnopqrstuvxx";
        $chave2 = "ABCDEFGHIJLMNOPQRSTUVXZ";
        $chave3 = "0123456789";
        $chave = str_shuffle ($chave1.$chave2.$chave3);
        $tam = strlen($chave);
        $num = "";
        $qtd = rand(20, 50);
        for ($i = 0; $i < $qtd; $i++) {
            $pos =rand(0, $tam);
            $num = substr($chave, $pos, 1);
        }
        session_start();
        $_SESSION['numlogin'] = $num;
        $_SESSION['username'] = $user;
        header('Location:compromissos.html?num=$num');
    }
}

    
?>





