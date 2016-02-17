<?php
	class Template extends extendSmarty {
		public function Template() {
			parent::__construct();
		}
		
		public function show() {
			$this->assign("tplTitle", "404: Pagina non esistente!");
			$this->display("404.tpl");
		}
	}