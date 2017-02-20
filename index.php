<?php
// test
session_start();

$_SESSION['mim'] = $_POST['mim'];
//  media="screen"
?>

<html>
	<head>
		<link rel ='stylesheet'	href = 'https://bootswatch.com/cerulean/bootstrap.min.css'>
	</head>
<script> var token = ".$token.";</script>

<?php
if ($_SESSION['mim'] != 'samuel')
{
?>
	
		<main>
			<div class = 'container container-fluid' style = 'padding-top: 250px;'> 
				<div class="alert alert-dismissible alert-warning">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h2>维修工程进行中!</h2>
				<h3>Our system is Under Construction!</h3>
				<span style = 'float: left; margin-top: 8px; margin-bottom: 12px;'>9:00am to 23:00, Monday, 20th Feb 2017</span>
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
								  <label for="inputEmail" class="col-lg-5 control-label">Authorized personnel only:</label>
								  <div class="col-lg-5">
									<input class="form-control" name ="mim" placeholder="密码" type="text">
								  </div>
								</div>
							<div class="form-group" style = 'text-align: center'>
							  <div class="col-lg-10 col-lg-offset-2" style = 'margin-left: 100px; width: 50%; margin: 0 auto; '>
								<button type="submit" class="btn btn-primary" style = '
								margin-left: 500px;'>Submit</button>
							  </div>
							</div>
						  </fieldset>
						</form>
			 
				</div>
			</div>
		</main>
<?php

die();
}
header("Content-type: text/html; charset=utf-8");
ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

if ($_GET['token'])
	$token = $_GET['token'];

