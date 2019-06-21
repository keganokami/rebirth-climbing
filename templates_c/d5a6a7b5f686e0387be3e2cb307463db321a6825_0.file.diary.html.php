<?php
/* Smarty version 3.1.33, created on 2019-06-21 17:58:31
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\htmlContents\menus\diary.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c9c379c6ed9_27455847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a6a7b5f686e0387be3e2cb307463db321a6825' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\htmlContents\\menus\\diary.html',
      1 => 1561107508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../header.html' => 1,
    'file:./../footer.html' => 1,
  ),
),false)) {
function content_5d0c9c379c6ed9_27455847 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:./../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <img class="top-image" />
  <div class="container">
    <div class="main-contents">
      <h1 class="content-title"><?php echo $_smarty_tpl->tpl_vars['midashi']->value;?>
</h1>
      <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
      <p class="pageMap">1件から5件を表示</p>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
      <div class="diary_block">
        <div class="block_element_head">
          <p><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</p>
        </div>
        <div class="block_element_post">
          <p><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</p>
        </div>
        <div class="block_element_detail">
          <a href="view.php?id={}">記事の詳細へ</a>
        </div>
        <div class="block_element_time">
          <time><?php echo $_smarty_tpl->tpl_vars['post']->value['created'];?>
</time>
        </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="page-nation">
        <span class="pre">前の記事へ</span><span class="next">次の記事へ</span>
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
