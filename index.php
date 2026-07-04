<?php
$page_title = 'Millo Caffè | Cafeteria Premium Italiana';
$page_description = 'Millo Caffè é uma cafeteria premium italiana com espresso artesanal, ambiente sofisticado e experiência gastronômica refinada.';
$page = 'home';
include 'components/head.php';
include 'components/header.php';
?>

<main id="main-content">
      <section class="hero">
        <div class="container hero__content">
          <div class="hero__copy reveal">
            <p class="eyebrow">Café italiano • Ritual moderno • Espresso artesanal</p>
            <h1>Uma experiência de café que se sente como arte.</h1>
            <p>Da moagem ao último gole, cada detalhe é pensado para oferecer uma experiência elegante, acolhedora e memorável.</p>
            <div class="hero__actions">
              <a class="btn btn--primary" href="cardapio.php">Descobrir o Cardápio</a>
              <a class="btn btn--secondary" href="contato.php">Visitar a Cafeteria</a>
            </div>
            <div class="hero__highlights">
              <div>
                <strong>Grãos especiais</strong>
                <span>Origem controlada</span>
              </div>
              <div>
                <strong>Crema velvet</strong>
                <span>Em cada espresso</span>
              </div>
              <div>
                <strong>Aberto todos os dias</strong>
                <span>07:00 às 20:00</span>
              </div>
            </div>
          </div>

          <aside class="hero__card reveal" aria-label="Bebidas em destaque">
            <p class="hero__card-label">Hoje na casa</p>
            <h2 id="slider-title">Espresso Romano</h2>
            <p id="slider-description">Um café intenso, encorpado e profundamente refinado.</p>
            <ul>
              <li><span>Espresso Romano</span><strong>R$ 15</strong></li>
              <li><span>Golden Cappuccino</span><strong>R$ 18</strong></li>
              <li><span>Velvet Latte</span><strong>R$ 20</strong></li>
            </ul>
          </aside>
        </div>

        <div class="scroll-indicator">
          <span>Role para explorar</span>
          <div class="scroll-indicator__line"></div>
        </div>
      </section>

      <section class="section section--light" id="essencia">
        <div class="container essence-grid">
          <div class="reveal">
            <p class="section-label">Nossa Essência</p>
            <h2 class="section-title">Luxury em cada detalhe.</h2>
            <p class="section-intro">Millo Caffè une tradição italiana, design contemporâneo e uma execução impecável para criar um espaço sofisticado para café, conversa e pausa.</p>
            <a class="btn btn--primary" href="quem-somos.php">Conhecer a Marca</a>
          </div>
          <div class="essence-points reveal">
            <article>
              <h3>Torrefação artesanal</h3>
              <p>Grãos selecionados com notas de caramelo, especiarias e flores.</p>
            </article>
            <article>
              <h3>Ambiente refinado</h3>
              <p>Madeira, mármore e iluminação suave transformam cada visita em ritual.</p>
            </article>
            <article>
              <h3>Hospitalidade italiana</h3>
              <p>Atendimento preciso, acolhedor e alinhado ao padrão de excelência.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section" id="products">
        <div class="container">
          <div class="section-heading reveal">
            <div>
              <p class="section-label">Produtos em Destaque</p>
              <h2 class="section-title">Sips de assinatura e doces artesanais.</h2>
            </div>
            <a class="text-link" href="cardapio.php">Ver o cardápio completo</a>
          </div>

          <div class="product-grid">
            <article class="card reveal">
              <div class="card__media">
                <img class="card__image" src="assets/img/cafes/espresso-640.webp" srcset="assets/img/cafes/espresso-640.webp 640w, assets/img/cafes/espresso-960.webp 960w, assets/img/cafes/espresso-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 33vw" alt="Espresso italiano servido em xícara elegante" width="640" height="400" loading="lazy" decoding="async" />
              </div>
              <div class="card__body">
                <div class="card__icon"><img src="assets/icons/espresso.svg" alt="Ícone de espresso" loading="lazy" /></div>
                <h3>Espresso Italiano</h3>
                <p>Corpo intenso, aroma nobre e uma crema impecável.</p>
                <span>R$ 15</span>
              </div>
            </article>
            <article class="card reveal">
              <div class="card__media">
                <img class="card__image" src="assets/img/cafes/tiramisu-640.webp" srcset="assets/img/cafes/tiramisu-640.webp 640w, assets/img/cafes/tiramisu-960.webp 960w, assets/img/cafes/tiramisu-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 33vw" alt="Dolce artesanal com textura premium" width="640" height="400" loading="lazy" decoding="async" />
              </div>
              <div class="card__body">
                <div class="card__icon"><img src="assets/icons/pastry.svg" alt="Ícone de doce" loading="lazy" /></div>
                <h3>Dolci Artesanais</h3>
                <p>Doces preparados diariamente com manteiga, amêndoas e essência de baunilha.</p>
                <span>R$ 18</span>
              </div>
            </article>
            <article class="card reveal">
              <div class="card__media">
                <img class="card__image" src="assets/img/cafes/croissant-640.webp" srcset="assets/img/cafes/croissant-640.webp 640w, assets/img/cafes/croissant-960.webp 960w, assets/img/cafes/croissant-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 33vw" alt="Panini e croissants em mesa premium" width="640" height="400" loading="lazy" decoding="async" />
              </div>
              <div class="card__body">
                <div class="card__icon"><img src="assets/icons/panini.svg" alt="Ícone de panini" loading="lazy" /></div>
                <h3>Panini & Croissants</h3>
                <p>Massas crocantes e recheios refinados para acompanhar seu café.</p>
                <span>R$ 24</span>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section ambient-section" id="ambiente">
        <div class="container ambient-grid">
          <div class="ambient-media reveal">
            <img src="assets/img/ambiente/ambiente-01-640.webp" srcset="assets/img/ambiente/ambiente-01-640.webp 640w, assets/img/ambiente/ambiente-01-960.webp 960w, assets/img/ambiente/ambiente-01-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 50vw" alt="Interior sofisticado da cafeteria Millo Caffè" width="640" height="480" loading="lazy" decoding="async" />
          </div>
          <div class="ambient-copy reveal">
            <p class="section-label">Ambiente</p>
            <h2 class="section-title">Uma atmosfera para desacelerar e se inspirar.</h2>
            <p class="section-intro">Janelas amplas, luz difusa e uma disposição cuidadosa de mesas criam uma experiência serena para trabalho, encontro ou descanso.</p>
            <a class="btn btn--primary" href="contato.php">Agendar uma visita</a>
          </div>
        </div>
      </section>

      <section class="section section--dark" id="instagram">
        <div class="container">
          <div class="section-heading section-heading--light reveal">
            <div>
              <p class="section-label">Instagram</p>
              <h2 class="section-title">Moments que inspiram o nosso universo.</h2>
            </div>
            <a class="text-link text-link--light" href="https://www.instagram.com" target="_blank" rel="noopener">@millo.caffe</a>
          </div>

          <div class="gallery-grid">
            <a class="gallery-card reveal" href="https://www.instagram.com" target="_blank" rel="noopener">
              <img src="assets/img/instagram/instagram-01-640.webp" srcset="assets/img/instagram/instagram-01-640.webp 640w, assets/img/instagram/instagram-01-960.webp 960w, assets/img/instagram/instagram-01-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 33vw" alt="Café premium servido em ambiente elegante" width="640" height="480" loading="lazy" decoding="async" />
            </a>
            <a class="gallery-card reveal" href="https://www.instagram.com" target="_blank" rel="noopener">
              <img src="assets/img/instagram/instagram-02-640.webp" srcset="assets/img/instagram/instagram-02-640.webp 640w, assets/img/instagram/instagram-02-960.webp 960w, assets/img/instagram/instagram-02-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 33vw" alt="Mesa com café, croissant e decoração sofisticada" width="640" height="480" loading="lazy" decoding="async" />
            </a>
            <a class="gallery-card reveal" href="https://www.instagram.com" target="_blank" rel="noopener">
              <img src="assets/img/instagram/instagram-03-640.webp" srcset="assets/img/instagram/instagram-03-640.webp 640w, assets/img/instagram/instagram-03-960.webp 960w, assets/img/instagram/instagram-03-1440.webp 1440w" sizes="(max-width: 768px) 100vw, 33vw" alt="Momento de café com estética premium" width="640" height="480" loading="lazy" decoding="async" />
            </a>
          </div>
        </div>
      </section>
    </main>

<?php include 'components/footer.php'; ?>

<script defer src="assets/js/performance.js"></script>
<script defer src="assets/js/app.js"></script>
<script defer src="assets/js/slider.js"></script>
<script defer src="assets/js/reveal.js"></script>
</body>
</html>
