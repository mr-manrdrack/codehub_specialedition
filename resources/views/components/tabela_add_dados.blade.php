<div class="tabela">
    <div class="celula"></div>
    <div class="celula"></div>
    <div class="celula horario_grid">
        <span name="Segunda" value="Segunda">Segunda</span>
    </div>
    <div class="celula horario_grid">
        <span name="Terça" value="Terça">Terça</span>
    </div>
    <div class="celula horario_grid">
        <span name="Quarta" value="Quarta">Quarta</span>
    </div>
    <div class="celula horario_grid">
        <span name="Quinta" value="Quinta">Quinta</span>
    </div>
    <div class="celula horario_grid">
        <span name="Sexta" value="Sexta">Sexta</span>
    </div>
    @for($i = 0; $i < 9; $i++)
        @if (!empty($horario[$i]))
        <div class="celula horario_grid">
            <span>{{$horario[$i]}}</span>
        </div>
        <div class="celula descricao_grid">
            <span>{{$descricao1}}</span>
            <span>{{$descricao2}}</span>
        </div>
        <div class="celula">
            <input type="text" name="celula1_{{$i}}" placeholder="-">
            <input type="text" name="celula2_{{$i}}" placeholder="-">
        </div>
        <div class="celula">
            <input type="text" name="celula3_{{$i}}" placeholder="-" >
            <input type="text" name="celula4_{{$i}}" placeholder="-">
        </div>
        <div class="celula">
            <input type="text" name="celula5_{{$i}}" placeholder="-">
            <input type="text" name="celula6_{{$i}}" placeholder="-">
        </div>
        <div class="celula">
            <input type="text" name="celula7_{{$i}}" placeholder="-">
            <input type="text" name="celula8_{{$i}}" placeholder="-">
        </div>
        <div class="celula">
            <input type="text" name="celula9_{{$i}}" placeholder="-">
            <input type="text" name="celula10_{{$i}}" placeholder="-">
        </div>
        @endif
    @endfor
</div>
<div id="select">
    <select name="professorLista">
        @foreach($professores as $professor)
            <option value="{{$professor -> Matricula}}">{{$professor -> nome}}</option>
        @endforeach
    </select>
</div>