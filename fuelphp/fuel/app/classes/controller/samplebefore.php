<?php

class Controller_Samplebefore extends Controller
{
	public function before()
	{
		echo __METHOD__ . 'が実行されました。<br>';
		$this->current_user = 'Yuki';
	}

	public function after($response)
	{
		$response .=__METHOD__ . 'が実行されました。<br>';
		return parent::after($response);
	}

	public function action_index()
	{
		$output = $this->current_user. 'さん' . __METHOD__ . 'が実行されました。<br>';
		$output .= Html::anchor(Router::get('test'), '名前付きルートのテスト') . '<br>';
		return $output;
	}

	public function action_test($user = 'a')
	{
		$this->current_user = $user;
		$output = $this->current_user . 'さん' . __METHOD__ . 'が実行されました<br>';
		return $output;
	}
}
