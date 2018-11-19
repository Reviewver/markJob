<?php
class Menu
{
// Liste des noms des boutons
private $_nameListe = array();
private $_urlListe = array();
private $_subcategorie = array();
private $_sub = 0;

private function _button($name, $url)
{
	?>
	<a class="btn btn-dark" href="<?php echo $url ?>"><?php echo $name ?></a>
	<?php
}

private function _startDropdown($name)
{
?>
<div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
    echo $name;
?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?php
}

private function _inDropdown($name, $url)
{
?>
<a class="dropdown-item" href="<?php echo $url ?>"><?php echo $name ?></a>
<?php
}

private function _stopDropdown()
{
?>
</div>
</div>
<?php
}

// Ajouter un élément au menu
public function add_item($name, $url)
{
$this->_nameListe[] = $name;
$this->_urlListe[] = $url;
	if($this->_sub == 1)
	{
		$this->_subcategorie[] = 2;
	}
	else
	{
		$this->_subcategorie[] = 0;
	}
}

// Ajouter une sous catégorie
public function add_subcategorie($name)
{
$this->_sub = 1;
$this->_nameListe[] = $name;
$this->_urlListe[] = "";
$this->_subcategorie[] = 1;
}

// Fermer la sous catégorie
public function close_subcategorie()
{
$this->_sub  = 0;
$this->_nameListe[] = "";
$this->_urlListe[] = "";
$this->_subcategorie[] = 3;
}

// Affiche le menu
public function insert()
{
?><!-- Menu -->
<div class="row">
<?php
for($position=0; $position < count($this->_nameListe); $position++)
{
	if($this->_subcategorie[$position] == 0)
	{
		$this->_button($this->_nameListe[$position], $this->_urlListe[$position]);
	}
	else if($this->_subcategorie[$position] == 1)
	{
		$this->_startDropdown($this->_nameListe[$position]);
	}
	else if($this->_subcategorie[$position] == 2)
	{
		$this->_inDropdown($this->_nameListe[$position], $this->_urlListe[$position]);
	}
	else if($this->_subcategorie[$position] == 3)
	{
		$this->_stopDropdown();
	}
}
?>
</div>
<!-- ==== -->
<?php
}
}
$menu = new Menu;
$menu->add_item("Demande entreprise","index.php");
$menu->add_item("Liste demande", "liste_demande.php");
$menu->insert();