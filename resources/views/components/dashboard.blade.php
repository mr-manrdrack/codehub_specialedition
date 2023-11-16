<nav class="navbar">
    <div class="container-nav">
        <img src="/img/logo150.png" alt="">
        <ul class="menu">
            <div class="contato">
                <img src="" alt="">
                <li><a href="#">Usuário</a></li>
            </div>
        </ul>
    </div>
</nav>
<main>
    <section id="esquerda">
        <a href="{{ $caminho1 }}">
            <button type="submit">
                {{ $imagemCaminho1 }}
                <br>
                <br>
                <div>
                    <br>
                    <h3>{{ $acessoCaminho1 }}</h3>
                </div>
            </button>
        </a>
        <a href="{{ $caminho2 }}">
            <button type="submit">
                {{ $imagemCaminho2 }}
                <br>
                <br>
                <div>
                    <br>
                    <h3>{{ $acessoCaminho2 }}</h3>
                </div>
            </button>
        </a>
        <a href="{{ $caminho3 }}">
            <button type="submit">
                {{ $imagemCaminho3 }}
                <br>
                <br>
                <div>
                    <br>
                    <h3>{{ $acessoCaminho3 }}</h3>
                </div>
            </button>
        </a>
        <a href="{{ $caminho4 }}">
            <button type="submit">
                {{ $imagemCaminho4 }}
                <br>
                <br>
                <div>
                    <br>
                    <h3>{{ $acessoCaminho4 }}</h3>
                </div>
            </button>
        </a>
        <a href="{{ $caminho5 }}">
            <button type="submit">
                {{ $imagemCaminho5 }}
                <br>
                <br>
                <div>
                    <br>
                    <h3>{{ $acessoCaminho5 }}</h3>
                </div>
            </button>
        </a>
        <a href="{{ $caminho6 }}">
            <button type="submit">
                {{ $imagemCaminho6 }}
                <br>
                <br>
                <div>
                    <br>
                    <h3>{{ $acessoCaminho6 }}</h3>
                </div>
            </button>
        </a>
    </section>
    <section id="direita">
        <a href="{{ $caminho7 }}">
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img src="{{ $imagemCaroussel1 }}" alt="Imagem 1">
                </div>
                <div class="carousel-slide">
                    <img src="{{ $imagemCaroussel2 }}" alt="Imagem 2">
                </div>
                <div class="carousel-slide">
                    <img src="{{ $imagemCaroussel3 }}" alt="Imagem 3">
                </div>
            </div>
        </a>

        <div class="carousel-indicators">
            <span class="indicator"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
        </div>
        
    </section>
</main>