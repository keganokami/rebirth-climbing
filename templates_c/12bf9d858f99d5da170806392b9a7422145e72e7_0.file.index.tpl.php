<?php
/* Smarty version 3.1.33, created on 2019-05-31 06:10:59
  from 'C:\xampp\htdocs\smarty_site_lessons\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf0a953a4e355_83757303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12bf9d858f99d5da170806392b9a7422145e72e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons\\templates\\index.tpl',
      1 => 1559275844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:index.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5cf0a953a4e355_83757303 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Smarty のテスト</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
