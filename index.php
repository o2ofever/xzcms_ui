<?php
// test
header("Content-type: text/html; charset=utf-8");
ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);

if  ($_GET['a'] === 'common')
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
				var tok = '';
				
				function queryParser(nam){
					
								var  url = window.location.href;
								name = nam.replace(/[\[\]]/g, '\\$&');
								var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
								var results = regex.exec(url);
								if (!results){
									console.log('result = null');
									return;
								}
								if (!results[2]){
									console.log('result = empty');
									return;
								}
								var queryPara = decodeURIComponent(results[2].replace(/\+/g, \" \"));
								return(queryPara);
				}
				
				
				function huoQuTok(){
					if ($('.norightborder').is(':visible')){
									if($('.btnGreens').is(':visible')){
											var attr = $('.btnGreens').attr('onclick');
											var attrlen = attr.length;
											var exp = attr.split(',');
											var tok = exp[1].split('\'');
											tok = tok[1];
										}
								}
					return tok;
				}
				/*	 var tok = huoQuTok();
					console.log('ln 138 tok = '+tok);
					sessionStorage.setItem('tok', tok);
				*/	
						window.onload = function (){
							var g = queryParser('g');	console.log('g = '+g);
							var m = queryParser('m');	console.log('m = '+m);
							var a = queryParser('a');	console.log('a = '+a);
							
							if (queryParser('token')){
								var t = queryParser('token');	console.log('ln 151 t = '+t);
								var id = queryParser('id');
								localStorage.setItem('tok', t);
								localStorage.setItem('ID', id);
							}
								if (m == 'Function')
								{
									var t = queryParser('token'); 	console.log('ln 155 t = '+t);
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
								
								if (g == 'Home' && m == 'Index' && a == 'price')
								{	// price detected
									
									var t = localStorage.getItem('tok');	console.log('183 t = '+t);
									var id = localStorage.getItem('ID');	console.log('183 ID = '+id);
									window.open('http://www.o2ofever.com/price');
									var win = window.open('http://wxoa.o2ofever.com/index.php?g=User&m=Function&a=show&id='+id+'&token='+t, '_self');
									win.focus();
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
				
	if ($_GET['a'] === 'price')
	{
		echo "";
		die();
		
	}
}
?>