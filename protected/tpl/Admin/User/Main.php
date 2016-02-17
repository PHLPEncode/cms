<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ("protected/class/userClass.php");
		}
		
		public function show() {
			$User = new User();
			
			$list = $User->displayUserForManage();
			
			$this->assign("manageUserList", $list);
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Gestione utenti");
			$this->display("Admin/User/Main.tpl");
		}
	}