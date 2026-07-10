<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Debates · La Jose En Red</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💬</text></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    .page-hero { padding: calc(var(--nav-h) + 4rem) 2rem 3rem; text-align:center; position:relative; z-index:1; }
    .page-hero-icon { font-size:4.5rem; display:block; margin-bottom:1rem; animation:bounceIn .6s ease both; }
    @keyframes bounceIn { 0%{transform:scale(.5);opacity:0}70%{transform:scale(1.1);opacity:1}100%{transform:scale(1)} }
    .page-hero h1 { font-family:var(--font-head); font-size:clamp(2rem,5vw,3.8rem); font-weight:800; margin-bottom:.8rem; }
    .page-hero p { color:var(--text-muted); font-size:1.05rem; max-width:540px; margin:0 auto 2rem; }
    .debate-layout {
      display: grid;
      grid-template-columns: 1fr 320px;
      gap: 2rem;
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 2rem 5rem;
      position: relative; z-index: 1;
      align-items: start;
    }

    /* CREAR DEBATE */
    .create-debate {
      background: var(--dark-card);
      border: 1px solid rgba(255,45,120,.3);
      border-radius: 20px;
      padding: 1.5rem;
      margin-bottom: 2rem;
      backdrop-filter: blur(12px);
      display: flex;
      align-items: center;
      gap: 1rem;
    }
    .create-avatar {
      width: 44px; height: 44px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--neon-pink), var(--neon-purple));
      display: flex; align-items:center; justify-content:center;
      font-size: 1.3rem;
      flex-shrink: 0;
    }
    .create-input {
      flex: 1;
      background: rgba(255,255,255,.06);
      border: 1.5px solid var(--glass-border);
      border-radius: 50px;
      padding: .65rem 1.4rem;
      color: var(--text-muted);
      font-family: var(--font-body);
      font-size: .9rem;
      cursor: pointer;
      transition: all .25s;
    }
    .create-input:hover { border-color: rgba(255,45,120,.4); color: var(--text-main); }

    /* DEBATE TABS */
    .debate-tabs {
      display: flex;
      gap: .5rem;
      margin-bottom: 1.5rem;
      border-bottom: 1px solid var(--glass-border);
      padding-bottom: .8rem;
    }
    .dtab {
      padding: .45rem 1.1rem;
      border-radius: 50px;
      font-family: var(--font-head);
      font-size: .82rem;
      font-weight: 700;
      border: none;
      background: transparent;
      color: var(--text-muted);
      cursor: pointer;
      transition: all .25s;
    }
    .dtab.active, .dtab:hover {
      background: rgba(255,230,0,.12);
      color: var(--neon-yellow);
      border: 1px solid rgba(255,230,0,.3);
    }

    /* HILO DE DEBATE */
    .debate-thread {
      background: var(--dark-card);
      border: 1px solid var(--glass-border);
      border-radius: 18px;
      padding: 1.5rem;
      margin-bottom: 1.2rem;
      backdrop-filter: blur(12px);
      transition: all .3s;
      cursor: pointer;
    }
    .debate-thread:hover {
      border-color: rgba(255,230,0,.35);
      transform: translateX(4px);
      box-shadow: 0 8px 30px rgba(0,0,0,.3), -4px 0 0 var(--neon-yellow);
    }
    .dt-header { display:flex; align-items:center; gap:.9rem; margin-bottom:1rem; }
    .dt-avatar {
      width: 42px; height: 42px;
      border-radius: 50%;
      display: flex; align-items:center; justify-content:center;
      font-size: 1.2rem;
      flex-shrink: 0;
    }
    .dt-author { font-family:var(--font-head); font-size:.9rem; font-weight:700; }
    .dt-time { font-size:.75rem; color:var(--text-muted); }
    .dt-cat-badge {
      margin-left: auto;
      font-size: .68rem;
      font-weight: 800;
      letter-spacing: .1em;
      text-transform: uppercase;
      padding: .2rem .7rem;
      border-radius: 50px;
    }
    .dt-question {
      font-family: var(--font-head);
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: .6rem;
      line-height: 1.3;
    }
    .dt-preview { font-size:.88rem; color:var(--text-muted); line-height:1.5; margin-bottom:1.1rem; }
    .dt-footer { display:flex; align-items:center; gap:1.2rem; flex-wrap:wrap; }
    .dt-action {
      display: flex; align-items:center; gap:.35rem;
      font-size:.8rem; font-weight:700; color:var(--text-muted);
      border:none; background:none; cursor:pointer;
      padding:.3rem .7rem; border-radius:8px;
      transition: all .2s;
    }
    .dt-action:hover { background:rgba(255,255,255,.06); color:var(--text-main); }
    .dt-action.like:hover { color:var(--neon-pink); }
    .dt-action.comment:hover { color:var(--neon-cyan); }
    .dt-action.share:hover { color:var(--neon-green); }
    .dt-hot { background:rgba(255,45,120,.1); border:1px solid rgba(255,45,120,.25); color:var(--neon-pink); padding:.2rem .7rem; border-radius:50px; font-size:.68rem; font-weight:800; letter-spacing:.06em; }
    .dt-votes {
      display: flex; align-items:center; gap:.4rem;
      margin-left: auto;
    }
    .dt-vote-bar {
      height: 6px; border-radius: 6px;
      overflow: hidden; width: 80px;
      background: rgba(255,255,255,.1);
    }
    .dt-vote-fill { height:100%; border-radius:6px; background:linear-gradient(90deg,var(--neon-pink),var(--neon-cyan)); }
    .dt-vote-pct { font-size:.75rem; font-weight:700; color:var(--neon-cyan); }

    /* ENCUESTA VISUAL */
    .poll-options { margin: .8rem 0; display:flex; flex-direction:column; gap:.5rem; }
    .poll-opt {
      position: relative;
      background: rgba(255,255,255,.04);
      border: 1px solid var(--glass-border);
      border-radius: 10px;
      padding: .6rem 1rem;
      cursor: pointer;
      overflow: hidden;
      transition: border-color .25s;
    }
    .poll-opt:hover { border-color: var(--neon-yellow); }
    .poll-fill { position:absolute; top:0; left:0; height:100%; border-radius:10px; opacity:.15; transition:width .6s ease; }
    .poll-label { position:relative; z-index:1; display:flex; justify-content:space-between; font-size:.88rem; font-weight:600; }
    .poll-pct { color:var(--neon-yellow); font-family:var(--font-head); font-weight:700; }

    /* SIDEBAR */
    .sidebar { position: sticky; top: calc(var(--nav-h) + 1rem); display:flex; flex-direction:column; gap:1.5rem; }
    .sidebar-card { background:var(--dark-card); border:1px solid var(--glass-border); border-radius:18px; padding:1.5rem; backdrop-filter:blur(12px); }
    .sidebar-card h3 { font-family:var(--font-head); font-size:.95rem; font-weight:800; margin-bottom:1rem; letter-spacing:-.01em; }
    .trending-item { display:flex; align-items:center; gap:.8rem; padding:.5rem 0; border-bottom:1px solid var(--glass-border); }
    .trending-item:last-child { border-bottom:none; }
    .trending-num { font-family:var(--font-head); font-size:1.3rem; font-weight:800; color:rgba(255,255,255,.1); min-width:2rem; }
    .trending-text { flex:1; }
    .trending-title { font-size:.85rem; font-weight:700; line-height:1.2; margin-bottom:.15rem; }
    .trending-meta { font-size:.72rem; color:var(--text-muted); }
    .trending-hot { font-size:.72rem; color:var(--neon-pink); font-weight:800; }

    .rules-list { list-style:none; display:flex; flex-direction:column; gap:.6rem; }
    .rules-list li { display:flex; gap:.6rem; font-size:.83rem; color:var(--text-muted); align-items:flex-start; }
    .rules-list li span:first-child { flex-shrink:0; font-size:1rem; }

    .tag-cloud { display:flex; flex-wrap:wrap; gap:.5rem; }
    .tag-pill { padding:.3rem .9rem; border-radius:50px; font-size:.75rem; font-weight:700; border:1px solid var(--glass-border); color:var(--text-muted); cursor:pointer; transition:all .2s; }
    .tag-pill:hover { border-color:var(--neon-cyan); color:var(--neon-cyan); background:rgba(0,245,255,.08); }

    @media(max-width:768px){ .debate-layout{ grid-template-columns:1fr; } .sidebar{position:static;} }
  </style>
