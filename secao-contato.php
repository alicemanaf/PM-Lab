<div class="secao__conteudo secao__conteudo--contato">
    <h2 class="titulo-secao">Contato</h2>
    <div class="lista-contato">
        <?php foreach ($contato as $bloco): ?>
            <div class="item-contato">
                <h4><?= htmlspecialchars($bloco['pergunta']) ?></h4>
                <p><?= nl2br(htmlspecialchars($bloco['resposta'])) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
