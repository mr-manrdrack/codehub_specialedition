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
	<x-titulo titulo="Horário" subtitulo="Professor: Pedro Gomes da Silva" />
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