<?php
/**
 * galeria.php — Galería Visual · La Jose En Red
 */
$page_title       = 'Galería · La Jose En Red';
$page_description = 'Fotografías, ilustraciones y arte digital creado por los estudiantes de La José. Momentos que cuentan nuestra historia.';
$page_og_image    = 'img/og/galeria.jpg';
require_once 'header.php';

// ── Categorías de filtro ────────────────────────────────────────
$filtros = [
  'todos'       => 'Todos',
  'fotografia'  => 'Fotografía',
  'ilustracion' => 'Ilustración',
  'audiovisual' => 'Audiovisual',
  'eventos'     => 'Eventos',
  'arte'        => 'Arte Digital',
];

// ── Datos de galería (en producción vendrían de BD + archivos reales) ──
$items = [
  ['id'=>1,  'cat'=>'fotografia',  'emoji'=>'🎙️', 'titulo'=>'Estudio de Grabación',         'autor'=>'Valentina R.', 'fecha'=>'Mayo 2026',   'likes'=>47, 'color'=>'linear-gradient(135deg,#ff2d78,#a020f0)'],
  ['id'=>2,  'cat'=>'audiovisual', 'emoji'=>'📡',  'titulo'=>'Antena al Cielo',               'autor'=>'Santiago M.',  'fecha'=>'Mayo 2026',   'likes'=>38, 'color'=>'linear-gradient(135deg,#00f5ff,#0060ff)'],
  ['id'=>3,  'cat'=>'audiovisual', 'emoji'=>'🎬',  'titulo'=>'Detrás de Cámaras',             'autor'=>'Club Video',   'fecha'=>'Abril 2026',  'likes'=>61, 'color'=>'linear-gradient(135deg,#ffe600,#ff6b00)'],
  ['id'=>4,  'cat'=>'arte',        'emoji'=>'🎵',  'titulo'=>'Onda Sonora',                   'autor'=>'Tomás V.',     'fecha'=>'Abril 2026',  'likes'=>29, 'color'=>'linear-gradient(135deg,#39ff14,#00b894)'],
  ['id'=>5,  'cat'=>'ilustracion', 'emoji'=>'🎨',  'titulo'=>'Paleta Futurista',              'autor'=>'Daniela C.',   'fecha'=>'Marzo 2026',  'likes'=>83, 'color'=>'linear-gradient(135deg,#bf5fff,#ff2d78)'],
  ['id'=>6,  'cat'=>'fotografia',  'emoji'=>'📸',  'titulo'=>'Mirada al Futuro',              'autor'=>'Isabela M.',   'fecha'=>'Marzo 2026',  'likes'=>55, 'color'=>'linear-gradient(135deg,#00f5ff,#39ff14)'],
  ['id'=>7,  'cat'=>'eventos',     'emoji'=>'🏆',  'titulo'=>'Premio Periodismo Estudiantil', 'autor'=>'La Redacción', 'fecha'=>'Feb 2026',    'likes'=>112,'color'=>'linear-gradient(135deg,#ffe600,#a020f0)'],
  ['id'=>8,  'cat'=>'fotografia',  'emoji'=>'🌿',  'titulo'=>'Patio Central — Amanecer',     'autor'=>'Valentina R.', 'fecha'=>'Feb 2026',    'likes'=>44, 'color'=>'linear-gradient(135deg,#39ff14,#0060ff)'],
  ['id'=>9,  'cat'=>'ilustracion', 'emoji'=>'🦋',  'titulo'=>'Metamorfosis Digital',         'autor'=>'Tomás V.',     'fecha'=>'Ene 2026',    'likes'=>76, 'color'=>'linear-gradient(135deg,#ff2d78,#ffe600)'],
  ['id'=>10, 'cat'=>'arte',        'emoji'=>'🌌',  'titulo'=>'Universo Estudiantil',         'autor'=>'Daniela C.',   'fecha'=>'Ene 2026',    'likes'=>91, 'color'=>'linear-gradient(135deg,#a020f0,#00f5ff)'],
  ['id'=>11, 'cat'=>'eventos',     'emoji'=>'🎤',  'titulo'=>'Feria de Talentos 2025',       'autor'=>'Club Foto',    'fecha'=>'Nov 2025',    'likes'=>67, 'color'=>'linear-gradient(135deg,#ff6b00,#ff2d78)'],
  ['id'=>12, 'cat'=>'audiovisual', 'emoji'=>'🎞️',  'titulo'=>'Cortometraje: Raíces',        'autor'=>'Santiago M.',  'fecha'=>'Oct 2025',    'likes'=>88, 'color'=>'linear-gradient(135deg,#00f5ff,#bf5fff)'],
];
?>

