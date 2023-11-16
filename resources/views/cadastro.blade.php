<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod&Hub - Realizar Cadastro</title>
    <!-- Link para o arquivo CSS de estilo específico para o cadastro -->
    <link rel="stylesheet" href="/css/login_cadastro.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <div class="header">
        <!-- Logo (substitua o src com a imagem do logotipo) -->
        <div class="logo">
            <img src="/img/logo350.png" alt="" srcset="">
        </div>
        <!-- Título da página -->
        <div class="title"> 
            <h1>Realizar cadastro</h1>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="container">
        <!-- Formulário de cadastro -->
        <form id="cadastroForm" action="{{ route('cadastro.store') }}" method="POST">
            @csrf
            <div>
                <!-- Campo de usuário -->
                <div class="input-container usuario">
                    <label for="usuario">Usuário:</label><br>
                    <input type="text" name="usuario" id="usuario" required placeholder="Digite seu usuário">
                </div>
                <!-- Campo de email -->
                <div class="input-container">
                    <label for="email">E-mail:</label><br>
                    <input type="email" name="email" id="email" required placeholder="Digite seu email">
                </div>
                <!-- Campo de matrícula -->
                <div class="input-container">
                    <label for="matricula">Matricula:</label><br>
                    <input type="text" name="matricula" id="matricula" required placeholder="Digite sua matricula">
                </div>
                <!-- Campo de senha -->
                <div class="input-container">
                    <label for="password">Senha:</label><br>
                    <input type="password" name="senha" id="password" required placeholder="Digite sua senha">
                </div>
                <!-- Botão de envio do formulário -->
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>