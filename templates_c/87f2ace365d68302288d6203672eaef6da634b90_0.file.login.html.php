<?php
/* Smarty version 3.1.33, created on 2019-06-24 13:37:59
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d237b38a89_50543476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f2ace365d68302288d6203672eaef6da634b90' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\login.html',
      1 => 1561383464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d10d237b38a89_50543476 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <div class="container">
    <div class="form_card">
      <div  class="form_body">
      <h1>ログインする</h1>
      <div class="error-box"><span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span><br /></div>
      <form action="" method="post">
        <p>
          <label for="email">メールアドレス</label>
          <input
            type="email"
            name="email"
            value=""
            placeholder="expample@xxx.com"
          />
        </p>
        <p>
          <label for="password">パスワード</label>
          <input type="password" name="password" value="パスワード" />
        </p>
        <p>
          <label class="none" for="save"
            ><input
              id="save"
              type="checkbox"
              name="save"
              value="on"
            />次回からは自動的にログインする</label
          >
        </p>
        <p>
          <div class="submit">
          <button type="submit" value="login">ログイン</button>
          </div>
        </p>
      </form>
    </div>
    </div>
  </div>
</div>
<?php }
}
