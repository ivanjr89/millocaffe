<?php $currentPage = $page ?? 'home'; ?>
<header class="site-header" id="top">
  <div class="container nav-shell">
    <a href="index.php" class="brand" aria-label="Millo Caffè home">Millo <span>Caffè</span></a>
    <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false">☰</button>
    <nav class="site-nav" aria-label="Navegação principal">
      <a href="quem-somos.php" class="<?= $currentPage === 'about' ? 'is-active' : '' ?>">Quem Somos</a>
      <a href="cardapio.php" class="<?= $currentPage === 'menu' ? 'is-active' : '' ?>">Cardápio</a>
      <a href="contato.php" class="<?= $currentPage === 'contact' ? 'is-active' : '' ?>">Contato</a>
    </nav>
    <a class="nav-cta" href="contato.php">Reservar</a>
  </div>
</header>