</head>
<body>
<nav class="navbar" id="mainNav">
  <a href="index.php" class="nav-logo"><img src="img/logo.png" alt="Logo"><div class="nav-logo-text">La Jose<span>en red</span></div></a>
  <ul class="nav-links" id="navLinks">
    <li><a href="index.php"><span class="nav-icon">🏠</span> Inicio</a></li>
    <li><a href="podcasts.php"><span class="nav-icon">🎙️</span> Podcasts</a></li>
    <li><a href="videos.php"><span class="nav-icon">🎬</span> Videos</a></li>
    <li><a href="debate.php" class="active"><span class="nav-icon">💬</span> Debate</a></li>
    <li><a href="galeria.php"><span class="nav-icon">🖼️</span> Galería</a></li>
    <li><a href="bitacora.php"><span class="nav-icon">📓</span> Bitácora</a></li>
    <li><a href="nosotros.php"><span class="nav-icon">👥</span> Nosotros</a></li>
    <li><a href="comunidad.php" class="nav-cta">✨ Únete</a></li>
  </ul>
  <button class="nav-toggle" id="navToggle"><span></span><span></span><span></span></button>
</nav>

<div class="ticker-wrap" style="margin-top:80px;">
  <div class="ticker-inner">
    <span>💬 15 debates activos ahora mismo</span><span>🔥 Tema viral: ¿Debe existir el uniforme?</span>
    <span>🗳️ Vota en la encuesta de la semana</span><span>✍️ Tu opinión importa — ¡Únete!</span>
    <span>💬 15 debates activos ahora mismo</span><span>🔥 Tema viral: ¿Debe existir el uniforme?</span>
    <span>🗳️ Vota en la encuesta de la semana</span><span>✍️ Tu opinión importa — ¡Únete!</span>
  </div>
