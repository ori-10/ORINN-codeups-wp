<?php get_header(); ?>


<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--faq">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>FAQ</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div id="sub-faq" class="sub-faq section-sub-faq">
    <div class="sub-faq__inner inner">
      <div class="sub-faq__accordion">
        <?php
        /*
        * よくある質問のリピートカスタムフィールドを取得する
        * slugをキーにして、値に質問と回答が入った配列を入れる
        */
        $faq_page_id = get_page_by_path("faq", OBJECT, "page");
        $faq_page_id = $faq_page_id->ID;
        $faqs = SCF::get( 'faq_group', $faq_page_id );
        ?>
        <!-- ループ -->
        <?php foreach($faqs as $faq) { ?>
        <div class="sub-faq__accordions">
          <ul class="faq-accordion js-accordion open">
            <li class="faq-accordion__title">
              <p><?php echo $faq['question']; ?></p>
              <p class="faq-accordion__icon">
                <span></span>
                <span></span>
              </p>
            </li>
            <li class="faq-accordion__text">
              <?php echo nl2br(do_shortcode($faq['answer'])); ?>
            </li>
          </ul>
        </div>
        <?php } ?>
        <!-- ループ終わり -->
      </div>
    </div>
  </div>

  <?php get_footer(); ?>