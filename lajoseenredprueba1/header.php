<?php
$page_title       = $page_title       ?? 'La Jose En Red · Foro Estudiantil';
$page_description = $page_description ?? 'Foro estudiantil de podcasts, videos, debates y contenido audiovisual. ¡Tu voz, tu medio, tu comunidad!';
$page_og_image    = $page_og_image    ?? 'img/og/default.jpg';

$current_page = basename($_SERVER['PHP_SELF']);

// ── Definición del menú ─────────────────────────────────────────
$menu_items = [
    'index.php'    => ['icon' => '🏠',  'label' => 'Inicio',    'cta' => false],
    'podcasts.php' => ['icon' => '🎙️',  'label' => 'Podcasts',  'cta' => false],
    'videos.php'   => ['icon' => '🎬',  'label' => 'Videos',    'cta' => false],
    'debate.php'   => ['icon' => '💬',  'label' => 'Debate',    'cta' => false],
    'galeria.php'  => ['icon' => '🖼️',  'label' => 'Galería',   'cta' => false],
    'bitacora.php' => ['icon' => '📓',  'label' => 'Bitácora',  'cta' => false],
    'nosotros.php' => ['icon' => '👥',  'label' => 'Nosotros',  'cta' => false],
    'iniciar.php'=> ['icon' => '✨',  'label' => 'Únete',     'cta' => true ],
];

// ── Ticker dinámico ─────────────────────────────────────────────
$ticker_items = [
    '🎙️ Nuevo Episodio Disponible',
    '🎬 Videos Semanales',
    '💡 Debates en Vivo',
    '🎵 Música Estudiantil',
    '🔬 Ciencia & Tecnología',
    '🎨 Arte & Cultura',
    '📻 Radio Escolar',
    '🌟 ¡Sube tu Contenido!',
];
// Duplicar para loop CSS continuo
$ticker_items = array_merge($ticker_items, $ticker_items);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">

  <!-- Open Graph / Redes Sociales -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:image"       content="<?= htmlspecialchars($page_og_image) ?>">
  <meta name="twitter:card"       content="summary_large_image">

  <!-- Favicon SVG inline -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🎙️</text></svg>">

  <!-- Fuentes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 (grid / utilidades) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Principal -->
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- ╔══════════════════════════════════════════╗
     ║               NAVBAR                     ║
     ╚══════════════════════════════════════════╝ -->
<nav class="navbar" id="mainNav" role="navigation" aria-label="Navegación principal">

  <a href="index.php" class="nav-logo" aria-label="La Jose En Red — Inicio">
    <img src="img/logo.png" alt="Logo La Jose En Red" width="56" height="56">
    <div class="nav-logo-text">
      La Jose<br>
      <span>en red</span>
    </div>
  </a>

  <ul class="nav-links" id="navLinks" role="list">
    <?php foreach ($menu_items as $url => $data):
      $isActive  = ($current_page === $url);
      $classes   = [];
      if ($data['cta'])   $classes[] = 'nav-cta';
      if ($isActive)      $classes[] = 'active';
      $classAttr = !empty($classes) ? 'class="' . implode(' ', $classes) . '"' : '';
      $ariaCurrent = $isActive ? 'aria-current="page"' : '';
    ?>
      <li role="listitem">
        <a href="<?= htmlspecialchars($url) ?>" <?= $classAttr ?> <?= $ariaCurrent ?>>
          <?php if (!$data['cta']): ?>
            <span class="nav-icon" aria-hidden="true"><?= $data['icon'] ?></span>
          <?php endif; ?>
          <?= htmlspecialchars($data['label']) ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <button
    class="nav-toggle"
    id="navToggle"
    aria-label="Abrir menú de navegación"
    aria-expanded="false"
    aria-controls="navLinks"
  >
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
  </button>
</nav>

<!-- ╔══════════════════════════════════════════╗
     ║            TICKER TAPE                   ║
     ╚══════════════════════════════════════════╝ -->
<div class="ticker-wrap" style="margin-top: var(--nav-h, 80px);" aria-hidden="true">
  <div class="ticker-inner">
    <?php foreach ($ticker_items as $item): ?>
      <span><?= htmlspecialchars($item) ?></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ╔══════════════════════════════════════════╗
     ║     SCRIPTS DEL HEADER (navbar)          ║
     ╚══════════════════════════════════════════╝ -->
<script>
(function () {
  'use strict';

  const nav    = document.getElementById('mainNav');
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');

  /* ── Scroll: clase scrolled ── */
  const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 30);
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ── Hamburger ── */
  toggle.addEventListener('click', () => {
    const isOpen = links.classList.toggle('open');
    toggle.setAttribute('aria-expanded', isOpen);
    const [b1, b2, b3] = toggle.querySelectorAll('span');
    if (isOpen) {
      b1.style.cssText = 'transform:rotate(45deg) translate(5px,5px)';
      b2.style.cssText = 'opacity:0; transform:scaleX(0)';
      b3.style.cssText = 'transform:rotate(-45deg) translate(5px,-5px)';
    } else {
      [b1, b2, b3].forEach(b => b.style.cssText = '');
    }
  });

  /* ── Cerrar menú al hacer click en un enlace ── */
  links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    links.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.querySelectorAll('span').forEach(b => b.style.cssText = '');
  }));

  /* ── Cerrar menú con Escape ── */
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && links.classList.contains('open')) {
      links.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
      toggle.querySelectorAll('span').forEach(b => b.style.cssText = '');
      toggle.focus();
    }
  });
})();
</script>
