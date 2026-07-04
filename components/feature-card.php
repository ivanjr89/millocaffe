<?php
function render_feature_card($image, $icon, $title, $text, $price, $className = '') {
  ob_start();
  ?>
  <article class="card reveal <?= htmlspecialchars($className) ?>">
    <img class="card__image" src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy" decoding="async" />
    <div class="card__body">
      <div class="card__icon"><img src="<?= htmlspecialchars($icon) ?>" alt="" aria-hidden="true" loading="lazy" decoding="async" /></div>
      <h3><?= htmlspecialchars($title) ?></h3>
      <p><?= htmlspecialchars($text) ?></p>
      <span><?= htmlspecialchars($price) ?></span>
    </div>
  </article>
  <?php
  return ob_get_clean();
}
?>
