<?php
$top = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$privacy = esc_url( home_url( '/privacy/' ) );
$termsofservise = esc_url( home_url( '/terms-of-service/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );
?>

<!-- ############################################ -->
<!-- お問い合わせ -->
<!-- ############################################ -->
<?php
  if (!is_404() && !is_page('contact') && !is_page('thanks')) :
    // 404ページ、'contact' ページ、'thanks' ページ以外でコンタクトセクション表示
?>
<section id="contact" class="contact top-contact">
  <div class="contact__inner inner">
    <div class="contact__box">
      <div class="contact__body">
        <div class="contact__logo">
          <div class="contact__img">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/CodeUps-green.svg" alt="" />
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
          <a href="<?php echo $contact; ?>" class="btn">
            Contact us
            <span class="btn__arrow"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ############################################ -->
<!-- ページトップ -->
<!-- ############################################ -->
<div id="page-top" class="page-top js-page-top">
  <a href="#">
    <span class="arrow-top"></span>
  </a>
</div>

</main>

<!-- ############################################ -->
<!-- フッター -->
<!-- ############################################ -->
<footer id="footer" class="footer section-footer">
  <div class="footer__inner inner">
    <div class="footer__head">
      <div class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/CodeUps.svg" alt="CodeUps" />
      </div>

      <ul class="footer__link-items">
        <li class="footer__link-item1">
          <?php
// ユーザー情報のIDを取得
$user_id = get_current_user_id();

// ACFのフィールドから情報を取得
$group = get_field('sns_1', 'user_' . $user_id);
if ($group && !empty($group['sns_icon'])) {
    $icon = $group['sns_icon'];
    $url = $group['sns_url'];
    $name = $group['sns_name'];
    echo '<a target="_blank" href="' . $url . '">';
    echo '<img src="' . $icon . '" alt="' . $name . '" />';
    echo '</a>';
}
?>
        </li>
        <li class="footer__link-item2">
          <?php
// ユーザー情報のIDを取得
$user_id = get_current_user_id();

// ACFのフィールドから情報を取得
$group = get_field('sns_2', 'user_' . $user_id);
if ($group && !empty($group['sns_icon'])) {
    $icon = $group['sns_icon'];
    $url = $group['sns_url'];
    $name = $group['sns_name'];
    echo '<a target="_blank" href="' . $url . '">';
    echo '<img src="' . $icon . '" alt="' . $name . '" />';
    echo '</a>';
}
?>
        </li>
      </ul>
    </div>

    <nav class="footer__nav-block footer-nav">
      <div class="footer-nav__wrap">
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="<?php echo $campaign; ?>">キャンペーン</a>
            <ul class="footer-nav__item">
              <?php
              $terms = get_terms('campaign_category');
              foreach ( $terms as $term ) {
              echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
            }
            ?>
            </ul>
          </li>

          <li class="footer-nav__item-title">
            <a href="<?php echo $about; ?>">私たちについて</a>
          </li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="<?php echo $information; ?>">ダイビング情報</a>
            <ul class="footer-nav__item">
              <li><a href="<?php echo esc_url( home_url( '/information#info1' ) ); ?>">ライセンス講習</a></li>
              <li><a href="<?php echo esc_url( home_url( '/information#info2' ) ); ?>">ファンダイビング</a></li>
              <li>
                <a href="<?php echo esc_url( home_url( '/information#info3' ) ); ?>">体験ダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer-nav__item-title">
            <a href="<?php echo $blog; ?>">ブログ</a>
          </li>
        </ul>
      </div>

      <div class="footer-nav__wrap footer-nav__wrap--space">
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="<?php echo $voice; ?>">お客様の声</a>
          </li>
          <li class="footer-nav__item-title">
            <a href="<?php echo $price; ?>">料金一覧</a>
            <ul class="footer-nav__item">
              <li><a href="<?php echo esc_url( home_url( '/price#price1' ) ); ?>">ライセンス講習</a></li>
              <li><a href="<?php echo esc_url( home_url( '/price#price2' ) ); ?>">体験ダイビング</a></li>
              <li><a href="<?php echo esc_url( home_url( '/price#price3' ) ); ?>">ファンダイビング</a></li>
            </ul>
          </li>
        </ul>
        <ul class="footer-nav__items">
          <li class="footer-nav__item-title">
            <a href="<?php echo $faq; ?>">よくある質問</a>
          </li>
          <li class="footer-nav__item-title footer-nav__item-title--br">
            <a href="<?php echo $privacy; ?>"><span>プライバシー</span><br class="u-mobile" />
              <span>ポリシー</span></a>
          </li>
          <li class="footer-nav__item-title">
            <a href="<?php echo $termsofservise; ?>">利用規約</a>
          </li>
          <li class="footer-nav__item-title">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
          <li class="footer-nav__item-title">
            <a href="<?php echo $sitemap; ?>">サイトマップ</a>
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