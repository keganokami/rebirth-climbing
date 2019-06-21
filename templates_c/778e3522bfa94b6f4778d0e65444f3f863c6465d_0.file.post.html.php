<?php
/* Smarty version 3.1.33, created on 2019-06-21 16:08:00
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\htmlContents\post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c825060ddf3_04544752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778e3522bfa94b6f4778d0e65444f3f863c6465d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\htmlContents\\post.html',
      1 => 1561100876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./member_only_header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d0c825060ddf3_04544752 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:./member_only_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <img class="top-image" />
  <div class="container">
    <div class="main-contents">
      <h3 class="content-title">ようこそ<?php echo $_smarty_tpl->tpl_vars['member_name']->value;?>
さん</h3>
      <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
    </div>
  </div>
  <form action="" method="post">
    <textarea
      name="message"
      id="message"
      cols="60"
      rows="20"
      required
    ></textarea>
    <input type="hidden" name="reply_message_id" value="{}" />
    <input type="submit" value="送信する" />
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
