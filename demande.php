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
	
	function __construct($company_name,$company_adresse,$company_website,$company_phone,$company_mail,$company_envoie)
	{
		$this->company_name = $company_name;
		$this->company_adresse = $company_adresse;
		$this->company_website = $company_website;
		$this->company_phone = $company_phone;
		$this->company_mail = $company_mail;
		$this->company_envoie = $company_envoie;
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
