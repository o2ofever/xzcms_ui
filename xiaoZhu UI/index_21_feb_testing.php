<?php
// test
header("Content-type: text/html; charset=utf-8");
ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

session_start();
$_SESSION['mim'] = $_POST['mim'];

if ($_SESSION['mim'] != 'samuel')
{
?>
	<html>
	<head>
		<link rel ='stylesheet'	href = 'https://bootswatch.com/cerulean/bootstrap.min.css'>
	</head>
		<main>
			<div class = 'container container-fluid' style = 'padding-top: 250px;'> 
				<div class="alert alert-dismissible alert-warning">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h2>维修工程进行中!</h2>
				<h3>Our system is Under Construction!</h3>
				<span style = 'float: left; margin-top: 8px; margin-bottom: 12px;'>9:00 - 23:00, 星期二, 21 二月 2017</span>
				<div style = 'clear: both;'></div>
					<div style = 'float: left;
						border-radius: 100px;
						width: 100%;
						padding: 18px;
						text-align: center;'>
					 <span class = 'glyphicon glyphicon-wrench' style = 'font-size: 50px; text-shadow: 2px 2px 10px #5d5353;'></span>
					</div>
						<div style = 'clear: both;'></div>
						<form class="form-horizontal" action = '' method = 'POST'>
						  <fieldset>
								<div class="form-group">
								  <div class="col-lg-5" style = 'float: left; width: 100%;'>
									<input class="form-control" name ="mim" size ='100%' placeholder="密码" type="text">
								  </div>
								</div>
								<div class="form-group" style = 'text-align: center'>
								  <div class="col-lg-5" style = 'margin-left: 20px; width: 50%; margin: 0 auto; '>
									<button type="submit" class="btn btn-primary" style = '
									margin-left: 30px;'>输入</button>
								  </div>
								</div>
						  </fieldset>
						</form>
			 
				</div>
			</div>
		</main>
	</html>
<?php

die();
}
// echo "g = ".$_GET['g'];
if ( ($_GET['g'] == 'User') && ($_GET['m'] == 'Index') && ($_GET['a'] == 'index'))
	{
	/* echo "<script>
				window.open('http://www.o2ofever.com/');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Index&a=index&token=zodmey1470734917', '_self');
				win.focus(); 
		   </script>";
	 die();
		*/
	}
if (get_magic_quotes_gpc()) {

 function stripslashes_deep($value){
  $value = is_array($value) ?
  array_map('stripslashes_deep', $value) :
  stripslashes($value);
  
  return $value;
 }
 $_POST = array_map('stripslashes_deep', $_POST);
 $_GET = array_map('stripslashes_deep', $_GET);
 $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}
define('APP_NAME', 'cms');

define('CONF_PATH','./Conf/');
define('TMPL_PATH','./tpl/');
$GLOBALS['_beginTime'] = microtime(TRUE);
define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
define('CORE','./');
if(MEMORY_LIMIT_ON) $GLOBALS['_startUseMems'] = memory_get_usage();
define('APP_PATH','./PigCms/');
defined('APP_PATH') 	or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
define('RUNTIME_PATH','./Conf/logs/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH',APP_PATH.'Runtime/');
define('APP_DEBUG',1);
defined('APP_DEBUG') 	or define('APP_DEBUG',false);
$runtime = defined('MODE_NAME')?'~'.strtolower(MODE_NAME).'_runtime.php':'~runtime.php';
defined('RUNTIME_FILE') or define('RUNTIME_FILE',RUNTIME_PATH.$runtime);

if(!APP_DEBUG && is_file(RUNTIME_FILE)) {
    require RUNTIME_FILE;
}
else{
    defined('THINK_PATH') or define('THINK_PATH', dirname(__FILE__).'/');
	
    require THINK_PATH.'Common/runtime.php';
}

?>