<?php
/* Smarty version 3.1.33, created on 2019-06-24 14:03:06
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\menus\diary.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d81a578fd3_44314261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '615c32c64b11258eed1dc710576d8e9998541168' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\menus\\diary.html',
      1 => 1561383466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../header.html' => 1,
    'file:./../footer.html' => 1,
  ),
),false)) {
function content_5d10d81a578fd3_44314261 (Smarty_Internal_Template $_smarty_tpl) {
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
          <p><?php echo mb_substr($_smarty_tpl->tpl_vars['post']->value['message'],0,20);?>
...</p>
        </div>
        <div class="block_element_detail">
          <a href="post_view.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">記事の詳細へ</a>
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
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
        <a href="diary.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="pre"><?php echo $_smarty_tpl->tpl_vars['prePage']->value;?>
</a>
        <?php } else { ?>
        <span><?php echo $_smarty_tpl->tpl_vars['prePage']->value;?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['maxPage']->value) {?>
        <a href="diary.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="next"><?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
</a>
        <?php } else { ?>
        <span><?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
</span>
        <?php }?>
      </div>
      <div class="latest_page">
        <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
      <a href="diary.php?page=1" class="latest">最新の記事へ</a>
      <?php }?>
    </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
