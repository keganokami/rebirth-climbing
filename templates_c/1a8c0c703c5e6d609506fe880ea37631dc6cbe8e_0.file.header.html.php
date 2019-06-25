<?php
/* Smarty version 3.1.33, created on 2019-06-24 13:38:08
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d240b41c49_94515615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a8c0c703c5e6d609506fe880ea37631dc6cbe8e' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\header.html',
      1 => 1561383294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d10d240b41c49_94515615 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
  <a href="#" id="return-top" v-scroll-to="'#top'">Top</a>
  <div id="top"></div>
  <header id="header">
    <menu-btn
      :class="{ menu_btn: true, open_: menuFlag }"
      @click.native="menuToggle"
    >
    </menu-btn>
  </header>
  <transition>
    <div id="sp_menu" v-show="menuFlag">
      <div class="menu_wrapp">
        <ul class="menu-list">
          <menu-component></menu-component>
        </ul>
        <!-- <div class="menu" v-show="isOpen"></div> -->
      </div>
    </div>
  </transition>

  <header class="web-header">
    <img src="<?php echo $_smarty_tpl->tpl_vars['header_logo']->value;?>
" alt="ヘッダーロゴ" />
    <nav>
      <ul>
        <menu-component></menu-component>
      </ul>
    </nav>
  </header>
</div>
<?php }
}
