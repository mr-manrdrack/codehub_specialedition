<div id="select">
    <label for="select">Selecionar Disciplina</label>
    <select>
        @foreach($disc as $disciplina)
            <option value="">{{ $disciplina -> nomesdisciplina}}</option>
        @endforeach
    </select>
    <label for="select">Selecionar Turma</label>
    <select>
        @foreach($turmas as $turma)
            <option value="">{{ $turma -> serieturma}}</option>
        @endforeach
    </select>
</div>
<div class="tabela">
    <div class="celula azul azul_title">NOME DO ALUNO</div>
    <div class="celula cinza title_table">NOTA 1</div>
    <div class="celula azul azul_title">NOTA 2</div>
    <div class="celula cinza title_table">NOTA 3</div>
    <div class="celula azul azul_title">NOTA 4</div>
    <div class="celula cinza title_table">NOTA 5</div>
    <div class="celula azul azul_title">PROVA</div>
    <div class="celula amarelo title_table">MÉDIA</div>

    @foreach ($alunos as $aluno)
        <div class="celula cinza nome_amarelo">{{ $aluno->nome }}</div>
        <div class="celula cinza nome_amarelo">{{$aluno -> MatriculaAluno}}</div>
        <div class="celula cinza"><input type="text" placeholder="0,0" name="nota1" id="nota1"></div>
        <div class="celula azul"><input type="text" placeholder="0,0" name="nota2" id="nota2"></div>
        <div class="celula cinza"><input type="text" placeholder="0,0" name="nota3" id="nota3"></div>
        <div class="celula azul"><input type="text" placeholder="0,0" name="nota4" id="nota4"></div>
        <div class="celula cinza"><input type="text" placeholder="0,0" name="nota5" id="nota5"></div>
        <div class="celula azul"><input type="text" placeholder="0,0" name="prova" id="prova"></div>
        <div class="celula amarelo nome_amarelo"><input type="text" name="média" id="média"></div>
    @endforeach
</div>