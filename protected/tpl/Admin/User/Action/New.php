<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ("protected/class/userClass.php");
		}
		
		public function show() {
			$usrname = $_POST['usrname'];
			$psword = $_POST['psword'];
			$email = $_POST['email'];
			
			$User = new User();
			
			
			$log = $User->newUser($usrname, $psword, $email);
			
			$this->assign("messageLog", $log);
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Nuovo utente");
			
			$this->display("Admin/User/Action/New.tpl");
			
		}
	}