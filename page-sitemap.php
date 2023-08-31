<?php get_header(); ?>


<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Site MAP</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div id="site-map" class="site-map section-sub-site-map">
    <div class="site-map__inner inner">

      <nav class="site-map__nav">
        <div class="site-map__wrap">
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="archive-campaign.html">キャンペーン</a>
              <ul class="site-map__item">
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

            <li class="site-map__item-title">
              <a href="page-about.html">私たちについて</a>
            </li>
          </ul>
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="page-information.html">ダイビング情報</a>
              <ul class="site-map__item">
                <li><a href="page-information.html#info1">ライセンス講習</a></li>
                <li><a href="page-information.html#info2">ファンダイビング</a></li>
                <li>
                  <a href="page-information.html#info3">体験ダイビング</a>
                </li>
              </ul>
            </li>
            <li class="site-map__item-title">
              <a href="home.html">ブログ</a>
            </li>
          </ul>
        </div>

        <div class="site-map__wrap site-map__wrap--space">
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="archive-voice.html">お客様の声</a>
            </li>
            <li class="site-map__item-title">
              <a href="page-price.html">料金一覧</a>
              <ul class="site-map__item">
                <li><a href="page-price.html#price1">ライセンス講習</a></li>
                <li><a href="page-price.html#price2">体験ダイビング</a></li>
                <li><a href="page-price.html#price3">ファンダイビング</a></li>
              </ul>
            </li>
          </ul>
          <ul class="site-map__items">
            <li class="site-map__item-title">
              <a href="page-faq.html">よくある質問</a>
            </li>
            <li class="site-map__item-title site-map__item-title--br">
              <a href="page-privacy.html"><span>プライバシー</span><br class="u-mobile" />
                <span>ポリシー</span></a>
            </li>
            <li class="site-map__item-title">
              <a href="page-terms-of-service.html">利用規約</a>
            </li>
            <li class="site-map__item-title">
              <a href="page-contact.html">お問い合わせ</a>
            </li>
            <li class="site-map__item-title">
              <a href="page-site-map.html">サイトマップ</a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </div>

  <?php get_footer(); ?>