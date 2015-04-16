<?php
  
class Workspace_Test_IndexController extends Mage_Core_Controller_Front_Action
{
   
    public function createAction(){
    	if ($_GET){
    		$this->_redirect('*/*/form');
    	}
    	if ($_POST){
    		$params = $this->getRequest()->getParams();
    		if ($params['name']){
    			$model = Mage::getModel('test/shivam');
    			$model->setData($params);
    			$model->save();
    			$session  = Mage::getModel('core/session');
    			$session->addSuccess('Thank you for Registration');    			
    		}
    	}
    	$this->loadLayout();
    	$this->renderLayout();
    }
    
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
	
	public function savemydataAction(){
		$data = $this->getRequest()->getParams();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		$model =  Mage::getModel('test/shivam');
		$model->setData($data);
		$model->save();
		$this->_redirect("*/*/form");
	}
	
	public function editAction(){
		$this->loadLayout();
		$this->renderLayout();
	}
	
	public function deleteAction(){
	if ($_GET){
		$model = Mage::getModel('test/shivam');
		try{
			$model->setId((int)$_GET['id'])->delete();
		}
		catch (Exception $e){
			echo $e->getMessage();
		}
		$this->_redirect('*/*/form');
		}
	}
	
}


