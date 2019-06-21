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


// URL直打ち防止
if (!isset($_SESSION['entry'])) {
    header('Location: entry.php');
    exit();
}

if (!empty($_POST)) {
    $stmt = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
    $stmt->execute(array(
        // フォームから送信($_POST)されている情報をentryという連想配列に入れる。
        $_SESSION['entry']['name'],
        $_SESSION['entry']['email'],
        sha1($_SESSION['entry']['password']),
        $_SESSION['entry']['image']
    ));
    unset($_SESSION['entry']);

    header('Location: post.php');
    exit();
}

    $conf_name = htmlspecialchars($_SESSION['entry']['name'],ENT_QUOTES);
    $conf_email = htmlspecialchars($_SESSION['entry']['email'],ENT_QUOTES);
    $conf_pass = 'パスワードは表示しません。';
    $conf_image = htmlspecialchars($_SESSION['entry']['image'],ENT_QUOTES);
    $smarty->assign("conf_name", $conf_name);
    $smarty->assign("conf_email", $conf_email);
    $smarty->assign("conf_pass", $conf_pass);
    if ($_SESSION['entry']['image'] !== '') :
    $smarty->assign("conf_image", $conf_image);
    endif;

/*main */
$smarty->assign("head", "登録内容の確認");
$smarty->assign("sub_message",
"以下の内容を登録をします。ご確認ください。");





$smarty->display("conf.tpl");

/* お知らせ　一覧 */




?>