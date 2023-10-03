<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../helpet/CSS/loginAdm.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="post" action="cadastro.php">
        
        <label for="nome">Nome Completo:</label><br>
        <input id="nome" name="nome" placeholder="Informe seu nome" type="text" required="required"><p></p>

        <label for="nomeUser">Nome de Usuário:</label><br>
        <input id="nomeUser" name="nomeUser" placeholder="Informe seu nome de usuário" type="text" required="required"><p></p>

        <label for="email">Email:</label><br>
        <input id="email" name="email" placeholder="Informe seu email" type="text" required="required"><p></p>

        <label for="senha">Senha:</label><br>
        <input id="senha" name="senha" placeholder="Informe sua senha" type="password" required="required"><p></p>
        
        <button type="submit">Cadastrar Usuário</button>
            
        Se você quer ser um patrocionador clique <a href="telacadastroadmin.php">aqui</a>
    </form>
</body>
</html>