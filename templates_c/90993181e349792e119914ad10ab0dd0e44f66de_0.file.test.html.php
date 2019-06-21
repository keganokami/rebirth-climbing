<?php
/* Smarty version 3.1.33, created on 2019-05-29 04:31:22
  from 'C:\xampp\htdocs\smarty_site_lessons\templates\test.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cedeefaaa0957_00925363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90993181e349792e119914ad10ab0dd0e44f66de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons\\templates\\test.html',
      1 => 1559097051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5cedeefaaa0957_00925363 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Smarty のテスト</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <header>
      <img src="<?php echo $_smarty_tpl->tpl_vars['header_logo']->value;?>
" alt="ヘッダーロゴ" />
      <nav>
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_menus']->value, 'header_menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header_menu']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['header_menu']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </nav>
    </header>
    <!-- <div class="wrapper"> -->
    <div class="container">
      <div class="main-contents">
        <img class="top-image" src="<?php echo $_smarty_tpl->tpl_vars['top']->value-'image';?>
" alt="見出しのイメージ" />
        <h1 class="content-title"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
        <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
        <div class="index_news">
          <h2 class="head_line">お知らせ</h2>
          <ol>
            <li>
              <p class="date"><?php echo $_smarty_tpl->tpl_vars['news_title1']->value['date'];?>
</p>
              <h3 class="title">
                <?php echo $_smarty_tpl->tpl_vars['news_title1']->value['title'];?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['news_title1']->value['link'];?>
"></a>
              </h3>
            </li>
            <li>
              <p class="date"><?php echo $_smarty_tpl->tpl_vars['news_title2']->value['date'];?>
</p>
              <h3 class="title">
                <?php echo $_smarty_tpl->tpl_vars['news_title2']->value['title'];?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['news_title2']->value['link'];?>
"></a>
              </h3>
            </li>
            <li>
              <p class="date"><?php echo $_smarty_tpl->tpl_vars['news_title3']->value['date'];?>
</p>
              <h3 class="title">
                <?php echo $_smarty_tpl->tpl_vars['news_title3']->value['title'];?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['news_title3']->value['link'];?>
"></a>
              </h3>
            </li>
          </ol>
        </div>
      </div>
      <div class="contents_boxes">
        <div class="box1">リンクコンテンツ</div>
        <div class="box2">リンクコンテンツ</div>
        <div class="box3">リンクコンテンツ</div>
      </div>
      <div class="introduction_contents">
        <div class="introduction_box">
          <div class="img">
            <p>image</p>
          </div>
          <div class="text-box">
            <h2>見出しが入ります</h2>
            <p>テキストが入ります。</p>
          </div>
        </div>
        <div class="introduction_box">
          <div class="img">
            <p>image</p>
          </div>
          <div class="text-box">
            <h2>見出しが入ります</h2>
            <p>テキストが入ります。</p>
          </div>
        </div>
        <div class="introduction_box">
          <div class="img">
            <p>image</p>
          </div>
          <div class="text-box">
            <h2>見出しが入ります</h2>
            <p>テキストが入ります。</p>
          </div>
        </div>
      </div>

      <div class="q_email_form">
        <div>
          <h2 class="q_title">お問い合わせ</h2>
        </div>
        <div>
          <form
            action="#"
            method="post"
            name="form"
            onsubmit="return validate()"
          >
            <p>
              お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。
            </p>
            <div>
              <div class="form">
                <label>お名前<span>必須</span></label>
                <input
                  type="text"
                  name="name"
                  placeholder="例）山田太郎"
                  value=""
                />
              </div>
              <div class="form">
                <label>ふりがな<span>必須</span></label>
                <input
                  type="text"
                  name="furigana"
                  placeholder="例）やまだたろう"
                  value=""
                />
              </div>
              <div class="form">
                <label>メールアドレス<span>必須</span></label>
                <input
                  type="email"
                  name="email"
                  placeholder="例）guest@example.com"
                  value=""
                />
              </div>
              <div class="form">
                <label>お問い合わせ項目<span>必須</span></label>
                <select name="item">
                  <option value="">選択してください</option>
                  <option value="体験入部希望">体験入部希望</option>
                  <option value="質問・疑問">ご質問・疑問</option>
                </select>
              </div>
              <div class="form">
                <textarea
                  name="content"
                  rows="5"
                  placeholder="お問合せ内容を入力"
                ></textarea>
              </div>
            </div>
            <div class="submit_form">
              <button type="submit">確認画面へ</button>
            </div>
          </form>
        </div>
      </div>
      <!-- </div> -->
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </body>
</html>
<?php }
}
