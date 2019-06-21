<?php
/* Smarty version 3.1.33, created on 2019-06-21 18:53:32
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\htmlContents\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ca91c8312b7_27755644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '542779f10114f2d5175bde943f5b204333db439b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\htmlContents\\login.html',
      1 => 1561110267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0ca91c8312b7_27755644 (Smarty_Internal_Template $_smarty_tpl) {
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
