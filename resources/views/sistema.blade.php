<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | Chaves das Salas</title>
    @vite('resources/css/app.css')
</head>

<body class="app-page">
    <header class="system-header"><div class="system-bar"><div class="brand-mark small sesi-mark" aria-label="SESI">SESI</div><strong>Sistema de Chaves</strong><a href="{{ url('/sair') }}" class="header-exit">Sair</a></div></header>
    <main class="dashboard">
        <section class="welcome-panel"><div class="brand-mark tiny">g</div><div><p>OLÁ, BEM-VINDO!</p><h1>{{ $usuario->nome }}</h1></div></section>
        <p class="section-kicker">O QUE DESEJA FAZER?</p>
        <div class="action-list">
            <a class="action-card" href="{{ url('/retirada') }}"><span class="action-icon blue">K</span><span><strong>Retirar uma chave</strong><small>Solicite uma chave para utilizar uma sala.</small></span><b>›</b></a>
            <a class="action-card" href="{{ url('/historico') }}"><span class="action-icon green">↩</span><span><strong>Devolver uma chave</strong><small>Registre a devolução de uma chave.</small></span><b>›</b></a>
            <a class="action-card" href="{{ url('/historico') }}"><span class="action-icon purple">≡</span><span><strong>Minhas retiradas</strong><small>Acompanhe as chaves sob sua responsabilidade.</small></span><b>›</b></a>
        </div>
        <div class="success-note"><strong>Tudo certo por aqui</strong><small>Você pode consultar ou registrar suas chaves.</small></div>
        <a class="danger-button" href="{{ url('/sair') }}">Sair da conta</a>
    </main>
</body>

</html>