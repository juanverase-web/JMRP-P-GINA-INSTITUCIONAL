<?php
/**
 * nosotros.php — Quiénes Somos · La Jose En Red
 */
$page_title       = 'Nosotros · La Jose En Red';
$page_description = 'Conoce al equipo detrás de La Jose En Red: estudiantes, docentes y soñadores que dan voz a la comunidad educativa de La José, Copacabana.';
$page_og_image    = 'img/og/nosotros.jpg';
require_once 'header.php';

// ── Datos del equipo (en producción vendrían de BD) ─────────────
$equipo = [
  [
    'emoji'  => '🎙️',
    'nombre' => 'Valentina Ríos',
    'cargo'  => 'Directora de Contenido',
    'grado'  => '11°',
    'bio'    => 'Apasionada por el periodismo y la comunicación. Lidera la producción de podcasts y supervisa la línea editorial del foro.',
    'color'  => 'linear-gradient(135deg,#ff2d78,#a020f0)',
  ],
  [
    'emoji'  => '🎬',
    'nombre' => 'Santiago Mejía',
    'cargo'  => 'Director Audiovisual',
    'grado'  => '10°',
    'bio'    => 'Cinéfilo y editor autodidacta. Produce y edita todos los videos del canal, y capacita a nuevos creadores.',
    'color'  => 'linear-gradient(135deg,#00f5ff,#0060ff)',
  ],
  [
    'emoji'  => '💻',
    'nombre' => 'Daniela Cardona',
    'cargo'  => 'Desarrolladora Web',
    'grado'  => '11°',
    'bio'    => 'Desarrolló y mantiene esta plataforma. Fanática del código limpio y la accesibilidad web.',
    'color'  => 'linear-gradient(135deg,#39ff14,#00b894)',
  ],
  [
    'emoji'  => '🎨',
    'nombre' => 'Tomás Villada',
    'cargo'  => 'Director Creativo',
    'grado'  => '10°',
    'bio'    => 'Diseñador gráfico y artista digital. Responsable de la identidad visual y todos los artes del proyecto.',
    'color'  => 'linear-gradient(135deg,#ffe600,#ff6b00)',
  ],
  [
    'emoji'  => '📢',
    'nombre' => 'Isabela Mora',
    'cargo'  => 'Community Manager',
    'grado'  => '9°',
    'bio'    => 'Gestiona las redes sociales y la comunidad online. Convierte cada publicación en una conversación real.',
    'color'  => 'linear-gradient(135deg,#bf5fff,#ff2d78)',
  ],
  [
    'emoji'  => '🎓',
    'nombre' => 'Prof. Camilo Torres',
    'cargo'  => 'Asesor Pedagógico',
    'grado'  => 'Docente',
    'bio'    => 'Docente de Comunicación y Media. Guía y mentoriza al equipo estudiantil con criterio pedagógico y editorial.',
    'color'  => 'linear-gradient(135deg,#00f5ff,#39ff14)',
  ],
];

// ── Valores institucionales ─────────────────────────────────────
$valores = [
  ['🎯', 'Autenticidad',  'Creamos contenido genuino, sin filtros comerciales ni intereses externos. Solo voces estudiantiles reales.'],
  ['🤝', 'Inclusión',     'Cada estudiante, sin importar su grado o habilidad, tiene un espacio para expresarse y ser escuchado.'],
  ['🔬', 'Rigor',         'Investigamos, verificamos y publicamos con responsabilidad. El periodismo estudiantil también tiene ética.'],
  ['🚀', 'Innovación',    'Exploramos nuevos formatos, tecnologías y lenguajes para narrar la vida escolar de formas inesperadas.'],
  ['🌱', 'Crecimiento',   'Cada proyecto es una oportunidad de aprender. Erramos, corregimos y evolucionamos juntos como comunidad.'],
  ['❤️', 'Comunidad',     'Somos más que un medio: somos un espacio de encuentro, debate y celebración de lo que nos hace únicos.'],
];

