<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cod&Hub - Cardápio</title>
	<link rel="stylesheet" href="/css/global.css">
	<link rel="stylesheet" href="/css/navbar.css">
	<link rel="stylesheet" href="/css/tabela_horario.css">
</head>

<body>
	<nav class="navbar">
		<x-navbar home="/aluno" opcao1="Boletim" caminhoOpcao1="boletim" opcao2="Horário" caminhoOpcao2="horario" opcao3="Cardápio" caminhoOpcao3="cardapio" opcao4="Eventos" caminhoOpcao4="eventos" opcao5="Bloco de Notas" caminhoOpcao5="blocodenotas" opcao6="" caminhoOpcao6="usuario" />
	</nav>
	<x-titulo titulo="Cardápio" subtitulo="Dia:01/01/2024" />
	<!--<x-tabela_refeicao />-->
	<div class="container">
        <div class="grid-container">
            <div class="grid-item item1">Horário</div>
            <div class="grid-item celula-blue amarelo">Segunda</div>
            <div class="grid-item celula-blue amarelo">Terça</div>
            <div class="grid-item celula-blue amarelo">Quarta</div>
            <div class="grid-item celula-blue amarelo">Quinta</div>
            <div class="grid-item celula-blue amarelo">Sexta</div>
            <div class="grid-item celula-blue amarelo">9:10</div>
            @foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['SegundaBebidaManha']}}
					- {{$cardapio['SegundaComidaManha']}}</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['TerçaBebidaManha']}}
					- {{$cardapio['TerçaComidaManha']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['QuartaBebidaManha']}}
					- {{$cardapio['QuartaComidaManha']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['QuintaBebidaManha']}}
					- {{$cardapio['QuintaComidaManha']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['SextaBebidaManha']}}
					- {{$cardapio['SextaComidaManha']}}
				</div>
            @endforeach
            <div class="grid-item celula-blue amarelo ">12:00</div>
            @foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['SegundaBebidaAlmoço']}}
					- {{$cardapio['SegundaComidaAlmoço']}}</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['TerçaBebidaAlmoço']}}
					- {{$cardapio['TerçaComidaAlmoço']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['QuartaBebidaAlmoço']}}
					- {{$cardapio['QuartaComidaAlmoço']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['QuintaBebidaAlmoço']}}
					- {{$cardapio['QuintaComidaAlmoço']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['SextaBebidaAlmoço']}}
					- {{$cardapio['SextaComidaAlmoço']}}
				</div>
            @endforeach
            <div class="grid-item celula-blue amarelo">15:00</div>
            @foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['SegundaBebidaTarde']}}
					- {{$cardapio['SegundaComidaTarde']}}</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['TerçaBebidaTarde']}}
					- {{$cardapio['TerçaComidaTarde']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['QuartaBebidaTarde']}}
					- {{$cardapio['QuartaComidaTarde']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['QuintaBebidaTarde']}}
					- {{$cardapio['QuintaComidaTarde']}}
				</div>
            @endforeach
			@foreach($cardapios as $cardapio)
                <div class="grid-item">{{$cardapio['SextaBebidaTarde']}}
					- {{$cardapio['SextaComidaTarde']}}
				</div>
            @endforeach
        </div>
    </div>
	<x-titulo titulo="Ordem do almoço" subtitulo="Mês: Janeiro" />
	<x-tabela_refeicao dado="Primeiro" />
	<x-footer />
</body>

</html>