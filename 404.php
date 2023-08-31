<?php get_header(); ?>


<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

<main>
  <section id="not-found" class="not-found section-not-found">
    <div class="not-found__inner inner">
      <div class="not-found__body">

        <h2 class="not-found__title">404</h2>
        <p class="not-found__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="not-found__btn">
          <a href="index.html" class="green-btn">
            Page TOP
            <span class="green-btn__arrow"></span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <div id="page-top" class="page-top js-page-top">
    <a href="#">
      <span class="arrow-top"></span>
    </a>
  </div>
  <!-- /.page-top -->
</main>

<?php get_footer(); ?>