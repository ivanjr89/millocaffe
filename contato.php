<?php
$page_title = 'Contato | Millo Caffè';
$page_description = 'Entre em contato com a Millo Caffè para reservas, pedidos e informações.';
$page = 'contact';
include 'components/head.php';
include 'components/header.php';
?>

<main id="main-content">
<?php
$eyebrow = 'Contato';
$title = 'Reserve sua mesa ou peça o seu café favorito.';
$text = 'Estamos prontos para acolher você em um espaço elegante, tranquilo e inspirado em tradição italiana.';
include 'components/page-hero.php';
?>

      <section class="section section--light">
        <div class="container contact-grid">
          <div class="reveal">
            <h2 class="section-title">Visite-nos</h2>
            <p class="section-intro">Atendemos de segunda a domingo, das 07:00 às 20:00, com atendimento para reservas, eventos e pedidos especiais.</p>
            <ul class="footer-list">
              <li><a href="tel:+5511999999999">+55 11 99999-9999</a></li>
              <li><a href="mailto:contato@millocaffe.com">contato@millocaffe.com</a></li>
              <li>Via Roma 18, Milano</li>
            </ul>
          </div>
          <div class="card reveal">
            <div class="card__body">
              <h3>Reserva rápida</h3>
              <p>Encontre o horário ideal para sua visita ou experimente nosso serviço de WhatsApp para atendimento imediato.</p>
              <a class="btn btn--primary" href="https://wa.me/5511999999999" target="_blank" rel="noopener">Enviar mensagem</a>
            </div>
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
