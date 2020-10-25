<?php
namespace Gui;

class Table
{
	private $headers = array();
	private $lines = array();
	
	// Ajout de l'en-tête
	function addHeader($table)
	{
		$this->headers = $table;
	}
	
	// Ajout des lignes
	function addLine($table)
	{
		array_push($this->lines, $table);
	}
	
	// Affichage de l'en-tête
	function insertHeader()
	{
		$output = '<thead><tr>';
		
		foreach ($this->headers as &$header)
		{
			$output .= '<th>' . $header . '</th>';
		}
		
		$output .= '</tr></thead>';
		
		return $output;
	}
	
		// Affichage d'une ligne
	function insertLines()
	{
		$output = '<tbody><tr>';
		
		foreach ($this->lines as &$line)
		{
		
			$output .= '<tr>';
			
			foreach ($line as &$element)
			{
				$output .= '<td>' . $element . '</td>';
			}
			
			$output .= '</tr>';
		}
		
		$output .= '</tbody>';
		
		return $output;
	}
	
	function insert()
	{
		$output = '<table class="table table-striped">';		
		$output .= $this->insertHeader();
		$output .= $this->insertLines();
		$output .= '</table>';
		
		echo $output;
	}
	
}
?>
