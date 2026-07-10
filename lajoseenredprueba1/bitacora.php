<?php
/**
 * bitacora.php — Bitácora Editorial · La Jose En Red
 */
$page_title       = 'Bitácora · La Jose En Red';
$page_description = 'El diario editorial de La Jose En Red: crónicas, reflexiones y novedades de la comunidad estudiantil de La José.';
$page_og_image    = 'img/og/bitacora.jpg';
require_once 'header.php';

// ── Categorías de post ──────────────────────────────────────────
$categorias = [
  'todos'       => ['label'=>'Todos',          'icon'=>'📋'],
  'cronica'     => ['label'=>'Crónica',         'icon'=>'✍️'],
  'reflexion'   => ['label'=>'Reflexión',       'icon'=>'💭'],
  'novedad'     => ['label'=>'Novedades',       'icon'=>'📢'],
  'entrevista'  => ['label'=>'Entrevista',      'icon'=>'🎤'],
  'tutorial'    => ['label'=>'Tutorial',        'icon'=>'📖'],
];

// ── Artículos de bitácora ───────────────────────────────────────
$articulos = [
  [
    'id'       => 1,
    'cat'      => 'novedad',
    'emoji'    => '🚀',
    'titulo'   => 'Lanzamos la Nueva Plataforma de La Jose En Red',
    'extracto' => 'Después de meses de desarrollo, diseño y pruebas, llega la versión 2.0 de nuestra plataforma. Más rápida, más accesible y con nuevas secciones para toda la comunidad.',
    'autor'    => 'Daniela Cardona',
    'fecha'    => '18 mayo 2026',
    'lectura'  => '4 min',
    'color'    => 'linear-gradient(135deg,#ff2d78,#a020f0)',
    'destacado'=> true,
  ],
  [
    'id'       => 2,
    'cat'      => 'cronica',
    'emoji'    => '🏆',
    'titulo'   => 'La Noche que Ganamos el Premio de Periodismo',
    'extracto' => 'Una crónica del viaje a Medellín para recibir el galardón departamental. De los nervios en el taxi al llanto de alegría en el escenario, todo desde adentro.',
    'autor'    => 'Valentina Ríos',
    'fecha'    => '10 mayo 2026',
    'lectura'  => '7 min',
    'color'    => 'linear-gradient(135deg,#ffe600,#ff6b00)',
    'destacado'=> false,
  ],
  [
    'id'       => 3,
    'cat'      => 'reflexion',
    'emoji'    => '🤖',
    'titulo'   => '¿Debemos Usar IA para Hacer Periodismo Escolar?',
    'extracto' => 'La inteligencia artificial entró a nuestras redacciones sin pedir permiso. Una reflexión honesta sobre lo que ganamos, lo que perdemos y cómo establecemos límites éticos.',
    'autor'    => 'Santiago Mejía',
    'fecha'    => '3 mayo 2026',
    'lectura'  => '6 min',
    'color'    => 'linear-gradient(135deg,#00f5ff,#0060ff)',
    'destacado'=> false,
  ],
  [
    'id'       => 4,
    'cat'      => 'entrevista',
    'emoji'    => '🎤',
    'titulo'   => '"Todo Joven Tiene una Historia que Vale la Pena Contar"',
    'extracto' => 'Entrevistamos a Natalia Zuluaga, periodista de Teleantioquia y exalumna de La José. Nos habló de sus inicios, sus errores y por qué el periodismo local importa más que nunca.',
    'autor'    => 'Isabela Mora',
    'fecha'    => '25 abril 2026',
    'lectura'  => '9 min',
    'color'    => 'linear-gradient(135deg,#39ff14,#00b894)',
    'destacado'=> false,
  ],
  [
    'id'       => 5,
    'cat'      => 'tutorial',
    'emoji'    => '🎙️',
    'titulo'   => 'Cómo Grabar un Podcast con Tu Celular (y que Suene Bien)',
    'extracto' => 'No necesitas equipo profesional para hacer buen audio. En este tutorial te enseñamos trucos de grabación, edición básica y plataformas gratuitas para empezar hoy mismo.',
    'autor'    => 'Tomás Villada',
    'fecha'    => '17 abril 2026',
    'lectura'  => '8 min',
    'color'    => 'linear-gradient(135deg,#bf5fff,#ff2d78)',
    'destacado'=> false,
  ],
  [
    'id'       => 6,
    'cat'      => 'cronica',
    'emoji'    => '🌿',
    'titulo'   => 'El Día que el Patio de la Escuela se Convirtió en Estudio',
    'extracto' => 'Crónica del especial de biodiversidad que grabamos al aire libre. Entre iguanas, mariposas y el rumor de las clases vecinas, descubrimos que el mejor estudio siempre estuvo aquí.',
    'autor'    => 'Valentina Ríos',
    'fecha'    => '8 abril 2026',
    'lectura'  => '5 min',
    'color'    => 'linear-gradient(135deg,#00f5ff,#39ff14)',
    'destacado'=> false,
  ],
  [
    'id'       => 7,
    'cat'      => 'reflexion',
    'emoji'    => '📱',
    'titulo'   => 'Redes Sociales vs. Medios Escolares: ¿Podemos Coexistir?',
    'extracto' => 'Instagram y TikTok se llevan la atención de los estudiantes. ¿Es posible para un medio escolar competir con eso? Spoiler: no debemos competir, debemos ser complementarios.',
    'autor'    => 'Isabela Mora',
    'fecha'    => '1 abril 2026',
    'lectura'  => '5 min',
    'color'    => 'linear-gradient(135deg,#ffe600,#a020f0)',
    'destacado'=> false,
  ],
  [
    'id'       => 8,
    'cat'      => 'tutorial',
    'emoji'    => '🎬',
    'titulo'   => 'Edita tu Primer Video con DaVinci Resolve (Gratis)',
    'extracto' => 'El editor profesional que usan en Hollywood está disponible sin costo. Te guiamos paso a paso desde importar tus clips hasta exportar el video final listo para YouTube.',
    'autor'    => 'Santiago Mejía',
    'fecha'    => '24 marzo 2026',
    'lectura'  => '10 min',
    'color'    => 'linear-gradient(135deg,#ff6b00,#ff2d78)',
    'destacado'=> false,
  ],
];

