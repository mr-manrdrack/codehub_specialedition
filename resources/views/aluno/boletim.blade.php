<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Boletim</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/boletim.css">
</head>

<body>
    <nav class="navbar">
        <x-navbar home="/aluno" opcao1="Boletim" caminhoOpcao1="boletim" opcao2="Horário" caminhoOpcao2="horario" opcao3="Cardápio" caminhoOpcao3="cardapio" opcao4="Eventos" caminhoOpcao4="eventos" opcao5="Bloco de Notas" caminhoOpcao5="blocodenotas" opcao6="" caminhoOpcao6="usuario" />
    </nav>
    <x-titulo titulo="Boletim:" subtitulo="" />
    <x-boletim :nomedisciplina="$nomedisciplina" :listanotas="$listanotas" :listafj="$listafj" :listafnj="$listafnj" :listaPFAP="$listaPFAP" :listanotasS="$listanotas2" :listafj2="$listafj2" :listafnj2="$listafnj2" :listaPFAS="$listaPFAS" :listanotas3="$listanotas3" :listafj3="$listafj3" :listafnj3="$listafnj3" :listaPFAT="$listaPFAT" :listanotas4="$listanotas4" :listafj4="$listafj4" :listafnj4="$listafnj4" :listaPFAQ="$listaPFAQ" :mediaanual="$mediaanual" :notarecfinal="$notarecfinal" :notafinal="$notafinal"/>
    <x-footer />
</body>
</html>