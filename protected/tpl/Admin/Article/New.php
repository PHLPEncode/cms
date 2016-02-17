<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ( DIR_CLS . "articleClass.php" );
		}
		
		public function show() {
			$Article = new Article();
			
			$selectList = $Article->showStateList();
			
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Scrivi un nuovo articolo");
			$this->assign("selectList", $selectList);
			$this->display("Admin/Article/New.tpl");
		}
	}