document.addEventListener('DOMContentLoaded', function () {

    /* ---------------------------------------------------------
       Menu lateral (botão átomo)
    --------------------------------------------------------- */
    var toggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('menu-lateral');
    var overlay = document.getElementById('menu-overlay');

    function abrirMenu() {
        menu.classList.add('aberto');
        overlay.classList.add('ativo');
        menu.setAttribute('aria-hidden', 'false');
        toggle.setAttribute('aria-expanded', 'true');
    }

    function fecharMenu() {
        menu.classList.remove('aberto');
        overlay.classList.remove('ativo');
        menu.setAttribute('aria-hidden', 'true');
        toggle.setAttribute('aria-expanded', 'false');
    }

    toggle.addEventListener('click', function () {
        if (menu.classList.contains('aberto')) {
            fecharMenu();
        } else {
            abrirMenu();
        }
    });

    overlay.addEventListener('click', fecharMenu);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            fecharMenu();
        }
    });

    /* ---------------------------------------------------------
       Rolagem estilo carrossel com efeito infinito
       Estrutura das seções dentro do #scroll-container:
       [0] clone da última     -> usado apenas para permitir subir "antes" da primeira
       [1..N] seções reais
       [N+1] clone da primeira -> usado para permitir descer "depois" da última
    --------------------------------------------------------- */
    var container = document.getElementById('scroll-container');
    var secoes = container.querySelectorAll('.secao');
    var total = secoes.length;
    var primeiraReal = 1;
    var ultimaReal = total - 2;

    function irParaIndice(indice, suave) {
        var altura = container.clientHeight;
        container.scrollTo({
            top: indice * altura,
            behavior: suave ? 'smooth' : 'auto'
        });
    }

    // posiciona no início real, sem animação, assim que a página carrega
    irParaIndice(primeiraReal, false);

    var timeoutRolagem = null;

    container.addEventListener('scroll', function () {
        if (timeoutRolagem) {
            clearTimeout(timeoutRolagem);
        }
        // aguarda a rolagem parar (efeito de "snap" já concluído)
        timeoutRolagem = setTimeout(function () {
            var altura = container.clientHeight;
            var indiceAtual = Math.round(container.scrollTop / altura);

            if (indiceAtual === 0) {
                // chegou no clone do início (rolando para cima) -> pula para a última real
                irParaIndice(ultimaReal, false);
            } else if (indiceAtual === total - 1) {
                // chegou no clone do final (rolando para baixo) -> pula para a primeira real
                irParaIndice(primeiraReal, false);
            }
        }, 120);
    }, { passive: true });

    /* ---------------------------------------------------------
       Cliques no menu lateral levam à seção correspondente
    --------------------------------------------------------- */
    var links = menu.querySelectorAll('.menu-lateral__link');
    links.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            var alvo = link.getAttribute('data-target');
            var secaoAlvo = document.getElementById(alvo);
            if (secaoAlvo) {
                var indice = Array.prototype.indexOf.call(secoes, secaoAlvo);
                irParaIndice(indice, true);
            }
            fecharMenu();
        });
    });

    // reposiciona corretamente se a janela for redimensionada
    var redimensionandoTimeout = null;
    window.addEventListener('resize', function () {
        if (redimensionandoTimeout) {
            clearTimeout(redimensionandoTimeout);
        }
        redimensionandoTimeout = setTimeout(function () {
            var altura = container.clientHeight;
            var indiceAtual = Math.round(container.scrollTop / altura);
            irParaIndice(indiceAtual, false);
        }, 150);
    });
});
