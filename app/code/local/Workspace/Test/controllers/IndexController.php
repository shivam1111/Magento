<?php
  
class Workspace_Test_IndexController extends Mage_Core_Controller_Front_Action
{
   
    public function helloAction(){
		$this->loadLayout();     
		$this->renderLayout();
		 
	}
    
    public function thanksAction(){
		$this->loadLayout();     
		$this->renderLayout();
		 
	}
	public function formAction(){
		$this->loadLayout();
		$this->renderLayout();
	}

}


