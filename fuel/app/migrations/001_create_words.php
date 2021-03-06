<?php

namespace Fuel\Migrations;

class Create_words
{
	public function up()
	{
		\DBUtil::create_table('words', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => 11),
			'content' => array('null' => false, 'type' => 'text'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('words');
	}
}