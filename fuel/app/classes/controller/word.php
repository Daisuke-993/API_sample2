<?php

class Controller_Word extends Controller_Template
{

	public function action_index()
	{
		$data['words'] =Model_Word::find('all');
		$this->template->title = "Word";
		$this->template->content = View::forge('word/index', $data);
	}

	public function get_create()
	{
		$data = array('content' => null, 'id' => null);
		$this->template->title = "Word";
		$this->template->content = View::forge('word/form', $data);
	}

	public function post_create()
	{
		$form['content'] = Input::post('content');
		$word = Model_Word::forge();
		$word->set($form);
		$word->save();
		Response::redirect('/word/index');
	}

	public function action_delete($id)
	{
		$word = Model_Word::find($id);
		$word->delete();
		Response::redirect('word');
	}

	public function get_edit($id)
	{
		$word = Model_Word::find($id);
		$data = array('content' => $word->content, 'id' => $id);
		$this->template->title = "Word";
		$this->template->content = View::forge('word/form', $data);
	}

	public function post_edit($id)
	{
		$word = Model_Word::find($id);
		$form['content'] = Input::post('content');
		$word->set($form);
		$word->save();
		Response::redirect('/word/index');
	}

}
