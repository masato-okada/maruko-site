<?php include __DIR__ . '/includes/header.php'; ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-title">お問い合わせ</h1>
    <p class="page-subtitle">CONTACT</p>
  </div>
</section>

<section class="page-content">
  <div class="container">
    <div class="content-section">
      <p class="lead-text">
        お問い合わせ・ご相談は、以下のフォームまたはメールアドレスより
        お気軽にご連絡ください。
      </p>
    </div>

    <div class="contact-section">
      <div class="contact-info">
        <h2 class="section-title">連絡先情報</h2>
        <dl class="contact-details">
          <dt>メールアドレス</dt>
          <dd>info@example.co.jp</dd>
          <dt>所在地</dt>
          <dd>〒113-0000 東京都文京区本郷〇丁目〇番〇号</dd>
          <dt>営業時間</dt>
          <dd>平日 9:00〜18:00</dd>
        </dl>
      </div>

      <div class="contact-form">
        <h2 class="section-title">お問い合わせフォーム</h2>
        <form action="/contact.php" method="post" class="form">
          <div class="form-group">
            <label for="name" class="form-label">お名前 <span class="required">必須</span></label>
            <input type="text" id="name" name="name" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="email" class="form-label">メールアドレス <span class="required">必須</span></label>
            <input type="email" id="email" name="email" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="company" class="form-label">会社名</label>
            <input type="text" id="company" name="company" class="form-input">
          </div>

          <div class="form-group">
            <label for="subject" class="form-label">件名 <span class="required">必須</span></label>
            <input type="text" id="subject" name="subject" class="form-input" required>
          </div>

          <div class="form-group">
            <label for="message" class="form-label">お問い合わせ内容 <span class="required">必須</span></label>
            <textarea id="message" name="message" class="form-textarea" rows="6" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="form-submit">送信する</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

