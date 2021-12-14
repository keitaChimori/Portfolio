<?php
// デフォルト投稿タイプ
function post_has_archive($args,$post_type){
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = ' お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

// カスタム投稿タイプ「制作実績」をつくる
function cpt_register_works()
{ //add_actionの２つのパラメーターを定義
  $labels = [
    'singular_name' => 'works',
    'edit_item' => 'works',
  ];
  $args = [
    'label' => '制作実績', //管理画面に出てくる名前
    'labels' => $labels,
    'description' => '',
    'public' => true,
    'show_in_rest' => true,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'has_archive' => true, //アーカイブを作るかどうか
    'delete_with_user' => false,
    'exclude_from_search' => false,
    'map_meta_cap' => true,
    'hierarchical' => true,
    'rewrite' => ['slug' => 'works', 'with_front' => true], //スラッグをworksに設定
    'query_var' => true,
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'thumbnail'],
  ];
  register_post_type('works', $args); //post_type名

  // タクソノミーを作る
  $labels = [
    'name' => '制作カテゴリー',
  ];
  $args =[
    'labels' => $labels,
    'hierarchical' => true,
  ];
  register_taxonomy('works_category','works',$args); //taxonomy名
}
add_action('init', 'cpt_register_works');
