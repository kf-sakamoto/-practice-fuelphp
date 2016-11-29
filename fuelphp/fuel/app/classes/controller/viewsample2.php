<?php

class Controller_Viewsample2 extends Controller
{
	public function action_index()
	{
		//Viewオブジェクトを生成する
		$view = View::forge('viewsample');
		
		$view->set('title','ビューのサンプル');
		$view->set('username','Yuki');

		return $view;
	}
}
