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
$smarty->assign("message", "ようこそリ・バース　ボルダリング部のサイトへ");
$smarty->assign("sub_message",
"　皆さんはスポーツクライミングをご存じでしょうか。2020年のオリンピック種目にもなっており人気沸騰中にスポーツです。その中でもボルダリングは
室内でできるスポーツで、「ホールド」と呼ばれる石のようなものを決められたルートに沿って登っていきます。ゴールをつかめた時の達成感と、難しい
課題（ルート）を登ることができたときの爽快感が癖になります。老若男女楽しめるところも魅力的で、ボルダリングジムに行くと小さい子供からご年配の
方まで幅広い年齢層が取り組んでいます。
　「自分にもできるかな」と不安になったり、「興味はあるけどジムに行くのはハードルが高い...」など様々な理由があると思います。ですが、その不安を
私たちリ・バースボルダリング部は解決します。社員のみならず輪を広げるためにもたくさんの方と壁を登って一緒に達成感を味わいたいと思っています。

　私たちは週に1回東京都内のボルダリングジムを中心に活動をしています。部員のほとんどが初心者ですがみんな順調に上達しており、
部員の少しずつ増えてきております。全くボルダリングをしたことがない方でも大丈夫です！部員同士で教え合いながら難しい課題にチャレンジしていきます。
一度登り方や覚えれば生涯スポーツとして良い趣味になると思います。仕事のストレスの解消や健康維持にも最適です！メンバーは随時募集しております。
皆様のご参加心よりお待ちしております。");

/* お知らせ　一覧 */

$smarty->assign("news_title1",array('title' => 'サイトを公開しました。', 'link' => '#', 'date' => '2019.03.03'));

$smarty->assign("news_title2",array('title' => '5月の活動予定', 'link' => '#' , 'date' => '2019.04.03'));

$smarty->assign("news_title3",array('title' => '6月の活動予定', 'link' => '#' , 'date' => '2019.05.03'));


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