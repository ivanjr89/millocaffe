<?php
$page_title = 'Cardápio | Millo Caffè';
$page_description = 'Explore o cardápio da Millo Caffè com cafés especiais, doces artesanais e paninis.';
$page = 'menu';
include 'components/head.php';
include 'components/header.php';
?>

<main id="main-content">
<?php
$eyebrow = 'Cardápio';
$title = 'Uma seleção de cafés, doces e salgadas preparadas com excelência.';
$text = 'Da clássica experiência espresso à mesa com croissant e panini, cada item é pensado para agradar ao paladar mais refinado.';
include 'components/page-hero.php';
?>

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

<?php include 'components/footer.php'; ?>

<script defer src="assets/js/performance.js"></script>
<script defer src="assets/js/app.js"></script>
<script defer src="assets/js/menu.js"></script>
<script defer src="assets/js/reveal.js"></script>
</body>
</html>