// Artículo destacado
$destacado = array_values(array_filter($articulos, fn($a) => $a['destacado']))[0] ?? null;
$resto     = array_values(array_filter($articulos, fn($a) => !$a['destacado']));

// Autores únicos para sidebar
$autores = array_unique(array_column($articulos, 'autor'));
sort($autores);
?>

<!-- ╔══════════════════════════════════════════╗
     ║           HERO BITÁCORA                  ║
     ╚══════════════════════════════════════════╝ -->
<section class="page-hero" aria-labelledby="bit-heading">
  <div class="hero-bg-orbs" aria-hidden="true">
    <div class="orb orb-1" style="background:var(--neon-green);"></div>
    <div class="orb orb-2" style="background:var(--neon-pink);"></div>
    <div class="orb orb-3" style="background:var(--neon-cyan);"></div>
  </div>
  <div class="page-hero-content">
    <div class="hero-badge"><span class="badge-dot"></span>Diario Editorial</div>
    <h1 id="bit-heading">Todo lo que<br><span class="grad-text">pensamos en voz alta.</span></h1>
    <p class="hero-subtitle">Crónicas, reflexiones, tutoriales y novedades desde la redacción de La Jose En Red. Sin filtros, solo verdad estudiantil.</p>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║         ARTÍCULO DESTACADO               ║
     ╚══════════════════════════════════════════╝ -->
