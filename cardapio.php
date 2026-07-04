<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Explore o cardápio da Millo Caffè com cafés especiais, doces artesanais e paninis." />
    <title>Cardápio | Millo Caffè</title>
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
            <p class="eyebrow">Cardápio</p>
            <h1>Uma seleção de cafés, doces e salgadas preparadas com excelência.</h1>
            <p>Da clássica experiência espresso à mesa com croissant e panini, cada item é pensado para agradar ao paladar mais refinado.</p>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="menu-filters reveal" role="tablist" aria-label="Filtrar cardápio">
            <button class="filter-btn is-active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="cafe">Cafés</button>
            <button class="filter-btn" data-filter="doce">Doces</button>
            <button class="filter-btn" data-filter="salgado">Salgados</button>
          </div>

          <div class="product-grid">
            <article class="card reveal" data-category="cafe">
              <div class="card__body">
                <h3>Espresso Signature</h3>
                <p>Intenso, equilibrado e com crema brilhante.</p>
                <span>R$ 15</span>
              </div>
            </article>
            <article class="card reveal" data-category="cafe">
              <div class="card__body">
                <h3>Cappuccino Milano</h3>
                <p>Espuma cremosa e notas de cacau e baunilha.</p>
                <span>R$ 18</span>
              </div>
            </article>
            <article class="card reveal" data-category="doce">
              <div class="card__body">
                <h3>Torta de Noz</h3>
                <p>Textura macia, frutos secos e café em cada camada.</p>
                <span>R$ 24</span>
              </div>
            </article>
            <article class="card reveal" data-category="salgado">
              <div class="card__body">
                <h3>Panini de Parma</h3>
                <p>Presunto cru, queijo brie e rúcula em pão artesanal.</p>
                <span>R$ 29</span>
              </div>
            </article>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container footer-grid">
        <div>
          <a href="index.html" class="brand" aria-label="Millo Caffè home">Millo <span>Caffè</span></a>
          <p>Cardápio fino, café especial e ambiente acolhedor.</p>
        </div>
      </div>
      <div class="container footer-bottom">
        <span>© <span id="year"></span> Millo Caffè. Todos os direitos reservados.</span>
      </div>
    </footer>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/reveal.js"></script>
  </body>
</html>
