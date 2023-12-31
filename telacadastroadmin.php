<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../missaopatinha/CSS/loginAdm.css">
    <title>Cadastro de Administrador</title>
</head>
<body>


<div class="conteudo">
    <form method="post" action="cadastroadmin.php" id="formAdm">
        
        <label for="cnpj">CNPJ:</label><br>
        <input id="cnpj" name="cnpj" placeholder="Informe seu cnpj" type="text" required="required" maxlength=18 onkeypress="formatar('##.###.###/####-##', this)"><p></p>

        <label for="nome">Nome:</label><br>
        <input id="nome" name="nome" placeholder="Informe seu nome de" type="text" required="required"><p></p>

        <label for="email">Email:</label><br>
        <input id="email" name="email" placeholder="Informe seu email" type="email" required="required"><p></p>

        <label for="senha">Senha:</label><br>
        <input id="senha" name="senha" placeholder="Informe sua senha" type="password" required="required" ><p></p>
        
        <label for="telefone">Telefone:</label><br>
        <input id="telefone" name="telefone" placeholder="Informe seu telefone" type="text" required="required" ><p></p>
        
        <label for="nomeAssoci">Nome da Associação:</label><br>
        <input id="nomeAssoci" name="nomeAssoci" placeholder="Informe o nome de sua Associação" type="text" required="required" ><p></p>
        
        <label for="redeSocial">Rede Social:</label><br>
        <input id="redeSocial" name="redeSocial" placeholder="Informe nome de rede social" type="text" required="required" ><p></p>
        
        <label for="presidente">Nome do(a) Presidente:</label><br>
        <input id="presidente" name="presidente" placeholder="Informe nome do presidente" type="text" required="required" ><p></p>
        
        <button type="submit">CADASTRAR</button>
            
    </form>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>