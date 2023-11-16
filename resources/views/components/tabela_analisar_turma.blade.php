<div class="container">
    <div id="select">
        <label for="select">Selecionar Disciplina</label>
        <select>
            <option value="todos">1° TDS - "A"</option>
            <option value="opcao1">1° TDS - "B"</option>
            <option value="opcao2">2° TDS - "A"</option>
            <option value="opcao3">2° TDS - "B"</option>
            <option value="opcao4">3° TDS - "A"</option>
            <option value="opcao4">3° TDS - "B"</option>
        </select>
    </div>
    @for ($turma = 1; $turma <= 10; $turma++) @php $letra=$turma % 2===1 ? 'A' : 'B' ; @endphp 
    <div id="tabela">
        <table>
            <thead>
                <tr>
                    <th rowspan="1" class="turma">TURMA: {{ $turma }}° TDS - "{{ $letra }}"</th>
                    <th colspan="1" class="normal_cell">NOTA 1</th>
                    <th colspan="1" class="blue_cell">NOTA 2</th>
                    <th colspan="1" class="normal_cell">NOTA 3</th>
                    <th colspan="1" class="blue_cell">NOTA 4</th>
                    <th colspan="1" class="normal_cell">PROVA</th>
                    <th colspan="1" class="blue_cell">MÉDIA</th>
                    <th colspan="1" class="normal_cell">PFA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="nome">MAIOR MÉDIA: ZEZINHO JUCELINO DA SILVA</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0&</td>
                </tr>
                <tr>
                    <td class="nome">MENOR MÉDIA: ZEZINHO JUCELINO DA SILVA</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0&</td>
                </tr>
                <tr>
                    <td class="nome">MAIOR PERCENTUAL DE FALTA: ZEZINHO JUCELINO DA SILVA</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0,0</td>
                    <td class="blue_cell">0,0</td>
                    <td class="normal_cell">0&</td>
                </tr>
            </tbody>
        </table>
</div>
@endfor