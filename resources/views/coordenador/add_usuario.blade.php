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
	<x-titulo titulo="Adicionar Usuários" subtitulo="" />
	<x-adicionar_item rota="{{route('add_usuarios.store')}}" input1="Nome" inputOpcao1="nome" input2="Função" inputOpcao2="cargo" input3="Matricula" inputOpcao3="Matricula" descricao="" inputDescricao="" inputHorario="" horario="" turma="Turma" inputTurma="turma"/>
	<x-footer />
</body>
</html>