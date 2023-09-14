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

<!-- ############################################ -->
<!-- ブログ/人気記事 -->
<!-- ############################################ -->
<aside class="aside">
  <div class="aside__content">
    <div class="aside__title">
      <h2>人気記事</h2>
    </div>
    <?php
setPostViews(get_the_ID());
$args = array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 3,
    'order' => 'DESC',
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
?>

    <a href="<?php the_permalink(); ?>" class="aside__blog-item aside-blog">
      <figure class="aside-blog__img">
        <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
        <?php else : ?>
        <img src="<?php echo get_theme_file_uri('dist/assets/images/common/noimage.jpg'); ?>" alt="noimage">
        <?php endif; ?>
      </figure>
      <div class="aside-blog__body">
        <time class="aside-blog__day" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
        <h3 class="aside-blog__title"><?php the_title(); ?></h3>
      </div>
    </a>

    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>


  <!-- ############################################ -->
  <!-- お客様の声/口コミ -->
  <!-- ############################################ -->
  <?php
              $args = array('post_type' => 'voice',
              'posts_per_page' => 1); 
              $the_query = new WP_Query($args); 
          ?>
  <div class="aside__content">
    <div class="aside__title">
      <h2>口コミ</h2>
    </div>
    <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
    <div class="aside__voice-item aside-voice">
      <div class="aside-voice__item">
        <figure class="aside-voice__img">
          <?php if ( get_the_post_thumbnail() ) : ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
          <?php else: ?>
          <img src="<?php echo get_theme_file_uri(); ?>distdist/assets/images/common/noimage.jpg" alt="no image">
          <?php endif; ?>
        </figure>

        <div class="aside-voice__info">
          <span class="voice-card__age"><?php the_field('voice_1'); ?><?php the_field('('.'voice_2'.'
                          )'); ?></span>
          <h3 class="aside-voice__title">
            <?php the_field('voice_title'); ?>
          </h3>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); endif; ?>

    <div class="aside__btn">
      <a href="<?php echo $voice; ?>" class="btn">
        View more
        <span class="btn__arrow"></span>
      </a>
    </div>
  </div>

  <!-- ############################################ -->
  <!-- キャンペーン -->
  <!-- ############################################ -->
  <?php
              $args = array('post_type' => 'campaign',
              'posts_per_page' => 2); 
              $the_query = new WP_Query($args); 
            ?>
  <div class="aside__content">
    <div class="aside__title">
      <h2>キャンペーン</h2>
    </div>

    <div class="aside__campaign-items">
      <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="aside__campaign-item campaign-card">
        <figure class="campaign-card__img campaign-card__img--aside">
          <?php if ( get_the_post_thumbnail() ) : ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
          <?php else: ?>
          <img src="<?php echo get_theme_file_uri(); ?>dist/assets/images/common/noimage.jpg" alt="noimage">
          <?php endif; ?>
        </figure>
        <div class="campaign-card__body campaign-card__body--aside">
          <div class="campaign-card__body-head">
            <h3 class="campaign-card__title campaign-card__title--aside"><?php the_title(); ?></h3>
          </div>
          <p class="campaign-card__text campaign-card__text--aside">全部コミコミ(お一人様)</p>
          <div class="campaign-card__price campaign-card__price--aside">
            <div class="campaign-card__before-price">&yen;<?php the_field('campaign_price1'); ?></div>
            <span
              class="campaign-card__after-price campaign-card__after-price--aside">&yen;<?php the_field('campaign_price2'); ?></span>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); endif; ?>
    </div>

    <div class="aside__btn">
      <a href="<?php echo $campaign; ?>" class="btn">
        View more
        <span class="btn__arrow"></span>
      </a>
    </div>
  </div>

  <!-- ############################################ -->
  <!-- ブログ/月別アーカイブ -->
  <!-- ############################################ -->
  <div class="aside__content">
    <div class="aside__title">
      <h2>アーカイブ</h2>
    </div>
    <div class="aside__archive aside-archive">
      <div class="aside-archive__inner">

        <?php
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                    YEAR( post_date ) AS year,
                                    COUNT( id ) as post_count FROM $wpdb->posts
                                    WHERE post_status = 'publish' and post_date <= now( )
                                    and post_type = 'post'
                                    GROUP BY month , year
                                    ORDER BY post_date DESC");

$first = true; // 最初の要素かどうかを示すフラグ

foreach($months as $month) :
$year_current = $month->year;
if ($year_current != $year_prev){
  if ($year_prev != null){
    ?>
        </ul>
      </div>
      <?php
  }
  ?>
      <div class="aside-archive__items js-archive-accordion <?php if ($first) echo 'open'; ?>">
        <p><?php echo $month->year; ?></p>
        <ul class="aside-archive__item">
          <?php
    $first = false; // 最初の要素が表示されたのでフラグを false に設定
  }
  ?>
          <li>
            <a
              href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
              <?php echo '▶︎&thinsp;'.date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
            </a>
          </li>
          <?php $year_prev = $year_current;
endforeach;
?>
        </ul>
      </div>
    </div>
  </div>
  </div>
</aside>