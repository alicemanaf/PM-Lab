document.addEventListener('DOMContentLoaded', function () {
  var track      = document.querySelector('.scroll-track');
  var body       = document.body;
  var menuBtn    = document.querySelector('.menu-toggle');
  var sideMenu   = document.querySelector('.side-menu');
  var scrim      = document.querySelector('.menu-scrim');
  var menuLinks  = document.querySelectorAll('.side-menu nav a');
  var topLogo    = document.querySelector('.top-logo');

  /* ---------------------------------------------------------
     1) Rolagem infinita: duplicamos o conjunto de seções uma
        vez. Quando o usuário atravessa o limite de um conjunto,
        "teletransportamos" o scroll de forma invisível para o
        ponto equivalente no outro conjunto.
  --------------------------------------------------------- */
  // Clona o conjunto de seções para criar a ilusão de loop,
  // removendo os IDs do clone para não duplicar identificadores.
  var clone = track.cloneNode(true);
  clone.querySelectorAll('[id]').forEach(function (el) {
    el.removeAttribute('id');
  });
  while (clone.firstChild) {
    track.appendChild(clone.firstChild);
  }

  var setHeight = track.scrollHeight / 2;
  var isJumping = false;

  function handleInfiniteLoop() {
    if (isJumping) return;
    var y = window.scrollY;

    if (y >= setHeight * 2 - window.innerHeight * 0.5) {
      isJumping = true;
      window.scrollTo(0, y - setHeight);
      isJumping = false;
    } else if (y < setHeight * 0.02) {
      isJumping = true;
      window.scrollTo(0, y + setHeight);
      isJumping = false;
    }
  }

  // Começa um pouco dentro do primeiro conjunto para permitir rolar "para cima" também
  window.scrollTo(0, 4);

  window.addEventListener('scroll', function () {
    handleInfiniteLoop();
    updateTopLogo();
  }, { passive: true });

  /* ---------------------------------------------------------
     2) Logo "PM Lab" some/aparece perto do topo, como no
        protótipo (aparece quando o usuário já rolou um pouco).
  --------------------------------------------------------- */
  function updateTopLogo() {
    if (window.scrollY % setHeight > 40) {
      topLogo.classList.add('is-visible');
    } else {
      topLogo.classList.remove('is-visible');
    }
  }
  updateTopLogo();

  /* ---------------------------------------------------------
     3) Menu lateral (botão átomo)
  --------------------------------------------------------- */
  function openMenu() {
    body.classList.add('menu-open');
    menuBtn.setAttribute('aria-expanded', 'true');
  }
  function closeMenu() {
    body.classList.remove('menu-open');
    menuBtn.setAttribute('aria-expanded', 'false');
  }
  function toggleMenu() {
    body.classList.contains('menu-open') ? closeMenu() : openMenu();
  }

  menuBtn.addEventListener('click', toggleMenu);
  scrim.addEventListener('click', closeMenu);
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  /* ---------------------------------------------------------
     4) Navegação do menu: rola suavemente até a seção
        correspondente dentro do PRIMEIRO conjunto de seções.
  --------------------------------------------------------- */
  menuLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      var targetId = link.getAttribute('href').replace('#', '');
      var target = document.getElementById(targetId);
      if (target) {
        var top = target.getBoundingClientRect().top + window.scrollY - 10;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
      closeMenu();
    });
  });
});
