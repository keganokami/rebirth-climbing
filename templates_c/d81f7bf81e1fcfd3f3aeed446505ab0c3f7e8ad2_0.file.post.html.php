<?php
/* Smarty version 3.1.33, created on 2019-06-24 13:37:52
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d230c03c20_20040991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81f7bf81e1fcfd3f3aeed446505ab0c3f7e8ad2' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\post.html',
      1 => 1561383290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./member_only_header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d10d230c03c20_20040991 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="area_box">
      <div class="post-area">
        <form action="" method="post">
            <textarea
              name="message"
              id="message"
              cols="60"
              rows="20"
              required
            ></textarea>
            <div class="submit">
              <input type="submit" value="送信する" />
            </div>
            <input type="hidden" name="reply_message_id" value="3" />
          </form>
      </div>
      <div class="article_area">
        投稿記事の一覧を表示する
        
     
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPost']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
          <p><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</p>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
        
      </div>
    </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
