<div class="container">
    <form action="" method="POST">
        @csrf
        <div id="select">
            <input class="naosei" type="date" name="dia" id="dia">
            <select id="select_2">
                <option>SELECIONAR DISCIPLINA:</option>
                @foreach($disc as $disciplina)
                <option value="">{{ $disciplina -> nomesdisciplina}}</option>
                @endforeach
            </select>

            <select name="select_3" id="select_3">
                <option value="null">SELECIONE A TURMA:</option>
                <option value="1TDSA">1 TDS A</option>
                <option value="1TDSB">1 TDS B</option>
                <option value="1TDSC">1 TDS C</option>
            </select>
        </div>

        <div class="content">
            <div class="tabela">
                <div class="celula azul azul_title">NOME DO ALUNO</div>
                <div class="celula cinza title_table tamanho">FJ</div>
                <div class="celula azul azul_title tamanho">FNJ</div>
                <div class="celula amarelo title_table tamanho">PFA</div>

               

                @foreach($alunos as $aluno)
                    <div class="celula cinza conteudo">{{$aluno -> nome}}</div>
                    <div class="celula">
                        <input class="checkbox{{ $loop->index }}" type="checkbox" name="opcao.{{ $loop->index }}" id="fj{{ $loop->index }}">
                    </div>
                    <div class="celula">
                        <input class="checkbox{{ $loop->index }}" type="checkbox" name="opcao.{{ $loop->index }}" id="fnj.{{ $loop->index }}">
                    </div>
                    <div class="celula amarelo">0%</div>
                @endforeach
            </div>

            <div class="spans">
                <span id="fj">FJ - Falta Justificada</span>
                <span>FNJ - Falta Não Justificada</span>
                <span>PFA - Percentual de Falta do Aluno</span>
                <span id="justify">Justificativas de falta</span>
                <span>PS - Problema de Saúde</span>
                <span>OBSM - Obrigações com o Serviço Militar</span>
                <span>FP - Falecimento de Parente até 2º Grau</span>
                <span>CPJ ou CJE - Convocação pelo Poder Judiciário ou Justiça Eleitoral</span>
            </div>
        </div>
        <input class="botao cancelar" type="reset" value="CANCELAR">
        <input class="botao" type="submit" value="SALVAR">
    </form>        
</div>