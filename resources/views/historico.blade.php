<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Minhas retiradas</title>@vite('resources/css/app.css')</head>
<body class="app-page">
    <header class="system-header"><div class="system-bar"><a class="back-system" href="{{ url('/sistema') }}">‹</a><strong>Minhas retiradas</strong></div></header>
    <main class="dashboard">
        <div class="stats-grid"><div><strong>{{ $retiradas->count() }}</strong><small>Total</small></div><div><strong>{{ $retiradas->where('status', 'devolvida')->count() }}</strong><small>Devolvidas</small></div><div><strong>{{ $retiradas->where('status', 'em_uso')->count() }}</strong><small>Em uso</small></div></div>
        <p class="section-kicker">01 &nbsp; HISTORICO DE RETIRADAS</p>
        @forelse($retiradas as $retirada)<article class="history-card"><div class="history-top"><strong>{{ $retirada->sala }} · {{ $retirada->bloco }}</strong><em class="status {{ $retirada->status }}">• {{ $retirada->status === 'devolvida' ? 'Devolvida' : 'Em uso' }}</em></div><small>Responsável: você</small><div class="history-times"><span>RETIRADA<strong>{{ $retirada->data_retirada }} {{ substr($retirada->hora_retirada, 0, 5) }}</strong></span><span>DEVOLUÇÃO<strong>{{ $retirada->hora_devolucao ? substr($retirada->hora_devolucao, 0, 5) : 'Pendente' }}</strong></span></div><div class="history-actions">@if($retirada->status === 'em_uso')<form method="POST" action="{{ url('/historico/'.$retirada->id.'/devolver') }}">@csrf @method('PATCH')<button class="mini-button" type="submit">Devolver</button></form>@endif<form method="POST" action="{{ url('/historico/'.$retirada->id) }}">@csrf @method('DELETE')<button class="mini-button delete" type="submit">Excluir</button></form></div></article>@empty<div class="success-note"><strong>Nenhuma retirada ainda</strong><small>Suas movimentações aparecerão aqui.</small></div>@endforelse
    </main>
</body>
</html>
