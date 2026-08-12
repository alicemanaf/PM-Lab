<div class="secao__conteudo secao__conteudo--professor">
    <h1 class="titulo-boas-vindas">Seja Bem Vindo!</h1>
    <h2 class="subtitulo">Sobre o seu professor</h2>

    <div class="bloco-professor">
        <div class="bloco-professor__foto">
            <img src="<?= htmlspecialchars($professor['foto']) ?>" alt="Foto de <?= htmlspecialchars($professor['nome']) ?>">
        </div>
        <div class="bloco-professor__texto">
            <h3><?= htmlspecialchars($professor['nome']) ?></h3>
            <p><?= htmlspecialchars($professor['bio']) ?></p>
        </div>
    </div>

    <div class="cards-duplos">
        <div class="card-info">
            <h4>Experiencia</h4>
            <ul>
                <?php foreach ($professor['experiencia'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="card-info">
            <h4>Formação</h4>
            <ul>
                <?php foreach ($professor['formacao'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
