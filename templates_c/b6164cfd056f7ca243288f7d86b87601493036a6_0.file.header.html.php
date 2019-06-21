<?php
/* Smarty version 3.1.33, created on 2019-06-04 09:23:06
  from 'C:\xampp\htdocs\smarty_site_lessons\templates\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf61c5ad00812_76100894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6164cfd056f7ca243288f7d86b87601493036a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons\\templates\\header.html',
      1 => 1559632978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf61c5ad00812_76100894 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
  <header>
    <img src="<?php echo $_smarty_tpl->tpl_vars['header_logo']->value;?>
" alt="ヘッダーロゴ" />
    <nav>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_menus']->value, 'header_menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header_menu']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['header_menu']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </nav>
  </header>
</body>
<?php }
}
