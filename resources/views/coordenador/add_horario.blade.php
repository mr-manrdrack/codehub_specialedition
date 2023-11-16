<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Adicionar Horário</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/tabela_add_dados.css">
</head>

<body>
    <nav class="navbar">
        <x-navbar home="/coordenador" opcao1="Add Horário" caminhoOpcao1="add_horario" opcao2="Add Boletim" caminhoOpcao2="add_boletim" opcao3="Analisar Turma" caminhoOpcao3="analisar_turma" opcao4="Add Refeição" caminhoOpcao4="add_refeicoes" opcao5="Add Eventos" caminhoOpcao5="eventos" opcao6="Usuários" caminhoOpcao6="usuarios"/>
    </nav>
    <x-titulo titulo="Adicionar Horário" subtitulo="" />
    <div class="container">
        <form action="{{ route('add_horario.store') }}" method="post">
            @csrf
            <x-tabela_add_dados 
                :horario="['7:30', '8:10', '9:30', '10:20', '11:10', '13:20', '14:10', '15:20', '16:10']"
                descricao1="Turma"
                descricao2="Disciplina"
            />
            <input class="botao" type="submit" value="SALVAR">
        </form>
    </div>
    <x-footer />
</body>
</html>