<!-- ╔══════════════════════════════════════════╗
     ║           HERO GALERÍA                   ║
     ╚══════════════════════════════════════════╝ -->
<section class="page-hero" aria-labelledby="gal-heading">
  <div class="hero-bg-orbs" aria-hidden="true">
    <div class="orb orb-1" style="background:var(--neon-yellow);"></div>
    <div class="orb orb-2" style="background:var(--neon-purple);"></div>
    <div class="orb orb-3" style="background:var(--neon-cyan);"></div>
  </div>
  <div class="page-hero-content">
    <div class="hero-badge"><span class="badge-dot"></span>Arte & Fotografía</div>
    <h1 id="gal-heading">Momentos que<br><span class="grad-text">cuentan todo.</span></h1>
    <p class="hero-subtitle">Fotografías, ilustraciones y arte digital creados por los estudiantes de La José. Cada imagen tiene una historia.</p>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║          ESTADÍSTICAS GALERÍA            ║
     ╚══════════════════════════════════════════╝ -->
<section style="padding:3rem 2rem 0;" aria-label="Estadísticas de la galería">
  <div class="gal-stats-bar fade-in">
    <div class="gal-stat"><span class="stat-num"><?= count($items) ?>+</span><span class="stat-label">Obras</span></div>
    <div class="gal-stat"><span class="stat-num"><?= count($filtros)-1 ?></span><span class="stat-label">Categorías</span></div>
    <div class="gal-stat"><span class="stat-num">18</span><span class="stat-label">Artistas</span></div>
    <div class="gal-stat"><span class="stat-num">730+</span><span class="stat-label">Me gusta totales</span></div>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║         FILTROS + GRILLA GALERÍA         ║
     ╚══════════════════════════════════════════╝ -->
<section id="galeria-grid" style="padding:3rem 2rem 5rem;" aria-labelledby="gal-grid-heading">
  <div style="max-width:1200px;margin:0 auto;">

    <!-- Filtros -->
    <div class="gal-filters fade-in" role="group" aria-label="Filtrar galería por categoría">
      <?php foreach ($filtros as $key => $label): ?>
        <button
          class="gal-filter-btn <?= $key === 'todos' ? 'active' : '' ?>"
          data-filter="<?= $key ?>"
          aria-pressed="<?= $key === 'todos' ? 'true' : 'false' ?>"
        ><?= htmlspecialchars($label) ?></button>
      <?php endforeach; ?>
    </div>

    <!-- Grilla Masonry -->
    <div class="gal-grid" id="galGrid" aria-label="Galería de obras">
      <?php foreach ($items as $item): ?>
        <article
          class="gal-item fade-in"
          data-cat="<?= htmlspecialchars($item['cat']) ?>"
          aria-label="<?= htmlspecialchars($item['titulo']) ?> por <?= htmlspecialchars($item['autor']) ?>"
        >
          <!-- Imagen / Emoji representativo -->
          <div class="gal-thumb" style="background:<?= $item['color'] ?>;" aria-hidden="true">
            <span class="gal-emoji"><?= $item['emoji'] ?></span>
          </div>

          <!-- Overlay en hover -->
          <div class="gal-overlay" aria-hidden="true">
            <div class="gal-overlay-content">
              <h3><?= htmlspecialchars($item['titulo']) ?></h3>
              <p>Por <?= htmlspecialchars($item['autor']) ?> · <?= htmlspecialchars($item['fecha']) ?></p>
              <div class="gal-overlay-actions">
                <button class="gal-like-btn" data-id="<?= $item['id'] ?>" aria-label="Me gusta">
                  ❤️ <span class="like-count"><?= $item['likes'] ?></span>
                </button>
                <button class="gal-view-btn" data-id="<?= $item['id'] ?>" aria-label="Ver en grande">🔍 Ver</button>
              </div>
            </div>
          </div>

          <!-- Info pie -->
          <div class="gal-info">
            <span class="gal-cat-badge"><?= htmlspecialchars($filtros[$item['cat']]) ?></span>
            <span class="gal-title-small"><?= htmlspecialchars($item['titulo']) ?></span>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Estado vacío (si ningún filtro coincide) -->
    <div id="galEmpty" class="gal-empty" hidden>
      <span style="font-size:3rem;">🎨</span>
      <p>No hay obras en esta categoría todavía.<br>¡Sé el primero en publicar!</p>
      <a href="comunidad.php" class="btn-primary" style="margin-top:1rem;">✨ Subir mi obra</a>
    </div>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║        LIGHTBOX (modal nativo CSS)       ║
     ╚══════════════════════════════════════════╝ -->
