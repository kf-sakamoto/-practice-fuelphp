<?php
return array(
	//'_root_'  => 'welcome/index',  // The default route
	'_root_'  => 'blog/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'blog/(:any)' => 'blog/category/$1',
	'index' => 'samplebefore/',
	'test' => 'samplebefore/test',
	'router/(:any)' => 'samplerouter/$1',
	'view' => 'viewsample/',
	'logtime' => 'showfile/index',
	//正規表現によるルーティング
	'bbs/(:any)' => 'routingtest/entry/$1',
	'(:segment)/about' => 'routingtest/about/$1',
	'([0-9]{3})/detail' => 'routingtest/id/$1',
	//名前月パラメータによるルーティング
	'cal/:year/:month/:day/:any' => 'welcome/404',
	'cal/:year/:month/:day' => 'routingtest/cal',
	'cal/:year/:month' => 'routingtest/cal',
	'cal/:year' => 'routingtest/cal',
	//名前付きルート
	'dashboard' => array('admin/index', 'name' => 'admin'),
	'nameroute' => array('nameroute/index', 'name' => 'test'),
	//'router/test/(:any)' => 'sampleroutre/test/$1',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
