<?php 
function enqueue_custom_styles_and_scripts() {
    // GoogleFonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
    
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
    
    // Custom CSS
    wp_enqueue_style('custom-styles', get_theme_file_uri('/dist/assets/css/style.css'));
    
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'), null, true);
    
    // Custom JS
    wp_enqueue_script('custom-script', get_theme_file_uri('/dist/assets/js/script.js'), array('jquery', 'swiper-js'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');


// アイキャッチ 
function my_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

// セキュリティ対策 バージョン情報を隠す
remove_action('wp_head', 'wp_generator');
// セキュリティ対策 404へ
// function disable_author_archive()
// {
// if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
// wp_redirect(esc_url(home_url('/404.php')));
// exit;
// }
// }
// add_action('init', 'disable_author_archive');

// キャンペーン・お客様の声一覧はアーカイブのみの表示、詳細ページは無し
add_action('template_redirect', 'disable_cpt_single_pages');
function disable_cpt_single_pages() {
    if (is_singular('archive-campaign') || is_singular('archive-voice')) {
        wp_redirect(home_url()); // ホームページにリダイレクト
        exit();
    }
}

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
  $submenu['edit.php'][15][0] = $name.'カテゴリー';
  $submenu['edit.php'][16][0] = $name.'タグ';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
function Change_taxonomieslabel() {
  global $wp_taxonomies;
  $name = 'お知らせ';
  $labels = $wp_taxonomies['category']->labels;
  $labels->name = $name.'カテゴリー';
  $labels->singular_name = $name.'カテゴリー';
  $labels->search_items = $name.'カテゴリーを検索';
  $labels->all_items = $name.'カテゴリー一覧';
  $labels->parent_item = '親の'.$name.'カテゴリー';
  $labels->parent_item_colon = '親の'.$name.'カテゴリー：';
  $labels->edit_item = $name.'カテゴリーの編集';
  $labels->view_item = $name.'カテゴリーの表示';
  $labels->update_item = $name.'カテゴリーの更新';
  $labels->add_new_item = '新規'.$name.'カテゴリーの追加';
  $labels->new_item_name = '新規'.$name;
  $labels->not_found = $name.'カテゴリーが見つかりませんでした';
  $labels->no_terms = $name.'カテゴリーなし';


  $labels = $wp_taxonomies['post_tag']->labels;
  $name = 'ブログ';
  $labels->name = $name.'タグ';
  $labels->singular_name = $name.'タグ';
  $labels->search_items = $name.'タグを検索';
  $labels->popular_items = '人気の'.$name.'タグ';
  $labels->all_items = 'すべての'.$name.'タグ';
  $labels->edit_item = $name.'タグの編集';
  $labels->view_item = $name.'タグの表示';
  $labels->update_item = $name.'タグの更新';
  $labels->add_new_item = '新規'.$name.'タグの追加';
  $labels->new_item_name = '新規'.$name;
  $labels->separate_items_with_commas = $name.'タグが複数ある場合はコンマで区切ってください';
  $labels->add_or_remove_items = $name.'タグの追加もしくは削除';
  $labels->choose_from_most_used = 'よく使われている'.$name.'タグから選択';
  $labels->not_found = $name.'タグが見つかりませんでした';
  $labels->no_terms = $name.'タグなし';
}
add_action( 'admin_menu', 'Change_menulabel' );
add_action( 'init', 'Change_objectlabel' );
add_action( 'init', 'Change_taxonomieslabel' );

//アーカイブの表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_post_type_archive('campaign') ) { // campaignのアーカイブページ
      $query->set( 'posts_per_page', '4' ); // campaignの表示件数を4件に指定
  }
  if ( $query->is_post_type_archive('voice') ) { // voiceのアーカイブページ
      $query->set( 'posts_per_page', '6' ); // voiceの表示件数を6件に指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//タクソノミーの表示件数変更
function custom_taxonomy_archive_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( $query->is_tax('campaign_category') ) { // campaign_category タクソノミーのアーカイブページ
      $query->set('posts_per_page', 4); // 表示件数を4件に指定
  }

  if ( $query->is_tax('voice_category') ) { // voice_category タクソノミーのアーカイブページ
      $query->set('posts_per_page', 6); // 表示件数を6件に指定
  }
}

add_action('pre_get_posts', 'custom_taxonomy_archive_posts_per_page');
function custom_body_class($classes) {
  // この条件で .blog クラスを除外
  if (is_single() || is_archive() || is_page() || is_home()) {
      $key = array_search('blog', $classes);
      if ($key !== false) {
          unset($classes[$key]);
      }
  }
  return $classes;
}

// フィルターフックにカスタム関数を登録
add_filter('body_class', 'custom_body_class');

//全ての固定ページのエディタを非表示にする
add_filter('use_block_editor_for_post',function($use_block_editor,$post){
	if($post->post_type==='page'){
		if(in_array($post->post_name,['contact','sitemap','information','blog','faq','price','about-us','thanks'])){ //ページスラッグが「about」または「company」ならコンテンツエディターを非表示
			remove_post_type_support('page','editor');
			return false;
		}
	}
	return $use_block_editor;
},10,2);


//Contact Form 7 のカスタマイズ
function filter_wpcf7_form_tag($scanned_tag, $replace) {
  if (!empty($scanned_tag)) {
    if ($scanned_tag['name'] == 'menu-968') {
      global $post;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'campaign',
        'order' => 'DESC',
      );
      $customPosts = get_posts($args);
      $unique_titles = array(); // 重複を防ぐための一時的な配列

      if ($customPosts) {
        foreach ($customPosts as $post) {
          setup_postdata($post);
          $title = get_the_title();

          // 重複をチェックし、重複がない場合に追加
          if (!in_array($title, $unique_titles)) {
            $unique_titles[] = $title;
            $scanned_tag['values'][] = $title;
            $scanned_tag['labels'][] = $title;
          }
        }
      }
      wp_reset_postdata();
    }
  }
  return $scanned_tag;
}
add_filter('wpcf7_form_tag', 'filter_wpcf7_form_tag', 11, 2);