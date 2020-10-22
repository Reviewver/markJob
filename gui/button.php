<?php
namespace Gui;

class Button
{
	private $title;
	private $id;
	
	function __construct($tile, $id)
	{
		$this->title = $tile;
		$this->id = $id;
	}
	
	function insert()
	{		
		$text .= '<button class="btn btn-primary" id="';
		$text .= $this->id;
		$text .= '" type="button">';
		$text .= $this->title;
		$text .= '</button>';
		
		echo $text;
	}
}
?>
