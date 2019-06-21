<?php
/* Smarty version 3.1.30, created on 2019-06-10 18:41:03
  from "/home/users/0/moo.jp-corocoro/web/smarty_site_lessons/templates/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cfe25af687096_17592787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7ce21590cdb024337f3c9b4063a5fcd4f975dc' => 
    array (
      0 => '/home/users/0/moo.jp-corocoro/web/smarty_site_lessons/templates/header.html',
      1 => 1560159604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfe25af687096_17592787 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app">
  <header id="header">
    <menu-btn
      :class="{ menu_btn: true, open_: menuFlag }"
      @click.native="menuToggle"
    >
    </menu-btn>
  </header>
  <transition>
    <div id="sp_menu" v-show="menuFlag" :style="{ marginTop: headH }">
      <div class="menu_wrapp">
        <ul class="menu-list">
          <li>
            <a href="./about_us.php">サイトについて</a>
          </li>
          <li>
            <a href="./about_us.php">メンバー紹介</a>
          </li>
          <li>
            <a href="./about_us.php">一言日記</a>
          </li>
          <!-- <li>
            <a href="./about_us.php">メニュー</a>
          </li>
          <li>
            <a href="./about_us.php">メニュー</a>
          </li> -->
        </ul>
        <div class="menu" v-show="isOpen"></div>
      </div>
    </div>
  </transition>
</div>
<header class="web-header">
  <img src="<?php echo $_smarty_tpl->tpl_vars['header_logo']->value;?>
" alt="ヘッダーロゴ" />
  <nav>
    <ul>
      <li>
        <a href="./about_us.php">サイトについて</a>
      </li>
      <li>
        <a href="./about_us.php">メンバー紹介</a>
      </li>
      <li>
        <a href="./about_us.php">一言日記</a>
      </li>
      <!-- <li>
        <a href="./about_us.php">メニュー</a>
      </li>
      <li>
        <a href="./about_us.php">メニュー</a>
      </li> -->
    </ul>
  </nav>
</header>
<?php }
}
