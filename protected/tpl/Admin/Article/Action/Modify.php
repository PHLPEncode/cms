<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();	
			require_once ("protected/class/articleClass.php");
		}
		
		public function show() {
			$Articoli = new Article();
			$id = $_POST['idPost'];
			$titolo = $_POST['titlePost'];
			$testo = $_POST['textPost'];
			$tags = $_POST['tagsPost'];
			$stato = $_POST['stateList'];
			
			$operation = $Articoli->modifyPost($id, $titolo, $testo, $tags, $stato);
			
			$this->assign("stringLog", $operation);
			$this->assign("tplTitle", "ModerCMS | Amministrazione - Modifica il post");
			$this->display("Admin/Article/Action/Modify.tpl");
		}
	}