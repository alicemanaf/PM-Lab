<div class="secao__conteudo secao__conteudo--cursos">
    <h2 class="titulo-secao">Quais são os cursos?</h2>
    <div class="cards-cursos">
        <?php foreach ($cursos as $curso): ?>
            <div class="card-curso">
                <h3><?= htmlspecialchars($curso['nome']) ?></h3>
                <ul>
                    <?php foreach ($curso['itens'] as $item): ?>
                        <li><?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>
