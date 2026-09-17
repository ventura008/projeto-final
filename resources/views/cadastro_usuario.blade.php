<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro | Chaves das Salas</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/cadastro_usuario.js')
</head>

<body class="app-page">
    <header class="app-header">
        <div class="brand-mark sesi-mark" aria-label="SESI">SESI</div>
        <p class="brand-kicker">Sistema de controle</p>
        <h1 class="brand-title">Chaves das Salas</h1>
    </header>

    <main class="auth-card">
        <a class="back-link" href="{{ url('/login') }}">&lsaquo; Voltar para o acesso</a>
        <h1>Criar cadastro</h1>
        <p class="auth-intro">Estes mesmos dados serão usados para entrar.</p>

        <div class="registration-grid">
            <label class="field" for="nome">
                <span class="field-label">Nome completo</span>
                <input class="field-input" type="text" id="nome" name="nome" placeholder="Nome completo" autocomplete="name">
            </label>
            <label class="field" for="email">
                <span class="field-label">E-mail institucional</span>
                <input class="field-input" type="email" id="email" name="email" placeholder="E-mail institucional" autocomplete="email">
            </label>
            <label class="field" for="senha">
                <span class="field-label">Senha</span>
                <input class="field-input" type="password" id="senha" name="senha" placeholder="Crie uma senha" autocomplete="new-password">
            </label>
            <label class="field" for="cpf">
                <span class="field-label">CPF</span>
                <input class="field-input" type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" inputmode="numeric">
            </label>
            <label class="field" for="data_nascimento">
                <span class="field-label">Data de nascimento</span>
                <input class="field-input" type="date" id="data_nascimento" name="data_nascimento">
            </label>
        </div>

        <button id="cadastro_usuario" type="button" class="primary-button">Criar cadastro</button>
        <p class="auth-footer">Já possui cadastro? <a class="auth-link" href="{{ url('/login') }}">Entrar</a></p>
    </div>
</body>

</html>
