<?php
/* Smarty version 3.1.33, created on 2019-06-20 18:08:36
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\entry.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0b4d149d1745_79976572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '938e060dd9e1bc3e5e7fbbfa0f8f3f7bf7852a57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\entry.html',
      1 => 1561020965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d0b4d149d1745_79976572 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">
    <div class="main-contents">
      <h1 class="content-title"><?php echo $_smarty_tpl->tpl_vars['head']->value;?>
</h1>
      <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
    </div>
    <div class="form_card">
      <div error-box>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['name_error']->value;?>
</span><br />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['email_error']->value;?>
</span><br />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['password_error']->value;?>
</span>
      </div>
      <form action="" method="post">
        <p>
          <label for="name">ユーザー名</label>
          <input type="name" name="name" value="" placeholder="miyata_coromo" />
        </p>
        <p>
          <label for="email">メールアドレス</label>
          <input
            type="email"
            name="email"
            value=""
            placeholder="expample@xxx.com"
          />
        </p>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['email_duplicate_error']->value;?>
</span>
        <p>
          <label for="password">パスワード</label>
          <input type="password" name="password" value="" />
        </p>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['password_duplicate_error']->value;?>
</span>
        <p>
          <label for="image">アイコン画像</label>
          <input type="file" name="image" size="35" />
        </p>
        <button type="submit" value="login">ログイン</button>
      </form>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
