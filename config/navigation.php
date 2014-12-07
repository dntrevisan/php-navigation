<?php 
# ==============================================================================
# FUNCTIONS NAVIGATION
#
# Navigation System - Class Navigation
# Developed by Diego Nicotari Trevisan - @dntrevisan - www.dntrevisan.com.br - talktome@dntrevisan.com.br
# v.1.0 - 2014
# Licensed with a Creative Commons License - Attribution-Compartilha Igual 4.0 International.
# http://creativecommons.org/licenses/by-sa/4.0/
#
# More details here:
# http://github.com/dntrevisan/php-navigation
# ==============================================================================
class Navigation{
	
	public $idioma;
	protected $dir;
	protected $caminho;
	
	public function lerUrl($navString){
		$partsUrl = explode('/',$navString); 
		array_shift($partsUrl); 
		
		return $partsUrl;
	}

	public function navUrl($multiLanguage,$lanDefault,$navString){
		$Obj_Nav = new Navigation();
		$parts=$Obj_Nav->lerUrl($navString); 
		$totParts = count($parts); 	

			if($multiLanguage==0){
				 $this->dir = "application/views/website/".$lanDefault."/";
			}else{
				if($parts[0] !='' AND file_exists("application/views/website/".$parts[0])){
					$this->dir = "application/views/website/";
				}else{			
					$this->dir = "application/views/website/".$lanDefault."/";		
				}
			}	
			return $Obj_Nav->caminhoDir($totParts,$this->dir,$parts);
	}
	
	public function caminhoDir($totParts,$dir,$parts){	

		if($totParts>=1){
	 
		$caminho = $dir.(implode("/",$parts));

		$caminho = rtrim($caminho, '/');
			if(file_exists($caminho.'/index.php')){
				return $caminho.'/index.php';
			}elseif(file_exists($caminho.'.php')){
				return $caminho.'.php';
			}else{
				if($totParts==1){
					$_SERVER["REDIRECT_STATUS"] = '404';
	 					header("HTTP/1.1 404 Not Found");
						return $dir."erros/404.php";
				}

				$desmonta = array_pop($parts);
				$Obj_Nav = new Navigation();
				return $Obj_Nav->caminhoDir(--$totParts,$dir,$parts);
			}
		}
	}

} 
?>