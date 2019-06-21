<?php

/* Smarty クラスを読み込む場合は下記のように表記します */  
// Smarty.class.phpはlibsフォルダーに中に入っているため。
require_once("Smarty/Smarty.class.php");

/*
 * Smarty オブジェクトを生成し、テンプレートディレクトリとコンパイルディレクトリを設定します。
 * テンプレートディレクトリ内に Smarty 用のテンプレートを設置します。
 * コンパイルディレクトリは、PHP が書き込みを出来るパーミッションにしておく必要があります。
 */

$smarty = new Smarty();
$smarty->template_dir = "./templates";
$smarty->compile_dir  = "./templates_c";

/*smarty読み込み */


/*main */
$smarty->assign("midashi", "見出し１");
$smarty->assign("sub_message",
"ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
ダミーダミーダミーダミーダミーダミーダミーダミー");

$smarty->assign("name", "宮田　大聖");
$smarty->assign("history", "ボルダリング歴：1年半");
$smarty->assign("rp", "最高グレード：2級");
$smarty->assign("os", "1撃最高グレード：3級");
$smarty->assign("comment", "コメント");




/* メンバー情報　一覧 */


// $smarty->display("index.tpl");
$smarty->display("members.tpl");

?>