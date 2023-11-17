<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Tela inicial - Aluno</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/dashboard.css">
    <!-- Link para a fonte 'Noto Sans' do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
    <nav class="navbar">
        <div class="container-nav">
            <img src="/img/logo150.png" alt="">
            <ul class="menu">
                <div class="contato">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <li><a href="/aluno/usuario">Ricardo</a></li>
                </div>
            </ul>
        </div>
    </nav>
    <main>
        <section id="esquerda">
            <a href="/aluno/selecionar_turma"><button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="71" viewBox="0 0 70 71" fill="none">
                        <path d="M65.0649 0.643789L36.1646 8.46884C35.4301 8.6655 33.8353 8.66332 33.103 8.45791L4.94715 0.659085C2.43416 -0.0325176 0 1.77898 0 4.36511V57.4994C0 59.6911 1.66246 61.7868 3.77861 62.3757L31.9356 70.1756C32.6888 70.3842 33.6583 70.5 34.6639 70.5C35.3536 70.5 36.3723 70.4465 37.3091 70.1908L66.2082 62.3658C68.3298 61.7921 70 59.701 70 57.5005V4.36511C70.0011 1.78116 67.5669 -0.0368879 65.0649 0.643789ZM32.8144 65.8838L4.87822 58.1636C4.66726 58.1058 4.37213 57.72 4.37213 57.5004V5.05446L31.9356 12.6709C32.2023 12.7452 32.5018 12.8031 32.8144 12.8523V65.8838ZM65.6289 57.5005C65.6289 57.7157 65.2747 58.0915 65.0649 58.1494L37.1867 65.697V12.7123C37.2271 12.7025 37.2687 12.6971 37.3091 12.6861L65.6279 5.02933V57.5004L65.6289 57.5005ZM43.8815 25.5512C44.0783 25.5512 44.2785 25.5262 44.4752 25.4704L59.7735 21.1667C60.9366 20.8379 61.6143 19.6327 61.2874 18.4713C60.9605 17.3099 59.7462 16.6357 58.5908 16.958L43.2925 21.2618C42.1295 21.5906 41.4518 22.7958 41.7786 23.9572C42.0497 24.9219 42.9273 25.5512 43.8815 25.5512ZM43.8817 38.6623C44.0784 38.6623 44.2786 38.6371 44.4753 38.5813L59.7736 34.2777C60.9367 33.9488 61.6144 32.7436 61.2875 31.5822C60.9607 30.4208 59.7463 29.7467 58.5909 30.069L43.2926 34.3727C42.1296 34.7016 41.4519 35.9067 41.7787 37.0671C42.0498 38.0318 42.9275 38.6623 43.8817 38.6623ZM43.8818 51.7732C44.0786 51.7732 44.2787 51.7481 44.4755 51.6923L59.7738 47.3886C60.9368 47.0597 61.6145 45.8546 61.2876 44.6932C60.9607 43.5317 59.7464 42.8576 58.5911 43.1799L43.2927 47.4837C42.1297 47.8125 41.452 49.0176 41.7789 50.1791C42.0499 51.1428 42.9276 51.7732 43.8818 51.7732ZM26.9823 21.2618L11.6841 16.958C10.5287 16.6357 9.31436 17.3099 8.98747 18.4713C8.66058 19.6327 9.33725 20.8378 10.5013 21.1667L25.7998 25.4704C25.9929 25.5246 26.1926 25.5518 26.3932 25.5512C27.3474 25.5512 28.2251 24.922 28.4962 23.9572C28.823 22.7969 28.1464 21.5906 26.9823 21.2618ZM26.9824 34.3727L11.6842 30.0689C10.5289 29.7466 9.31443 30.4207 8.98761 31.5821C8.66079 32.7436 9.33739 33.9487 10.5015 34.2776L25.7998 38.5813C25.993 38.6355 26.1927 38.6627 26.3933 38.6621C27.3476 38.6621 28.2252 38.0329 28.4963 37.0681C28.8231 35.9077 28.1465 34.7015 26.9824 34.3727ZM26.9826 47.4835L11.6844 43.1798C10.529 42.8575 9.31457 43.5316 8.98775 44.693C8.66092 45.8544 9.33752 47.0595 10.5016 47.3885L25.8 51.6921C25.9931 51.7463 26.1929 51.7735 26.3935 51.773C27.3477 51.773 28.2254 51.1437 28.4964 50.179C28.8233 49.0176 28.1467 47.8124 26.9826 47.4835Z" fill="#E4E4E4" fill-opacity="0.866667" />
                    </svg>
                    <br>
                    <br>
                    <div>
                        <br>
                        <h3>Boletim</h3>
                    </div>
                </button>
            </a>
            <a href="/aluno/horario">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="78" height="79" viewBox="0 0 78 79" fill="none">
                        <path d="M74 39.5C74 58.82 58.32 74.5 39 74.5C19.68 74.5 4 58.82 4 39.5C4 20.18 19.68 4.5 39 4.5C58.32 4.5 74 20.18 74 39.5Z" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M51.985 50.6301L41.135 44.1551C39.245 43.0351 37.705 40.3401 37.705 38.1351V23.7852" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <br>
                    <br>
                    <div>
                        <br>
                        <h3>Horário</h3>
                    </div>
                </button>
            </a>
            <a href="/aluno/cardapio">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="78" height="79" viewBox="0 0 78 79" fill="none">
                        <path d="M59.265 33.6341V59.5784C59.265 67.8367 52.65 74.5 44.53 74.5H18.735C10.615 74.5 4 67.8012 4 59.5784V33.6341C4 25.3759 10.615 18.7126 18.735 18.7126H44.53C52.65 18.7126 59.265 25.4114 59.265 33.6341Z" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16.25 10.7025V4.5" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30.25 10.7025V4.5" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M44.25 10.7025V4.5" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M73.9999 43.1683C73.9999 51.3911 67.3849 58.0898 59.2649 58.0898V28.2466C67.3849 28.2466 73.9999 34.91 73.9999 43.1683Z" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 39.0569H58.285" stroke="#E4E4E4" stroke-width="7.09018" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <br>
                    <br>
                    <div>
                        <br>
                        <h3>Cardápio</h3>
                    </div>
                </button>
            </a>
            <a href="/aluno/eventos"><button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="61" viewBox="0 0 75 61" fill="none">
                        <path d="M54.9419 60.5H20.0581C4.67442 60.5 0 55.9057 0 40.7857V39.0714C0 37.6657 1.18605 36.5 2.61628 36.5C5.96512 36.5 8.72093 33.7914 8.72093 30.5C8.72093 27.2086 5.96512 24.5 2.61628 24.5C1.18605 24.5 0 23.3343 0 21.9286V20.2143C0 5.09429 4.67442 0.5 20.0581 0.5H54.9419C70.3256 0.5 75 5.09429 75 20.2143V23.6429C75 25.0486 73.8139 26.2143 72.3837 26.2143C69.0349 26.2143 66.2791 28.9229 66.2791 32.2143C66.2791 35.5057 69.0349 38.2143 72.3837 38.2143C73.8139 38.2143 75 39.38 75 40.7857C75 55.9057 70.3256 60.5 54.9419 60.5ZM5.23256 41.3343C5.30233 53.1286 7.77907 55.3571 20.0581 55.3571H54.9419C66.593 55.3571 69.4186 53.3343 69.7326 43.0486C64.7442 41.8829 61.0465 37.46 61.0465 32.2143C61.0465 26.9686 64.7791 22.5457 69.7674 21.38V20.2143C69.7674 7.97429 67.4302 5.64286 54.9419 5.64286H20.0581C7.77907 5.64286 5.30233 7.87143 5.23256 19.6657C10.2209 20.8314 13.9535 25.2543 13.9535 30.5C13.9535 35.7457 10.2209 40.1686 5.23256 41.3343Z" fill="#E4E4E4" />
                        <path d="M30.5233 14.2143C29.0931 14.2143 27.907 13.0486 27.907 11.6429V3.07143C27.907 1.66571 29.0931 0.5 30.5233 0.5C31.9535 0.5 33.1396 1.66571 33.1396 3.07143V11.6429C33.1396 13.0486 31.9535 14.2143 30.5233 14.2143Z" fill="#E4E4E4" />
                        <path d="M30.5233 39.3465C29.0931 39.3465 27.907 38.1807 27.907 36.775V24.1922C27.907 22.7863 29.0931 21.6206 30.5233 21.6206C31.9535 21.6206 33.1396 22.7863 33.1396 24.1922V36.775C33.1396 38.215 31.9535 39.3465 30.5233 39.3465Z" fill="#E4E4E4" />
                        <path d="M30.5233 60.4999C29.0931 60.4999 27.907 59.3342 27.907 57.9285V49.3571C27.907 47.9514 29.0931 46.7856 30.5233 46.7856C31.9535 46.7856 33.1396 47.9514 33.1396 49.3571V57.9285C33.1396 59.3342 31.9535 60.4999 30.5233 60.4999Z" fill="#E4E4E4" />
                    </svg>
                    <br>
                    <br>
                    <div>
                        <br>
                        <h3>Eventos</h3>
                    </div>
                </button></a>
            <a href="/aluno/blocodenotas">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71" fill="none">
                        <path d="M21.1479 23.382C21.1479 22.7895 21.3833 22.2212 21.8023 21.8023C22.2212 21.3833 22.7895 21.1479 23.382 21.1479H47.2118C47.8043 21.1479 48.3725 21.3833 48.7915 21.8023C49.2104 22.2212 49.4458 22.7895 49.4458 23.382C49.4458 23.9745 49.2104 24.5427 48.7915 24.9617C48.3725 25.3806 47.8043 25.616 47.2118 25.616H23.382C22.7895 25.616 22.2212 25.3806 21.8023 24.9617C21.3833 24.5427 21.1479 23.9745 21.1479 23.382ZM23.382 37.5309H47.2118C47.8043 37.5309 48.3725 37.2955 48.7915 36.8766C49.2104 36.4576 49.4458 35.8894 49.4458 35.2969C49.4458 34.7044 49.2104 34.1361 48.7915 33.7172C48.3725 33.2982 47.8043 33.0628 47.2118 33.0628H23.382C22.7895 33.0628 22.2212 33.2982 21.8023 33.7172C21.3833 34.1361 21.1479 34.7044 21.1479 35.2969C21.1479 35.8894 21.3833 36.4576 21.8023 36.8766C22.2212 37.2955 22.7895 37.5309 23.382 37.5309ZM35.2969 44.9777H23.382C22.7895 44.9777 22.2212 45.2131 21.8023 45.632C21.3833 46.051 21.1479 46.6193 21.1479 47.2118C21.1479 47.8043 21.3833 48.3725 21.8023 48.7915C22.2212 49.2104 22.7895 49.4458 23.382 49.4458H35.2969C35.8894 49.4458 36.4576 49.2104 36.8766 48.7915C37.2955 48.3725 37.5309 47.8043 37.5309 47.2118C37.5309 46.6193 37.2955 46.051 36.8766 45.632C36.4576 45.2131 35.8894 44.9777 35.2969 44.9777ZM70.2969 5.50964V45.9793C70.2981 46.6641 70.1639 47.3423 69.9019 47.9749C69.6399 48.6076 69.2553 49.1821 68.7703 49.6655L49.6655 68.7703C49.1821 69.2553 48.6076 69.6399 47.9749 69.9019C47.3423 70.1639 46.6641 70.2981 45.9793 70.2969H5.50964C4.12713 70.2969 2.80124 69.7477 1.82366 68.7701C0.846076 67.7925 0.296875 66.4666 0.296875 65.0841V5.50964C0.296875 4.12713 0.846076 2.80124 1.82366 1.82366C2.80124 0.846076 4.12713 0.296875 5.50964 0.296875H65.0841C66.4666 0.296875 67.7925 0.846076 68.7701 1.82366C69.7477 2.80124 70.2969 4.12713 70.2969 5.50964ZM5.50964 65.8288H44.9777V47.2118C44.9777 46.6193 45.2131 46.051 45.632 45.632C46.051 45.2131 46.6193 44.9777 47.2118 44.9777H65.8288V5.50964C65.8288 5.31214 65.7503 5.12273 65.6107 4.98307C65.471 4.84342 65.2816 4.76496 65.0841 4.76496H5.50964C5.31214 4.76496 5.12273 4.84342 4.98307 4.98307C4.84342 5.12273 4.76496 5.31214 4.76496 5.50964V65.0841C4.76496 65.2816 4.84342 65.471 4.98307 65.6107C5.12273 65.7503 5.31214 65.8288 5.50964 65.8288ZM62.6713 49.4458H49.4458V62.6713L62.6713 49.4458Z" fill="#E4E4E4" />
                    </svg>
                    <br>
                    <br>
                    <div>
                        <br>
                        <h3>Bloco de notas</h3>
                    </div>
                </button>
            </a>
            <a href="/aluno/usuario">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="71" viewBox="0 0 70 71" fill="none">
                        <path d="M70 35.5C70 16.215 54.285 0.5 35 0.5C15.715 0.5 0 16.215 0 35.5C0 45.65 4.375 54.785 11.305 61.19C11.305 61.225 11.305 61.225 11.27 61.26C11.62 61.61 12.04 61.89 12.39 62.205C12.6 62.38 12.775 62.555 12.985 62.695C13.615 63.22 14.315 63.71 14.98 64.2C15.225 64.375 15.435 64.515 15.68 64.69C16.345 65.145 17.045 65.565 17.78 65.95C18.025 66.09 18.305 66.265 18.55 66.405C19.25 66.79 19.985 67.14 20.755 67.455C21.035 67.595 21.315 67.735 21.595 67.84C22.365 68.155 23.135 68.435 23.905 68.68C24.185 68.785 24.465 68.89 24.745 68.96C25.585 69.205 26.425 69.415 27.265 69.625C27.51 69.695 27.755 69.765 28.035 69.8C29.015 70.01 29.995 70.15 31.01 70.255C31.15 70.255 31.29 70.29 31.43 70.325C32.62 70.43 33.81 70.5 35 70.5C36.19 70.5 37.38 70.43 38.535 70.325C38.675 70.325 38.815 70.29 38.955 70.255C39.97 70.15 40.95 70.01 41.93 69.8C42.175 69.765 42.42 69.66 42.7 69.625C43.54 69.415 44.415 69.24 45.22 68.96C45.5 68.855 45.78 68.75 46.06 68.68C46.83 68.4 47.635 68.155 48.37 67.84C48.65 67.735 48.93 67.595 49.21 67.455C49.945 67.14 50.68 66.79 51.415 66.405C51.695 66.265 51.94 66.09 52.185 65.95C52.885 65.53 53.585 65.145 54.285 64.69C54.53 64.55 54.74 64.375 54.985 64.2C55.685 63.71 56.35 63.22 56.98 62.695C57.19 62.52 57.365 62.345 57.575 62.205C57.96 61.89 58.345 61.575 58.695 61.26C58.695 61.225 58.695 61.225 58.66 61.19C65.625 54.785 70 45.65 70 35.5ZM52.29 52.895C42.805 46.525 27.265 46.525 17.71 52.895C16.17 53.91 14.91 55.1 13.86 56.395C8.54 51.005 5.25 43.62 5.25 35.5C5.25 19.085 18.585 5.75 35 5.75C51.415 5.75 64.75 19.085 64.75 35.5C64.75 43.62 61.46 51.005 56.14 56.395C55.125 55.1 53.83 53.91 52.29 52.895Z" fill="#E4E4E4" />
                        <path d="M35 17.7539C27.755 17.7539 21.875 23.6339 21.875 30.8789C21.875 37.9839 27.44 43.7589 34.825 43.9689H35.14H35.385H35.455C42.525 43.7239 48.09 37.9839 48.125 30.8789C48.125 23.6339 42.245 17.7539 35 17.7539Z" fill="#E4E4E4" />
                    </svg>
                    <br>
                    <br>
                    <div>
                        <br>
                        <h3>Usuário</h3>
                    </div>
                </button>
            </a>
        </section>
        <section id="direita">
        <div class="cards_aling">
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://i.pinimg.com/736x/4d/09/2f/4d092f3b268785478059f87cded170d1.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://s2-g1.glbimg.com/xV2i830jYXtPy1W9jQwnNWlduyI=/0x0:900x1200/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/F/g/4pgBWPS3KYyZzl07CR2g/foto-1-jm-g1-vertical-900x1200.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://img.freepik.com/fotos-gratis/tiro-vertical-de-uma-cachoeira-que-flui-de-um-penhasco-alto-coberto-de-arvores-verdes_181624-5569.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://images.freeimages.com/images/large-previews/604/vertical-sky-1481104.jpg?fmt=webp&w=350">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://cdn.pixabay.com/photo/2020/03/26/19/37/poppies-4971583_640.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://st3.depositphotos.com/27201292/37212/i/450/depositphotos_372126606-stock-photo-a-vertical-shot-of-two.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/31/3b/1a/raul-verticalrio.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://images.unsplash.com/photo-1526512340740-9217d0159da9?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dmVydGljYWx8ZW58MHx8MHx8fDA%3D">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://img.freepik.com/fotos-gratis/foto-vertical-de-uma-passagem-de-madeira-sobre-um-pequeno-lago-reflexivo-e-uma-cadeia-de-montanhas-no-horizonte_181624-37099.jpg">
            </a>
            </div>
            <div class="cards">
            <a href="/professor/eventos">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfnYmeQQhivSWuPXpSo4-Pn9MFyIE4VmwWog&usqp=CAU">
            </a>
            </div>
        </div>
        </section>
    </main>
    <x-footer />
    <script src="/js/dashboard.js"></script>
</body>