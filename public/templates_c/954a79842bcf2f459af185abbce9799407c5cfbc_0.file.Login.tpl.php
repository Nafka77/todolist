<?php
/* Smarty version 4.3.0, created on 2023-10-02 17:01:33
  from 'C:\xampp\htdocs\project_list\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_651adb4de7df97_25193891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954a79842bcf2f459af185abbce9799407c5cfbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_list\\app\\views\\Login.tpl',
      1 => 1696258709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651adb4de7df97_25193891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_673551630651adb4de7b3e5_28848874', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_673551630651adb4de7b3e5_28848874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_673551630651adb4de7b3e5_28848874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Login</h2>
					<p>Hello!</p>
					<div class="split style1">
						<section>
							<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
">
								<div class="fields">
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="pass">Password</label>
										<input type="password" name="pass" id="pass" />
									</div>
									<div class="field">
										<ul class="actions">
											<li><input type="submit" class="button submit" value="Login"></input></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</div>
			</section>
<?php
}
}
/* {/block "content"} */
}
