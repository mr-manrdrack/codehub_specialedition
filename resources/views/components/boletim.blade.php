<div class="container">
    <div class="head_table">
        <div class="esquerda">
            <span>NOME:</span>
            <span>DATA DE NASCIMENTO:</span>
            <span>MATRICULA:</span>
            <span>ETAPA DE ENSINO MÉDIO:</span>
        </div>
        <div class="direita">
            <hr>
            <span>MODALIDADE:</span>
            <span>CURSO:</span>
            <span>TURMA:</span>
            <span>ANO/FASE/MÓDULO:</span>
            <span>TURNO:</span>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th rowspan="3">Componentes Curricular</th>
                <th colspan="3">1º Unidade Bimestral</th>
                <th colspan="3">2º Unidade Bimestral</th>
                <th colspan="3">3º Unidade Bimestral</th>
                <th colspan="3">4º Unidade Bimestral</th>
                <th rowspan="3">Média Anual</th>
                <th rowspan="3">Nota Rec. Final</th>
                <th rowspan="3">Nota Final</th>
            </tr>
            <tr>
                @for($th = 0; $th < 4; $th++) <th rowspan="2">Média</th>
                    <th colspan="2">Faltas</th>
                    @endfor
            </tr>
            <tr>
                @for($th = 0; $th < 4; $th++) <th class="fj_fnj">FJ</th>
                    <th class="fj_fnj">FNJ</th>
                    @endfor
            </tr>
        </thead>
        <tbody>
            <tr class="titulo_table">
                <td>Base Nacional Comum Curricular</td>
                @for($td = 0; $td < 15; $td++) <td>
                    </td>
                    @endfor
            </tr>

            @for($tr = 0; $tr < 18; $tr++) <tr>
                @for($disciplinas = 0; $disciplinas < 1; $disciplinas++) <td>{{$nomedisciplina[$tr]}}</td>
                @endfor

                @for($media = 0; $media < 1; $media++) <td>{{$listanotas[$tr]}}</td>
                @endfor

                @for($fj = 0; $fj < 1; $fj++) <td>{{$listafj[$tr]}}</td>
                @endfor

                @for($fnj = 0; $fnj < 1; $fnj++) <td>{{$listafnj[$tr]}}</td>
                @endfor


                @for($media = 0; $media < 1; $media++) <td>{{$listanotasS[$tr]}}</td>
                @endfor

                @for($fj = 0; $fj < 1; $fj++) <td>{{$listafj2[$tr]}}</td>
                @endfor

                @for($fnj = 0; $fnj < 1; $fnj++) <td>{{$listafnj2[$tr]}}</td>
                @endfor


                @for($media = 0; $media < 1; $media++) <td>{{$listanotas3[$tr]}}</td>
                @endfor

                @for($fj = 0; $fj < 1; $fj++) <td>{{$listafj3[$tr]}}</td>
                @endfor

                @for($fnj = 0; $fnj < 1; $fnj++) <td>{{$listafnj3[$tr]}}</td>
                @endfor


                @for($media = 0; $media < 1; $media++) <td>{{$listanotas4[$tr]}}</td>
                @endfor

                @for($fj = 0; $fj < 1; $fj++) <td>{{$listafj4[$tr]}}</td>
                @endfor

                @for($fnj = 0; $fnj < 1; $fnj++) <td>{{$listafnj4[$tr]}}</td>
                @endfor

                @for($MediaAnual = 0; $MediaAnual < 1; $MediaAnual++) <td>{{$mediaanual[$tr]}}</td>
                @endfor

                @for($notarecfinal = 0; $notarecfinal < 1; $notarecfinal++) <td>{{$notarecfinal}}</td>
                @endfor

                @for($notafinal = 0; $notafinal < 1; $notafinal++) <td>{{$notafinal}}</td>
                @endfor
                    </tr>
                    @endfor

                    <tr>
                        @for($td = 0; $td < 1; $td++) @if($td==0) @php $text='Percentual de Faltas' ; @endphp @else @php $text='' ; @endphp @endif <td class="titulo_table">{{ $text }}</td>
                            @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                <td>{{$listaPFAP[$td]}}%</td>
                                @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                <td>{{$listaPFAS[$td]}}%</td>
                                @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                <td>{{$listaPFAT[$td]}}%</td>
                                @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                <td>{{$listaPFAQ[$td]}}%</td>
                                @endfor
                            

                                @for($td = 0; $td < 3; $td++) <td>
                                    </td>
                                    @endfor
                    </tr>
        </tbody>
    </table>
</div>