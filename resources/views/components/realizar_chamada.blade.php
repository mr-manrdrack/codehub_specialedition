<div class="container">
    <form action="" method="POST">
        @csrf
        <div id="select">
            <select>
                <option value="todos">SELECIONAR DIA:</option>
                <option value="opcao1">01/01/2024</option>
                <option value="opcao2">02/01/2024</option>
                <option value="opcao3">03/01/2024</option>
                <option value="opcao4">04/01/2024</option>
                <option value="opcao4">05/01/2024</option>
            </select>
            <select id="select_2">
                <option value="todos">SELECIONAR AULA:</option>
                <option value="opcao1">PORTUGUÊS</option>
                <option value="opcao2">ARTES</option>
                <option value="opcao3">EDUCAÇÃO FISICA</option>
                <option value="opcao4">INGLÊS</option>
            </select>
        </div>

        <div class="content">
            <div class="tabela">
                <div class="celula azul azul_title">NOME DO ALUNO</div>
                <div class="celula cinza title_table tamanho">FJ</div>
                <div class="celula azul azul_title tamanho">FNJ</div>
                <div class="celula amarelo title_table tamanho">PFA</div>

                @for($i = 0; $i < 4; $i++) 
                <div class="celula cinza conteudo">ZEZINHO JUCELINO DA SILVA</div>
                <div class="celula">
                    <input class="checkbox{{ $i }}" type="checkbox" name="opcao.{{ $i }}" id="fj{{ $i }}">
                </div>
                <div class="celula">
                    <input class="checkbox{{ $i }}" type="checkbox" name="opcao.{{ $i }}" id="fnj.{{ $i }}">
                </div>
                <div class="celula amarelo">0%</div>
                @endfor
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

    <form action="" method="post">
        <div id="meu-popup" class="popup">
            <span class="fechar" id="fechar-popup">X</span>
            <h2>Justificativa de Falta</h2>
            
            <div class="conteudo_popup">
                <div>
                    <input type="radio" name="justificativa" value="PS">
                    <label for="">PS - Problema de Saúde</label>
                </div>
                
                <div>
                    <input type="radio" name="justificativa" value="OSM">
                    <label for="">OSM - Obrigações com o Serviço Militar</label>
                </div>
                
                <div>
                    <input type="radio" name="justificativa" value="FP">
                    <label for="">FP - Falecimento de Parente até 2º Grau</label>
                </div>
                
                <div>
                    <input type="radio" name="justificativa" value="CPJ_CJE">
                    <label for="">CPJ ou CJE - Convocação pelo Poder Judiciário <br> ou Justiça Eleitoral</label>
                </div>
            </div>
            <input class="botao botao_popup" type="submit" value="SALVAR">
        </div>
        
    </form>
</div>