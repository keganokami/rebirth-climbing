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
        $message = $db->prepare('UPDATE posts SET message=?, modified=NOW() WHERE id=?');
        $message->execute(array(
            $_POST['message'],
            $_REQUEST['id']
        ));
    }
    header('Location: diary.php');
    exit();
} 




/*main */
$smarty->assign("head", "記事の編集");
$smarty->assign("sub_message",
"【記事の編集】本日の成果や活動の内容などを投稿してください。");

/* お知らせ　一覧 */


$smarty->display("post_update.tpl");

?>