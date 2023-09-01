<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--thanks-page">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Contact</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div id="thanks-page" class="thanks-page section-sub-thanks-page">
    <div class="thanks-page__inner inner">
      <p class="thanks-page__text">
        お問い合わせ内容を送信完了しました。
      </p>
      <p class="thanks-page__sub-text">このたびは、お問い合わせ頂き<br class="u-mobile">
        誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="u-mobile">
        3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
        自動返信の確認メールをお送りしております。</p>
    </div>
  </div>

  <div id="page-top" class="page-top js-page-top">
    <a href="#">
      <span class="arrow-top"></span>
    </a>
  </div>
  <!-- /.page-top -->
</main>

<?php get_footer(); ?>