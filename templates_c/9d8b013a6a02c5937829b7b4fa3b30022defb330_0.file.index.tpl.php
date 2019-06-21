<?php
/* Smarty version 3.1.33, created on 2019-06-21 10:47:45
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c374172f7a5_37682452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8b013a6a02c5937829b7b4fa3b30022defb330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\index.tpl',
      1 => 1561081517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./htmlContents/index.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5d0c374172f7a5_37682452 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Smarty のテスト</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/styles.css" />

    
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./htmlContents/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php $_smarty_tpl->_subTemplateRender("file:body_down_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
