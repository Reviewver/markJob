<?php
namespace Gui;

class TextBoxValue
{
	private $title;
	private $id;
	private $file;
	
	function __construct($tile, $id, $file)
	{
		$this->title = $tile;
		$this->id = $id;
		$this->file = $file;
	}
	
	function insert()
	{
		$text = '<div class="form-group"/><label for="';
		$text .= $this->id;
		$text .= '">'; 
		$text .= $this->title;
		$text .= '</label><input name="' . $this->id . '" class="form-control" id="'; 
		$text .= $this->id;
		$text .= '" type="text" value="';
		$text .= include($file);
		$text .= '"/></div>';
		
		echo $text;
	}
}
?>
