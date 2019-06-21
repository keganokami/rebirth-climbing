<?php
/* Smarty version 3.1.33, created on 2019-06-20 18:26:30
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\conf.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0b5146e880e4_51701590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc84d7594de8d244609754ecb4be1cbefa98991' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\conf.html',
      1 => 1561022788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d0b5146e880e4_51701590 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input type="hidden" name="action">
            <dl>
                <dt>ユーザー名</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['conf_name']->value;?>
</dd>
                <dt>メールアドレス</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['conf_email']->value;?>
</dd>
                <dt>パスワード</dt>
                <dd><?php echo $_smarty_tpl->tpl_vars['conf_pass']->value;?>
</dd>
                <dt>アイコン画像</dt>
                <dd><img src="../member_picture/<?php echo $_smarty_tpl->tpl_vars['conf_image']->value;?>
" alt="" width="200px" height="200px">
                </dd>
            </dl>
            <button type="submit" value="login">登録する</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