<?php if ($destacado): ?>
<section style="padding:4rem 2rem 2rem;" aria-label="Artículo destacado">
  <div style="max-width:1100px;margin:0 auto;">
    <div class="section-header fade-in" style="margin-bottom:2rem;">
      <span class="section-tag">⭐ Destacado</span>
      <h2 class="section-title">Lo más <span class="highlight">reciente</span></h2>
    </div>
    <a href="entrada.php?id=<?= $destacado['id'] ?>" class="bit-featured fade-in" aria-label="Leer: <?= htmlspecialchars($destacado['titulo']) ?>">
      <div class="bit-featured-thumb" style="background:<?= $destacado['color'] ?>;" aria-hidden="true">
        <span><?= $destacado['emoji'] ?></span>
      </div>
      <div class="bit-featured-body">
        <span class="bit-cat-badge"><?= htmlspecialchars($categorias[$destacado['cat']]['icon']) ?> <?= htmlspecialchars($categorias[$destacado['cat']]['label']) ?></span>
        <h2><?= htmlspecialchars($destacado['titulo']) ?></h2>
        <p><?= htmlspecialchars($destacado['extracto']) ?></p>
        <div class="bit-meta">
          <span>✍️ <?= htmlspecialchars($destacado['autor']) ?></span>
          <span>📅 <?= htmlspecialchars($destacado['fecha']) ?></span>
          <span>⏱ <?= htmlspecialchars($destacado['lectura']) ?> de lectura</span>
        </div>
        <span class="btn-primary" style="display:inline-flex;margin-top:1.5rem;font-size:.85rem;">Leer artículo completo →</span>
      </div>
    </a>
  </div>
</section>
<?php endif; ?>

<!-- ╔══════════════════════════════════════════╗
     ║       FILTROS + GRID + SIDEBAR           ║
     ╚══════════════════════════════════════════╝ -->
