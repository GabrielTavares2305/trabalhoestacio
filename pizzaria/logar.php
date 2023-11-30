<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();


    $login = addslashes($_POST['email']);
    $senha = addslashes($_POST['password']);
} else {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Pizza</title>
    <link rel="stylesheet" href="estilos/form.css">
</head>
<body>
 <header>
        <div class="container-logo">
            <div class="logo-imagem">
                <img src="imagens/pizzalogo1.png" alt="Pizza Logo">
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

    <h1>Peça sua pizza:</h1>

    <form id="pizzaForm">
        <label for="pizzaSize">Tamanho da pizza:</label>
        <select id="pizzaSize" name="pizzaSize">
            <option value="Pequena">Pequena</option>
            <option value="Média">Média</option>
            <option value="Grande">Grande</option>
        </select>

        <label>Coberturas:</label><br>
        Pepperonis <input type="checkbox" name="topping" value="Pepperoni"> 
        Cogumelos <input type="checkbox" name="topping" value="Cogumelos"> 
        Azeitonas <input type="checkbox" name="topping" value="Azeitonas">
	Mussarela <input type="checkbox" name="topping" value="Mussarela"> 
	Queijo Prato <input type="checkbox" name="topping" value="Queijo Prato"> 
	Carne Seca <input type="checkbox" name="topping" value="Carne Seca"> 
	Catupiry <input type="checkbox" name="topping" value="Catupiry"> 
	Sardinha <input type="checkbox" name="topping" value="Sardinha">  
	<br>
	<br>
        <label for="deliveryAddress">Endereço de entrega:</label>
        <input type="text" id="deliveryAddress" name="deliveryAddress" placeholder="Coloque seu endereço:">

        <button type="button" onclick="submitOrder()">Fazer pedido</button>
    </form>

    <script>
        function submitOrder() {
            const size = document.getElementById('pizzaSize').value;
            const toppings = Array.from(document.querySelectorAll('input[name="topping"]:checked'))
                                .map(topping => topping.value);
            const deliveryAddress = document.getElementById('deliveryAddress').value;

            const orderSummary = `Resumo do pedido:\nTamanho: ${size}\nCobertura: ${toppings.join(', ')}\nEndereço de entrega: ${deliveryAddress}`;

            alert(orderSummary);
        }
    </script>
<br>
<br>
<br>
 <footer>
        <div class="redes-sociais">
                <h3>Nos siga nas nossas redes sociais!</h3>
            <a href="https://www.instagram.com"><img src="imagens/instagram.png" alt="Instagram"></a>
            <a href="https://facebook.com"><img src="imagens/facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com"><img src="imagens/linkedin.png" alt="Linkedin"></a>
        </div><!-- redes-sociais -->
    </footer>
</body>
</html>
