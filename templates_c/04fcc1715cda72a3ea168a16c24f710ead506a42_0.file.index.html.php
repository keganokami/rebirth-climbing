<?php
/* Smarty version 3.1.33, created on 2019-06-24 13:10:33
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10cbc9963494_48169201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04fcc1715cda72a3ea168a16c24f710ead506a42' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\index.html',
      1 => 1561381602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
    'file:./../htmlContents/form.html' => 1,
    'file:./footer.html' => 1,
  ),
),false)) {
function content_5d10cbc9963494_48169201 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <img class="top-image" />
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
          <div class="intro-text">
            <p>テキストが入ります。</p>
          </div>
        </div>
      </div>
      <div class="introduction_box">
        <div class="img">
          <img src="../../img/content-image2.jpg" alt="fafa" />
        </div>
        <div class="text-box">
          <h2>見出しが入ります</h2>
          <div class="intro-text">
            <p>テキストが入ります。</p>
          </div>
        </div>
      </div>
      <div class="introduction_box">
        <div class="img">
          <img src="../../img/content-image3.jpg" alt="fafa" />
        </div>
        <div class="text-box">
          <h2>見出しが入ります</h2>
          <div class="intro-text">
            <p>テキストが入ります。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:./../htmlContents/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- </div> -->
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