if ($_GET['a'] === 'price')
	{ 
		echo "<script>
				var location = window.location.href; console.log('location = '+location);
				window.open('http://www.o2ofever.com/price');
				// var url = \"<?php echo $url; ?>\"; console.log('url = '+url);
				var win = window.open(location, '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'common')
	{ 
		echo "<script>
				window.open('http://www.o2ofever.com/case-studies/power-888');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token='.$tok, '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'help')
	{ 
		echo "<script>
				window.open('http://www.o2ofever.com/contact-us');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token='.$tok, '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'about2')
	{ 
		echo "<script>
				
				window.open('http://www.o2ofever.com/about-us');
				var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6, '_self');
				win.focus();
			  </script>";
		die();
		
	}
elseif  ($_GET['a'] === 'fc')
	{
		
?>	
	<script>
				(function(){
					var location = [];
						location = window.location.href.toString(); console.log('location = '+location);
						console.log('token = '+token);
					//			window.open('http://www.o2ofever.com/functionalities');
			//	return;
			//	var url = 'http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=4&token='+location;
				
			//	var win = window.open(, '_self');
									//	http://wxoa.o2ofever.com/index.php?g=Home&m=Index&a=fc
			//	win.focus();
						


					return false;
					
				})();
	</script>
<?php
		die();
		
	}
elseif  ($_GET['a'] === NULL)
	{
		 if (isset( $_GET['token']))
		 {	$tok = $_GET['token'];
			$url = 'http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token='.$tok;
		 
			echo "<script>
					window.open('http://www.o2ofever.com/');
					var wined = window.open($url, '_self');
					wined.focus();
				  </script>";
			die();
		}
		
	}
	
	
elseif  ($_GET['g'] == 'User' && $_GET['m'] == 'Index' && $_GET['a'] === 'index')
	{
		 if (isset( $_GET['token']))
		 {	$tok = $_GET['token'];
			$url = 'http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id=6&token='.$tok;
		 
			echo "<script>
					window.open($url, '_self');
				  </script>";
			die();
		}
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
			<link rel='stylesheet' type='text/css' href='https://bootswatch.com/cerulean/bootstrap.css'>
			<link rel='stylesheet' type='text/css'  href='https://fonts.googleapis.com/icon?family=Material+Icons'>
			<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
			<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
			<script>
					window.onload = function (){
								var url = window.location.href; console.log('url 157 = '+url);
								var name = 'm';
								name = name.replace(/[\[\]]/g, '\\$&');
								var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
								var results = regex.exec(url);
								if (!results) console.log('result = null');
								if (!results[2]) console.log('result = empty');
								var m_parameter = decodeURIComponent(results[2].replace(/\+/g, \" \"));
								console.log('m_parameter ='+m_parameter);
						if (m_parameter == 'Function')
						{
							console.log('ln 142');
							$('.contentmanage').attr('style', 'width: auto');
							$('.subCatalogList > a').attr('style', 'height: 50px'); $('.selected > a').attr('style', 'height: 50px');				
							document.getElementsByTagName('a')[20].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class=\'material-icons\'>collections</div> <div style = \'float: left; margin-top: 5px;\'>图文组自动回复</div>';
							document.getElementsByTagName('a')[1].innerHTML = '登出 Logout';
							document.getElementsByTagName('a')[3].innerHTML = '技術支援 <i style = \'margin-top: 29px;\' class=\'fa fa-support\'></i>';
							document.getElementsByTagName('a')[4].innerHTML = '設定 <i class = \'fa fa-cogs\'></i>';
							document.getElementsByTagName('a')[5].innerHTML = '案例 <i class = \'fa fa-trophy\'></i>';
							document.getElementsByTagName('a')[6].innerHTML = '價錢 <span class = \'glyphicon glyphicon-shopping-cart\'></span>';
							document.getElementsByTagName('a')[7].innerHTML = '關於我們 <span class = \'fa fa-venus-mars\'></span>';
							document.getElementsByTagName('a')[8].innerHTML = '功能 <span class = \'material-icons\' style = \'margin-top: 5px\'>widgets</span>';
							document.getElementsByTagName('a')[16].innerHTML = '<span style = \'float: left; margin-top: -2px;\' class = \'fa fa-bar-chart\'></span> <div style = \'float: left; margin-top: 5px;\'>數據統計</div>';
							
							document.getElementsByTagName('a')[17].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class=\"material-icons\">mood</div> <div style = \'float: left; margin-top: 5px;\'>關注時自動回復</div>';
							document.getElementsByTagName('a')[18].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class = \'glyphicon glyphicon-send\'></div> <div style = \'float: left; margin-top: 5px;\'>純文字自動回復</div>';
							document.getElementsByTagName('a')[19].innerHTML = '<span style = \'float: left; margin-top: -2px;\' class = \'glyphicon glyphicon-picture\'></span><div style = \'float: left; margin-top: 5px;\'>圖文自動回復</div>';
							document.getElementsByTagName('a')[21].innerHTML = '<span style = \'float: left; margin-top: 5px;\' class=\'glyphicon glyphicon-headphones\'></span> <div style = \'float: left; margin-top: 5px;\'>語音回復</div>';
							document.getElementsByTagName('a')[22].innerHTML = '<span style = \'float: left; margin-top: 5px;\' class=\'glyphicon glyphicon-bullhorn\'></span> <div style = \'float: left; margin-top: 5px;\'>群發</div>';
							document.getElementsByTagName('a')[26].innerHTML = '<div style = \'float: left; margin-top: 5px;\' class=\"material-icons\">event_note</div> <div style = \'float: left; margin-top: 5px;\'>自定義菜單</div>';
							$('.sideBar').attr('style','width: 230px !important');
							$('.subCatalogList').css({'width':'210px'});
							$('.tableContent').attr('style', 'width: auto');
							$('.ckit').attr('style', 'padding-left: 10px');
						}

					}
					
					
					if ($('.feature_table').is(':visible')){
							$('.feature_table').css('display', 'none');
							var htSideBar = $('.sideBar').height();
							var wd = $(window).width(); var wdSideBar = $('.sideBar').width(); var wdRight = wd - wdSideBar-10; var RcontainerBox = wdRight * 0.85;
							
							$('.container').css({'border':'solid 1px #c3c3c3', 'width': RcontainerBox+'px', 'height':'535px'});
							$('.content').css({'float':'left', 'width': wdRight+'px', 'height': htSideBar+'px'});
							$('.paging').css('display', 'none');
					}
					window.onresize = function(){
						var wd = $(window).width();
						var wdSideBar = $('.sideBar').width(); var wdRight = wd - wdSideBar-7; var containerWidth = wdRight - 50;
						$('.content').css({'float':'left', 'width': wdRight+'px'});
						$('.container').css({'float':'left', 'width': containerWidth+'px'});
					}
					
					$('.class_game').mouseover(function(){
						$('.feature_table').attr('style', 'display: block !important');
						$('.container').attr('style', 'display: none !important');
						$('.paging').attr('style', 'display: block !important');
					});
					
					$('.class_game').mouseout(function(){
						$('.feature_table').css('display', 'none');
						var htSideBar = $('.sideBar').height();
						var wd = $(window).width(); var wdSideBar = $('.sideBar').width(); var wdRight = wd - wdSideBar-10; var RcontainerBox = wdRight * 0.85;
							
							$('.container').css({'display':'block', 'border':'solid 1px #c3c3c3', 'width': RcontainerBox+'px', 'height':'535px'});
							$('.content').css({'float':'left', 'width': wdRight+'px', 'height': htSideBar+'px'});
							$('.paging').css('display', 'none');
					});
					
					if ($('.content').is(':visible'))
					{
						var htSideBar = $('.sideBar').height();
						var wd = $(window).width(); var wdSideBar = $('.sideBar').width(); var wdRight = wd - wdSideBar-58; var RcontainerBox = wdRight * 0.85;  var pl = RcontainerBox * 0.10;
							$('.content').css({'float':'left', 'width': wdRight+'px', 'height': htSideBar+'px'});
							$('.container').css({'display':'block', 'border':'solid 1px #c3c3c3', 'width': RcontainerBox+'px', 'height':'535px', 'padding-left': pl+'px', 'border':'5px solid #c3c3c3'});
					}
				</script>";
}
?>