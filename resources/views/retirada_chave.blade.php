<!DOCTYPE html>
<html lang="pt-BR">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Retirar chave</title>@vite('resources/css/app.css')</head>
<body class="app-page">
    <header class="system-header"><div class="system-bar"><a class="back-system" href="{{ url('/sistema') }}">‹</a><strong>Retirar uma chave</strong></div></header>
    <main class="dashboard">
        <form method="POST" action="{{ url('/retirada') }}" class="system-form">@csrf
            <p class="section-kicker">01 &nbsp; SELECIONE O BLOCO</p><p class="form-help">Escolha onde a sala está localizada.</p>
            <div class="choice-grid"><label><input type="radio" name="bloco" value="Bloco A" required><span>A<small>Bloco A</small></span></label><label><input type="radio" name="bloco" value="Bloco B"><span>B<small>Bloco B</small></span></label><label><input type="radio" name="bloco" value="Bloco C"><span>C<small>Bloco C</small></span></label></div>
            <p class="section-kicker">02 &nbsp; SELECIONE A SALA</p><p class="form-help">Identifique qual chave será retirada.</p>
            <div class="room-list">@foreach(['Novo Ensino Medio','FabLab','Laboratorio de Quimica','LMT','Laboratorio de Fisica'] as $room)<label class="room-option"><input type="radio" name="sala" value="{{ $room }}" required><span>#</span><strong>{{ $room }}</strong><em>• Disponível</em></label>@endforeach</div>
            <p class="section-kicker">03 &nbsp; PERIODO DE UTILIZACAO</p><p class="form-help">Confira os horários antes de confirmar.</p>
            <div class="time-grid"><label>Data<input type="date" name="data_retirada" value="{{ date('Y-m-d') }}" required></label><label>Retirada<input type="time" name="hora_retirada" required></label><label>Devolução<input type="time" name="hora_devolucao" required></label></div>
            <button class="primary-button" type="submit">Confirmar retirada</button>
        </form>
    </main>
</body>
</html>
