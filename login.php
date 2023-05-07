<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cable.css">

    <title>Cursos EAD</title>

</head>
<body>
    <div class="global">
    <header>
        <div>
            <h2>R-TECHI</h2>
        </div>
        <nav>
            <ul>
                <a href="index.html">
                    <li>Início</li>
                </a>

            </ul>
        </nav>
    </header>
    
        <section id="registro">
            <form method="post">
                <label for="">Usuário: <input type="text" name="user" placeholder="Digite seu usuário"></label><br><br>
                <label>Senha: <input type="password" name="pass" placeholder="Digite sua senha"></label><br><br>
                <button type="submit" name="submit" value="logar">Logar</button>
            </form>
            <img src="img/a.png" alt="" class="banner2">
        </section>
        
  <?php
        /* Declaração de Variáveis */
        
        $user = @$_REQUEST['user'];
        $pass = @$_REQUEST['pass'];
        $submit = @$_REQUEST['submit'];

        /*declaração das variáveis que possuem os usuarios e as senhas*/

        $user1 = 'teste';
        $pass1 = '123';

        $user2 = 'teste1';
        $pass2 = '1';

        /*testa se o botão submit foi ativado */
        if($user == "" || $pass == ""){
        echo "<script:alert('Por favor, preencha todos os campos!');
        </script>";
        }

        /*Caso o campo usuario e senha não
        *estejam vazios vamos testar se o usuário e a senha batem
        *iniciamos uma sessão e redirecionamos o usuário para o painel */

        else{
        if(($user == $user1 && $pass == $pass1 ) || ($user == $user2 && $pass2)){
            session_start();
            $_SESSION['usuario']=$user;
            $_SESSION['senha']=$pass;
            header("Location: painel2.html");
        }else{
            echo "<script> alert('Usuario e/ou senha invalido(s), tente novamente!);</script>";
        }
         /* Se o usuario ou a senha não batem alertamos o usuario*/
        }
        ?>

   </div>
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>

</body>
</html>