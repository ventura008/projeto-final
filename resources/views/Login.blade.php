<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acesso | Chaves das Salas</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/login.js')
</head>

<body class="app-page">
    <header class="app-header">
        <div class="brand-mark sesi-mark" aria-label="SESI">SESI</div>
        <p class="brand-kicker">Sistema de controle</p>
        <h1 class="brand-title">Chaves das Salas</h1>
    </header>

    <main class="auth-card">
        <h1>Acessar sistema</h1>
        <p class="auth-intro">Entre usando o e-mail e a senha cadastrados.</p>
        <label class="field" for="email">
            <span class="field-label">E-mail institucional</span>
            <input class="field-input" type="email" id="email" placeholder="seu@email.com" autocomplete="email">
        </label>
        <label class="field" for="senha">
            <span class="field-label">Senha</span>
            <input class="field-input" type="password" id="senha" placeholder="Digite sua senha" autocomplete="current-password">
        </label>
        <button type="button" id="entrar" class="primary-button">Entrar no sistema</button>
        <p class="auth-footer">Ainda não possui cadastro? <a class="auth-link" href="{{ url('/cadastro_usuario') }}">Cadastre-se</a></p>
    </main>

</body>

</html>