<div class="lightbox-overlay" id="lightbox" role="dialog" aria-modal="true" aria-label="Vista ampliada" hidden>
  <button class="lightbox-close" id="lightboxClose" aria-label="Cerrar">✕</button>
  <div class="lightbox-inner">
    <div class="lightbox-img" id="lightboxImg" aria-hidden="true"></div>
    <div class="lightbox-meta">
      <h2 id="lightboxTitle"></h2>
      <p id="lightboxAuthor"></p>
      <div id="lightboxActions" style="display:flex;gap:.75rem;margin-top:1.2rem;flex-wrap:wrap;">
        <button class="btn-primary" style="font-size:.85rem;padding:.6rem 1.2rem;" id="lightboxLike">❤️ Me gusta</button>
        <a href="comunidad.php" class="btn-outline" style="font-size:.85rem;padding:.6rem 1.2rem;">📤 Subir obra similar</a>
      </div>
    </div>
  </div>
</div>

<!-- ╔══════════════════════════════════════════╗
     ║           CTA SUBIR CONTENIDO            ║
     ╚══════════════════════════════════════════╝ -->
<section class="cta-section" aria-labelledby="gal-cta-heading">
  <div class="cta-card fade-in">
    <span class="cta-emoji" aria-hidden="true">🖼️</span>
    <h2 id="gal-cta-heading">¿Tienes arte que<br><span style="background:linear-gradient(135deg,var(--neon-yellow),var(--neon-pink));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">compartir?</span></h2>
    <p>Sube tus fotografías, ilustraciones o arte digital a la galería. La comunidad de La Jose merece ver tu talento.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="comunidad.php" class="btn-primary">🎨 Subir mi Obra</a>
      <a href="nosotros.php"  class="btn-outline">👥 Conocer el Equipo</a>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>

<!-- ─── Estilos + Script exclusivos de Galería ──────────────── -->
<style>
/* Reutiliza .page-hero de nosotros */
.page-hero { position:relative; min-height:55vh; display:flex; align-items:center; justify-content:center; text-align:center; padding:calc(var(--nav-h) + 4rem) 1.5rem 4rem; overflow:hidden; }
.page-hero-content { position:relative; z-index:2; max-width:700px; }
.page-hero h1 { font-family:var(--font-head); font-size:clamp(2.4rem,6vw,5rem); font-weight:800; line-height:1.05; letter-spacing:-.03em; }

