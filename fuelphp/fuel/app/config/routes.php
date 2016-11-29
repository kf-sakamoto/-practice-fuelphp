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
	//'router/test/(:any)' => 'sampleroutre/test/$1',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
