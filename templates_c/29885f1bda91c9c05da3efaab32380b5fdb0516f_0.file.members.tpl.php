<?php
/* Smarty version 3.1.33, created on 2019-06-21 14:21:55
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\members.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c6973c017e4_88691842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29885f1bda91c9c05da3efaab32380b5fdb0516f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\members.tpl',
      1 => 1561081600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./htmlContents/menus/members.html' => 1,
    'file:body_down_base.tpl' => 1,
  ),
),false)) {
function content_5d0c6973c017e4_88691842 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>メンバー紹介</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/members_styles.css" />

    
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./htmlContents/menus/members.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php $_smarty_tpl->_subTemplateRender("file:body_down_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
