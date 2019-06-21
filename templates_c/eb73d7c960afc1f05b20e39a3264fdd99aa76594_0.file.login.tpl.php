<?php
/* Smarty version 3.1.33, created on 2019-06-21 18:10:33
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c9f0977a062_95884400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb73d7c960afc1f05b20e39a3264fdd99aa76594' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\login.tpl',
      1 => 1561108224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./htmlContents/login.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5d0c9f0977a062_95884400 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Smarty のテスト</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/member_admin_styles.css" />

    
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./htmlContents/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php $_smarty_tpl->_subTemplateRender("file:body_down_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
