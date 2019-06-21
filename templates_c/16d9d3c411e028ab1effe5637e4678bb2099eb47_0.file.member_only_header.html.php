<?php
/* Smarty version 3.1.33, created on 2019-06-21 14:20:23
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\htmlContents\member_only_header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c6917897c85_06589571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d9d3c411e028ab1effe5637e4678bb2099eb47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\htmlContents\\member_only_header.html',
      1 => 1561094419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c6917897c85_06589571 (Smarty_Internal_Template $_smarty_tpl) {
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