/* Stats bar */
.gal-stats-bar { display:flex; justify-content:center; gap:3rem; flex-wrap:wrap; max-width:700px; margin:0 auto; }
.gal-stat { text-align:center; }
.gal-stat .stat-num { display:block; font-family:var(--font-head); font-size:2rem; font-weight:800; background:linear-gradient(135deg,var(--neon-pink),var(--neon-cyan)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.gal-stat .stat-label { font-size:.78rem; color:var(--text-muted); font-weight:700; letter-spacing:.08em; text-transform:uppercase; }

/* Filtros */
.gal-filters { display:flex; gap:.6rem; flex-wrap:wrap; margin-bottom:2.5rem; }
.gal-filter-btn {
  padding:.45rem 1.1rem;
  border-radius:50px;
  border:1px solid var(--glass-border);
  background:rgba(255,255,255,.04);
  color:var(--text-muted);
  font-family:var(--font-body);
  font-size:.82rem;
  font-weight:700;
  cursor:pointer;
  transition:all .25s;
  letter-spacing:.04em;
}
.gal-filter-btn:hover { border-color:rgba(0,245,255,.4); color:var(--neon-cyan); }
.gal-filter-btn.active { background:rgba(255,45,120,.18); border-color:rgba(255,45,120,.5); color:var(--neon-pink); }
.gal-filter-btn[aria-pressed="true"] { background:rgba(255,45,120,.18); border-color:rgba(255,45,120,.5); color:var(--neon-pink); }

/* Grid masonry via CSS columns */
.gal-grid {
  columns: 4 220px;
  gap: 1rem;
}
.gal-item {
  break-inside: avoid;
  margin-bottom: 1rem;
  border-radius: 16px;
  overflow: hidden;
  border: 1px solid var(--glass-border);
  background: var(--dark-card);
  cursor: pointer;
  position: relative;
  transition: transform .3s, box-shadow .3s;
}
.gal-item:hover { transform:scale(1.02); box-shadow:0 16px 40px rgba(0,0,0,.5); }
.gal-item.hidden { display:none; }

.gal-thumb {
  width: 100%;
  aspect-ratio: 4/3;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}
/* Alternate some tall images for masonry effect */
.gal-item:nth-child(3n+1) .gal-thumb { aspect-ratio: 3/4; }
.gal-item:nth-child(5n+2) .gal-thumb { aspect-ratio: 1/1; }

.gal-emoji { font-size: 3rem; transition: transform .3s; }
.gal-item:hover .gal-emoji { transform: scale(1.15); }

/* Overlay */
.gal-overlay {
  position: absolute;
  inset: 0;
  background: rgba(8,12,20,.85);
  backdrop-filter: blur(6px);
  display: flex;
  align-items: flex-end;
  padding: 1.25rem;
  opacity: 0;
  transition: opacity .3s;
}
.gal-item:hover .gal-overlay { opacity: 1; }
.gal-overlay-content h3 { font-family:var(--font-head); font-size:.95rem; font-weight:800; margin-bottom:.25rem; }
.gal-overlay-content p  { font-size:.75rem; color:var(--text-muted); margin-bottom:.75rem; }
.gal-overlay-actions { display:flex; gap:.5rem; flex-wrap:wrap; }

.gal-like-btn, .gal-view-btn {
  padding:.3rem .75rem;
  border-radius:50px;
  border:1px solid var(--glass-border);
  background:rgba(255,255,255,.08);
  color:var(--text-main);
  font-size:.75rem;
  font-weight:700;
  cursor:pointer;
  transition:all .2s;
}
.gal-like-btn:hover  { background:rgba(255,45,120,.25); border-color:rgba(255,45,120,.5); }
.gal-view-btn:hover  { background:rgba(0,245,255,.15);  border-color:rgba(0,245,255,.5); color:var(--neon-cyan); }

/* Info pie */
.gal-info {
  padding: .75rem 1rem;
  display: flex;
  align-items: center;
  gap: .6rem;
}
.gal-cat-badge {
  font-size:.68rem;
  font-weight:800;
  letter-spacing:.07em;
  text-transform:uppercase;
  background:rgba(191,95,255,.2);
  color:var(--neon-purple);
  border:1px solid rgba(191,95,255,.3);
  border-radius:50px;
  padding:.15rem .6rem;
  white-space:nowrap;
}
.gal-title-small { font-size:.8rem; font-weight:700; color:var(--text-main); line-height:1.3; }

/* Estado vacío */
.gal-empty {
  text-align:center;
  padding:4rem 2rem;
  color:var(--text-muted);
}
.gal-empty p { margin-top:.75rem; font-size:.95rem; line-height:1.7; }

/* Lightbox */
.lightbox-overlay {
  position: fixed;
  inset: 0;
  z-index: 9000;
  background: rgba(5,8,15,.92);
  backdrop-filter: blur(20px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem;
  animation: fadeIn .25s ease;
}
.lightbox-overlay[hidden] { display:none; }
@keyframes fadeIn { from{opacity:0} to{opacity:1} }

.lightbox-close {
  position: absolute;
  top: 1.5rem; right: 1.5rem;
  background: rgba(255,255,255,.08);
  border: 1px solid var(--glass-border);
  color: var(--text-main);
  width: 44px; height: 44px;
  border-radius: 50%;
  font-size: 1rem;
  cursor: pointer;
  transition: all .2s;
}
.lightbox-close:hover { background:rgba(255,45,120,.25); border-color:rgba(255,45,120,.5); }

.lightbox-inner {
  display: flex;
  gap: 2rem;
  align-items: center;
  max-width: 1000px;
  width: 100%;
  flex-wrap: wrap;
}
.lightbox-img {
  flex: 1 1 320px;
  min-height: 300px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 6rem;
}
.lightbox-meta { flex: 1 1 240px; }
.lightbox-meta h2 { font-family:var(--font-head); font-size:1.6rem; font-weight:800; margin-bottom:.5rem; }
.lightbox-meta p  { color:var(--text-muted); font-size:.9rem; }

@media (max-width:600px) {
  .gal-grid { columns: 2 160px; }
}
</style>

<script>
(function(){
  'use strict';

  /* ── Filtros ── */
  const btns  = document.querySelectorAll('.gal-filter-btn');
  const items = document.querySelectorAll('.gal-item');
  const empty = document.getElementById('galEmpty');

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-pressed','false'); });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed','true');

      const filter = btn.dataset.filter;
      let visible = 0;
      items.forEach(item => {
        const match = filter === 'todos' || item.dataset.cat === filter;
        item.classList.toggle('hidden', !match);
        if (match) visible++;
      });
      empty.hidden = visible > 0;
    });
  });

  /* ── Likes ── */
  const liked = new Set();
  document.querySelectorAll('.gal-like-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      e.stopPropagation();
      const id    = btn.dataset.id;
      const span  = btn.querySelector('.like-count');
      let count   = parseInt(span.textContent, 10);
      if (liked.has(id)) {
        liked.delete(id);
        span.textContent = count - 1;
        btn.style.background = '';
        btn.style.borderColor = '';
      } else {
        liked.add(id);
        span.textContent = count + 1;
        btn.style.background = 'rgba(255,45,120,.35)';
        btn.style.borderColor = 'rgba(255,45,120,.7)';
      }
    });
  });

  /* ── Lightbox ── */
  const lb      = document.getElementById('lightbox');
  const lbImg   = document.getElementById('lightboxImg');
  const lbTitle = document.getElementById('lightboxTitle');
  const lbAuth  = document.getElementById('lightboxAuthor');
  const lbClose = document.getElementById('lightboxClose');
  const lbLike  = document.getElementById('lightboxLike');

  document.querySelectorAll('.gal-view-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      e.stopPropagation();
      const card  = btn.closest('.gal-item');
      const thumb = card.querySelector('.gal-thumb');
      const title = card.querySelector('.gal-overlay-content h3').textContent;
      const meta  = card.querySelector('.gal-overlay-content p').textContent;
      const bg    = thumb.style.background;
      const emoji = thumb.querySelector('.gal-emoji').textContent;

      lbImg.style.background = bg;
      lbImg.textContent      = emoji;
      lbTitle.textContent    = title;
      lbAuth.textContent     = meta;

      lb.hidden = false;
      document.body.style.overflow = 'hidden';
      lbClose.focus();
    });
  });

  const closeLb = () => {
    lb.hidden = true;
    document.body.style.overflow = '';
  };

  lbClose.addEventListener('click', closeLb);
  lb.addEventListener('click', e => { if (e.target === lb) closeLb(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLb(); });
})();
</script>
