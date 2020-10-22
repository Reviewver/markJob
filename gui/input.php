<?php
namespace Gui;

class TextBox
{
	private $title;
	private $id;
	
	function __construct($tile, $id)
	{
		$this->title = $tile;
	}
	
	function insert()
	{
		$text = '<div class="form-group"/><label for="';
		$text .= $this->id;
		$text .= '">'; 
		$text .= $this->title;
		$text .= '</label><input name="company_name" class="form-control" id="'; 
		$text .= $this->id;
		$text .= '" type="text"/></div>';
		
		echo $text;
	}
}
?>
