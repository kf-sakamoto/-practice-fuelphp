<?php

class Controller_Viewsample3 extends Controller
{
	public function action_index()
	{
		//Viewオブジェクトを生成する
		$view = View::forge('viewsample');
		
		$view->set('title','ビューのサンプル');
		$view->set_safe('username','<del>DEL</del>Yuki');

		return $view;
	}
}
