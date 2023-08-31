<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--about">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>About us</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>

  <section id="sub-about" class="sub-about section-sub-about">
    <div class="sub-about__inner inner">

      <div class="sub-about__img-block">
        <div class="sub-about__right-img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="" />
        </div>
        <div class="sub-about__left-block">
          <div class="sub-about__left-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="" />
          </div>
        </div>

        <div class="sub-about__text-block">
          <h3 class="sub-about__title">
            Dive into
            <br />
            the Ocean
          </h3>
          <div class="sub-about__text-wrap">
            <p class="sub-about__pc-text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
        <p class="sub-about__sp-text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery section-sub-gallery">
    <div class="gallery__inner inner">

      <div class="gallery__section-title section-title">
        <p class="section-title__en">gallery</p>
        <h2 class="section-title__ja">フォト</h2>
      </div>

      <div class="gallery__box">
        <ul class="gallery__items">

          <?php
            $repeat_item = SCF::get('gallery');
            foreach ($repeat_item as $fields ) {
            $image_url = wp_get_attachment_image_src($fields['about-img'] , 'full');
          ?>
          <li class="gallery__item js-modal">
            <img src="<?php echo $image_url[0]; ?>" width="<?php echo $image_url[1]; ?>"
              height="<?php echo $image_url[2]; ?>" alt="<?php echo $fields["about-img-alt"]; ?>" />
          </li>
          <?php } ?>

        </ul>
      </div>

      <!-- モーダル時のグレー背景 -->
      <div class="gallery__modal-background js-background"></div>

    </div>
  </section>


  <?php get_footer(); ?>