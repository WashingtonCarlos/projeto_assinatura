<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>RIO BRANCO - ASSINATURA DE EMAIL</title>
</head>
<body>
    <form class="form1" method="POST" action="assinatura.php">
        <h1 class="h3 mb-3 font-weight-normal text-center"> Formulario para Assinatura de Email</h1>
        <label class="sr-only" for="nomeCompletoTXT">Nome Completo: </label>
        <input class="form-control" type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Digite seu Nome">
        <label class="sr-only" for="cargoTXT">Cargo: </label>
        <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Qual e o seu cargo">
        <label class="sr-only" for="telefoneTXT">telefone </label>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone para contato">
        <label class="sr-only" for="email">E-mail Corporativo</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email">
        <input class="form-control btn-outline-danger" type="submit" value="enviar">
    </form>
</body>
</html>