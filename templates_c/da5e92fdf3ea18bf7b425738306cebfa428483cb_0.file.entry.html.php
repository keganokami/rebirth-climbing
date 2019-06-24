<?php
/* Smarty version 3.1.33, created on 2019-06-24 13:38:08
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\entry.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d240b38bb8_66588163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5e92fdf3ea18bf7b425738306cebfa428483cb' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\entry.html',
      1 => 1561383294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d10d240b38bb8_66588163 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="error-box">
      <span class="error"><?php echo $_smarty_tpl->tpl_vars['name_error']->value;?>
</span><br />
      <span class="error"><?php echo $_smarty_tpl->tpl_vars['email_error']->value;?>
</span><br />
      <span class="error"><?php echo $_smarty_tpl->tpl_vars['password_error']->value;?>
</span><br />
      <span class="error"><?php echo $_smarty_tpl->tpl_vars['image_type_error']->value;?>
</span>
    </div>
    <div class="form_card">
      <div class="form_body">
        
        <form action="" method="post" enctype="multipart/form-data">
          <p>
            <label for="name">ユーザー名</label>
            <input
              type="text"
              name="name"
              value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
              placeholder="miyata_coromo"
            />
          </p>
          <p>
            <label for="email">メールアドレス</label>
            <input
              type="email"
              name="email"
              value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"
              placeholder="expample@xxx.com"
            />
          </p>
          <span class="error"><?php echo $_smarty_tpl->tpl_vars['email_duplicate_error']->value;?>
</span>
          <p>
            <label for="password">パスワード</label>
            <input type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
" />
          </p>
          <span class="error"><?php echo $_smarty_tpl->tpl_vars['password_duplicate_error']->value;?>
</span>
          <p>
            <label for="image">アイコン画像</label>
            <input type="file" name="image" size="35" />
          </p>
          <span class="error"><?php echo $_smarty_tpl->tpl_vars['re_select_caution']->value;?>
</span>
          <p>
            <div class="submit">
            <button type="submit" value="login">入力内容を確認する</button>
            </div>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- <?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> -->
<?php }
}
