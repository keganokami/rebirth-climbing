<?php

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



//pageの計算
$page  = $_REQUEST['page'];
if ($page == '') {
    $page = 1;
}
$page = max($page, 1);


$counts = $db->query('SELECT COUNT(*) as cnt FROM posts');
$cnt = $counts->fetch();
$maxPage = ceil($cnt['cnt'] / 5);
$page = min($page, $maxPage);

$smarty->assign("page", $page);
$smarty->assign("maxPage", $maxPage);
$smarty->assign("prePage", "前の記事へ");
$smarty->assign("nextPage", "次の記事へ");

$start = 5 * ($page - 1);
// 投稿一覧の表示
$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id = p.member_id ORDER BY p.created DESC LIMIT ?, 5');
$posts->bindParam(1, $start, PDO::PARAM_INT);
$posts->execute();

$smarty->assign("posts", $posts);





/*main */
$smarty->assign("midashi", "見出し１");
$smarty->assign("sub_message",
"ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
ダミーダミーダミーダミーダミーダミーダミーダミー");



$smarty->display("diary.tpl");

?>