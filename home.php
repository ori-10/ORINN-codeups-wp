<?php get_header(); ?>


<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--blog">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Blog</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div id="sub-blog" class="sub-blog section-sub-blog">
    <div class="sub-blog__inner inner">
      <div class="sub-blog__main">
        <div class="blog-cards blog-cards--sub-page" id="contents">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <article>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <?php if ( get_the_post_thumbnail() ) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                <?php endif; ?>
              </figure>
              <div class="blog-card__body">
                <time class="blog-card__day" datetime=" <?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text">
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </a>
          </article>
          <?php endwhile; endif; ?>
        </div>
        <div class="pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>

      <div class="sub-blog__aside">
        <aside class="aside">
          <div class="aside__content">
            <div class="aside__title">
              <h2>人気記事</h2>
            </div>

            <a href="#" class="aside__blog-item aside-blog">
              <figure class="aside-blog__img">
                <img src="./assets/images/common/blog-card4.jpg" alt="" />
              </figure>
              <div class="aside-blog__body">
                <time class="aside-blog__day" datetime="2023-11-17">2023.11/17</time>
                <h3 class="aside-blog__title">ライセンス取得</h3>
              </div>
            </a>

            <a href="#" class="aside__blog-item aside-blog">
              <figure class="aside-blog__img">
                <img src="./assets/images/common/blog-card2.jpg" alt="" />
              </figure>
              <div class="aside-blog__body">
                <time class="aside-blog__day" datetime="2023-11-17">2023.11/17</time>
                <h3 class="aside-blog__title">ウミガメと泳ぐ</h3>
              </div>
            </a>
            <a href="#" class="aside__blog-item aside-blog">
              <figure class="aside-blog__img">
                <img src="./assets/images/common/blog-card3.jpg" alt="" />
              </figure>
              <div class="aside-blog__body">
                <time class="aside-blog__day" datetime="2023-11-17">2023.11/17</time>
                <h3 class="aside-blog__title">カクレクマノミ</h3>
              </div>
            </a>
          </div>

          <div class="aside__content">
            <div class="aside__title">
              <h2>口コミ</h2>
            </div>

            <div class="aside__voice-item aside-voice">
              <div class="aside-voice__item">
                <figure class="aside-voice__img">
                  <img src="./assets/images/common/aside-voice.jpg" alt="" />
                </figure>

                <div class="aside-voice__info">
                  <span class="aside-voice__age">30代(カップル)</span>
                  <h3 class="aside-voice__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
              </div>
            </div>

            <div class="aside__btn">
              <a href="archive-voice.html" class="btn">
                View more
                <span class="btn__arrow"></span>
              </a>
            </div>
          </div>
          <div class="aside__content">
            <div class="aside__title">
              <h2>キャンペーン</h2>
            </div>

            <div class="aside__campaign-items">
              <div class="aside__campaign-item campaign-card">
                <figure class="campaign-card__img campaign-card__img--aside">
                  <img src="./assets/images/common/campaign1.jpg" alt="" />
                </figure>
                <div class="campaign-card__body campaign-card__body--aside">
                  <div class="campaign-card__body-head">
                    <h3 class="campaign-card__title campaign-card__title--aside">ライセンス取得</h3>
                  </div>
                  <p class="campaign-card__text campaign-card__text--aside">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price campaign-card__price--aside">
                    <div class="campaign-card__before-price">¥56,000</div>
                    <span class="campaign-card__after-price campaign-card__after-price--aside">¥46,000</span>
                  </div>
                </div>
              </div>
              <div class="aside__campaign-item campaign-card">
                <figure class="campaign-card__img campaign-card__img--aside">
                  <img src="./assets/images/common/campaign1.jpg" alt="" />
                </figure>
                <div class="campaign-card__body campaign-card__body--aside">
                  <div class="campaign-card__body-head">
                    <h3 class="campaign-card__title campaign-card__title--aside">貸切体験ダイビング</h3>
                  </div>
                  <p class="campaign-card__text campaign-card__text--aside">全部コミコミ(お一人様)</p>
                  <div class="campaign-card__price campaign-card__price--aside">
                    <div class="campaign-card__before-price">¥24,000</div>
                    <span class="campaign-card__after-price campaign-card__after-price--aside">¥18,000</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="aside__btn">
              <a href="archive-campaign.html" class="btn">
                View more
                <span class="btn__arrow"></span>
              </a>
            </div>
          </div>

          <div class="aside__content">
            <div class="aside__title">
              <h2>アーカイブ</h2>
            </div>
            <div class="aside__archive aside-archive">
              <div class="aside-archive__inner">
                <div class="aside-archive__items js-archive-accordion open">
                  <p>2023</p>
                  <ul class="aside-archive__item">
                    <li><a href="home.html">▶︎ 3月</a></li>
                    <li><a href="home.html">▶︎ 2月</a></li>
                    <li><a href="home.html">▶︎ 1月</a></li>
                  </ul>
                </div>
                <div class="aside-archive__items js-archive-accordion">
                  <p>2022</p>
                  <ul class="aside-archive__item">
                    <li><a href="home.html">▶︎ 3月</a></li>
                    <li><a href="home.html">▶︎ 2月</a></li>
                    <li><a href="home.html">▶︎ 1月</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>