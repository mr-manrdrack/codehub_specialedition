<div class="container">
    <div class="grid-container">
        <div class="grid-item item1">Horário</div>
        <div class="grid-item celula-blue amarelo">Segunda</div>
        <div class="grid-item celula-blue amarelo">Terça</div>
        <div class="grid-item celula-blue amarelo">Quarta</div>
        <div class="grid-item celula-blue amarelo">Quinta</div>
        <div class="grid-item celula-blue amarelo">Sexta</div>
        <div class="grid-item celula-blue amarelo">7:30</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$primeirasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo ">8:10</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$segundasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">9:30</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$terceirasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">10:20</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$quartasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">11:10</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$quintasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">13:20</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$sextasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">14:10</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$setimasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">15:20</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$oitavasAulas[$i]}}</div>
        @endfor
        <div class="grid-item celula-blue amarelo">16:10</div>
        @for($i = 0; $i < 5; $i++)
            <div class="grid-item">{{$nonasAulas[$i]}}</div>
        @endfor
    </div>

</div>