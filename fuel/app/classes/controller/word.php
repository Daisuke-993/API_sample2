<?php

class Controller_Word extends Controller_Template
{

	public function action_index()
	{
		$data['words'] =Model_Word::find('all');
		return View::forge('word/index', $data);
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

	public function post_destroy()
	{
		$word = Model_Word::find(Input::post('id'));
		$word->delete();
		Response::redirect('/word/index');
	}

}
