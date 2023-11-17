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

            @foreach($nomedisciplina as $disciplina) 
                <tr>
                
                <td>{{$disciplina}}</td>

                @if($listanotasa["PUnidadeMedia"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listanotasa["PUnidadeMedia"]}}</td>
                @endif
                
                @if($listafj[0]["PUnidadeFJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafj[0]["PUnidadeFJ"]}}</td>
                @endif
                
                @if($listafnj["PUnidadeFNJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafnj["PUnidadeFNJ"]}}</td>
                @endif


                @if($listanotasa["SUnidadeMedia"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listanotasa["SUnidadeMedia"]}}</td>
                @endif
                
                @if($listafj[0]["SUnidadeFJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafj[0]["SUnidadeFJ"]}}</td>
                @endif

                @if($listafnj[0]["SUnidadeFNJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafnj[0]["SUnidadeFNJ"]}}</td>
                @endif


                @if($listanotasa["TUnidadeMedia"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listanotasa["TUnidadeMedia"]}}</td>
                @endif
                
                @if($listafj[0]["TUnidadeFJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafj[0]["TUnidadeFJ"]}}</td>
                @endif

                @if($listafnj[0]["TUnidadeFNJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafnj[0]["TUnidadeFNJ"]}}</td>
                @endif


                @if($listanotasa["QUnidadeMedia"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listanotasa["QUnidadeMedia"]}}</td>
                @endif
                
                @if($listafj[0]["QUnidadeFJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafj[0]["QUnidadeFJ"]}}</td>
                @endif

                @if($listafnj[0]["QUnidadeFNJ"] == NULL)
                    <td>-</td>
                @else
                    <td>{{$listafnj[0]["QUnidadeFNJ"]}}</td>
                @endif

                @if($mediaanual == NULL)
                    <td>-</td>
                @else
                    <td>{{$mediaanual}}</td>
                @endif

                @if($notarecfinal[0] == NULL)
                    <td>-</td>
                @else
                    <td>{{$notarecfinal[0]}}</td>
                @endif
                
                @if($notafinal[0] == NULL)
                    <td>-</td>
                @else
                    <td>{{$notafinal[0]}}</td>
                @endif
                
                </tr>
            @endforeach

                    <tr>
                        @for($td = 0; $td < 1; $td++) @if($td==0) @php $text='Percentual de Faltas' ; @endphp @else @php $text='' ; @endphp @endif <td class="titulo_table">{{ $text }}</td>
                            @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                @if($listaPFAP == NULL)
                                    <td>%</td>
                                @else
                                    <td>{{$listaPFAP[$td]}}%</td>
                                @endif
                            @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                @if($listaPFAS == NULL)
                                    <td>%</td>
                                @else
                                    <td>{{$listaPFAS[$td]}}%</td>
                                @endif
                            @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                @if($listaPFAT == NULL)
                                    <td>%</td>
                                @else
                                    <td>{{$listaPFAT[$td]}}%</td>
                                @endif
                            @endfor

                            @for($td = 0; $td < 1; $td++) <td>
                                </td>
                                <td></td>
                                @if($listaPFAQ == NULL)
                                    <td>%</td>
                                @else
                                    <td>{{$listaPFAQ[$td]}}%</td>
                                @endif
                            @endfor
                            

                            @for($td = 0; $td < 3; $td++) <td>
                                </td>
                                @endfor
                    </tr>
        </tbody>
    </table>
</div>