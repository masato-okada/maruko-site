</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <h3>プラント事業案内</h3>
        <ul class="footer-links">
          <li><a href="/plant.php">事業部トップ</a></li>
          <li><a href="/services.php">サービス</a></li>
          <li><a href="/projects.php">実績紹介</a></li>
          <li><a href="/plant-news.php">お知らせ</a></li>
          <li><a href="/plant-contact.php">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>理化学事業案内</h3>
        <ul class="footer-links">
          <li><a href="/chemical.php">事業部トップ</a></li>
          <li><a href="/chemical-commodities.php">取扱商品</a></li>
          <li><a href="/chemical-makers.php">取扱メーカー</a></li>
          <li><a href="/chemical-partners.php">取引先</a></li>
          <li><a href="/chemical-news.php">お知らせ</a></li>
          <li><a href="/chemical-contact.php">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>企業情報</h3>
        <ul class="footer-links">
          <li><a href="/company.php">会社案内</a></li>
          <li><a href="/news.php">お知らせ</a></li>
          <li><a href="/contact.php">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-company-info">
      <div class="footer-company-name">株式会社丸幸商会</div>
      <div class="footer-company-address">
        〒101-0032 東京都千代田区岩本町２丁目７番３号<br>
        TEL: 03-3862-1561　FAX: 03-3862-1564<br>
        プラント設計：marta@mwb.biglobe.ne.jp　理化学器械：marta@mwb.biglobe.ne.jp
      </div>
    </div>
    <div class="copyright">
      &copy; Maruko Shokai Co., Ltd. All Rights Reserved.
    </div>
  </div>
</footer>
<script>
  // Mobile Menu Toggle
  const menuToggle = document.querySelector('.mobile-menu-toggle');
  const globalNav = document.querySelector('.global-nav');
  const overlay = document.querySelector('.menu-overlay');

  if (menuToggle) {
    menuToggle.addEventListener('click', () => {
      globalNav.classList.toggle('active');
      overlay.classList.toggle('active');
      document.body.style.overflow = globalNav.classList.contains('active') ? 'hidden' : '';
    });
  }

  if (overlay) {
    overlay.addEventListener('click', () => {
      globalNav.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  }

  // Sticky Header
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }
</script>
</body>
</html>
