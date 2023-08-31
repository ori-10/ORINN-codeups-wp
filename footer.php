<?php if (!is_404()) : // 404ページではない場合にコンタクトセクションを表示 ?>
<section id="contact" class="contact top-contact">
  <div class="contact__inner inner">
    <div class="contact__box">
      <div class="contact__body">
        <div class="contact__logo">
          <div class="contact__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps-green.svg" alt="" />
          </div>
        </div>
        <div class="contact__info">
          <ul class="contact__address">
            <li>沖縄県那覇市1-1</li>
            <li>TEL:0120-000-0000</li>
            <li>営業時間:8:30-19:00</li>
            <li>定休日:毎週火曜日</li>
          </ul>
          <div class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d208684.70750180862!2d129.0336616!3d35.1890651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35688d5c0efe075f%3A0x9963b1d5c163ac98!2sHaeundae%20Beach!5e0!3m2!1sja!2sjp!4v1689970799196!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <div class="contact__link">
        <div class="contact__section-title section-title section-title--large">
          <p class="section-title__en">contact</p>
          <h2 class="section-title__ja">お問い合わせ</h2>
        </div>

        <p class="contact__text">ご予約・お問い合わせはコチラ</p>

        <div class="contact__btn">
          <a href="page-contact.html" class="btn">
            Contact us
            <span class="btn__arrow"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<div id="page-top" class="page-top js-page-top">
  <a href="#">
    <span class="arrow-top"></span>
  </a>
</div>
<!-- /.page-top -->
</main>
<footer id="footer" class="footer section-footer">
  <div class="footer__inner inner">
    <div class="footer__head">
      <div class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" alt="CodeUps" />
      </div>
      <ul class="footer__link-items">
        <li class="footer__link-item1">
          <a href="https://ja-jp.facebook.com/">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-face.png" alt="" />
          </a>
        </li>
        <li class="footer__link-item2">
          <a href="https://www.instagram.com/">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-insta.png" alt="" />
          </a>
        </li>
      </ul>
    </div>

    <nav class="footer__nav-block footer-nav">
      <div class="footer-nav__wrap">
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="archive-campaign.html">キャンペーン</a>
            <ul class="footer-nav__item">
              <li>
                <a href="archive-campaign.html">ライセンス講習</a>
              </li>
              <li>
                <a href="archive-campaign.html">ファンダイビング</a>
              </li>
              <li>
                <a href="archive-campaign.html">体験ダイビング</a>
              </li>
            </ul>
          </li>

          <li class="footer-nav__item-title">
            <a href="page-about.html">私たちについて</a>
          </li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="page-information.html">ダイビング情報</a>
            <ul class="footer-nav__item">
              <li><a href="page-information.html#info1">ライセンス講習</a></li>
              <li><a href="page-information.html#info2">ファンダイビング</a></li>
              <li>
                <a href="page-information.html#info3">体験ダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer-nav__item-title">
            <a href="home.html">ブログ</a>
          </li>
        </ul>
      </div>

      <div class="footer-nav__wrap footer-nav__wrap--space">
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="archive-voice.html">お客様の声</a>
          </li>
          <li class="footer-nav__item-title">
            <a href="page-price.html">料金一覧</a>
            <ul class="footer-nav__item">
              <li><a href="page-price.html#price1">ライセンス講習</a></li>
              <li><a href="page-price.html#price2">体験ダイビング</a></li>
              <li><a href="page-price.html#price3">ファンダイビング</a></li>
            </ul>
          </li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="page-faq.html">よくある質問</a>
          </li>
          <li class="footer-nav__item-title footer-nav__item-title--br">
            <a href="page-privacy.html"><span>プライバシー</span><br class="u-mobile" />
              <span>ポリシー</span></a>
          </li>
          <li class="footer-nav__item-title">
            <a href="page-terms-of-service.html">利用規約</a>
          </li>
          <li class="footer-nav__item-title">
            <a href="page-contact.html">お問い合わせ</a>
          </li>
          <li class="footer-nav__item-title">
            <a href="page-site-map.html">サイトマップ</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="footer__copy">
    <p>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>