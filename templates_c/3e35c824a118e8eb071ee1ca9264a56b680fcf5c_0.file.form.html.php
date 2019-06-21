<?php
/* Smarty version 3.1.33, created on 2019-06-11 04:02:39
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cff0bbf723cd5_23208679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e35c824a118e8eb071ee1ca9264a56b680fcf5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\form.html',
      1 => 1560217930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cff0bbf723cd5_23208679 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="q_form">
  <div class="q_email_form">
    <div>
      <h2 class="q_title">お問い合わせ</h2>
    </div>
    <div>
      <form action="#" method="post" name="form" onsubmit="return validate()">
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
</div>
<?php }
}