<section id="articulos" style="padding:2rem 2rem 5rem;" aria-labelledby="art-heading">
  <div style="max-width:1100px;margin:0 auto;" class="bit-layout">

    <!-- Columna principal -->
    <div class="bit-main">
      <div class="section-header fade-in" style="text-align:left;align-items:flex-start;margin-bottom:1.5rem;">
        <h2 class="section-title" id="art-heading">Todos los <span class="highlight">Artículos</span></h2>
      </div>

      <!-- Filtros -->
      <div class="gal-filters fade-in" role="group" aria-label="Filtrar artículos">
        <?php foreach ($categorias as $key => $data): ?>
          <button
            class="gal-filter-btn <?= $key === 'todos' ? 'active' : '' ?>"
            data-filter="<?= $key ?>"
            aria-pressed="<?= $key === 'todos' ? 'true' : 'false' ?>"
          ><?= htmlspecialchars($data['icon']) ?> <?= htmlspecialchars($data['label']) ?></button>
        <?php endforeach; ?>
      </div>

      <!-- Artículos -->
      <div id="artGrid">
        <?php foreach ($resto as $art): ?>
          <article
            class="bit-card fade-in"
            data-cat="<?= htmlspecialchars($art['cat']) ?>"
          >
            <a href="entrada.php?id=<?= $art['id'] ?>" class="bit-card-link" aria-label="Leer: <?= htmlspecialchars($art['titulo']) ?>">
              <div class="bit-card-thumb" style="background:<?= $art['color'] ?>;" aria-hidden="true">
                <span><?= $art['emoji'] ?></span>
              </div>
              <div class="bit-card-body">
                <span class="bit-cat-badge"><?= htmlspecialchars($categorias[$art['cat']]['icon']) ?> <?= htmlspecialchars($categorias[$art['cat']]['label']) ?></span>
                <h3><?= htmlspecialchars($art['titulo']) ?></h3>
                <p><?= htmlspecialchars($art['extracto']) ?></p>
                <div class="bit-meta">
                  <span>✍️ <?= htmlspecialchars($art['autor']) ?></span>
                  <span>📅 <?= htmlspecialchars($art['fecha']) ?></span>
                  <span>⏱ <?= htmlspecialchars($art['lectura']) ?></span>
                </div>
              </div>
            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- Estado vacío -->
      <div id="artEmpty" class="gal-empty" hidden>
        <span style="font-size:3rem;">✍️</span>
        <p>Aún no hay artículos en esta categoría.<br>¡Sé el primero en escribir!</p>
        <a href="comunidad.php" class="btn-primary" style="margin-top:1rem;">📝 Escribir artículo</a>
      </div>
    </div>

    <!-- Sidebar -->
    <aside class="bit-sidebar fade-in" aria-label="Información adicional">

      <!-- Buscador -->
      <div class="sidebar-widget">
        <h4 class="sidebar-title">🔍 Buscar</h4>
        <div class="bit-search-wrap">
          <input
            type="search"
            id="bitSearch"
            class="bit-search"
            placeholder="Buscar artículos…"
            aria-label="Buscar artículos en la bitácora"
          >
        </div>
      </div>

      <!-- Estadísticas -->
      <div class="sidebar-widget">
        <h4 class="sidebar-title">📊 Estadísticas</h4>
        <div class="sidebar-stats">
          <div class="ss-item"><span class="ss-num"><?= count($articulos) ?></span><span>Artículos</span></div>
          <div class="ss-item"><span class="ss-num"><?= count($autores) ?></span><span>Autores</span></div>
          <div class="ss-item"><span class="ss-num"><?= count($categorias)-1 ?></span><span>Categorías</span></div>
        </div>
      </div>

      <!-- Categorías -->
      <div class="sidebar-widget">
        <h4 class="sidebar-title">🗂️ Categorías</h4>
        <ul class="sidebar-cat-list">
          <?php foreach ($categorias as $key => $data):
            if ($key === 'todos') continue;
            $count = count(array_filter($articulos, fn($a) => $a['cat'] === $key));
          ?>
            <li>
              <button class="sidebar-cat-btn gal-filter-btn" data-filter="<?= $key ?>" style="width:100%;text-align:left;border-radius:10px;">
                <?= htmlspecialchars($data['icon']) ?> <?= htmlspecialchars($data['label']) ?>
                <span class="sidebar-cat-count"><?= $count ?></span>
              </button>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Autores -->
      <div class="sidebar-widget">
        <h4 class="sidebar-title">✍️ Redactores</h4>
        <ul class="sidebar-authors">
          <?php foreach ($autores as $autor):
            $count = count(array_filter($articulos, fn($a) => $a['autor'] === $autor));
          ?>
            <li class="sa-item">
              <div class="sa-avatar" aria-hidden="true"><?= mb_substr($autor, 0, 1) ?></div>
              <div>
                <div class="sa-name"><?= htmlspecialchars($autor) ?></div>
                <div class="sa-count"><?= $count ?> artículo<?= $count !== 1 ? 's' : '' ?></div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- CTA lateral -->
      <div class="sidebar-widget sidebar-cta">
        <span style="font-size:2rem;" aria-hidden="true">📝</span>
        <h4>¿Quieres escribir?</h4>
        <p>Únete a la redacción y comparte tus ideas con toda la comunidad.</p>
        <a href="comunidad.php" class="btn-primary" style="font-size:.82rem;padding:.6rem 1.2rem;margin-top:.75rem;display:inline-flex;">Quiero Escribir</a>
      </div>

    </aside>
  </div>
</section>

<?php require_once 'footer.php'; ?>

<!-- ─── Estilos + Script exclusivos de Bitácora ─────────────── -->
<style>
/* Reutiliza .page-hero, .gal-filters, .gal-filter-btn de galería */
.page-hero { position:relative; min-height:55vh; display:flex; align-items:center; justify-content:center; text-align:center; padding:calc(var(--nav-h) + 4rem) 1.5rem 4rem; overflow:hidden; }
.page-hero-content { position:relative; z-index:2; max-width:700px; }
.page-hero h1 { font-family:var(--font-head); font-size:clamp(2.4rem,6vw,5rem); font-weight:800; line-height:1.05; letter-spacing:-.03em; }

