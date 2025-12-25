<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>理化学器械事業｜丸幸商会</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="丸幸商会の理化学器械事業部。研究設備、汎用機器、消耗品など幅広いラインナップ。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <div class="logo-area">
      <a href="/chemical.php" class="logo-link">
        <img src="/assets/img/logo.png" alt="丸幸商会" class="logo-image">
        <span class="logo-text">丸幸商会</span> <span style="font-size: 0.8em; opacity: 0.8;">| 理化学器械事業部</span>
      </a>
    </div>

    <nav class="global-nav">
      <ul>
        <li><a href="/chemical.php"><i class="ri-home-line nav-icon"></i>事業部トップ</a></li>
        <li><a href="/chemical-commodities.php"><i class="ri-shopping-bag-3-line nav-icon"></i>取扱商品</a></li>
        <li><a href="/chemical-makers.php"><i class="ri-building-2-line nav-icon"></i>取扱メーカー</a></li>
        <li><a href="/chemical-partners.php"><i class="ri-user-shared-line nav-icon"></i>取引先</a></li>
        <li><a href="/chemical-news.php"><i class="ri-newspaper-line nav-icon"></i>お知らせ</a></li>
        <li><a href="/chemical-contact.php"><i class="ri-mail-line nav-icon"></i>お問い合わせ</a></li>
        <li class="nav-divider">|</li>
        <li><a href="/"><i class="ri-arrow-go-back-line nav-icon"></i>総合トップ</a></li>
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
