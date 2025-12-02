<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>丸幸商会｜プラント設計マネジメント・設計コンサルティング</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="丸幸商会は、プラント建設業界における設計マネジメント・設計コンサルティングを主軸とし、基本計画から詳細設計、調整業務まで一貫して支援します。">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="header-inner">
    <div class="logo-area">
      <a href="/"><span class="logo-text">丸幸商会</span></a>
      <p class="logo-sub">プラント設計マネジメント・設計コンサルティング</p>
    </div>
    <div class="contact-area">
      <p class="contact-line">MAIL. info@example.co.jp</p>
    </div>
    <button class="mobile-menu-toggle" aria-label="メニューを開く">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>

  <div class="menu-overlay"></div>
  <nav class="global-nav">
    <ul>
      <li><a href="/"><span class="nav-icon nav-icon-home"></span>トップページ</a></li>
      <li><a href="/company.php"><span class="nav-icon nav-icon-company"></span>会社案内</a></li>
      <li><a href="/services.php"><span class="nav-icon nav-icon-services"></span>サービス</a></li>
      <li><a href="/projects.php"><span class="nav-icon nav-icon-projects"></span>実績紹介</a></li>
      <li><a href="/news.php"><span class="nav-icon nav-icon-news"></span>お知らせ</a></li>
      <li><a href="/contact.php"><span class="nav-icon nav-icon-contact"></span>お問い合わせ</a></li>
    </ul>
</nav>
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
