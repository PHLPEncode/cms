<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once (DIR_CLS . "articleClass.php");
		}
		
		public function show() {
			$Article = new Article();
			
			$titolo = $_POST['titlePost'];
			$testo = $_POST['textPost'];
			$id_autore = 1;
			$id_stato = $_POST['stateList'];
			$tags = $_POST['tagsPost'];
			
			$insertText = $Article->newArticle($titolo, $testo, $id_autore, $id_stato, $tags);
			
			$this->assign("messageLog", $insertText);
			$this->assign("tplTitle", "ModernCMS | Amministrazione - Inserimento nuovo post");
			$this->display("Admin/Article/Action/Insert.tpl");
		}
		
	}