<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>丸幸商会｜プラント設計マネジメント・設計コンサルティング
理化学機器販売 及び 卸業</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="丸幸商会は、プラント建設業界における設計マネジメント・設計コンサルティングを主軸とし、基本計画から詳細設計、調整業務まで一貫して支援します。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <div class="logo-area logo-area-horizontal">
      <img src="/assets/img/logo.png" alt="丸幸商会" class="logo-image">
      <div class="logo-text-area">
        <a href="/" class="logo-link">
          <span class="logo-text">丸幸商会</span>
        </a>
        <p class="logo-sub">プラント設計マネジメント・設計コンサルティング<br>理化学機器販売 及び 卸業</p>
      </div>
    </div>

    <nav class="global-nav">
      <ul>
        <li><a href="/"><i class="ri-home-line nav-icon"></i>トップ</a></li>
        <li><a href="/company.php"><i class="ri-building-line nav-icon"></i>会社案内</a></li>
        <li><a href="/plant.php"><i class="ri-plant-line nav-icon"></i>プラント設計事業</a></li>
        <li><a href="/chemical.php"><i class="ri-flask-line nav-icon"></i>理化学器械事業</a></li>
        <li><a href="/news.php"><i class="ri-newspaper-line nav-icon"></i>お知らせ</a></li>
        <li><a href="/contact.php"><i class="ri-mail-line nav-icon"></i>お問い合わせ</a></li>
      </ul>
    </nav>

    <button class="mobile-menu-toggle" aria-label="メニューを開く">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div class="menu-overlay"></div>
</header>
<script>
(function() {
  const menuToggle = document.querySelector('.mobile-menu-toggle');
  const globalNav = document.querySelector('.global-nav');
  const menuOverlay = document.querySelector('.menu-overlay');
  
  if (menuToggle && globalNav) {
    menuToggle.addEventListener('click', function() {
      menuToggle.classList.toggle('active');
      globalNav.classList.toggle('active');
      if (menuOverlay) {
        menuOverlay.classList.toggle('active');
      }
      document.body.style.overflow = globalNav.classList.contains('active') ? 'hidden' : '';
    });
    
    if (menuOverlay) {
      menuOverlay.addEventListener('click', function() {
        menuToggle.classList.remove('active');
        globalNav.classList.remove('active');
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
      });
    }
    
    // メニューリンクをクリックしたらメニューを閉じる
    const navLinks = globalNav.querySelectorAll('a');
    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        menuToggle.classList.remove('active');
        globalNav.classList.remove('active');
        if (menuOverlay) {
          menuOverlay.classList.remove('active');
        }
        document.body.style.overflow = '';
      });
    });
  }
})();
</script>
<main class="site-main">
