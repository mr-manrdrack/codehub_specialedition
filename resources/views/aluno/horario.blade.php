<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Horário</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/tabela_horario.css">
</head>

<body>
    <nav class="navbar">
        <x-navbar home="/aluno" opcao1="Boletim" caminhoOpcao1="boletim" opcao2="Horário" caminhoOpcao2="horario" opcao3="Cardápio" caminhoOpcao3="cardapio" opcao4="Eventos" caminhoOpcao4="eventos" opcao5="Bloco de Notas" caminhoOpcao5="blocodenotas" opcao6="" caminhoOpcao6="usuario" opcao6="" caminhoOpcao6="" opcao7="" caminhoOpcao7="" opcao8="" caminhoOpcao8=""/>
    </nav>
    <x-titulo titulo="Horário" subtitulo="Turma: 3º TDS B" />
    <x-tabela_horario 
        :primeirasAulas="$primeirasAulas"
        :segundasAulas="$segundasAulas"
        :terceirasAulas="$terceirasAulas"
        :quartasAulas="$quartasAulas"
        :quintasAulas="$quintasAulas"
        :sextasAulas="$sextasAulas"
        :setimasAulas="$setimasAulas"
        :oitavasAulas="$oitavasAulas"
        :nonasAulas="$nonasAulas"
    />
    <x-footer />
</body>
</html>