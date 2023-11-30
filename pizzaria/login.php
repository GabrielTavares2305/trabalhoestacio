<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="estilos/index.css">
</head>

<body>
    <header>
        <div class="container-logo">
            <div class="logo-imagem">
                <img src="./Imagem/pizza logo1.png" alt="Pizza Logo">
            </div>
        </div><!-- container-logo -->

        <div class="menu">
            <ul>
                <li><a href="pgprc.html">Início</a></li>
                <li><a href="sobre.html">Sobre nós</a></li>
                <li><a href="login.php">Serviços</a></li>
                <li><a href="faleconosco.html">Fale conosco</a></li>
            </ul>
        </div><!-- menu -->
    </header>
    <form action="logar.php" method="POST">
        <h1>Faça seu Login</h1>
        <p>
            <label for="inputEmail" >Email</label>
            <input type="email" name="email" id="input1" placeholder="digite seu email">
        </p>

        <p>
            <label for="">Senha</label>
            <input type="password" name="password" id="input1" placeholder="digite sua senha">
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
    <footer>
        <div class="redes-sociais">
            <h3>Nos siga nas nossas redes sociais!</h3>
            <a href="https://www.instagram.com"><img src="./Imagem/Instagram.png" alt="Instagram"></a>
            <a href="https://facebook.com"><img src="./Imagem/Facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com"><img src="./Imagem/Linkedin.png" alt="Linkedin"></a>
        </div><!-- redes-sociais -->
    </footer>
</body>

</html>