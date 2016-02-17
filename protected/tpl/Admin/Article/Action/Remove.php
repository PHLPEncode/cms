<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once(DIR_CLS . "articleClass.php");
		}
		
		public function show() {
			
			$id = $_GET['id'];
			$Article = new Article();
			$messageLog = $Article->removePost($id);
			$this->assign("messageLog", $messageLog);
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Elimina il post");
			$this->display("Admin/Article/Action/Remove.tpl");
		}
	}