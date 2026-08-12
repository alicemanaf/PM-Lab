    <section class="panel" id="contato">
      <h2 class="section-title">Contato</h2>

      <?php foreach ($contato as $bloco): ?>
        <div class="contact-item">
          <h4><?php echo htmlspecialchars($bloco['pergunta']); ?></h4>
          <p><?php echo nl2br(htmlspecialchars($bloco['resposta'])); ?></p>
        </div>
      <?php endforeach; ?>
    </section>
