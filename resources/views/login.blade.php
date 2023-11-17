<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Login</title>
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="/css/login_cadastro.css">
    <!-- Link para a fonte 'Noto Sans' do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Cabeçalho da página -->
    <div class="header">
        <!-- Logo -->
        <div class="logo">
            <img src="/img/logo350.png" alt="" srcset="">
        </div>
        <!-- Título -->
        <div class="title"> 
            <h1>Fazer login</h1>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="container">
        <!-- Formulário de login -->
        <form id="loginForm" action="{{ route('login.store') }}" method="post">
            @csrf
            <div>
                <!-- Campo de usuário ou email -->
                <div class="input-container usuario">
                    <label for="user-email">Usuário ou email:</label><br>
                    <input type="text" name="email" id="user-email" required placeholder="Digite seu usuário ou email">
                </div>
                <!-- Campo de senha -->
                <div class="input-container password">
                    <label for="password">Senha:</label><br>
                    <input type="password" name="senha" id="password" required placeholder="Digite sua senha">
                </div>
                <!-- Botão de envio do formulário -->
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>

    <!-- Opções adicionais -->
    <div class="opcoes">
        <!-- Link para criar uma conta -->
        <span>Não tem conta? <a href="/cadastro">Criar conta</a></span>
        <!-- Link para alterar a senha -->
        <span>Esqueceu a senha? <a href="">Alterar senha</a></span>
    </div>
</body>
</html>