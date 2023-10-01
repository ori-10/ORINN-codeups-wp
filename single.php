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
<!-- メインビュー -->
<!-- ############################################ -->
<div class="sub-mv js-mv-height sub-mv--blog">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h1>Blog</h1>
    </div>
  </div>
</div>

<main>

  <!-- ############################################ -->
  <!-- パンくず -->
  <!-- ############################################ -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- ############################################ -->
  <!-- ブログ -->
  <!-- ############################################ -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php
  if( !is_user_logged_in() && !is_bot() ) { //クローラーとログイン時のアクセスをカウントから除外
    setPostViews( get_the_ID() );
  }
?>
  <div id="sub-blog" class="sub-blog section-sub-blog">
    <div class="inner sub-blog__inner sub-blog__inner--article">
      <div class="sub-blog__main">
        <article id="single-contents" class="article">
          <div class="article__body">
            <time class="blog-card__day" datetime=" <?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
            <h3 class="article__title"><?php the_title(); ?></h3>
            <figure class="article__img">
              <?php if ( get_the_post_thumbnail() ) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/noimage.jpg" alt="noimage">
              <?php endif; ?>
            </figure>
            <div class="article__content">
              <?php the_content(); ?>
            </div>
          </div>
        </article>

        <div class="pagination layout-pagination">
          <div class="pagination__inner">

            <?php
            $prev = get_previous_post();
            if ( ! empty( $prev ) ) {
              $prev_url = esc_url( get_permalink( $prev->ID ) );
            }
            
            $next = get_next_post();
            if ( ! empty( $next ) ) {
              $next_url = esc_url( get_permalink( $next->ID ) );
            }
          ?>

            <div class="pagination__prev">
              <?php if ( ! empty( $prev ) ) : ?>
              <a href="<?php echo $prev_url; ?>">＜</a>
              <?php endif; ?>
            </div>

            <div class="pagination__next">
              <?php if ( ! empty( $next ) ) : ?>
              <a href="<?php echo $next_url; ?>">＞</a>
              <?php endif; ?>
            </div>

          </div>
        </div>

      </div>
      <div class="sub-blog__aside">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>

  <?php get_footer(); ?>