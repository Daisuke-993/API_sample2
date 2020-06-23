<?php

class Controller_Word extends Controller_Template
{

	public function action_index()
	{
		$data['words'] =Model_Word::find('all');
		//var_dump(Model_Word::find('all'));
		//exit();
		return View::forge('word/index', $data);
		//return View::forge('word/index');
	}

	public function action_form()
	{
		return View::forge('word/form');
	}

	public function post_create()
	{
		$form['content'] = Input::post('content');
		$word = Model_Word::forge();
		$word->set($form);
		$word->save();
		Response::redirect('/word/index');
	}

}
