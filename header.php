<header class="site-header">
    <button type="button" id="menu-toggle" class="menu-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="menu-lateral">
        <img src="assets/img/icone-menu.png" alt="Menu" class="menu-toggle__icon">
    </button>

    <nav id="menu-lateral" class="menu-lateral" aria-hidden="true">
        <div class="menu-lateral__brand">
            <img src="assets/img/icone-menu.png" alt="" class="menu-lateral__logo">
            <span>PM Lab</span>
        </div>
        <ul class="menu-lateral__lista">
            <?php foreach ($menu as $slug => $rotulo): ?>
                <li>
                    <a href="#<?= htmlspecialchars($slug) ?>" class="menu-lateral__link" data-target="<?= htmlspecialchars($slug) ?>">
                        <?= htmlspecialchars($rotulo) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div id="menu-overlay" class="menu-overlay"></div>
</header>
