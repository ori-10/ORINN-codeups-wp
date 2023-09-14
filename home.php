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

<!-- ############################################ -->
<!-- 下層ページのメインビュー -->
<!-- ############################################ -->
<div class="sub-mv js-mv-height sub-mv--blog">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Blog</h2>
    </div>
  </div>
</div>

<main>

  <!-- ############################################ -->
  <!-- パンくず -->
  <!-- ############################################ -->
  <?php get_template_part('parts/breadcrumb') ?>
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
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="no image">
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
        <div class="pagenavi layout-pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>

      <div class="sub-blog__aside">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>