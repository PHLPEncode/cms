<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ( DIR_CLS . "articleClass.php" );
		}
		
		public function show() {
			
			$Article = new Article();
			
			$tableContent = $Article->displayArticleForManage();
			
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Gestione post");
			$this->assign("managePostList", $tableContent);
			$this->display("Admin/Article/Main.tpl");
		}
	}