<?php get_header(); ?>

<!-- ############################################ -->
<!-- 下層ページのメインビュー -->
<!-- ############################################ -->
<div class="sub-mv js-mv-height sub-mv--faq">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h1>FAQ</h1>
    </div>
  </div>
</div>

<main>
  <!-- ############################################ -->
  <!-- パンくず -->
  <!-- ############################################ -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- ############################################ -->
  <!-- FAQ -->
  <!-- ############################################ -->
  <div id="sub-faq" class="sub-faq section-sub-faq">
    <div class="sub-faq__inner inner">
      <div class="sub-faq__accordion">
        <?php
          $repeat_item = SCF::get_option_meta('theme-options-faq', 'faq_group');
          foreach ($repeat_item as $fields):
          ?>
        <div class="sub-faq__accordions">
          <ul class="faq-accordion js-accordion open">
            <li class="faq-accordion__title">
              <p><?= $fields['question']; ?></p>
              <p class="faq-accordion__icon">
                <span></span>
                <span></span>
              </p>
            </li>
            <li class="faq-accordion__text">
              <?= $fields['answer']; ?>
            </li>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>