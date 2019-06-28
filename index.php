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
/*header */
$header_menus = array('about_us.html'=>'メニュー1','members.html'=>'メニュー2','menu3'=>'メニュー3','menu4'=>'メニュー4');
$smarty->assign("header_menus", $header_menus);
/*header end */

/*main */
$smarty->assign("message", "見出し１");
$smarty->assign("sub_message",
"ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー
ダミーダミーダミーダミーダミーダミーダミーダミー");

/* お知らせ　一覧 */

$smarty->assign("news_title1",array('title' => 'サイトを公開しました。', 'link' => '#', 'date' => '2019.03.03'));

$smarty->assign("news_title2",array('title' => '5月の活動予定', 'link' => '#' , 'date' => '2019.03.03'));

$smarty->assign("news_title3",array('title' => '6月の活動予定', 'link' => '#' , 'date' => '2019.03.03'));


// mail_send
if (!empty($_POST)) {
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $to = "400800m@gmail.com";
      $title =  $_POST['item'];
      $name = $_POST['name'];
      $furigana = $_POST['furigana'];
      $email = $_POST['email'];
      $content = $_POST['content'];
      $message = 
      "名前：". " " .$name ."\n".
      "ふりがな". " "  .$furigana ."\n".
      "メールアドレス：". " "  .$email ."\n".
      "お問い合わせ内容："."\n" .$content ."\n";
      mb_send_mail( $to,$title,$message);

// 確認用メール

      $conf_to = $_POST['email'];
      $conf_title = "確認用メール";
      $conf_name = $_POST['name'];
      $conf_furigana = $_POST['furigana'];
      $conf_email =  $_POST['email'];
      $conf_item =  $_POST['item'];
      $conf_content = $_POST['content'];
      $conf_message = 
      "名前：". " " .$conf_name ."\n".
      "ふりがな：". " "  .$conf_furigana ."\n".
      "メールアドレス：". " "  .$conf_email ."\n".
      "お問い合わせ項目". " "  .$conf_item ."\n".
      "お問い合わせ内容："."\n" .$conf_content ."\n";
      if(mb_send_mail( $conf_to,$conf_title,"以下の内容で受付ました"."\n".$conf_message)){
        header("Location: index.php");
        $smarty->assign("success_send_mail", "お問い合わせメールを送信しました");
        exit();
    } else {
        header("Location: index.php");
        $smarty->assign("error_send_mail", "メールの送信に失敗しました。再度実行してください。");
        exit();  
    };
      $_POST = array();
}

$smarty->display("index.tpl");

?>