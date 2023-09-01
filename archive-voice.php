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
<div class="sub-mv sub-mv--voice js-mv-height">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Voice</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>

  <div id="sub-voice" class="sub-voice section-sub-voice">
    <div class="sub-voice__inner inner">

      <div class="sub-voice__tab">
        <ul class="tab js-tab">
          <li class="tab__item active"><a href="<?php echo $voice; ?>">ALL</a></li>

          <?php
          $terms = get_terms('voice_category');
          foreach ( $terms as $term ) {
            echo '<li class="tab__item"><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
          }
        ?>

        </ul>

        <div class="voice-tab__container sub-voice__contents tab-contents">
          <div class="voice-tab__content">
            <div class="voice-tab__content-cards voice-cards">
              <!-- ループ -->

              <?php if(have_posts()): while(have_posts()): the_post(); ?>
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

                  <figure class="voice-card__img voice-card__img--sub voice-card__img">
                    <?php if ( get_the_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else: ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                    <?php endif; ?>
                  </figure>
                </div>

                <div class="voice-card__text">
                  <?php the_content(); ?>
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