// ── Hitos / Timeline ────────────────────────────────────────────
$hitos = [
  ['2022', '🌱', 'Fundación', 'Un grupo de 5 estudiantes de 10° grado lanza el primer episodio piloto de La Jose En Red.'],
  ['2023', '📈', 'Crecimiento', 'Superamos los 500 suscriptores, lanzamos la sección de videos y el primer debate en vivo.'],
  ['2024', '🏆', 'Reconocimiento', 'Premio Departamental de Periodismo Estudiantil. Más de 30 creadores activos en la plataforma.'],
  ['2025', '🌐', 'Nueva Plataforma', 'Rediseño completo del sitio web. Lanzamos la galería interactiva y la bitácora editorial.'],
  ['2026', '🚀', 'Hoy', 'Más de 2.400 oyentes, 120 episodios y una comunidad que no para de crecer. ¡El futuro es ahora!'],
];
?>

<!-- ╔══════════════════════════════════════════╗
     ║           HERO NOSOTROS                  ║
     ╚══════════════════════════════════════════╝ -->
<section class="page-hero" aria-labelledby="nos-heading">
  <div class="hero-bg-orbs" aria-hidden="true">
    <div class="orb orb-1" style="background:var(--neon-cyan);"></div>
    <div class="orb orb-2" style="background:var(--neon-purple);"></div>
    <div class="orb orb-3" style="background:var(--neon-pink);"></div>
  </div>
  <div class="page-hero-content">
    <div class="hero-badge">
      <span class="badge-dot"></span>
      Conoce al Equipo
    </div>
    <h1 id="nos-heading">La gente detrás<br><span class="grad-text">de la magia.</span></h1>
    <p class="hero-subtitle">Somos estudiantes de la Institución Educativa La José de Copacabana, Antioquia. Creemos que cada historia merece ser contada.</p>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║           MISIÓN & VISIÓN                ║
     ╚══════════════════════════════════════════╝ -->
<section id="mision" style="padding:5rem 2rem;">
  <div style="max-width:1100px;margin:0 auto;">
    <div class="section-header fade-in">
      <span class="section-tag">💡 Propósito</span>
      <h2 class="section-title">¿Por qué <span class="highlight">existimos?</span></h2>
    </div>
    <div class="mv-grid fade-in">
      <div class="mv-card">
        <div class="mv-icon">🎯</div>
        <h3>Misión</h3>
        <p>Brindar a los estudiantes de La José una plataforma audiovisual propia donde puedan desarrollar habilidades comunicativas, ejercer el pensamiento crítico y construir una comunidad educativa vibrante a través del periodismo y la creación de contenido.</p>
      </div>
      <div class="mv-card">
        <div class="mv-icon">🔭</div>
        <h3>Visión</h3>
        <p>Ser el referente de medios estudiantiles en Antioquia para 2028: un ecosistema de comunicación donde cada joven encuentre su voz, desarrolle su talento y se conecte con el mundo desde su propio territorio.</p>
      </div>
      <div class="mv-card">
        <div class="mv-icon">🏫</div>
        <h3>Institución</h3>
        <p>Institución Educativa La José, Copacabana, Antioquia. Un colegio que apuesta por la educación integral, la creatividad y la formación de ciudadanos críticos y digitalmente competentes.</p>
      </div>
    </div>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║              EL EQUIPO                   ║
     ╚══════════════════════════════════════════╝ -->
<section class="featured-bg" id="equipo" aria-labelledby="eq-heading">
  <div class="section-header fade-in">
    <span class="section-tag">👥 Equipo</span>
    <h2 class="section-title" id="eq-heading">Las Personas <span class="highlight">Reales</span></h2>
    <p class="section-desc">Estudiantes apasionados, curiosos y comprometidos con hacer de La Jose En Red algo extraordinario.</p>
  </div>

  <div class="team-grid">
    <?php foreach ($equipo as $member): ?>
      <article class="team-card fade-in">
        <div class="team-avatar" style="background:<?= $member['color'] ?>;" aria-hidden="true">
          <?= $member['emoji'] ?>
        </div>
        <div class="team-info">
          <h3 class="team-name"><?= htmlspecialchars($member['nombre']) ?></h3>
          <span class="team-role"><?= htmlspecialchars($member['cargo']) ?></span>
          <span class="team-grade"><?= htmlspecialchars($member['grado']) ?></span>
          <p class="team-bio"><?= htmlspecialchars($member['bio']) ?></p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║           NUESTROS VALORES               ║
     ╚══════════════════════════════════════════╝ -->
