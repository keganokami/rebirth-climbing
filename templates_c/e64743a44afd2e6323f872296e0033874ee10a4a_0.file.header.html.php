<?php
/* Smarty version 3.1.33, created on 2019-06-17 16:09:06
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d073c92d02e87_51701018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64743a44afd2e6323f872296e0033874ee10a4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\header.html',
      1 => 1560243891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d073c92d02e87_51701018 (Smarty_Internal_Template $_smarty_tpl) {
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
