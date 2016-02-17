<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ("protected/class/userClass.php");
		}
		
		public function show() {
			$User = new User();
			
			$id = $_GET['id'];
			
			$return = $User->removeUser($id);
			$this->assign("messageLog", $return);
			$this->display("Admin/User/Action/Remove.tpl");
		}
	}