<section id="valores" style="padding:5rem 2rem;">
  <div style="max-width:1100px;margin:0 auto;">
    <div class="section-header fade-in">
      <span class="section-tag">⚡ Principios</span>
      <h2 class="section-title">Nuestros <span class="highlight">Valores</span></h2>
      <p class="section-desc">Los principios que guían cada contenido, cada decisión y cada conversación en La Jose En Red.</p>
    </div>
    <div class="values-grid">
      <?php foreach ($valores as [$icon, $title, $desc]): ?>
        <div class="value-card fade-in">
          <div class="value-icon" aria-hidden="true"><?= $icon ?></div>
          <h4><?= htmlspecialchars($title) ?></h4>
          <p><?= htmlspecialchars($desc) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║             TIMELINE / HITOS             ║
     ╚══════════════════════════════════════════╝ -->
<section class="featured-bg" id="historia" aria-labelledby="hist-heading">
  <div class="section-header fade-in">
    <span class="section-tag">📅 Historia</span>
    <h2 class="section-title" id="hist-heading">Nuestra <span class="highlight">Trayectoria</span></h2>
    <p class="section-desc">De una idea en un salón de clases a una plataforma que mueve a toda la comunidad.</p>
  </div>

  <div class="timeline">
    <?php foreach ($hitos as $i => [$year, $icon, $title, $desc]): ?>
      <div class="timeline-item fade-in <?= ($i % 2 === 0) ? 'left' : 'right' ?>">
        <div class="timeline-dot" aria-hidden="true"><?= $icon ?></div>
        <div class="timeline-content">
          <span class="timeline-year"><?= htmlspecialchars($year) ?></span>
          <h4><?= htmlspecialchars($title) ?></h4>
          <p><?= htmlspecialchars($desc) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="timeline-line" aria-hidden="true"></div>
  </div>
</section>

<!-- ╔══════════════════════════════════════════╗
     ║              CTA ÚNETE                   ║
     ╚══════════════════════════════════════════╝ -->
<section class="cta-section" aria-labelledby="nos-cta-heading">
  <div class="cta-card fade-in">
    <span class="cta-emoji" aria-hidden="true">✨</span>
    <h2 id="nos-cta-heading">¿Quieres ser parte<br><span style="background:linear-gradient(135deg,var(--neon-pink),var(--neon-cyan));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">del equipo?</span></h2>
    <p>Buscamos voces nuevas, ideas frescas y personas con ganas de crear. Sin importar tu talento, hay un lugar para ti.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="comunidad.php" class="btn-primary">🎙️ Quiero Unirme</a>
      <a href="contacto.php"  class="btn-outline">📬 Escríbenos</a>
    </div>
  </div>
</section>

<?php require_once 'footer.php'; ?>

<!-- ─── Estilos exclusivos de Nosotros ──────────────────────── -->
<style>
/* Page Hero genérico */
.page-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-h) + 4rem) 1.5rem 4rem;
  overflow: hidden;
}
.page-hero-content { position: relative; z-index: 2; max-width: 700px; }
.page-hero h1 {
  font-family: var(--font-head);
  font-size: clamp(2.4rem,6vw,5rem);
  font-weight: 800;
  line-height: 1.05;
  letter-spacing: -.03em;
}

