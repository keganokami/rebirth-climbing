<?php
/* Smarty version 3.1.33, created on 2019-06-24 14:03:08
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\post_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d81cd7e744_00174040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27926850636977d0589c2014a47cf4396a71ba94' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\post_view.html',
      1 => 1561383465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./member_only_header.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d10d81cd7e744_00174040 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:./member_only_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <img class="top-image" />
  <div class="container">
    <div class="main-contents">
      <!-- <h3 class="content-title">ようこそ<?php echo $_smarty_tpl->tpl_vars['member_name']->value;?>
さん</h3> -->
      <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
    </div>
  </div>
  <div class="post_info">
  <div class="detail_block_element_head">
      <p>投稿者：<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</p>
    </div>
    <div class="detail_block_element_time">
      <time><?php echo $_smarty_tpl->tpl_vars['post']->value['created'];?>
</time>
    </div>
  </div>
  <div class="detail_diary_block">
      <div class="detail_block_element_post">
          <p><?php echo nl2br($_smarty_tpl->tpl_vars['post']->value['message']);?>
</p>
        </div>
  </div>
  <div class="back_area">
    <a class="back" href="diary.php">記事の一覧へ戻る</a>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
