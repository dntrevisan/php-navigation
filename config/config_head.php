<?php
# ==============================================================================
# HEAD CONFIGURATION
#
# Navigation System - Website Head
# Developed by Diego Nicotari Trevisan - @dntrevisan - www.dntrevisan.com.br - talktome@dntrevisan.com.br
# v.1.0 - 2014
# Licensed with a Creative Commons License - Attribution-Compartilha Igual 4.0 International.
# http://creativecommons.org/licenses/by-sa/4.0/
#
# More details here:
# http://github.com/dntrevisan/php-navigation
# ==============================================================================
class PitchHead{
	
	public $pag;
	public $titlebar;
	public $descr;
	public $metakeys;
	
	//Valida Pagina que foi solicitada
	public function valPag($caminho){
		//Quebra o caminho da navegação
		$i=explode('/', $caminho);
		//Pego o ultimo item da navegação
		$this->pag = str_replace(".php","",array_pop($i));
		//remove o index para diretorios
		if($this->pag=='index'){
				$this->pag = array_pop($i);	
				return $this->pag;	
			} else {
				return $this->pag;
			}
		}
	
	//Carrega dos MetaTags por pagina para o SEO
	public function metasSeo($_multiLanguage,$lanDefault,$pagSelect,$_webName){
		
		$Obj_Head = new PitchHead();
		switch ($Obj_Head->valPag($pagSelect)):
			case 'about':
				$this->titlebar = 'Sobre | Diego Trevisan - Consultor TI - Analista de Sistemas';
				$this->descr = 'Diego Trevisan (dntrevisan) Website Pessoal. Consultoria e Desenvolvimento Web';
				$this->metakeys = 'diego trevisan, curriculum, carreira, consultoria, analise, sistema, programador';
			break;
			default:
				//Values default from Header 
				if (isset($_SERVER["REDIRECT_STATUS"]) and $_SERVER["REDIRECT_STATUS"] == '404') {
					$this->titlebar = '404 Page not found';
				} else {
					$this->titlebar = 'Diego Trevisan | Consultor TI - Analista de Sistemas - Desenvolvedor Web - Programador PHP';
				}
				
				$this->descr = 'Diego Trevisan (dntrevisan) Website Pessoal. Consultoria e Desenvolvimento Web';
				$this->metakeys = 'consultoria, analise de sistema, programador, php, html 5, css 3, mysql, mssql, website';
		endswitch;
		return true;
	}
}
?>
   
    