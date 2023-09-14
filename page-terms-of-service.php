<?php get_header(); ?>

<!-- ############################################ -->
<!-- メインビュー -->
<!-- ############################################ -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Terms of Service</h2>
    </div>
  </div>
</div>

<main>

  <!-- ############################################ -->
  <!-- パンくず -->
  <!-- ############################################ -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- ############################################ -->
  <!-- 利用規約 -->
  <!-- ############################################ -->
  <section id="terms-of-service" class="terms-of-service section-sub-terms-of-service">
    <div class="terms-of-service__inner inner">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <h2 class="terms-of-service__title">
        <?php the_title(); ?>
      </h2>
      <p class="terms-of-service__top-text">
        以下は、Webサイトで使用する一般的な利用規約の例です。
      </p>
      <div class="terms-of-service__content">
        <?php the_content(); ?>
      </div>
      <p class="terms-of-service__bottom-text">
        以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。
      </p>
      <?php endwhile; endif; ?>
    </div>
  </section>

  <?php get_footer(); ?>