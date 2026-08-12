    <section class="panel" id="sobre-curso">
      <h2 class="section-title">Sobre o curso</h2>
      <div class="text-block">
        <p><?php echo htmlspecialchars($sobre_curso); ?></p>
      </div>

      <h2 class="section-title" id="porque">Por que fazer esse curso?</h2>
      <div class="text-block">
        <p><?php echo htmlspecialchars($porque_curso); ?></p>
      </div>
    </section>

    <section class="panel" id="cursos">
      <h2 class="section-title">Quais são os cursos?</h2>
      <div class="courses-grid">
        <?php foreach ($cursos as $letra => $itens): ?>
          <div class="course-card">
            <h4>Curso <?php echo htmlspecialchars($letra); ?></h4>
            <ul>
              <?php foreach ($itens as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
