<?php
$page_title = 'Quem Somos | Millo Caffè';
$page_description = 'Conheça a história, a filosofia e o ambiente da Millo Caffè.';
$page = 'about';
include 'components/head.php';
include 'components/header.php';
?>

<main id="main-content">
<?php
$eyebrow = 'Quem Somos';
$title = 'Uma cafeteria italiana concebida com precisão, elegância e alma.';
$text = 'Nossa proposta é reunir tradição italiana, visão contemporânea e cuidado exclusivo em cada experiência.';
include 'components/page-hero.php';
?>

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

<?php include 'components/footer.php'; ?>

<script defer src="assets/js/performance.js"></script>
<script defer src="assets/js/app.js"></script>
<script defer src="assets/js/reveal.js"></script>
</body>
</html>
