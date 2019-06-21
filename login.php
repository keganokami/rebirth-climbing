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

// ログイン処理
if ($_COOKIE['email'] !== '') {
    $email = $_COOKIE['email'];
}

if ($_COOKIE['user_id']) {
    header('Location: post.php');
    exit();
} 

if (!empty($_POST) && $_COOKIE['user_id'] == '') {
    $email = $_POST['email'];
    if ($_POST['email'] !== '' && $_POST['passwoed'] !== '') {
        $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=? ');
        $login->execute(array(
            $_POST['email'],
            sha1($_POST['password']),
        ));
        $member = $login->fetch();
        if ($member) {
            $_SESSION['id'] = $member['id'];
            setcookie('user_id',session_id().$member['id'], time() + 60 * 60 * 24 * 14 );
            $_SESSION['time'] = time();
            if ($_POST['save'] === 'on') {
                setcookie('email', $_POST['email'], time() + 60 * 60 * 24 * 14);
            }
            header('Location: post.php');
            exit();
        } else {
            $error['login'] = 'failed';
        }
    } else {
        $error['login'] = 'brank';
    }
}
/*main */
$smarty->assign("head", "見出し１");
$smarty->assign("sub_message",
"ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
ダミーダミーダミーダミーダミーダミーダミーダミー");


if($error['login'] === 'brank'):
$smarty->assign("error", "未入力の項目があります。");
endif;



$smarty->display("login.tpl");

/* お知らせ　一覧 */




?>