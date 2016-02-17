<?php
	class Template extends extendSmarty {
		
		
		public function Template() {
			parent::__construct();
		}
		
		public function show() {
			$this->assign("tplTitle", "ModernCMS | Home");
			$this->display("Home.tpl");
		}
	}
	