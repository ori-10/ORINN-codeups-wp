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
              <a href="<?php echo $voice; ?>" class="btn">
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