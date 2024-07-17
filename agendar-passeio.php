<?php
include("template.html");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Passeio - Pet Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Agendar Passeio</h2>
        <form id="agendarPasseioForm">
            <div class="form-group">
                <label for="racaPasseio">Raça do Pet:</label>
                <input type="text" id="racaPasseio" name="racaPasseio" required>
            </div>
            <div class="form-group">
                <label for="dataHora">Data e Hora:</label>
                <input type="datetime-local" id="dataHora" name="dataHora" required>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>