/* Misión & Visión */
.mv-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 1.5rem;
  margin-top: 2.5rem;
}
.mv-card {
  background: var(--dark-card);
  border: 1px solid var(--glass-border);
  border-radius: 20px;
  padding: 2.5rem 2rem;
  backdrop-filter: blur(16px);
  transition: transform .3s, border-color .3s;
}
.mv-card:hover {
  transform: translateY(-6px);
  border-color: rgba(255,45,120,.35);
}
.mv-icon { font-size: 2.5rem; margin-bottom: 1rem; }
.mv-card h3 {
  font-family: var(--font-head);
  font-size: 1.2rem;
  font-weight: 800;
  margin-bottom: .75rem;
  background: linear-gradient(135deg, var(--neon-pink), var(--neon-cyan));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.mv-card p { color: var(--text-muted); font-size: .9rem; line-height: 1.7; }

/* Team */
.team-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 1.5rem;
  max-width: 1100px;
  margin: 0 auto;
}
.team-card {
  background: var(--dark-card);
  border: 1px solid var(--glass-border);
  border-radius: 20px;
  padding: 2rem;
  display: flex;
  gap: 1.25rem;
  align-items: flex-start;
  backdrop-filter: blur(16px);
  transition: transform .3s, border-color .3s, box-shadow .3s;
}
.team-card:hover {
  transform: translateY(-5px);
  border-color: rgba(0,245,255,.35);
  box-shadow: 0 20px 50px rgba(0,0,0,.4), 0 0 30px rgba(0,245,255,.05);
}
.team-avatar {
  width: 64px;
  height: 64px;
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8rem;
  flex-shrink: 0;
}
.team-name {
  font-family: var(--font-head);
  font-size: 1.05rem;
  font-weight: 800;
  margin-bottom: .2rem;
}
.team-role {
  display: block;
  font-size: .78rem;
  font-weight: 700;
  color: var(--neon-cyan);
  letter-spacing: .08em;
  text-transform: uppercase;
}
.team-grade {
  display: inline-block;
  font-size: .72rem;
  background: rgba(255,45,120,.15);
  color: var(--neon-pink);
  border: 1px solid rgba(255,45,120,.3);
  border-radius: 50px;
  padding: .1rem .6rem;
  margin-top: .3rem;
  font-weight: 700;
}
.team-bio { color: var(--text-muted); font-size: .84rem; margin-top: .6rem; line-height: 1.6; }

/* Values */
.values-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 1.25rem;
  margin-top: 2.5rem;
}
.value-card {
  background: var(--dark-card);
  border: 1px solid var(--glass-border);
  border-radius: 18px;
  padding: 2rem 1.75rem;
  backdrop-filter: blur(12px);
  transition: transform .3s, border-color .3s;
}
.value-card:hover { transform: translateY(-4px); border-color: rgba(191,95,255,.4); }
.value-icon { font-size: 2rem; margin-bottom: .8rem; }
.value-card h4 {
  font-family: var(--font-head);
  font-size: 1rem;
  font-weight: 800;
  margin-bottom: .5rem;
  color: var(--neon-yellow);
}
.value-card p { color: var(--text-muted); font-size: .86rem; line-height: 1.65; }

/* Timeline */
.timeline {
  position: relative;
  max-width: 900px;
  margin: 2rem auto 0;
  padding: 0 1rem;
}
.timeline-line {
  position: absolute;
  left: 50%;
  top: 0; bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--neon-pink), var(--neon-cyan));
  transform: translateX(-50%);
  opacity: .35;
}
.timeline-item {
  display: flex;
  gap: 1.5rem;
  margin-bottom: 2.5rem;
  position: relative;
  z-index: 1;
}
.timeline-item.left  { flex-direction: row;         padding-right: calc(50% + 2rem); }
.timeline-item.right { flex-direction: row-reverse;  padding-left:  calc(50% + 2rem); }
.timeline-dot {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: var(--dark-card);
  border: 2px solid rgba(255,45,120,.5);
  display: flex; align-items: center; justify-content: center;
  font-size: 1.4rem;
  flex-shrink: 0;
  backdrop-filter: blur(8px);
}
.timeline-content {
  background: var(--dark-card);
  border: 1px solid var(--glass-border);
  border-radius: 16px;
  padding: 1.5rem;
  backdrop-filter: blur(12px);
  flex: 1;
}
.timeline-year {
  display: inline-block;
  font-family: var(--font-head);
  font-size: .75rem;
  font-weight: 800;
  letter-spacing: .1em;
  color: var(--neon-pink);
  text-transform: uppercase;
  margin-bottom: .4rem;
}
.timeline-content h4 {
  font-family: var(--font-head);
  font-size: 1rem;
  font-weight: 800;
  margin-bottom: .4rem;
}
.timeline-content p { font-size: .86rem; color: var(--text-muted); line-height: 1.6; }

@media (max-width: 700px) {
  .timeline-line { left: 24px; }
  .timeline-item.left,
  .timeline-item.right {
    flex-direction: row;
    padding: 0 0 0 70px;
  }
  .timeline-dot { left: 24px; }
}
</style>
