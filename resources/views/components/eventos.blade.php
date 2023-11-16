@php
    $hoje = date('d/m/Y');
@endphp
<x-titulo titulo="Eventos" subtitulo="Dia: {{$hoje}}" />
<div class="container">
    @foreach($eventos as $event)
        <div class="box">
            <h1>{{$event->titulo}}</h1>
            @php
                $descricaoQuebrada = implode('</p><p>', str_split($event->descricao, 90));
            @endphp
            <div>
                <p>{!! $descricaoQuebrada !!}</p>
            </div>
            <span style="font-weight: 700;">Data/Hora: {{$event->horario}}</span>
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->titulo }}" width="300px" height="180" style="color: #fafafa;">
        </div>
    @endforeach
</div>
