<?php
/* Smarty version 3.1.33, created on 2019-06-21 14:21:55
  from 'C:\xampp\htdocs\smarty_site_lessons1\templates\htmlContents\menus\members.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c6973d78645_06381035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61a5591bbcf76b6f6578fcd50f316ab2ff20c9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_site_lessons1\\templates\\htmlContents\\menus\\members.html',
      1 => 1560240734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../header.html' => 1,
    'file:./../footer.html' => 1,
  ),
),false)) {
function content_5d0c6973d78645_06381035 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:./../header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <img class="top-image" />
  <div class="container">
    <div class="main-contents">
      <h1 class="content-title"><?php echo $_smarty_tpl->tpl_vars['midashi']->value;?>
</h1>
      <p class="sub_message"><?php echo nl2br($_smarty_tpl->tpl_vars['sub_message']->value);?>
</p>
      <div class="members">
        <!-- ここから -->
        <div class="content_box">
          <img src="../../img/images.jpg" alt="メンバーのアイコン" />
          <section>
            <div class="member_box">
              <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['history']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['rp']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            </div>
          </section>
        </div>
        <!-- ここまでがプロフィール -->
        <!-- ここから -->
        <div class="content_box">
          <img src="../../img/content-image3.jpg" alt="メンバーのアイコン" />
          <section>
            <div class="member_box">
              <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['history']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['rp']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            </div>
          </section>
        </div>
        <!-- ここまでがプロフィール -->
        <!-- ここから -->
        <div class="content_box">
          <img src="../../img/content-image3.jpg" alt="メンバーのアイコン" />
          <section>
            <div class="member_box">
              <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['history']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['rp']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            </div>
          </section>
        </div>
        <!-- ここまでがプロフィール -->
        <!-- ここから -->
        <div class="content_box">
          <img src="../../img/content-image3.jpg" alt="メンバーのアイコン" />
          <section>
            <div class="member_box">
              <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['history']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['rp']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            </div>
          </section>
        </div>
        <!-- ここまでがプロフィール -->
        <!-- ここから -->
        <div class="content_box">
          <img src="../../img/content-image3.jpg" alt="メンバーのアイコン" />
          <section>
            <div class="member_box">
              <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['history']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['rp']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            </div>
          </section>
        </div>
        <!-- ここまでがプロフィール -->
        <!-- ここから -->
        <div class="content_box">
          <img src="../../img/content-image3.jpg" alt="メンバーのアイコン" />
          <section>
            <div class="member_box">
              <p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['history']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['rp']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</p>
              <p><?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
</p>
            </div>
          </section>
        </div>
        <!-- ここまでがプロフィール -->
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./../footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
