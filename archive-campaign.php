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

<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--campaign">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Campaign</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div id="sub-campaign" class="sub-campaign section-sub-campaign">
    <div class="sub-campaign__inner inner">

      <div class="sub-campaign__items">

        <ul class="sub-campaign__tab-item tab js-tab">
          <li class="tab__item active"><a href="<?php echo $campaign; ?>">ALL</a></li>

          <?php
            $terms = get_terms('campaign_category');
            foreach ( $terms as $term ) {
              echo '<li class="tab__item"><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
            }
          ?>

        </ul>
        <div class="sub-campaign__contents tab-contents">
          <div class="tab__sub-page-inner">
            <div class="tab__sub-campaign campaign-cards">
              <!-- ループ -->
              <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="campaign-cards__item campaign-card">
                <figure class="campaign-card__img">
                  <?php if ( get_the_post_thumbnail() ) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </figure>
                <div class="campaign-card__body campaign-card__body--sub-page">
                  <div class="campaign-card__body-head campaign-card__body-head--sub-page">
                    <?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                  if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                      $term = array_shift($terms); // 最初のタームを取得
                      $cat_name = $term->name; // ターム名を取得
                      echo '<span class="campaign-card__category">' . $cat_name . '</span>'; // ターム名を表示
                  }
                  ?>
                    <h3 class="campaign-card__title campaign-card__title--sub-page">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                  <p class="campaign-card__text campaign-card__text--sub-page">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="campaign-card__price">
                    <div class="campaign-card__before-price"><?php the_field('campaign_price1'); ?></div>
                    <span class="campaign-card__after-price"><?php the_field('campaign_price2'); ?></span>
                  </div>

                  <div class="campaign-card__pc-info pc-info u-desktop">
                    <div class="pc-info__text">
                      <?php the_content(); ?>
                    </div>
                    <div class="pc-info__guide">
                      <p><?php the_field('campaign_1'); ?></p>
                      <p>ご予約・お問い合わせはコチラ</p>
                      <div class="pc-info__btn">
                        <a href="<?php echo $contact; ?>" class="btn">
                          Contact us
                          <span class="btn__arrow"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; endif; ?>

            </div>
          </div>
          <!-- ページナビ -->
          <div class="pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>