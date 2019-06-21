<?php
/* Smarty version 3.1.33, created on 2019-06-20 16:27:08
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0b354cc9d353_12188644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb98ea18e2384f482efbe36685af9549289df87a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\login.html',
      1 => 1561015527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d0b354cc9d353_12188644 (Smarty_Internal_Template $_smarty_tpl) {
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
  </div>
  <div class="form_card">
    <h1>ログインフォーム</h1>
    <form action="" method="post">
      <p>
        <label for="email">メールアドレス</label>
        <input
          type="email"
          name="email"
          value=""
          placeholder="expample@xxx.com"
          
        />
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
      </p>
      <p>
        <label for="password">パスワード</label>
        <input type="password" name="password" value="パスワード" required />
      </p>
      <p>
        <input id="save" type="checkbox" name="save" value="on" />
        <label for="save">次回からは自動的にログインする</label>
      </p>
      <button type="submit" value="login">ログイン</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
