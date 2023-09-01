<div id="breadcrumb" class="breadcrumb section-breadcrumb 
<?php if(is_404()) { echo 'section-breadcrumb-not-found'; } ?>">
  <div class="breadcrumb__inner inner">
    <?php 
    if(function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>
</div>