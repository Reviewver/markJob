<?php
class Demande
{
	// Nom de l'entreprise
	private $company_name;
	
	// Adresse de l'entreprise
	private $company_adresse;
	
	// Site web de l'entreprise
	private $company_website;
	
	// Téléphone de l'entreprise
	private $company_phone;
	
	// Mail de l'entreprise
	private $company_mail;
	
	// Type d'envoi de la demande
	private $company_envoie;
	
	// Statut de la demande
	private $status;
	
	function __construct($company_name,$company_adresse,$company_website,$company_phone,$company_mail,$company_envoie)
	{
		$this->company_name = $company_name;
		$this->company_adresse = $company_adresse;
		$this->company_website = $company_website;
		$this->company_phone = $company_phone;
		$this->company_mail = $company_mail;
		$this->company_envoie = $company_envoie;
		$this->status = "En attente de réponse";
	}
	
	function __debuginfo()
	{
		echo "<p>" . "Nom : " . $this->company_name . "</p>";
		echo "<p>" . "Adresse : " . $this->company_adresse . "</p>";
		echo "<p>" . "Website : " . $this->company_website . "</p>";
		echo "<p>" . "Phone : " . $this->company_phone . "</p>";
		echo "<p>" . "Mail : " . $this->company_mail . "</p>";
		echo "<p>" . "Envoie : " . $this->company_envoie . "</p>";
		echo "<p>" . "Status : " . $this->status . "</p>";
	}
	
	function getStatus()
	{
		return $this->status;
	}
		
	function getCompanyName()
	{
		return $this->company_name;
	}
	
	function getCompanyAdresse()
	{
		return $this->company_adresse;
	}
	
	function getCompanyWebSite()
	{
		return $this->company_website;
	}
	
	function getCompanyPhone()
	{
		return $this->company_phone;
	}
	
	function getCompanyMail()
	{
		return $this->company_mail;
	}
	
	function getCompanyEnvoie()
	{
		return $this->company_envoie;
	}
}
?>
