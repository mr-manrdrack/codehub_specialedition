<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Adicionar Refeição</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/tabela_add_dados.css">
    <style>
        #select {
            display: none;
        }
    </style>
</head>

<body>
    <nav class="navbar">
    <x-navbar
        home="/coordenador"
        opcao1="Add Horário" caminhoOpcao1="add_horario"
        opcao2="Add Boletim" caminhoOpcao2="add_boletim"
        opcao3="Analisar Turma" caminhoOpcao3="analisar_turma"
        opcao4="Add Refeição" caminhoOpcao4="add_refeicoes"
        opcao5="Add Eventos" caminhoOpcao5="eventos"
        opcao6="Add Usuários" caminhoOpcao6="add_usuarios"
        opcao7="Add Disciplina" caminhoOpcao7="add_disciplina"
        opcao8="" caminhoOpcao8=""
    />   
    </nav>
    <x-titulo titulo="Adicionar Refeição" subtitulo="" />
    <div class="container">
        <form action="{{ route('add_refeicoes.store') }}" method="post">
            @csrf
            <x-tabela_add_dados 
                :horario="['9:10', '12:00', '15:00', '', '']"
                descricao1="Refeição"
                descricao2="Bebida"
            />
            <input class="botao" type="submit" value="SALVAR">

            <div class="label_input">
                <input type="date" name="dia">
            </div>
        </form>
    </div>
    <x-footer />
</body>
</html>