</div>

<div class="page-hero">
  <span class="page-hero-icon">💬</span>
  <h1>Foro de <span class="grad-text">Debates</span></h1>
  <p>Aquí las ideas chocan, se construyen y evolucionan. Comparte tu opinión, vota y aprende de otros puntos de vista.</p>
</div>

<div class="debate-layout">
  <!-- MAIN -->
  <main>
    <!-- CREAR DEBATE -->
    <div class="create-debate fade-in">
      <div class="create-avatar">😊</div>
      <div class="create-input">¿Qué tema quieres debatir hoy?</div>
      <a href="comunidad.php" class="btn-primary" style="white-space:nowrap; padding:.55rem 1.2rem; font-size:.85rem;">✍️ Crear debate</a>
    </div>

    <!-- TABS -->
    <div class="debate-tabs fade-in">
      <button class="dtab active">🔥 Tendencias</button>
      <button class="dtab">🆕 Recientes</button>
      <button class="dtab">🗳️ Encuestas</button>
      <button class="dtab">💡 Tecnología</button>
      <button class="dtab">🌍 Sociedad</button>
      <button class="dtab">🎓 Educación</button>
    </div>

    <!-- DEBATE 1 con encuesta -->
    <div class="debate-thread fade-in">
      <div class="dt-header">
        <div class="dt-avatar" style="background:linear-gradient(135deg,#ff2d78,#a020f0)">👩</div>
        <div>
          <div class="dt-author">Valentina Ríos</div>
          <div class="dt-time">hace 2 horas · 📍 Grado 11B</div>
        </div>
        <span class="dt-cat-badge" style="background:rgba(255,45,120,.12);color:var(--neon-pink);border:1px solid rgba(255,45,120,.3);">🎓 Educación</span>
      </div>
      <div class="dt-question">¿El celular en el colegio debería estar completamente prohibido?</div>
      <p class="dt-preview">Muchos dicen que los celulares distraen, pero también son herramientas de aprendizaje increíbles. ¿Cuál es tu postura? Aquí mi experiencia...</p>
      <div class="poll-options">
        <div class="poll-opt" onclick="vote(this, 'Sí, prohibición total')">
          <div class="poll-fill" style="width:62%;background:var(--neon-pink);"></div>
          <div class="poll-label"><span>❌ Sí, prohibición total</span><span class="poll-pct">62%</span></div>
        </div>
        <div class="poll-opt" onclick="vote(this, 'No, total libertad')">
          <div class="poll-fill" style="width:14%;background:var(--neon-cyan);"></div>
          <div class="poll-label"><span>✅ No, total libertad</span><span class="poll-pct">14%</span></div>
        </div>
        <div class="poll-opt" onclick="vote(this, 'Depende del momento')">
          <div class="poll-fill" style="width:24%;background:var(--neon-yellow);"></div>
          <div class="poll-label"><span>🤔 Depende del momento</span><span class="poll-pct">24%</span></div>
        </div>
      </div>
      <div style="font-size:.75rem;color:var(--text-muted);margin-bottom:.8rem;">🗳️ 247 votos · Cierra en 2 días</div>
      <div class="dt-footer">
        <button class="dt-action like">❤️ 89</button>
        <button class="dt-action comment">💬 43 respuestas</button>
        <button class="dt-action share">🔗 Compartir</button>
        <span class="dt-hot">🔥 HOT</span>
      </div>
    </div>

    <!-- DEBATE 2 -->
    <div class="debate-thread fade-in">
      <div class="dt-header">
        <div class="dt-avatar" style="background:linear-gradient(135deg,#00f5ff,#0060ff)">👦</div>
        <div>
          <div class="dt-author">Andrés Morales</div>
          <div class="dt-time">hace 5 horas · 📍 Grado 10A</div>
        </div>
        <span class="dt-cat-badge" style="background:rgba(0,245,255,.1);color:var(--neon-cyan);border:1px solid rgba(0,245,255,.25);">💡 Tecnología</span>
      </div>
      <div class="dt-question">¿La IA debería calificar exámenes? Pros y contras desde la visión estudiantil.</div>
      <p class="dt-preview">Imagina que tu nota la pone un algoritmo. ¿Sería más justo o menos? He investigado sobre esto y encontré algo sorprendente en las escuelas de Corea del Sur...</p>
      <div class="dt-footer">
        <button class="dt-action like">❤️ 134</button>
        <button class="dt-action comment">💬 67 respuestas</button>
        <button class="dt-action share">🔗 Compartir</button>
        <div class="dt-votes">
          <span style="font-size:.75rem;color:var(--text-muted);">Interés</span>
          <div class="dt-vote-bar"><div class="dt-vote-fill" style="width:88%;"></div></div>
          <span class="dt-vote-pct">88%</span>
        </div>
      </div>
    </div>

    <!-- DEBATE 3 -->
    <div class="debate-thread fade-in">
      <div class="dt-header">
        <div class="dt-avatar" style="background:linear-gradient(135deg,#39ff14,#00b894)">👩</div>
        <div>
          <div class="dt-author">Camila Zapata</div>
          <div class="dt-time">ayer · 📍 Grado 9C</div>
        </div>
        <span class="dt-cat-badge" style="background:rgba(255,230,0,.1);color:var(--neon-yellow);border:1px solid rgba(255,230,0,.25);">🌍 Sociedad</span>
      </div>
      <div class="dt-question">¿Deberían los jóvenes tener derecho al voto desde los 14 años?</div>
      <p class="dt-preview">En algunos países los jóvenes ya votan desde antes de los 18. Colombia está debatiendo esta posibilidad. ¿Estamos listos? ¿Tenemos la información necesaria para decidir?</p>
      <div class="dt-footer">
        <button class="dt-action like">❤️ 212</button>
        <button class="dt-action comment">💬 98 respuestas</button>
        <button class="dt-action share">🔗 Compartir</button>
        <span class="dt-hot">🔥 HOT</span>
      </div>
    </div>

    <!-- DEBATE 4 -->
    <div class="debate-thread fade-in">
      <div class="dt-header">
        <div class="dt-avatar" style="background:linear-gradient(135deg,#ffe600,#ff6b00)">👦</div>
        <div>
          <div class="dt-author">Miguel Herrera</div>
          <div class="dt-time">hace 2 días · 📍 Grado 11A</div>
        </div>
        <span class="dt-cat-badge" style="background:rgba(57,255,20,.08);color:var(--neon-green);border:1px solid rgba(57,255,20,.2);">🌱 Ambiental</span>
      </div>
      <div class="dt-question">¿El colegio debería eliminiar los plásticos de un solo uso en la cafetería?</div>
      <p class="dt-preview">Nuestra cafetería genera aproximadamente 200 vasos plásticos al día. Hice el cálculo: en un año escolar son más de 40.000 vasos. ¿Qué hacemos al respecto?</p>
      <div class="dt-footer">
        <button class="dt-action like">❤️ 76</button>
        <button class="dt-action comment">💬 31 respuestas</button>
        <button class="dt-action share">🔗 Compartir</button>
        <div class="dt-votes">
          <span style="font-size:.75rem;color:var(--text-muted);">Interés</span>
          <div class="dt-vote-bar"><div class="dt-vote-fill" style="width:71%;"></div></div>
          <span class="dt-vote-pct">71%</span>
        </div>
      </div>
    </div>

    <!-- DEBATE 5 -->
    <div class="debate-thread fade-in">
      <div class="dt-header">
        <div class="dt-avatar" style="background:linear-gradient(135deg,#bf5fff,#ff2d78)">👩</div>
        <div>
          <div class="dt-author">Juliana Castro</div>
          <div class="dt-time">hace 3 días · 📍 Grado 8B</div>
        </div>
        <span class="dt-cat-badge" style="background:rgba(191,95,255,.1);color:var(--neon-purple);border:1px solid rgba(191,95,255,.25);">🎨 Arte</span>
      </div>
      <div class="dt-question">¿El graffiti es arte o vandalismo? La perspectiva estudiantil.</div>
      <p class="dt-preview">En nuestra ciudad hay murales increíbles que embellecen el espacio público, pero también graffiti que deteriora. ¿Dónde está la línea? ¿Debería el colegio tener una pared de graffiti oficial?</p>
      <div class="dt-footer">
        <button class="dt-action like">❤️ 155</button>
        <button class="dt-action comment">💬 54 respuestas</button>
        <button class="dt-action share">🔗 Compartir</button>
      </div>
    </div>

    <div style="text-align:center; margin-top:1.5rem;" class="fade-in">
      <button class="btn-outline">⬇️ Cargar más debates</button>
    </div>
  </main>

  <!-- SIDEBAR -->
  <aside class="sidebar">

    <div class="sidebar-card fade-in">
      <h3>🔥 Temas Trending</h3>
      <div class="trending-item">
        <div class="trending-num">01</div>
        <div class="trending-text">
          <div class="trending-title">¿Celulares en el colegio?</div>
          <div class="trending-meta">247 votos · <span class="trending-hot">🔥 Viral</span></div>
        </div>
      </div>
      <div class="trending-item">
        <div class="trending-num">02</div>
        <div class="trending-text">
          <div class="trending-title">IA calificando exámenes</div>
          <div class="trending-meta">134 me gusta · 67 respuestas</div>
        </div>
      </div>
      <div class="trending-item">
        <div class="trending-num">03</div>
        <div class="trending-text">
          <div class="trending-title">Voto joven desde los 14</div>
          <div class="trending-meta">212 me gusta · 98 respuestas</div>
        </div>
      </div>
      <div class="trending-item">
        <div class="trending-num">04</div>
        <div class="trending-text">
          <div class="trending-title">Graffiti: ¿arte o vandalismo?</div>
          <div class="trending-meta">155 me gusta · 54 respuestas</div>
        </div>
      </div>
    </div>

    <div class="sidebar-card fade-in">
      <h3>📊 Estadísticas</h3>
      <div style="display:flex;flex-direction:column;gap:.8rem;">
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <span style="font-size:.85rem;color:var(--text-muted);">💬 Debates activos</span>
          <span style="font-family:var(--font-head);font-weight:800;color:var(--neon-yellow);">15</span>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <span style="font-size:.85rem;color:var(--text-muted);">✍️ Participantes hoy</span>
          <span style="font-family:var(--font-head);font-weight:800;color:var(--neon-cyan);">83</span>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <span style="font-size:.85rem;color:var(--text-muted);">🗳️ Votos esta semana</span>
          <span style="font-family:var(--font-head);font-weight:800;color:var(--neon-pink);">1,247</span>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <span style="font-size:.85rem;color:var(--text-muted);">💡 Propuestas aprobadas</span>
          <span style="font-family:var(--font-head);font-weight:800;color:var(--neon-green);">7</span>
        </div>
      </div>
    </div>

    <div class="sidebar-card fade-in">
      <h3>🏷️ Explorar por Tema</h3>
      <div class="tag-cloud">
        <span class="tag-pill">#Tecnología</span>
        <span class="tag-pill">#Educación</span>
        <span class="tag-pill">#Sociedad</span>
        <span class="tag-pill">#Medioambiente</span>
        <span class="tag-pill">#Arte</span>
        <span class="tag-pill">#Deportes</span>
        <span class="tag-pill">#Política</span>
        <span class="tag-pill">#Salud</span>
        <span class="tag-pill">#Música</span>
        <span class="tag-pill">#Derechos</span>
      </div>
    </div>

    <div class="sidebar-card fade-in">
      <h3>📜 Reglas del Foro</h3>
      <ul class="rules-list">
        <li><span>✅</span><span>Respeta siempre las opiniones diferentes a la tuya.</span></li>
        <li><span>🚫</span><span>No insultos, lenguaje ofensivo ni acoso de ningún tipo.</span></li>
        <li><span>📚</span><span>Argumenta con datos, fuentes o experiencias reales.</span></li>
        <li><span>🤝</span><span>Escucha activamente antes de responder.</span></li>
        <li><span>🔒</span><span>No compartas información personal de otros.</span></li>
      </ul>
    </div>

  </aside>
