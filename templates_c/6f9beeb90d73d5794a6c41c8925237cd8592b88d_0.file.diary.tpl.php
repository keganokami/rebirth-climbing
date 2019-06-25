<?php
/* Smarty version 3.1.33, created on 2019-06-24 14:03:06
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\diary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d81a5597b2_27938775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9beeb90d73d5794a6c41c8925237cd8592b88d' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\diary.tpl',
      1 => 1561383288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./htmlContents/menus/diary.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5d10d81a5597b2_27938775 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>一言日記</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/diary_styles.css" />

    
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./htmlContents/menus/diary.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php $_smarty_tpl->_subTemplateRender("file:body_down_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
