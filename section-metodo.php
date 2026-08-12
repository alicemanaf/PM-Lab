    <section class="panel" id="metodo">
      <h2 class="section-title">Método</h2>
      <div class="text-block">
        <?php foreach ($metodo as $paragrafo): ?>
          <p><?php echo htmlspecialchars($paragrafo); ?></p><br>
        <?php endforeach; ?>
      </div>
    </section>