</div>

<footer>
  <div class="footer-inner">
    <div class="footer-brand"><div class="logo-wrap"><img src="img/logo.png" alt="Logo"><span class="brand-name">La Jose En Red</span></div><p>Foro estudiantil audiovisual. Creado por jóvenes, para jóvenes.</p></div>
    <div class="footer-col"><h4>Contenido</h4><ul><li><a href="podcasts.php">🎙️ Podcasts</a></li><li><a href="videos.php">🎬 Videos</a></li><li><a href="debate.php">💬 Debates</a></li><li><a href="galeria.php">🖼️ Galería</a></li></ul></div>
    <div class="footer-col"><h4>Comunidad</h4><ul><li><a href="nosotros.php">👥 Nosotros</a></li><li><a href="bitacora.php">📓 Bitácora</a></li><li><a href="comunidad.php">✨ Únete</a></li></ul></div>
    <div class="footer-col"><h4>Síguenos</h4><ul><li><a href="#">📺 YouTube</a></li><li><a href="#">🎵 Spotify</a></li><li><a href="#">📸 Instagram</a></li></ul></div>
  </div>
  <div class="footer-bottom"><span>© 2026 La Jose En Red · Hecho con ❤️ por estudiantes</span><div class="social-links"><a href="#">📺</a><a href="#">🎵</a><a href="#">📸</a><a href="#">🎬</a></div></div>
