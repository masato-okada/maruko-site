<?php include __DIR__ . '/includes/header-global.php'; ?>

<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-lines">
      <div class="hero-line line-engineering"></div>
      <div class="hero-line line-science"></div>
    </div>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
      <h1 class="hero-title">Engineering & Science</h1>
      <p class="hero-sub">プラント設計マネジメント × 理化学器械</p>
      <p class="hero-lead">
        丸幸商会は、プラント建設業界における設計マネジメントと、<br>
        最先端の理化学器械の提供を通じて、<br>
        お客様のビジネスと社会の発展に貢献します。
      </p>
    </div>
  </section>

  <!-- Divisions Section -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Our Business</h2>
      <div class="card-grid">
        <!-- Plant Division -->
        <article class="card">
          <div class="card-image">
             <img src="/assets/img/division-plant.png" alt="プラント設計支援事業">
          </div>
          <div class="card-content">
            <h3 class="card-title">プラント設計支援事業</h3>
            <p class="card-text">
              基本計画から詳細設計、ベンダー調整や図書レビューまで。
              設計プロセス全体を俯瞰したマネジメントで、
              プロジェクトを成功へと導きます。
            </p>
            <a href="/plant.php" class="btn btn-primary">詳細を見る</a>
          </div>
        </article>

        <!-- Chemical Division -->
        <article class="card card-chemical">
          <div class="card-image">
            <img src="/assets/img/division-chemical.png" alt="理化学器械事業">
          </div>
          <div class="card-content">
            <h3 class="card-title">理化学器械事業</h3>
            <p class="card-text">
              理化学器械、分析機器、実験用設備など。
              研究開発や品質管理の現場に最適なソリューションを
              迅速かつきめ細やかなサービスで提供します。
            </p>
            <a href="/chemical.php" class="btn btn-primary">詳細を見る</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section class="section" style="background-color: var(--bg-light);">
    <div class="container">
      <h2 class="section-title">News</h2>
      <div style="max-width: 800px; margin: 0 auto;">
        <ul style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: var(--shadow-sm);">
          <li style="border-bottom: 1px solid #eee; padding: 15px 0; display: flex; align-items: baseline;">
            <time style="font-family: var(--font-en); color: var(--text-sub); margin-right: 20px; font-size: 14px;">2023.10.01</time>
            <a href="#" style="font-weight: 500;">コーポレートサイトをリニューアルしました。</a>
          </li>
          <li style="border-bottom: 1px solid #eee; padding: 15px 0; display: flex; align-items: baseline;">
            <time style="font-family: var(--font-en); color: var(--text-sub); margin-right: 20px; font-size: 14px;">2023.09.15</time>
            <a href="#" style="font-weight: 500;">新規採用情報を公開しました。</a>
          </li>
          <li style="padding: 15px 0; display: flex; align-items: baseline;">
            <time style="font-family: var(--font-en); color: var(--text-sub); margin-right: 20px; font-size: 14px;">2023.08.20</time>
            <a href="#" style="font-weight: 500;">夏季休業のお知らせ</a>
          </li>
        </ul>
        <div class="text-center" style="margin-top: 30px;">
          <a href="/news.php" class="btn btn-outline">お知らせ一覧</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
