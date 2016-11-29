<?php

class Controller_Viewsample extends Controller
{
	public function action_index()
	{
		$data = array();
		
		$data['title'] = 'ビューのサンプル';
		$data['username'] = 'Yuki';
		return View::forge('viewsample',$data);
	}
}