</footer>
<script>
  const nav=document.getElementById('mainNav'); window.addEventListener('scroll',()=>nav.classList.toggle('scrolled',window.scrollY>30));
  const toggle=document.getElementById('navToggle'),links=document.getElementById('navLinks');
  toggle.addEventListener('click',()=>{links.classList.toggle('open');const bars=toggle.querySelectorAll('span');if(links.classList.contains('open')){bars[0].style.cssText='transform:rotate(45deg) translate(5px,5px)';bars[1].style.cssText='opacity:0';bars[2].style.cssText='transform:rotate(-45deg) translate(5px,-5px)';}else bars.forEach(b=>b.style.cssText='');});
  const observer=new IntersectionObserver(entries=>entries.forEach((e,i)=>{if(e.isIntersecting){setTimeout(()=>e.target.classList.add('visible'),i*80);observer.unobserve(e.target);}}),{threshold:.1});
  document.querySelectorAll('.fade-in').forEach(el=>observer.observe(el));
  document.querySelectorAll('.dtab').forEach(tab=>tab.addEventListener('click',()=>{document.querySelectorAll('.dtab').forEach(t=>t.classList.remove('active'));tab.classList.add('active');}));
  function vote(el, opt) {
    el.closest('.poll-options').querySelectorAll('.poll-opt').forEach(o=>o.style.borderColor='');
    el.style.borderColor='var(--neon-yellow)';
    alert('✅ Votaste por: '+opt+'\n\n¡Gracias por participar!');
  }
</script>
</body>
</html>