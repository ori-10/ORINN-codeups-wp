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
<div class="mv js-mv-height">
  <div class="mv__inner">
    <div class="mv__img">
      <div class="mv__swiper swiper">
        <div class="swiper-container js-mv-swiper">
          <div class="swiper-wrapper">
            <?php
              $repeat_item = SCF::get('mv-img');
              foreach ($repeat_item as $fields ) {
              $image_url_first = wp_get_attachment_image_src($fields['mv-img1'] , 'full');
              $image_url_second = wp_get_attachment_image_src($fields['mv-img2'] , 'full');
            ?>
            <div class="swiper-slide">
              <div class="mv__slide-img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo $image_url_first[0]; ?>"
                    width="<?php echo $image_url_first[1]; ?>" height="<?php echo $image_url_first[2]; ?>"
                    alt="<?php echo $fields["mv-img-alt"]; ?>">
                  <img src="<?php echo $image_url_second[0]; ?>" width="<?php echo $image_url_second[1]; ?>"
                    height="<?php echo $image_url_second[2]; ?>" alt="<?php echo $fields["mv-img-alt"]; ?>">
                </picture>
              </div>
            </div>

            <?php } ?>
          </div>
        </div>
      </div>
      <div class="mv__title-block mv-title">
        <h2 class="mv-title__main">diving</h2>
        <p class="mv-title__sub">into the ocean</p>
      </div>
    </div>
  </div>
</div>
<!-- /.top-mv-->
<main>

