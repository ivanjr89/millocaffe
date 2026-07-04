<?php
$page_title = $page_title ?? 'Millo Caffè';
$page_description = $page_description ?? 'Millo Caffè é uma cafeteria premium italiana com café artesanal, ambiente sofisticado e experiência gastronômica refinada.';
$body_class = $body_class ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta name="theme-color" content="#111111" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Millo Caffè" />
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?= htmlspecialchars((($canonical_url ?? ('http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ($_SERVER['REQUEST_URI'] ?? '/'))) . 'assets/img/espresso-card.webp')) ?>" />
    <meta property="og:image:alt" content="Millo Caffè - cafeteria premium italiana" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars((($canonical_url ?? ('http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ($_SERVER['REQUEST_URI'] ?? '/'))) . 'assets/img/espresso-card.webp')) ?>" />
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url ?? ('http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ($_SERVER['REQUEST_URI'] ?? '/'))) ?>" />
    <title><?= htmlspecialchars($page_title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" /></noscript>
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="assets/images/favicon.svg" />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CafeOrCoffeeShop",
      "name": "Millo Caffè",
      "description": "<?= htmlspecialchars($page_description) ?>",
      "url": "<?= htmlspecialchars($canonical_url ?? ('http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ($_SERVER['REQUEST_URI'] ?? '/'))) ?>",
      "telephone": "+55-11-3000-0000",
      "servesCuisine": ["Italian", "Coffee"],
      "priceRange": "$$"
    }
    </script>
    <link rel="stylesheet" href="assets/css/variables.css" />
    <link rel="stylesheet" href="assets/css/base.css" />
    <link rel="stylesheet" href="assets/css/layout.css" />
    <link rel="stylesheet" href="assets/css/components.css" />
    <link rel="stylesheet" href="assets/css/pages.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <body class="<?= htmlspecialchars($body_class) ?>">
    <a class="skip-link" href="#main-content">Pular para o conteúdo</a>
