<?php /* Smarty version 3.1.24, created on 2015-05-25 16:02:46
         compiled from "/Applications/XAMPP/xamppfiles/www/test/ci/application/views/test.html" */ ?>
<?php
/*%%SmartyHeaderCode:145171860555632b86eaf7f4_72502075%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc9a6547c3e4c744b334fe9202f88ca39636556' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/www/test/ci/application/views/test.html',
      1 => 1432561486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145171860555632b86eaf7f4_72502075',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55632b86ee5886_90154033',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55632b86ee5886_90154033')) {
function content_55632b86ee5886_90154033 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '145171860555632b86eaf7f4_72502075';
?>
<!DOCTYPE html>  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>smarty配置测试</title>  
    </head>  
    <body>  
    <<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
>  
        </body>  
</html>  <?php }
}
?>