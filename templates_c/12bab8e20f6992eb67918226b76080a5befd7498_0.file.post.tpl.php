<?php
/* Smarty version 3.1.33, created on 2019-06-21 13:51:29
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c62513d6a00_99380577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12bab8e20f6992eb67918226b76080a5befd7498' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\post.tpl',
      1 => 1561081547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./htmlContents/post.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5d0c62513d6a00_99380577 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>一言日記【テスト】</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/styles.css" />

    
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./htmlContents/post.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php $_smarty_tpl->_subTemplateRender("file:body_down_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
