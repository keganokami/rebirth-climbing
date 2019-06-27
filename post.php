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

// ログインの内容状態でURL直打ち防止
if (!$_COOKIE['user_id']) {
    header('Location: login.php');
    exit();
} 

/*
ログインユーザーの情報の取得
ユーザー名の表示
*/
$member = $db->prepare('SELECT * FROM members WHERE id=?');
$member->bindParam(1, $_SESSION['id'], PDO::PARAM_INT);
$member->execute();

$member_info = $member->fetch();
$smarty->assign("member_name", $member_info['name']);

/*
post機能
・テキストの投稿　→　dbへのinsert処理
*/

if (!empty($_POST)) {
    if(trim($_POST['message']) !== '') {
        $message = $db->prepare('INSERT INTO posts SET member_id=?, message=?, reply_message_id=?, created=NOW()');
        $message->execute(array(
            $member_info['id'],
            $_POST['message'],
            $_POST['reply_message_id']
        ));
        
    }
    header('Location: diary.php');
    exit();
} 
// ページネーション処理
//pageの計算
$page  = $_REQUEST['page'];
if ($page == '') {
    $page = 1;
}
$page = max($page, 1);
$counts = $db->query('SELECT COUNT(*) as cnt FROM posts');
$cnt = $counts->fetch();
$maxPage = ceil($cnt['cnt'] / 10);
$page = min($page, $maxPage);

$smarty->assign("page", $page);
$smarty->assign("maxPage", $maxPage);
$smarty->assign("prePage", "前のページへ");
$smarty->assign("nextPage", "次のページへ");

$start = ceil(10 * ($page - 1));

$myPost;
$id = $_SESSION['id'];
$myPosts = $db->prepare('SELECT * FROM posts WHERE member_id=? LIMIT ?,10');
$myPosts->bindParam(1,$id, PDO::PARAM_INT);
$myPosts->bindParam(2,$start, PDO::PARAM_INT);
$myPosts->execute();

$smarty->assign("member_id", $id);
$smarty->assign("myPosts", $myPosts);




/*main */
$smarty->assign("head", "見出し１");
$smarty->assign("sub_message",
"本日の成果や活動の内容などを投稿してください。");

/* お知らせ　一覧 */


$smarty->display("post.tpl");

?>