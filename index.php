<?php
// test
header("Content-type: text/html; charset=utf-8");
ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);


if ($_GET['a'] === 'price')
	{
		echo "<script>
				window.open('http://www.o2ofever.com/price');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'common')
	{
		echo "<script>
				window.open('http://www.o2ofever.com/case-studies/power-888');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'help')
	{
		echo "<script>
				window.open('http://www.o2ofever.com/contact-us');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'about2')
	{
		echo "<script>
				
				window.open('http://www.o2ofever.com/about-us');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'fc')
	{
		echo "<script>
				window.open('http://www.o2ofever.com/functionalities');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === NULL)
	{
		echo "<script>
				window.open('http://www.o2ofever.com/');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
				win.focus();
			  </script>";
		die();
		
	}
	
	
elseif  ($_GET['g'] == 'User' && $_GET['m'] == 'Index' && $_GET['a'] === 'index')
	{
		echo "<script>
				window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token=qgsjlx1484101856', '_self');
			  </script>";
		die();
		
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
//    echo "<html><head><link rel = 'stylesheet' type = 'text/css' href = 'https://bootswatch.com/united/bootstrap.min.css'></head></html>";
	
	defined('THINK_PATH') or define('THINK_PATH', dirname(__FILE__).'/');
	
    require THINK_PATH.'Common/runtime.php';
	
	echo "
			<link rel='stylesheet' type='text/css' href='https://bootswatch.com/cosmo/bootstrap.min.css'>
			<link rel='stylesheet' type='text/css'  href='https://fonts.googleapis.com/icon?family=Material+Icons'>
			<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
			<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
			<script>
					window.onload = function (){
						/*
						function resizeToMinimum(){
						  var minimum    = [1250, 888];
						  var current    = [window.outerWidth, window.outerHeight];
						  var restricted = [];
						  var i          = 2;

						  while(i-- > 0){
							restricted[i] = minimum[i] > current[i] ? minimum[i] : current[i];
						  }

						  window.resizeTo(current[0], current[1]);
						}

						window.addEventListener('resize', resizeToMinimum, false); */

						$('.contentmanage').attr('style', 'width: auto');
						$('.subCatalogList > a').attr('style', 'height: 50px'); $('.selected > a').attr('style', 'height: 50px');				
						document.getElementsByTagName('a')[20].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class=\"material-icons\">collections</div> <div style = \'float: left; margin-top: 5px;\'>图文组自动回复</div>';
						document.getElementsByTagName('a')[1].innerHTML = '登出 Logout';
						document.getElementsByTagName('a')[3].innerHTML = ' 技术支援 <i style = \'margin-top: 29px;\' class=\'fa fa-support\'></i>';
						document.getElementsByTagName('a')[4].innerHTML = '设定 <i class = \'fa fa-cogs\'></i>';
						document.getElementsByTagName('a')[5].innerHTML = '案例 <i class = \'fa fa-trophy\'></i>';
						document.getElementsByTagName('a')[6].innerHTML = '价钱 <span class = \'glyphicon glyphicon-shopping-cart\'></span>';
						document.getElementsByTagName('a')[7].innerHTML = '关于我们 <span class = \'fa fa-venus-mars\'></span>';
						document.getElementsByTagName('a')[8].innerHTML = '功能 <span class = \'material-icons\' style = \'margin-top: 5px\'>widgets</span>';
						document.getElementsByTagName('a')[16].innerHTML = '<span style = \'float: left; margin-top: -2px;\' class = \'fa fa-bar-chart\'></span> <div style = \'float: left; margin-top: 5px;\'>数据统计</div>';
						document.getElementsByTagName('a')[17].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class=\"material-icons\">mood</div> <div style = \'float: left; margin-top: 5px;\'>关注时自动回复</div>';
						document.getElementsByTagName('a')[18].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class = \'glyphicon glyphicon-send\'></div> <div style = \'float: left; margin-top: 5px;\'>纯文字自动回复</div>';
						document.getElementsByTagName('a')[19].innerHTML = '<span style = \'float: left; margin-top: -2px;\' class = \'glyphicon glyphicon-picture\'></span><div style = \'float: left; margin-top: 5px;\'>图文自动回复</div>';
						document.getElementsByTagName('a')[21].innerHTML = '<span style = \'float: left; margin-top: 5px;\' class=\'glyphicon glyphicon-headphones\'></span> <div style = \'float: left; margin-top: 5px;\'>语音回复</div>';
						document.getElementsByTagName('a')[22].innerHTML = '<span style = \'float: left; margin-top: 5px;\' class=\'glyphicon glyphicon-bullhorn\'></span> <div style = \'float: left; margin-top: 5px;\'>群发</div>';
						document.getElementsByTagName('a')[26].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class=\"material-icons\">event_note</div> <div style = \'float: left; margin-top: 5px;\'>自定义菜单</div>';
						$('.sideBar').attr('style','width: 250px !important');
						$('.subCatalogList').css({'width':'250px'});
						$('.tableContent').attr('style', 'width: auto');
						
						var wdTopBar = $('.developer').width(); var wdSideBar = $('.sideBar').width(); var wdRight = wdTopBar - wdSideBar-100; console.log('wdRight = ' +wdRight);
						
						$('.content').attr('style', 'width:'+wdRight+'px', 'float:left');
					}
					
					if ($('.feature_table').is(':visible')){
							$('.feature_table').detach();
							$('.container').css({\"border\":\"solid 1px #c3c3c3\", \"width\":\"535px\", \"height\":\"535px\"});
							$('.content').attr('style', 'float: left');
						}
					
				</script>";
}
?>