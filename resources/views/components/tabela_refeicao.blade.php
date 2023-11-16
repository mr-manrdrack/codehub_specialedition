<div class="container">
        <div class="grid-container">
            <div class="grid-item item1">Horário</div>
            <div class="grid-item celula-blue amarelo">Segunda</div>
            <div class="grid-item celula-blue amarelo">Terça</div>
            <div class="grid-item celula-blue amarelo">Quarta</div>
            <div class="grid-item celula-blue amarelo">Quinta</div>
            <div class="grid-item celula-blue amarelo">Sexta</div>
            <div class="grid-item celula-blue amarelo">9:10</div>
            @for($i = 0; $i < 5; $i++)
                <div class="grid-item"></div>
            @endfor
            <div class="grid-item celula-blue amarelo ">12:00</div>
            @for($i = 0; $i < 5; $i++)
                <div class="grid-item"></div>
            @endfor
            <div class="grid-item celula-blue amarelo">15:00</div>
            @for($i = 0; $i < 5; $i++)
                <div class="grid-item"></div>
            @endfor
        </div>
    </div>