/* Gal filters (copiados para independencia) */
.gal-filters { display:flex; gap:.6rem; flex-wrap:wrap; margin-bottom:2rem; }
.gal-filter-btn { padding:.45rem 1.1rem; border-radius:50px; border:1px solid var(--glass-border); background:rgba(255,255,255,.04); color:var(--text-muted); font-family:var(--font-body); font-size:.82rem; font-weight:700; cursor:pointer; transition:all .25s; letter-spacing:.04em; }
.gal-filter-btn:hover { border-color:rgba(0,245,255,.4); color:var(--neon-cyan); }
.gal-filter-btn.active, .gal-filter-btn[aria-pressed="true"] { background:rgba(255,45,120,.18); border-color:rgba(255,45,120,.5); color:var(--neon-pink); }
.gal-empty { text-align:center; padding:4rem 2rem; color:var(--text-muted); }
.gal-empty p { margin-top:.75rem; font-size:.95rem; line-height:1.7; }

/* Artículo destacado */
.bit-featured {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: 2.5rem;
  background: var(--dark-card);
  border: 1px solid rgba(255,45,120,.25);
  border-radius: 24px;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
  backdrop-filter: blur(16px);
  transition: transform .3s, box-shadow .3s;
}
.bit-featured:hover { transform:translateY(-4px); box-shadow:0 24px 60px rgba(0,0,0,.5); }
.bit-featured-thumb {
  min-height: 320px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 5rem;
}
.bit-featured-body { padding: 2.5rem 2.5rem 2.5rem 0; display:flex; flex-direction:column; justify-content:center; }
.bit-featured-body h2 { font-family:var(--font-head); font-size:1.7rem; font-weight:800; margin:1rem 0 .75rem; line-height:1.2; }
.bit-featured-body p { color:var(--text-muted); font-size:.92rem; line-height:1.75; }

/* Categoría badge */
.bit-cat-badge { display:inline-flex; align-items:center; gap:.3rem; font-size:.72rem; font-weight:800; letter-spacing:.08em; text-transform:uppercase; background:rgba(0,245,255,.12); color:var(--neon-cyan); border:1px solid rgba(0,245,255,.25); border-radius:50px; padding:.2rem .75rem; }

/* Meta */
.bit-meta { display:flex; gap:1.25rem; flex-wrap:wrap; font-size:.78rem; color:var(--text-muted); margin-top:.75rem; }

/* Layout con sidebar */
.bit-layout { display:grid; grid-template-columns: 1fr 300px; gap:2.5rem; align-items:start; }

/* Tarjetas de artículo */
.bit-card {
  background: var(--dark-card);
  border: 1px solid var(--glass-border);
  border-radius: 18px;
  overflow: hidden;
  backdrop-filter: blur(12px);
  margin-bottom: 1.25rem;
  transition: transform .3s, border-color .3s;
}
.bit-card:hover { transform:translateY(-3px); border-color:rgba(0,245,255,.3); }
.bit-card.hidden { display:none; }
.bit-card-link { display:grid; grid-template-columns:120px 1fr; text-decoration:none; color:inherit; }
.bit-card-thumb { min-height:130px; display:flex; align-items:center; justify-content:center; font-size:2.5rem; flex-shrink:0; }
.bit-card-body { padding:1.25rem; }
.bit-card-body h3 { font-family:var(--font-head); font-size:1rem; font-weight:800; margin:.5rem 0 .4rem; line-height:1.3; }
.bit-card-body p { font-size:.82rem; color:var(--text-muted); line-height:1.6; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden; }

/* Sidebar */
.bit-sidebar { position:sticky; top:calc(var(--nav-h) + 1.5rem); }
.sidebar-widget { background:var(--dark-card); border:1px solid var(--glass-border); border-radius:18px; padding:1.5rem; margin-bottom:1.25rem; backdrop-filter:blur(12px); }
.sidebar-title { font-family:var(--font-head); font-size:.85rem; font-weight:800; letter-spacing:.1em; text-transform:uppercase; color:var(--text-muted); margin-bottom:1rem; }

/* Search */
.bit-search-wrap { position:relative; }
.bit-search { width:100%; background:rgba(255,255,255,.05); border:1px solid var(--glass-border); border-radius:10px; padding:.6rem 1rem; color:var(--text-main); font-family:var(--font-body); font-size:.88rem; transition:border-color .2s; }
.bit-search:focus { outline:none; border-color:rgba(0,245,255,.5); box-shadow:0 0 0 3px rgba(0,245,255,.1); }
.bit-search::placeholder { color:var(--text-muted); }

