    <section class="panel hero" id="professor">
      <h1 class="hero-title">Seja Bem Vindo!</h1>
      <p class="eyebrow">Sobre o seu professor</p>

      <div class="professor-block">
        <div class="professor-photo">
          <img src="<?php echo htmlspecialchars($professor['foto']); ?>" alt="Foto do professor <?php echo htmlspecialchars($professor['nome']); ?>">
        </div>
        <div class="professor-text">
          <h3><?php echo htmlspecialchars($professor['nome']); ?></h3>
          <p><?php echo htmlspecialchars($professor['bio']); ?></p>
        </div>
      </div>

      <div class="two-col">
        <div>
          <h4>Experiência</h4>
          <div class="glass-card">
            <?php if (empty($experiencia)): ?>
              <span class="placeholder-hint">Em breve.</span>
            <?php else: ?>
              <ul>
                <?php foreach ($experiencia as $item): ?>
                  <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
        <div>
          <h4>Formação</h4>
          <div class="glass-card">
            <?php if (empty($formacao)): ?>
              <span class="placeholder-hint">Em breve.</span>
            <?php else: ?>
              <ul>
                <?php foreach ($formacao as $item): ?>
                  <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
