<!-- USANDO O METODO POST -->
 <!-- POST: método HTML padrão, a requisição é enviada DIRETAMENTE no corpo HTML -->
<!-- Parte do código em HTML -->
<DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset-"UTF-8">
<title>Exemplo de formulário de Cadastro</title>

</head> 
<body>
    <!-- Método pode ser POST ou GET  -->

    <form method="post" action="">

        <label for="nome"> Nome: </label>

        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>

        <input type="email" name="email" required><br>

 
        <button type="submit">Enviar</button>

    </form>

    <!-- Parte do programa em PHP --> 

    <?php

    // Verifica se o formulário foi enviado

        if($_SERVER[ 'REQUEST_METHOD'] == 'POST') {

            // Recebe os valores enviados pelo formulário

            $nome = $_POST ['nome'];
            $email = $_POST ['email'];



            // Exibe os valores recebidos

            echo "<h2>Dados Recebidos: </h2>";
            echo "Nome: $nome : <br>";
            echo "Email: $email <br>";

        }

    ?>
</body>
</html>