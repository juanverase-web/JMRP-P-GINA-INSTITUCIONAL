<?php
$current_page = basename($_SERVER['PHP_SELF']);
$menu_items = [
    'index.php'    => ['icon' => '🏠', 'label' => 'Inicio',    'cta' => false],
    'podcasts.php' => ['icon' => '🎙️', 'label' => 'Podcasts',  'cta' => false],
    'videos.php'   => ['icon' => '🎬', 'label' => 'Videos',    'cta' => false],
    'debate.php'   => ['icon' => '💬', 'label' => 'Debate',    'cta' => false],
    'galeria.php'  => ['icon' => '🖼️', 'label' => 'Galería',   'cta' => false],
    'bitacora.php' => ['icon' => '📓', 'label' => 'Bitácora',  'cta' => false],
    'nosotros.php' => ['icon' => '👥', 'label' => 'Nosotros',  'cta' => false],
    'iniciar.php'  => ['icon' => '✨', 'label' => 'Únete',     'cta' => false],
];
?>

<nav class="navbar" id="mainNav">
  <a href="index.php" class="nav-logo" aria-label="Volver al inicio">
    <img src="img/logo.png" alt="Logo La Jose En Red">
    <div class="nav-logo-text">
      La Jose<br>
      <span>en red</span>
    </div>
  </a>

  <ul class="nav-links" id="navLinks">
    <?php foreach ($menu_items as $url => $data): ?>
      <?php 
        // Lógica de estado activo profesional
        $isActive = ($current_page === $url) ? 'active' : '';
        $classAttr = $data['cta'] ? 'class="nav-cta"' : ($isActive ? 'class="active"' : '');
      ?>
      <li>
        <a href="<?= htmlspecialchars($url) ?>" <?= $classAttr ?>>
          <?php if (!$data['cta']): ?>
            <span class="nav-icon"><?= $data['icon'] ?></span>
          <?php endif; ?>
          <?= $data['label'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>

  <button class="nav-toggle" id="navToggle" aria-label="Abrir menú de navegación" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="ticker-wrap" style="margin-top: var(--nav-h, 80px);">
  <div class="ticker-inner">
    <span>🎙️ Nuevo Episodio Disponible</span>
    <span>🎬 Videos Semanales</span>
    <span>💡 Debates en Vivo</span>
    <span>🎵 Música Estudiantil</span>
    <span>🔬 Ciencia & Tecnología</span>
    <span>🎨 Arte & Cultura</span>
    <span>📻 Radio Escolar</span>
    <span>🌟 ¡Sube tu Contenido!</span>
    <span>🎙️ Nuevo Episodio Disponible</span>
    <span>🎬 Videos Semanales</span>
    <span>💡 Debates en Vivo</span>
    <span>🎵 Música Estudiantil</span>
    <span>🔬 Ciencia & Tecnología</span>
    <span>🎨 Arte & Cultura</span>
    <span>📻 Radio Escolar</span>
    <span>🌟 ¡Sube tu Contenido!</span>
  </div>
</div>
<?php
session_start();
if($_SESSION){
    $_SESSION['tipo']=0;
}
if($_SESSION['tipo']==0){?>
    <li><a href="iniciar.php" class="btn-iniciar">Iniciar Sesión</a></li>
    <?php
    }else { ?>
    <li><a href="cerrar.php"  class="btn-iniciar">Cerrar Sesión</a></li>
    
    <?php }?>
<?php

    

