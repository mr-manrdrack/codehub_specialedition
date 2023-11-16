<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cod&Hub - Realizar Chamada</title>
	<link rel="stylesheet" href="/css/global.css">
	<link rel="stylesheet" href="/css/navbar.css">
	<link rel="stylesheet" href="/css/realizar_chamada.css">
</head>

<body>
	<nav class="navbar">
		<x-navbar home="/professor" opcao1="Horário" caminhoOpcao1="horario" opcao2="Add Boletim" caminhoOpcao2="add_boletim" opcao3="Analisar Turma" caminhoOpcao3="analisar_turma" opcao4="Realizar Chamada" caminhoOpcao4="realizar_chamada" opcao5="Eventos" caminhoOpcao5="eventos" opcao6="" caminhoOpcao6="usuario"/>
	</nav>
	<x-titulo titulo="Realizar Chamada" subtitulo="Professor: Pedro Gomes da Silva" />
	<x-realizar_chamada />
    <br><br>
	<x-footer />
    <script src="/js/realizar_chamada.js"></script>
</body>

</html>