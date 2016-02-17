<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
			require_once ("protected/class/articleClass.php");
		}
		
		public function show() {
			
			$id = $_GET['id'];
			
			$Article = new Article();
			
			$selectList = $Article->showStateList();
			
			$post = R::findOne("articoli", " id = :id ", [":id" => $id]);
			
			
			$this->assign("tplTitle", "ModernCMS | Modifica - " . $post->titolo);
			
			$this->assign("idPost", $id);
			$this->assign("titlePost", $post->titolo);
			$this->assign("tagsPost", $post->tags);
			$this->assign("textPost", $post->testo);
			$this->assign("selectList", $selectList);
			$this->display("Admin/Article/Modify.tpl");
			
		}
	}