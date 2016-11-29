<?php

class Controller_Nameroute extends Controller
{
	public function action_index()
	{
		return Html::anchor(Router::get('admin'), '管理ページへ移動');
	}
}
