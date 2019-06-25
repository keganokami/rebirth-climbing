<?php
/* Smarty version 3.1.33, created on 2019-06-24 13:37:52
  from 'C:\Apache24\htdocs\rebirth_climbing\templates\htmlContents\member_only_header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d10d230c0e7a2_12159981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4de9678acd86c6d322b14170e5e6d9ca51d1cd41' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\rebirth_climbing\\templates\\htmlContents\\member_only_header.html',
      1 => 1561383466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d10d230c0e7a2_12159981 (Smarty_Internal_Template $_smarty_tpl) {
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
          <member-only-menu-component></member-only-menu-component>
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
        <member-only-menu-component></member-only-menu-component>
      </ul>
    </nav>
  </header>
</div>
<?php }
}
