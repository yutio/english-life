<?php 

//---------------------------------------------------------------------------
//　jQueryを使えるようにする
//---------------------------------------------------------------------------
function add_jquery_scripts() {
    if(is_admin()) return; 
    wp_deregister_script( 'jquery'); 
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), false, false);
    wp_enqueue_script( 'jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'add_jquery_scripts');

//---------------------------------------------------------------------------
//　サムネイルを使えるようにする
//---------------------------------------------------------------------------
add_theme_support('post-thumbnails'); 

/* サムネイルのサイズを指定（追加）する */
add_image_size( 'archive_thumbnail', 250, 200, false );

//---------------------------------------------------------------------------
//　固定ページのパーマリンクの最後に.htmlを付ける
//---------------------------------------------------------------------------
add_action( 'init', 'edit_page_url' );
if ( ! function_exists( 'edit_page_url' ) ) {
function edit_page_url() {
global $wp_rewrite;
$wp_rewrite->use_trailing_slashes = false;
$wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
// flush_rewrite_rules( false );
}
}

//---------------------------------------------------------------------------
//　カスタムメニューの設定
//---------------------------------------------------------------------------
add_theme_support( 'menus' );
register_nav_menu( 'primary', 'Header navigation menu' );
register_nav_menu( 'footer-navi', 'Footer navigation menu' );

//---------------------------------------------------------------------------
//　サイドバーの設定
//　nameとidを変更すれば幾つでも登録できる。
//　ダッシュボードの外観>ウィジェットから中身を設定可能。
//---------------------------------------------------------------------------
register_sidebar( array(
	'name' => 'Sidebar-1',
	'id' => 'sidebar-1',
	'description' => 'Widget area of sidebar',
	'before_widget' => '<div id="%1$s" class="widget %2$s sidebar">',
	'after_widget' => '</div>',
	'before_title'  => '<h4 class="text-center widgettitle">',
	'after_title'   => '</h4>' 
) );

//---------------------------------------------------------------------------
//　外部ファイルの読み込み
// 例えば、カスタム投稿タイプを作成する関数を記述したcustom-post-type.php
//---------------------------------------------------------------------------
//include_once(TEMPLATEPATH ."/custom-post-type.php");

//---------------------------------------------------------------------------
//スマホならtrue, タブレット・PCならfalseを返す
//---------------------------------------------------------------------------
function is_mobile(){
    $useragents = array(
		'iPhone',          // iPhone
		'iPod',            // iPod touch
		'Android',         // 1.5+ Android
		'dream',           // Pre 1.5 Android
		'CUPCAKE',         // 1.5+ Android
		'blackberry9500',  // Storm
		'blackberry9530',  // Storm
		'blackberry9520',  // Storm v2
		'blackberry9550',  // Storm v2
		'blackberry9800',  // Torch
		'webOS',           // Palm Pre Experimental
		'incognito',       // Other iPhone browser
		'webmate'          // Other iPhone browser
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;

  global $paged;
  if(empty($paged)) $paged = 1;

  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }

  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
        echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
      }
    }
    //1つ進む
    echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
    //最後尾へ
    echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
    echo '</ul>';
  }
}