<?php
    $args = array('post_type' => 'campaign',
    'posts_per_page' => -1); 
    // 'post_status' => 'publish', // 公開済の投稿を指定
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>
  <section id="campaign" class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__section-title section-title">
        <p class="section-title__en">campaign</p>
        <h2 class="section-title__ja">キャンペーン</h2>
      </div>

      <div class="campaign__cards campaign-cards">
        <div class="js-campaign-swiper campaign-cards__swiper swiper">
          <div class="swiper-wrapper">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="campaign-cards__swiper-slide swiper-slide">
              <div class="campaign-cards__item campaign-card">
                <figure class="campaign-card__img">
                <?php if ( get_the_post_thumbnail() ) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__body-head">
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                  if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                      $term = array_shift($terms); // 最初のタームを取得
                      $cat_name = $term->name; // ターム名を取得
                      echo '<span class="campaign-card__category">' . $cat_name . '</span>'; // ターム名を表示
                  }
                  ?>
                    <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                  </div>
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price">
                    <div class="campaign-card__before-price"><?php the_field('campaign_price1'); ?></div>
                    <span class="campaign-card__after-price"><?php the_field('campaign_price2'); ?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); endif; ?>
          </div>
        </div>
        <div class="campaign__arrow-btn swiper-button-next">
          <span class="arrow arrow--next"></span>
        </div>
        <div class="campaign__arrow-btn swiper-button-prev">
          <div class="arrow">
            <span></span>
          </div>
        </div>
      </div>
      <div class="campaign__btn">
        <a href="<?php echo $campaign; ?>" class="btn">
          View more
          <span class="btn__arrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section id="about" class="about top-about">
    <div class="about__inner inner">
      <div class="about__section-title section-title">
        <p class="section-title__en">about us</p>
        <h2 class="section-title__ja">私たちについて</h2>
      </div>

      <div class="about__img-block">
        <div class="about__right-img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about1.jpg" alt="" />
        </div>
        <div class="about__left-block">
          <div class="about__left-img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about2.jpg" alt="" />
          </div>
        </div>
      </div>

      <div class="about__text-block">
        <h3 class="about__title">
          Dive into
          <br />
          the Ocean
        </h3>
        <div class="about__text-wrap">
          <p class="about__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about__btn">
            <a href="<?php echo $about; ?>" class="btn">
              View more
              <span class="btn__arrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="information" class="information top-information">
    <div class="information__inner inner">
      <div class="information__section-title section-title">
        <p class="section-title__en">information</p>
        <h2 class="section-title__ja">ダイビング情報</h2>
      </div>
      <div class="information__box">
        <div class="information__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info.jpg" alt="" />
        </div>
        <div class="information__body">
          <h3 class="information__title">ライセンス講習</h3>
          <p class="information__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__btn">
            <a href="<?php echo $information; ?>" class="btn">
              View more
              <span class="btn__arrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $args = array('post_type' => 'post',
    'posts_per_page' => 3);  // カスタム投稿タイプ Products
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>
  <section id="blog" class="blog top-blog">
    <div class="inner blog__inner">
      <div class="blog__section-title section-title section-title--white">
        <p class="section-title__en">blog</p>
        <h2 class="section-title__ja">ブログ</h2>
      </div>

      <div class="blog__cards blog-cards">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
        <figure class="blog-card__img">
          <?php if ( get_the_post_thumbnail() ) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
            <?php endif; ?>
          </figure>
          <div class="blog-card__body">
          <time class="blog-card__day" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
          <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <div class="blog-card__text">
                <?php the_excerpt(); ?>
                </div>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); endif; ?>
      
      </div>
      <div class="blog__btn">
        <a href="<?php echo $blog; ?>" class="btn">
          View more
          <span class="btn__arrow"></span>
        </a>
      </div>
    </div>
  </section>


  <?php
    $args = array('post_type' => 'voice',
    'posts_per_page' => 2); 
    $the_query = new WP_Query($args); if($the_query->have_posts()):
  ?>
  <section id="voice" class="top-voice voice">
    <div class="voice__inner inner">
      <div class="voice__section-title section-title">
        <p class="section-title__en">voice</p>
        <h2 class="section-title__ja">お客様の声</h2>
      </div>

      <div class="voice__cards voice-cards">
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__head">
            <div class="voice-card__info-wrap">
              <div class="voice-card__info">
                <span class="voice-card__age"><?php the_field('voice_1'); ?></span>
                
                <?php
                  $terms = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミーのタームを取得
                  if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                  $term = array_shift($terms); // 最初のタームを取得
                  $cat_name = $term->name; // ターム名を取得
                  echo '<span class="voice-card__category">' . $cat_name . '</span>'; // ターム名を表示
                  }
                  ?>
              </div>
              <h3 class="voice-card__title">
              <?php the_title(); ?>
              </h3>
            </div>

            <figure class="voice-card__img voice-card__img--1">
            <?php if ( get_the_post_thumbnail() ) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
              <?php endif; ?>
            </figure>
          </div>
          <div class="voice-card__text">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); endif; ?>
      
      </div>

      <div class="voice__btn">
        <a href="<?php echo $voice ?>" class="btn">
          View more
          <span class="btn__arrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section id="price" class="top-price price">
    <div class="price__inner inner">
      <div class="price__section-title section-title">
        <p class="section-title__en">price</p>
        <h2 class="section-title__ja">料金一覧</h2>
      </div>
      <div class="price__box">
        <div class="price__img">
          <img class="u-mobile" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price1.jpg" alt="かめ" />
          <img class="u-desktop" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price2.jpg" alt="サンゴ" />
        </div>
        <div class="price__text-block">
          <ul class="price__list">
            <li class="price__list-items">
              <h3 class="price__item-title">ライセンス講習</h3>
              <dl class="price__list-item">
                <?php
                  $repeat_item = SCF::get('license', 12 );
                  foreach ($repeat_item as $fields) { 
                ?>
                <div>
                  <dt>
                    <?php echo $fields['course1']; ?>
                  </dt>
                  <dd>
                    <?php echo $fields['price1']; ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
            <li class="price__list-items">
              <h3 class="price__item-title">体験ダイビング</h3>
              <dl class="price__list-item">
                <?php
                  $repeat_item = SCF::get('experience', 12 );
                  foreach ($repeat_item as $fields) { 
                ?>
                <div>
                  <dt>
                    <?php echo $fields['course2']; ?>
                  </dt>
                  <dd>
                    <?php echo $fields['price2']; ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
            <li class="price__list-items">
              <h3 class="price__item-title">ファンダイビング</h3>
              <dl class="price__list-item">
                <?php
                  $repeat_item = SCF::get('fun', 12 );
                  foreach ($repeat_item as $fields) { 
                ?>
                <div>
                  <dt>
                    <?php echo $fields['course3']; ?>
                  </dt>
                  <dd>
                    <?php echo $fields['price3']; ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
            <li class="price__list-items">
              <h3 class="price__item-title">スペシャルダイビング</h3>
              <dl class="price__list-item">
                <?php
                  $repeat_item = SCF::get('special', 12 );
                  foreach ($repeat_item as $fields) { 
                ?>
                <div>
                  <dt>
                    <?php echo $fields['course4']; ?>
                  </dt>
                  <dd>
                    <?php echo $fields['price4']; ?>
                  </dd>
                </div>
                <?php } ?>
              </dl>
            </li>
          </ul>
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo $price; ?>" class="btn">
          View more
          <span class="btn__arrow"></span>
        </a>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>