<?php
	
	class extendSmarty extends Smarty {
		public function extendSmarty() {
			parent::__construct();
			
			$this->setTemplateDir(DIR_TPL); //*.tpl file
			$this->setCompileDir(DIR_CMP); //compiled *.tpl
			$this->setCacheDir(DIR_CHC); //cache *.tpl
			$this->setConfigDir(DIR_CFG); //config of app
			
			$this->caching = FALSE; //Disactivate the cache
			
			$this->setLeftDelimiter("{%= "); //Begin of Smarty code
			$this->setRightDelimiter(" %}"); //End of Smarty code
			
			if(!defined("APP_INIT")) {
				die(APP_ERROR);
			}
			
		}
	}