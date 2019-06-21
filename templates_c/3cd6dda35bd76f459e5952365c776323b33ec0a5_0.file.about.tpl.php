<?php
/* Smarty version 3.1.33, created on 2019-06-10 11:04:34
  from 'C:\xampp\htdocs\smarty_site_lessons\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfe1d22c010a7_97891985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd6dda35bd76f459e5952365c776323b33ec0a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons\\templates\\about.tpl',
      1 => 1560157467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:about.html' => 1,
  ),
),false)) {
function content_5cfe1d22c010a7_97891985 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Smarty about_us</title>
    <!-- smarty.phpから見たパスにする。 -->
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
<body>
    <?php $_smarty_tpl->_subTemplateRender("file:about.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
</body>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue-router@3.0.6/dist/vue-router.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/hamburger.js"><?php echo '</script'; ?>
>
</html><?php }
}
