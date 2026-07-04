<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Conheça a história, a filosofia e o ambiente da Millo Caffè." />
    <title>Quem Somos | Millo Caffè</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/variables.css" />
    <link rel="stylesheet" href="assets/css/typography.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animations.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <body>
    <header class="site-header" id="top">
      <div class="container nav-shell">
        <a href="index.html" class="brand" aria-label="Millo Caffè home">Millo <span>Caffè</span></a>
        <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false">☰</button>
        <nav class="site-nav" aria-label="Navegação principal">
          <a href="quem-somos.html">Quem Somos</a>
          <a href="cardapio.html">Cardápio</a>
          <a href="contato.html">Contato</a>
        </nav>
        <a class="nav-cta" href="contato.html">Reservar</a>
      </div>
    </header>

    <main id="main-content">
      <section class="hero hero--inner">
        <div class="container hero__content hero__content--inner reveal">
          <div>
            <p class="eyebrow">Quem Somos</p>
            <h1>Uma cafeteria italiana concebida com precisão, elegância e alma.</h1>
            <p>Nossa proposta é reunir tradição italiana, visão contemporânea e cuidado exclusivo em cada experiência.</p>
          </div>
        </div>
      </section>

      <section class="section section--light">
        <div class="container essence-grid">
          <div class="reveal">
            <p class="section-label">Nossa Filosofia</p>
            <h2 class="section-title">Café com personalidade, ritual e presença.</h2>
            <p class="section-intro">Na Millo Caffè, cada xícara é preparada com respeito à origem do grão, à técnica do barista e à sensibilidade do cliente.</p>
          </div>
          <div class="essence-points reveal">
            <article>
              <h3>Origem</h3>
              <p>Selecionamos grãos de produtores que valorizam qualidade, ética e sabores profundos.</p>
            </article>
            <article>
              <h3>Estética</h3>
              <p>Materiais naturais, linhas limpas e iluminação suave criam um ambiente premium.</p>
            </article>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container footer-grid">
        <div>
          <a href="index.html" class="brand" aria-label="Millo Caffè home">Millo <span>Caffè</span></a>
          <p>Uma cafeteria premium italiana feita para quem valoriza detalhe e excelência.</p>
        </div>
        <div>
          <h3>Navegação</h3>
          <ul class="footer-list">
            <li><a href="quem-somos.html">Quem Somos</a></li>
            <li><a href="cardapio.html">Cardápio</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </div>
        <div>
          <h3>Contato</h3>
          <ul class="footer-list">
            <li><a href="tel:+5511999999999">+55 11 99999-9999</a></li>
            <li><a href="mailto:contato@millocaffe.com">contato@millocaffe.com</a></li>
          </ul>
        </div>
      </div>
      <div class="container footer-bottom">
        <span>© <span id="year"></span> Millo Caffè. Todos os direitos reservados.</span>
      </div>
    </footer>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/reveal.js"></script>
  </body>
</html>
