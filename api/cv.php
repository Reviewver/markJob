<?php
if(!defined("UPLOAD_DIR"))
{
	define("UPLOAD_DIR", "upload");
}

class CV
{
	// Sauvegarde le CV
	public function save($file)
	{
		$oldPath = $file['tmp_name'];
		$extension = $this->getExtension($file['name']);
		$newName = $this->getRandomName();
		$newPath = UPLOAD_DIR . '/' . $newName . '.' . $extension; 

		$res = $this->verifDirectory();
		$resultat = move_uploaded_file($oldPath,$newPath);
		if($resultat) echo "Transfert réussi";	
	}

	private function getRandomName()
	{
		return uniqid();
	}

	private function getExtension($file_name)
	{
		return strtolower(  substr(  strrchr($file_name, '.')  ,1)  );
	}

	private function verifDirectory()
	{
		if(!file_exists(UPLOAD_DIR))
		{
			if(mkdir(UPLOAD_DIR,0777))
			{
			 return 1;
			}
			else
			{
			 return 0;
			}
		}
		else
		{
			return 1;
		}
	}
}
?>
