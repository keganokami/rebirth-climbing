<?php

/* Smarty クラスを読み込む場合は下記のように表記します */  
// Smarty.class.phpはlibsフォルダーに中に入っているため。
require_once("libs\Smarty.class.php");

/*
 * Smarty オブジェクトを生成し、テンプレートディレクトリとコンパイルディレクトリを設定します。
 * テンプレートディレクトリ内に Smarty 用のテンプレートを設置します。
 * コンパイルディレクトリは、PHP が書き込みを出来るパーミッションにしておく必要があります。
 */

$smarty = new Smarty();
$smarty->template_dir = "./templates";
$smarty->compile_dir  = "./templates_c";

/*smarty読み込み */
/*header */
$header_logo ='pumpkin.jpg';
$header_menu = array('メニュー1','メニュー2','メニュー3','メニュー4');
$smarty->assign("header_menus", $header_menu);
/*header end */

/*top-image */
$top_image ='pumpkin.jpg';


/*top-image end */

/*main */
$smarty->assign("message", "見出し１");
$smarty->assign("sub_message",
"ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
ダミーダミーダミーダミーダミーダミーダミーダミー",
);

/* お知らせ　一覧 */

$smarty->assign("news_title1",array('title' => 'サイトを公開しました。', 'link' => '#', 'date' => '2019.03.03'));

$smarty->assign("news_title2",array('title' => '5月の活動予定', 'link' => '#' , 'date' => '2019.03.03'));

$smarty->assign("news_title3",array('title' => '6月の活動予定', 'link' => '#' , 'date' => '2019.03.03'));



// $smarty->display("index.tpl");
$smarty->display("test.html");

?>