<?php

if(isset($_POST['logar'])) {
    $user = $_POST['email'];
    $senha = $_POST['senha']; 

    if(($user != "admin") or ($senha != "123" )) {
        echo "<p>Error</p>";
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
        header('Location:compromissos.php?num=$num');
    }
}

    
?>





<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="conainer mt-4">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">
                <form action="index.php" method="post" name="email" class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Digite o E-mail de usuario"/>
                        <label for="inputEmail">E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Digite a Senha"/>
                        <label for="inputPassword">Senha</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="Lembrar">Lembrar de mim
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-success" type="submit" name="logar">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>



