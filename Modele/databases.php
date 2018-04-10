<?php

Class Database extends PDO
{
	protected $instance=NULL;
	
public  function __construct(){
			if($this->instance==NULL)
			{
			try{$bdd = new PDO('mysql:host=localhost; dbname=humancartoffice','root','');
			
			$this->instance=$bdd;
			 $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->instance;
			}
			
			catch(Exception $e){die('Erreur:'. $e->getMessage());}
			
			}
								}
		public function request($sql)
		{
			$query=$this->instance->prepare($sql);
			$query->execute();
			 return $query;
		}


}



?>