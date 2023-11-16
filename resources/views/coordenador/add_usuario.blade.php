<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cod&Hub - Adicionar Usuário</title>
	<link rel="stylesheet" href="/css/global.css">
	<link rel="stylesheet" href="/css/navbar.css">
	<link rel="stylesheet" href="/css/add_item.css">
</head>

<body>
	<nav class="navbar">
		<x-navbar home="/" opcao1="Add Horário" caminhoOpcao1="add_horario" opcao2="Add Boletim" caminhoOpcao2="add_boletim" opcao3="Analisar Turma" caminhoOpcao3="analisar_turma" opcao4="Add Refeição" caminhoOpcao4="add_refeicoes" opcao5="Add Eventos" caminhoOpcao5="eventos" opcao6="Usuários" caminhoOpcao6="usuarios"/>	</nav>
	<x-titulo titulo="Adicionar Usuários" subtitulo="" />
	<x-adicionar_item input1="Nome" inputOpcao1="nome" input2="Função" inputOpcao2="funcao" input3="Matricula" inputOpcao3="matricula" descricao="" inputDescricao="" inputHorario="" horario="" />
	<x-footer />
</body>
</html>