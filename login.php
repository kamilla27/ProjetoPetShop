<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="stylesheet" href="css/style-login.css"> <!-- Importando o arquivo de estilos CSS -->
</head>
<body>
<section id="login">
<div class="container">
    <h2>Login</h2>
    <form>
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" class="entrada" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" class="entrada"required>
        <button type="submit">Entrar</button>
    </form>
</div>
    <div class="container">
        <h2>Esqueci a Senha</h2>
        <form id="esqueciSenhaForm">
            <div class="form-group">
                <label for="emailEsqueciSenha">Email:</label>
                <input type="email" id="emailEsqueciSenha" name="emailEsqueciSenha" class="entrada" required>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>