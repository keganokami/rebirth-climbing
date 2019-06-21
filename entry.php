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

$error = [];

// エントリーの入力チェック
if (!empty($_POST)) {
    if (trim($_POST['name']) === '') {
        $error['name'] = 'brank';
    } 
    if (trim($_POST['email']) === '') {
        $error['email'] = 'brank';
    }
    if (trim($_POST['password']) === '') {
        $error['password'] = 'brank';
    }

    $fileName = $_FILES['image']['name'];
    if (!empty($fileName)) {
        $ext = substr($fileName, -3);
        if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
			$error['image'] = 'type';
		}
    }
// ユーザー情報の存在チェック
    if (empty($error)) {
        $member_email = $db->prepare('SELECT COUNT(*) as email_cnt FROM members WHERE email=?');
        $member_email->execute(array($_POST['email']));
        $record_email = $member_email->fetch();
        if ($record_email['email_cnt'] > 0) {
            $error['email'] = 'email_duplicate';
        }

        $member_pass = $db->prepare('SELECT COUNT(*) as pass_cnt FROM members WHERE password=?');
        $member_pass->execute(array(sha1($_POST['password'])));
        $record_pass = $member_pass->fetch();
        if ($record_pass['pass_cnt'] > 0) {
            $error['password'] = 'pass_duplicate';
        }
    }

    if (empty($error)) {
        $_SESSION['entry'] = $_POST;
        $image = date('YmdHis').session_id() . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../smarty_site_lessons1/member_picture/'. $image);
        $_SESSION['entry']['image'] = $image;
        header('Location: conf.php');
        exit();
    }
}

    // 再度編集の際に、前回の入力内容を保存する
    if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['entry'])) {
        $_POST = $_SESSION['entry'];
        echo 'rewrite';
    }

    if ($error['name'] === 'brank') {
        $smarty->assign("name_error", "・ユーザー名を入力してください。");
    }
    if ($error['email'] === 'brank') {
        $smarty->assign("email_error", "・メールアドレスを入力してください。");
    }
    if ($error['password'] === 'brank') {
        $smarty->assign("password_error", "・パスワードを入力してください。");
    }
    if ($error['email'] === 'email_duplicate') {
        $smarty->assign("email_duplicate_error", "・そのメールアドレスは既に登録されています。");
    }
    if ($error['password'] === 'pass_duplicate') {
        $smarty->assign("password_duplicate_error", "・そのパスワードはすでに使用されています。");
    }
    if ($error['image'] === 'type') {
        $smarty->assign("image_type_error", "・写真などは[.gif][.jpg][.png]を指定してください。");
    }
    if (!empty($error)) {
        $smarty->assign("re_select_caution", "・恐れ入りますが、画像を改めて指定してください。");
    }
    

// valueに$_POSTの内容をセットする
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$pass = htmlspecialchars($_POST['password'], ENT_QUOTES);
$smarty->assign("name", $name);
$smarty->assign("email", $email);
$smarty->assign("pass", $pass);



/*main */
$smarty->assign("head", "会員登録");
$smarty->assign("sub_message",
"以下のフォームに必要事項を入力し登録を完了させてください。");



$smarty->display("entry.tpl");

/* お知らせ　一覧 */




?>