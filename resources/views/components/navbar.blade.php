<div class="container-nav">
    <div class="logo">
        <img src="/img/logo150.png" alt="Logotipo da Cod&Hub">
    </div>
    <ul class="menu">
        <li><a href="{{ $home }}">Home</a></li>
        <li><a href="{{ $caminhoOpcao1 }}">{{ $opcao1 }}</a></li>
        <li><a href="{{ $caminhoOpcao2 }}">{{ $opcao2 }}</a></li>
        <li><a href="{{ $caminhoOpcao3 }}">{{ $opcao3 }}</a></li>
        <li><a href="{{ $caminhoOpcao4 }}">{{ $opcao4 }}</a></li>
        <li><a href="{{ $caminhoOpcao5 }}">{{ $opcao5 }}</a></li>
        @if (!empty($caminhoOpcao6))
            <li><a href="{{ $caminhoOpcao6 }}">{{ $opcao6 }}</a></li>
        @endif

        @if (!empty($caminhoOpcao7))
            <li><a href="{{ $caminhoOpcao7 }}">{{ $opcao7 }}</a></li>
        @endif

        @if (!empty($caminhoOpcao8))
            <li><a href="{{ $caminhoOpcao8 }}">{{ $opcao8 }}</a></li>
        @endif
    </ul>
</div>