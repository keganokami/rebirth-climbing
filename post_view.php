<?php
session_start();
require('./dbconnect.php');
/* Smarty クラスを読み込む場合は下記のように表記します */  
// Smarty.class.phpはlibsフォルダーに中に入っているため。
/*smarty読み込み */
require_once("Smarty/Smarty.class.php");

/*
 * Smarty オブジェクトを生成し、テンプレートディレクトリとコンパイルディレクトリを設定します。
 * テンプレートディレクトリ内に Smarty 用のテンプレートを設置します。
 * コンパイルディレクトリは、PHP が書き込みを出来るパーミッションにしておく必要があります。
 */

$smarty = new Smarty();
$smarty->template_dir = "./templates";
$smarty->compile_dir  = "./templates_c";

$id = $_REQUEST['id'];
if (empty($id) && !is_numeric($id) || $id < 1) {
    header('Location: diary.php');
}

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id = p.member_id AND p.id=?');
$posts->execute(array($_REQUEST['id']));

$post = $posts->fetch();
$smarty->assign("post",$post);


/*main */
$smarty->assign("head", "記事の詳細");
$smarty->assign("sub_message",
"記事の詳細です。");

/* お知らせ　一覧 */


$smarty->display("post_view.tpl");

?>