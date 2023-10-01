<?php get_header(); ?>

<!-- ############################################ -->
<!-- メインビュー -->
<!-- ############################################ -->
<div class="sub-mv js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h1>Privacy Policy</h1>
    </div>
  </div>
</div>

<main>

  <!-- ############################################ -->
  <!-- パンくず -->
  <!-- ############################################ -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- ############################################ -->
  <!-- プライバシーポリシー -->
  <!-- ############################################ -->
  <section id="privacy" class="privacy section-sub-privacy">
    <div class="privacy__inner inner">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h2 class="privacy__title">
        <?php the_title(); ?>
      </h2>
      <p class=privacy__top-text>以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。</p>
      <div class="privacy__content">
        <?php the_content(); ?>
      </div>
      <p class="privacy__bottom-text">以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。</p>
      <?php endwhile; endif; ?>
    </div>
  </section>

  <?php get_footer(); ?>