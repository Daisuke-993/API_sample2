<?php
use Orm\Model;
class Model_Word extends \Orm\Model
{
	protected static $_properties = array(
		"id",
		"content",
	);

	protected static $_table_name = 'words';

}
