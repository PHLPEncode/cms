<?php

/*
	 * Punto di ingresso dell'applicazione
	 * La classe ha 2 funzioni, includendo il costruttore.
	 * Il costruttore si applica di caricare tutte le librerie
	 * necessarie per il funzionamento dell'applicazione
	 * mentre run() si occupa di gestire il caricamento delle
	 * pagine richieste 
	 * 
	 * La costante APP_INIT viene dichiarata qui e 
	 * in ogni pagina viene controllato il suo valore
	 */

	class Application {
		public function Application() {
			require_once ("protected/config/global.php");
			require_once ("protected/class/vendor/orm/rb.php");
			require_once ("protected/class/vendor/template/Smarty.class.php");
			require_once ("protected/class/extendSmartyClass.php");
			
		}
		
		public function run() {
			
			//Switch malformed requestes
			
			$req = str_replace(" ", "", @$_GET['req']);
			
			if($req == NULL || $req == "") {
				$req = "Home";
			}
			
			if(!file_exists(DIR_TPL . $req . ".php")) {
				$req = "404";
			}
			
			
			//Start database
			
			try {
			
				R::setup(DB_DSN . DB_HOST . DB_NAME, DB_USER);
			}
			
			catch(RedException $e) {
				echo $e->getMessage();
			}
			
			//Require the page
			
			require_once (DIR_TPL . $req . ".php");
			
			$tpl = new Template();
			$tpl->show();
			
			
			
		}
	}