<?php
/* Smarty version 4.3.0, created on 2023-10-02 16:05:31
  from 'C:\xampp\htdocs\project_list\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_651ace2b1a5ac7_11606778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1907a04abe5f9031980f1f232bd6b152aa018f4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_list\\app\\views\\Register.tpl',
      1 => 1696255523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651ace2b1a5ac7_11606778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1860017437651ace2b19ea64_68068968', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1860017437651ace2b19ea64_68068968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1860017437651ace2b19ea64_68068968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper -->
	<div id="wrapper">
		<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>Register</h2>
					<p>welcome!</p>
					<div class="split style1">
						<section>
							<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"register"),$_smarty_tpl ) );?>
">
								<div class="fields">
									<div class="field half">
										<label for="firstname">Firstname</label>
										<input type="text" name="firstname" id="firstname" />
									</div>
									<div class="field half">
										<label for="lastname">Lastname</label>
										<input type="text" name="lastname" id="lastname" />
									</div>
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
										<li><input type="submit" class="button submit" value="Register"></input></li>
									</ul>
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
