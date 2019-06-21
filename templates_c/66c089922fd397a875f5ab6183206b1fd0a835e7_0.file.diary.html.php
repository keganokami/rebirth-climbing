<?php
/* Smarty version 3.1.33, created on 2019-06-20 11:41:59
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\menus\diary.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0af277ec9522_22607700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66c089922fd397a875f5ab6183206b1fd0a835e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\menus\\diary.html',
      1 => 1560998499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../header.html' => 1,
    'file:./../footer.html' => 1,
  ),
),false)) {
function content_5d0af277ec9522_22607700 (Smarty_Internal_Template $_smarty_tpl) {
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
    </div>
    <p class="pageMap">1件から5件を表示</p>
    <div class="diary_block">
      <div class="block_element_head">
        <p>見出し</p>
      </div>
      <div class="block_element_post">
        <p>投稿の一部</p>
      </div>
      <div class="block_element_time">
        <time>投稿日</time>
      </div>
    </div>
    <div class="diary_block">
      <div class="block_element_head">
        <p>見出し</p>
      </div>
      <div class="block_element_post">
        <p>投稿の一部</p>
      </div>
      <div class="block_element_time">
        <time>投稿日</time>
      </div>
    </div>
    <div class="page-nation">
      <span class="pre">前の記事へ</span><span class="next">次の記事へ</span>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
