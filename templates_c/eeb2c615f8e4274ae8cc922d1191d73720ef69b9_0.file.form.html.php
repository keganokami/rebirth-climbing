<?php
/* Smarty version 3.1.33, created on 2019-07-08 13:19:42
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2342ee81ecc4_10608707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb2c615f8e4274ae8cc922d1191d73720ef69b9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\form.html',
      1 => 1561726236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2342ee81ecc4_10608707 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="q_form">
  <div class="q_email_form">
    <div>
      <h2 class="q_title">お問い合わせ</h2>
    </div>
    <div>
      <form
        action="./index.php"
        method="post"
        name="form"
        onsubmit="return validate()"
      >
        <p>
          お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。<br />
          <span class="tip"
            >確認メールの受信をもって送信の完了となります。</span
          >
        </p>
        <p class="mail_result"><?php echo $_smarty_tpl->tpl_vars['success_send_mail']->value;?>
</p>
        <p class="mail_result"><?php echo $_smarty_tpl->tpl_vars['error_send_mail']->value;?>
</p>
        <div>
          <div class="form">
            <label>お名前<span>必須</span></label>
            <input
              type="text"
              name="name"
              placeholder="例）山田太郎"
              value=""
              required
            />
          </div>
          <div class="form">
            <label>ふりがな</label>
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
              required
            />
          </div>
          <div class="form">
            <label>お問い合わせ項目<span>必須</span></label>
            <select name="item" required>
              <option value="">選択してください</option>
              <option value="体験入部希望">体験入部希望</option>
              <option value="質問・疑問">ご質問・疑問</option>
            </select>
          </div>
          <div class="form">
            <textarea
              name="content"
              rows="5"
              placeholder="お問合せ内容を入力　必須"
              required
            ></textarea>
          </div>
        </div>
        <div class="submit_form">
          <button type="submit">送信する</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php }
}
