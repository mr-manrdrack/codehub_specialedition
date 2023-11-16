<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Analisar Turma</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/analisar_turma.css">
</head>

<body>
    <nav class="navbar">
        <x-navbar
            home="/professor"
            opcao1="Horário" caminhoOpcao1="horario"
            opcao2="Add Boletim" caminhoOpcao2="add_boletim"
            opcao3="Analisar Turma" caminhoOpcao3="analisar_turma"
            opcao4="Realizar Chamada" caminhoOpcao4="realizar_chamada"
            opcao5="Eventos" caminhoOpcao5="eventos"
            opcao6="" caminhoOpcao6="usuario"
            opcao6="" caminhoOpcao6=""
            opcao7="" caminhoOpcao7=""
            opcao8="" caminhoOpcao8=""
        />
    </nav>
    <x-titulo titulo="Analisar Turma" subtitulo="Professor: Pedro Gomes da Silva" />
    <x-tabela_analisar_turma />
    <x-footer />
</body>
</html>