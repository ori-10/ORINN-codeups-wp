<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--information">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Information</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <section id="sub-information" class="sub-information section-sub-information">
    <div class="sub-information__inner inner">
      <div class="sub-information__contents">
        <!-- ループ -->
        <ul class="sub-information__tab js-tab-info">
          <li class="sub-information__tab-label">
            <a href="#info1">
              <span class="u-desktop"></span>
              <span>ライセンス</span><br class="u-mobile" />
              <span>講習</span>
            </a>
          </li>
          <li class="sub-information__tab-label sub-information__tab-label--2">
            <a href="#info2">
              <span class="u-desktop"></span>
              <span>ファン</span><br class="u-mobile" />
              <span>ダイビング</span>
            </a>
          </li>
          <li class="sub-information__tab-label sub-information__tab-label--3">
            <a href="#info3">
              <span class="u-desktop"></span>
              <span>体験</span><br class="u-mobile" />
              <span>ダイビング</span>
            </a>
          </li>
        </ul>

        <ul class="sub-information__tab-cards">
          <li class="sub-information__card">
            <div class="sub-information__body">
              <h3 class="sub-information__title">ライセンス講習</h3>
              <p class="sub-information__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="sub-information__img">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-info1.jpg" alt="" />
            </div>
          </li>

          <li class="sub-information__card">
            <div class="sub-information__body">
              <h3 class="sub-information__title">ファンダイビング</h3>
              <p class="sub-information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="sub-information__img">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-info2.jpg" alt="" />
            </div>
          </li>

          <li class="sub-information__card">
            <div class="sub-information__body">
              <h3 class="sub-information__title">体験ダイビング</h3>
              <p class="sub-information__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="sub-information__img">
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sub-info3.jpg" alt="" />
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>