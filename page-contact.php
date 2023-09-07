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
  <div id="sub-contact" class="sub-contact layout-sub-contact">
    <div class="sub-contact__inner inner">
      <?php echo do_shortcode('[contact-form-7 id="2a4a7b5" title="お問い合わせ"]'); ?>
    </div>
  </div>

  <?php get_footer(); ?>