<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ("protected/class/userClass.php");
		}
		
		public function show() {
			$User = new User();
			
			$log = "";
			
			$usr = $_POST['usrname'];
			$psw = $_POST['psword'];
			
			$isUser = $User->getLogin($usr, $psw);
			
			if(!$isUser) {
				$log = "<div class='alert alert-danger'>
						<b>Impossibile effettuare il login</b>
						I dati che hai inserito per il login non sono validi.
						<br />
						Prova a rieffettuare il login o contattare un amministratore
						</div>";
			} else {
				$log = "<div class='alert alert-success'>
						<b>Login effettuato correttamente</b>
						Login effettuato.Bentornato $usr
						</div>";
			}
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Login");
			$this->assign("messageLog", $log);
			$this->display("Admin/User/Action/Login.tpl");
			
		}
	}