<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Eventos</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/eventos.css">
</head>

<body>
    <nav class="navbar">
        <x-navbar home="/aluno" opcao1="Boletim" caminhoOpcao1="boletim" opcao2="Horário" caminhoOpcao2="horario" opcao3="Cardápio" caminhoOpcao3="cardapio" opcao4="Eventos" caminhoOpcao4="eventos" opcao5="Bloco de Notas" caminhoOpcao5="blocodenotas" opcao6="" caminhoOpcao6="usuario" opcao6="" caminhoOpcao6="" opcao7="" caminhoOpcao7="" opcao8="" caminhoOpcao8=""/>
    </nav>
    <x-eventos :eventos="$eventos"/>
    <x-footer />
</body>
</html>