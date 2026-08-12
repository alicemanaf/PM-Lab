<?php
/**
 * conteudo.php
 * Todos os textos do site ficam centralizados aqui.
 * Para editar qualquer texto do site, basta alterar os valores abaixo.
 */

$menu = [
    'professor' => 'Sobre o professor',
    'curso'     => 'Sobre o curso',
    'porque'    => 'Por que fazer o curso?',
    'cursos'    => 'Cursos',
    'metodo'    => 'Metodo',
    'contato'   => 'Contato',
];

$professor = [
    'nome' => 'Pedro Manaf Filho',
    'bio'  => 'Pedro nasceu na cidade de santo andre. Fez tecnico em eletrica com 14 anos, desde então vem trabalhando na area. Ingressou no ramo da educação em 1984, dado aulas e palestrar de diversos assuntos englobando eletrica, eletronica e mecatronica.',
    'foto' => 'assets/img/foto-professor.jpg',
    // Preencher com a experiência profissional do professor
    'experiencia' => [
        // 'Ex: Técnico eletricista - Empresa X (1998-2005)',
    ],
    // Preencher com a formação acadêmica do professor
    'formacao' => [
        // 'Ex: Técnico em Eletrotécnica - ETEC',
    ],
];

$sobreCurso = 'São 3 cursos disponiveis, divididos em modulos com suas respectivas aulas cada abordado o assunto chave do modulo. Quando um modulo é encerrado serão passados exercicios para reforçar o que foi aprendido, ao encerrar o ultimo modulo de aprendizado o ultimo do curso disponibilizara atividades do conteudo geral.';

$porqueFazer = 'Embora não seja disponibilizado um certificado, o curso possibilita maior entendimento sobre diversas matérias vistas durante a formação na área de elétrica, são abordados conceitos fundamentais auxiliando os estudantes reforçando o que se é aprendido em aula.';

$cursos = [
    [
        'nome' => 'curso A',
        'itens' => ['Material didatico', 'Aulas remotas em tempo real', 'Aulas gravadas em modulos'],
    ],
    [
        'nome' => 'curso B',
        'itens' => ['Aulas remotas', 'Aulas presenciais', 'Material didatico', 'Aulas gravadas em modulos'],
    ],
    [
        'nome' => 'curso C',
        'itens' => ['Material didatico', 'Aulas gravadas em modulos'],
    ],
];

$metodo = [
    'paragrafo1' => 'O metodo de ensino utilizado em cada curso foi meticulosamente progamado com os conhecimetos fornecidos por anos de experiencia do professor.',
    'paragrafo2' => 'Baseado nas 3 bases de aprendizado: visual, escrito e reforço pratico; o professor Pedro garante um processo inteligente e eficiente com suas aulas didaticas, material de apoio e resolução de exercicios para serem feitos antes, depois e durante a aula, com auxilio do professor, do material didatico criado pelo mesmo e as gravações das aulas.',
];

$contato = [
    [
        'pergunta' => 'Interessado em contratar um curso?',
        'resposta' => 'Entre em contato pelo email: financeiro.pmlab@gmail.com',
    ],
    [
        'pergunta' => 'Precisa tirar alguma informação?',
        'resposta' => 'Converse comigo pelo email: duvidas.pmlab@gmail.com',
    ],
    [
        'pergunta' => 'Quer conhecer a didatica do professor?',
        'resposta' => "O professor Pedro tem um canal de dicas de eletrica no youtube, acesse: PM Lab Dicas\nOu veja o linkedin: Pedro Manaf Filho\nSiga o instagram: Pm Lab",
    ],
];
