<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Add Boletim</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/add_boletim.css">
</head>

<body>
    <nav class="navbar">
        <x-navbar home="/professor" opcao1="Horário" caminhoOpcao1="horario" opcao2="Add Boletim" caminhoOpcao2="add_boletim" opcao3="Analisar Turma" caminhoOpcao3="analisar_turma" opcao4="Realizar Chamada" caminhoOpcao4="realizar_chamada" opcao5="Eventos" caminhoOpcao5="eventos" opcao6="" caminhoOpcao6="usuario"/>
    </nav>
    <x-titulo titulo="Adicionar Nota" subtitulo="Professor: Pedro Gomes da Silva" />
    <!--<x-add_boletim :alunos = "$alunos" :turmas = "$turmas" :disc = "$disc"/>-->
    <div class="container">
        <form action="{{ route('professor_add_boletim.store') }}" method="post">
            @csrf
            <x-add_boletim :disc="$disc" :turmas="$turmas" :alunos="$alunos"/>
            <input class="botao cancelar" type="reset" value="CANCELAR">
            <input class="botao" type="submit" value="SALVAR">
        </form>
    </div>
    <x-footer />
</body>
</html>