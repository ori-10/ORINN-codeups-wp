<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id=" loading" class="loading">
    <div class="loading__inner">
      <div class="loading__title mv-title fadeUp">
        <h2 class="mv-title__main">diving</h2>
        <p class="mv-title__sub">into the ocean</p>
      </div>

      <div class="loading__image-container">
        <div class="loading__left-image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mask1.jpg" alt="" />
        </div>
        <div class="loading__right-image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mask2.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <header id="header" class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo logo">
        <a href="<?php echo $top; ?>" class="logo__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" alt="CodeUps" />
        </a>
      </h1>

      <button type="button" title="hamburger" class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="header__sp-nav sp-nav">
        <div class="sp-nav__box">
          <div class="sp-nav__wrap">
            <ul class="sp-nav__items">
              <li class="sp-nav__item-title">
                <a href="<?php echo $campaign; ?>">キャンペーン</a>
                <ul class="sp-nav__item">
                  <?php
                  $terms = get_terms('campaign_category');
                  foreach ( $terms as $term ) {
                  echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
                  }
                ?>
                </ul>
              </li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item-title">
                <a href="<?php echo $about; ?>">私たちについて</a>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $information; ?>">ダイビング情報</a>
                <ul class="sp-nav__item">
                  <li><a href="<?php echo esc_url( home_url( '/information#info1' ) ); ?>">ライセンス講習</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/information#info2' ) ); ?>">ファンダイビング</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/information#info3' ) ); ?>">体験ダイビング</a></li>
                </ul>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $blog; ?>">ブログ</a>
              </li>
            </ul>
          </div>

          <div class="sp-nav__wrap sp-nav__wrap--space">
            <ul class="sp-nav__items">
              <li class="sp-nav__item-title">
                <a href="<?php echo $voice; ?>">お客様の声</a>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $price; ?>">料金一覧</a>
                <ul class="sp-nav__item">
                  <li><a href="<?php echo esc_url( home_url( '/price#price1' ) ); ?>">ライセンス講習</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/price#price2' ) ); ?>">体験ダイビング</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/price#price3' ) ); ?>">ファンダイビング</a></li>
                </ul>
              </li>
            </ul>
            <ul class="sp-nav__items">
              <li class="sp-nav__item-title">
                <a href="<?php echo $faq; ?>">よくある質問</a>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $privacy; ?>">プライバシー<br />
                  ポリシー</a>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $termsofservise; ?>">利用規約</a>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $contact; ?>">お問い合わせ</a>
              </li>
              <li class="sp-nav__item-title">
                <a href="<?php echo $sitemap; ?>">サイトマップ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign; ?>">
              <span>Campaign</span>
              <span>キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about; ?>">
              <span>About us</span>
              <span>私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>">
              <span>Information</span>
              <span>ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>">
              <span>Blog</span>
              <span>ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">
              <span>Voice</span>
              <span>お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>">
              <span>Price</span>
              <span>料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>">
              <span>FAQ</span>
              <span>よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>">
              <span>Contact</span>
              <span>お問合せ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>