/* Sidebar stats */
.sidebar-stats { display:flex; gap:1rem; }
.ss-item { flex:1; text-align:center; }
.ss-num { display:block; font-family:var(--font-head); font-size:1.4rem; font-weight:800; background:linear-gradient(135deg,var(--neon-pink),var(--neon-cyan)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.ss-item > span:last-child { font-size:.72rem; color:var(--text-muted); font-weight:700; letter-spacing:.06em; text-transform:uppercase; }

/* Cat list sidebar */
.sidebar-cat-list { list-style:none; display:flex; flex-direction:column; gap:.4rem; }
.sidebar-cat-btn { display:flex; justify-content:space-between; align-items:center; }
.sidebar-cat-count { background:rgba(255,255,255,.08); border-radius:50px; padding:.1rem .5rem; font-size:.72rem; }

/* Authors */
.sidebar-authors { list-style:none; display:flex; flex-direction:column; gap:.75rem; }
.sa-item { display:flex; align-items:center; gap:.75rem; }
.sa-avatar { width:34px; height:34px; border-radius:50%; background:linear-gradient(135deg,var(--neon-pink),var(--neon-cyan)); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); font-weight:800; font-size:.9rem; flex-shrink:0; }
.sa-name { font-size:.85rem; font-weight:700; }
.sa-count { font-size:.74rem; color:var(--text-muted); }

/* CTA sidebar */
.sidebar-cta { text-align:center; border-color:rgba(255,45,120,.2); }
.sidebar-cta h4 { font-family:var(--font-head); font-size:1rem; font-weight:800; margin:.5rem 0 .3rem; }
.sidebar-cta p { font-size:.82rem; color:var(--text-muted); line-height:1.6; }

/* Responsive */
@media (max-width: 900px) {
  .bit-layout { grid-template-columns:1fr; }
  .bit-sidebar { position:static; }
  .bit-featured { grid-template-columns:1fr; }
  .bit-featured-thumb { min-height:200px; }
  .bit-featured-body { padding:1.5rem; }
}
@media (max-width: 600px) {
  .bit-card-link { grid-template-columns:90px 1fr; }
  .bit-card-thumb { min-height:100px; font-size:1.8rem; }
}
</style>

<script>
(function(){
  'use strict';

  /* ── Filtros (main + sidebar) ── */
  const allBtns  = document.querySelectorAll('.gal-filter-btn');
  const cards    = document.querySelectorAll('.bit-card');
  const empty    = document.getElementById('artEmpty');

  const applyFilter = (filter) => {
    /* Sincronizar todos los botones */
    allBtns.forEach(b => {
      const match = b.dataset.filter === filter;
      b.classList.toggle('active', match);
      b.setAttribute('aria-pressed', match ? 'true' : 'false');
    });

    let visible = 0;
    cards.forEach(card => {
      const show = filter === 'todos' || card.dataset.cat === filter;
      card.classList.toggle('hidden', !show);
      if (show) visible++;
    });
    empty.hidden = visible > 0;
  };

  allBtns.forEach(btn => btn.addEventListener('click', () => applyFilter(btn.dataset.filter)));

  /* ── Búsqueda en tiempo real ── */
  const searchInput = document.getElementById('bitSearch');
  searchInput.addEventListener('input', () => {
    const q = searchInput.value.trim().toLowerCase();
    let visible = 0;

    /* Resetear filtros de categoría visualmente */
    if (q) {
      allBtns.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-pressed','false'); });
    } else {
      applyFilter('todos');
      return;
    }

    cards.forEach(card => {
      const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
      const body  = card.querySelector('p')?.textContent.toLowerCase()  || '';
      const show  = title.includes(q) || body.includes(q);
      card.classList.toggle('hidden', !show);
      if (show) visible++;
    });
    empty.hidden = visible > 0;
  });
})();
</script>
