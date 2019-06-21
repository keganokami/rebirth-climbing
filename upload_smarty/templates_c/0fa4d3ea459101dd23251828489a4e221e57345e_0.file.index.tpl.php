<?php
/* Smarty version 3.1.33, created on 2019-05-28 06:12:58
  from 'C:\xampp\htdocs\smarty_lessons\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cecb54ad5a842_32927371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa4d3ea459101dd23251828489a4e221e57345e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_lessons\\templates\\index.tpl',
      1 => 1559016776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cecb54ad5a842_32927371 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Smarty のテスト</title>
</head>
<body>

<h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
</p>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html>
<?php }
}
