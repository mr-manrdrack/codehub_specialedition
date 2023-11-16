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
        <x-navbar home="/coordenador"  opcao1="Add Horário" caminhoOpcao1="add_horario" opcao2="Add Boletim" caminhoOpcao2="add_boletim" opcao3="Analisar Turma" caminhoOpcao3="analisar_turma" opcao4="Add Refeição" caminhoOpcao4="add_refeicoes" opcao5="Add Eventos" caminhoOpcao5="eventos" opcao6="Usuários" caminhoOpcao6="usuarios"/>    </nav>
    <x-titulo titulo="Analisar Turma" subtitulo="" />
    <x-tabela_analisar_turma />
    <x-footer />
</body>
</html>