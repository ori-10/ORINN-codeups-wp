<?php get_header(); ?>
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
<!-- メインビュー -->
<!-- ############################################ -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h1>Site MAP</h1>
    </div>
  </div>
</div>

<main>
  <!-- ############################################ -->
  <!-- パンくず -->
  <!-- ############################################ -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- ############################################ -->
  <!-- サイトマップ -->
  <!-- ############################################ -->
  <div id="site-map" class="site-map section-sub-site-map">
    <div class="site-map__inner inner">

      <nav class="site-map__nav">
        <div class="site-map__wrap">
          <ul class="site-map__items">
            <li class="site-map__item-title"> <a href="<?php echo $campaign; ?>">キャンペーン</a>

              <ul class="site-map__item">
                <?php
                  $terms = get_terms('campaign_category');
                  foreach ( $terms as $term ) {
                  echo '<li><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
                  }
                ?>
              </ul>
            </li>

            <li class="site-map__item-title"> <a href="<?php echo $about; ?>">私たちについて</a>

            </li>
          </ul>
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="<?php echo $information; ?>">ダイビング情報</a>

              <ul class="site-map__item">
                <li><a href="<?php echo esc_url( home_url( '/information#info1' ) ); ?>">ライセンス講習</a></li>
                <li><a href="<?php echo esc_url( home_url( '/information#info2' ) ); ?>">ファンダイビング</a></li>
                <li><a href="<?php echo esc_url( home_url( '/information#info3' ) ); ?>">体験ダイビング</a></li>
              </ul>
            </li>
            <li class="site-map__item-title">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
        </div>

        <div class="site-map__wrap site-map__wrap--space">
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
            <li class="site-map__item-title">
              <a href="<?php echo $price; ?>">料金一覧</a>
              <ul class="site-map__item">
                <li><a href="<?php echo esc_url( home_url( '/price#price1' ) ); ?>">ライセンス講習</a></li>
                <li><a href="<?php echo esc_url( home_url( '/price#price2' ) ); ?>">体験ダイビング</a></li>
                <li><a href="<?php echo esc_url( home_url( '/price#price3' ) ); ?>">ファンダイビング</a></li>
              </ul>
            </li>
          </ul>
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
            <li class="site-map__item-title site-map__item-title--br">
              <a href="<?php echo $privacy; ?>"><span>プライバシー</span><br class="u-mobile" />
                <span>ポリシー</span></a>
            </li>
            <li class="site-map__item-title">
              <a href="<?php echo $termsofservise; ?>">利用規約</a>
            </li>
            <li class="site-map__item-title">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
            <li class="site-map__item-title">
              <a href="<?php echo $sitemap; ?>">サイトマップ</a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </div>

  <?php get_footer(); ?>