<?php
/* Smarty version 3.1.33, created on 2019-06-04 10:21:19
  from 'C:\xampp\htdocs\smarty_site_lessons\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf629ffa25c03_85864210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6d1b83e3321728a41726a13b85f827c9265dcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons\\templates\\index.html',
      1 => 1559636478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form.html' => 1,
  ),
),false)) {
function content_5cf629ffa25c03_85864210 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <div class="wrapper"> -->
<div id="main">
  <img class="top-image" alt="見出しのイメージ" />
  <div class="container">
    <div class="main-contents">
      <h1 class="content-title"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
      <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
      <div class="index_news">
        <h2 class="head_line">お知らせ</h2>
        <ol>
          <li>
            <p class="date"><?php echo $_smarty_tpl->tpl_vars['news_title1']->value['date'];?>
</p>
            <h3 class="title">
              <?php echo $_smarty_tpl->tpl_vars['news_title1']->value['title'];?>

              <a href="<?php echo $_smarty_tpl->tpl_vars['news_title1']->value['link'];?>
"></a>
            </h3>
          </li>
          <li>
            <p class="date"><?php echo $_smarty_tpl->tpl_vars['news_title2']->value['date'];?>
</p>
            <h3 class="title">
              <?php echo $_smarty_tpl->tpl_vars['news_title2']->value['title'];?>

              <a href="<?php echo $_smarty_tpl->tpl_vars['news_title2']->value['link'];?>
"></a>
            </h3>
          </li>
          <li>
            <p class="date"><?php echo $_smarty_tpl->tpl_vars['news_title3']->value['date'];?>
</p>
            <h3 class="title">
              <?php echo $_smarty_tpl->tpl_vars['news_title3']->value['title'];?>

              <a href="<?php echo $_smarty_tpl->tpl_vars['news_title3']->value['link'];?>
"></a>
            </h3>
          </li>
        </ol>
      </div>
    </div>
    <div class="contents_boxes">
      <div class="box1">リンクコンテンツ</div>
      <div class="box2">リンクコンテンツ</div>
      <div class="box3">リンクコンテンツ</div>
    </div>
    <div class="introduction_contents">
      <div class="introduction_box">
        <div class="img">
          <img src="../../img/content-image1.jpg" alt="fafa" />
        </div>
        <div class="text-box">
          <h2>見出しが入ります</h2>
          <p>テキストが入ります。</p>
        </div>
      </div>
      <div class="introduction_box">
        <div class="img">
          <img src="../../img/content-image2.jpg" alt="fafa" />
        </div>
        <div class="text-box">
          <h2>見出しが入ります</h2>
          <p>テキストが入ります。</p>
        </div>
      </div>
      <div class="introduction_box">
        <div class="img">
          <img src="../../img/content-image3.jpg" alt="fafa" />
        </div>
        <div class="text-box">
          <h2>見出しが入ります</h2>
          <p>テキストが入ります。</p>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- </div> -->
</div>
<?php }
}
