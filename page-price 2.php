<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="sub-mv js-mv-height sub-mv--price">
  <div class="sub-mv__inner">
    <div class="sub-mv__title">
      <h2>Price</h2>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <div id="sub-price" class="sub-price section-sub-price">
    <div class="sub-price__inner inner">

      <ul class="price__chart">
        <li id="price1" class="chart">
          <h3 class="chart__title">
            <span class="chart__img u-desktop"><img
                src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-icon.png" alt="" /></span>
            <span>ライセンス講習</span>
          </h3>
          <dl class="chart__item">
            <?php
                  $repeat_item = SCF::get('license');
                  foreach ($repeat_item as $fields) { 
                ?>
            <div>
              <dt>
                <?php echo $fields['course1']; ?>
              </dt>
              <dd>
                <?php echo '¥'.$fields['price1']; ?>
              </dd>
            </div>
            <?php } ?>
          </dl>
        </li>
        <li id="price2" class="chart">
          <h3 class="chart__title">
            <span class="chart__img u-desktop"><img
                src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-icon.png" alt="" /></span>
            <span>体験ダイビング</span>
          </h3>
          <dl class="chart__item">
            <?php
                  $repeat_item = SCF::get('experience');
                  foreach ($repeat_item as $fields) { 
                ?>
            <div>
              <dt>
                <?php echo $fields['course2']; ?>
              </dt>
              <dd>
                <?php echo '¥'.$fields['price2']; ?>
              </dd>
            </div>
            <?php } ?>
          </dl>
        </li>
        <li id="price3" class="chart">
          <h3 class="chart__title">
            <span class="chart__img u-desktop"><img
                src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-icon.png" alt="" /></span>
            <span>ファンダイビング</span>
          </h3>
          <dl class="chart__item">
            <?php
                  $repeat_item = SCF::get('fun');
                  foreach ($repeat_item as $fields) { 
                ?>
            <div>
              <dt>
                <?php echo $fields['course3']; ?>
              </dt>
              <dd>
                <?php echo '¥'.$fields['price3']; ?>
              </dd>
            </div>
            <?php } ?>
          </dl>
        </li>
        <li class="chart">
          <h3 id="price4" class="chart__title">
            <span class="chart__img"><img
                src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/price-icon.png" alt="" /></span>
            <span>スペシャルダイビング</span>
          </h3>
          <dl class="chart__item">
            <?php
                  $repeat_item = SCF::get('special');
                  foreach ($repeat_item as $fields) { 
                ?>
            <div>
              <dt>
                <?php echo $fields['course4']; ?>
              </dt>
              <dd>
                <?php echo '¥'.$fields['price4']; ?>
              </dd>
            </div>
            <?php } ?>
          </dl>
        </li>
      </ul>

    </div>
  </div>

  <?php get_footer(); ?>