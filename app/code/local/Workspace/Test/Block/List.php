<?php

// we have to define class name in config.xml (Bluethink_Test_Block) to get / load  block content 

 class Workspace_Test_Block_List extends Mage_Core_Block_Template
{
	public function hello(){
// 	   echo "hellooooooooooo in block file";
// 	    $model = Mage::getModel('test/shivam')->load(1);
// 	    $resource = Mage::getResourceModel('test/shivam');
// 	    echo "======================================================".$resource."======";
// 	    echo get_class($model);
// 	    echo "/////////////////////////////////////////";
// 	    $model = Mage::getModel('test/shivam')->getCollection();
// 	    echo "<pre>";
// 	    print_r($model);
// 	    echo "</pre>"; 

		// For this to work hit the request with a parameter ---> localhost/magento/index.php/test/index/hello/id/1
		$params = $this->getRequest()->getParams();
		echo "<pre>";
		print_r($params);
		echo "</pre>";
		$blogpost = Mage::getModel('test/shivam');
// 		echo("Loading the blogpost with an ID of ".$params['id']);
		$blogpost->load($params['id']);
// 		$data = $blogpost->getData();
// 		var_dump($data);	
		$blogpost->setData($params);
		$blogpost->save();
// 		$blogpost->trial_method(5,6);
		echo "==============================",Mage::getBaseUrl();
		Mage::app()->getFrontController()->getResponse()
		->setRedirect(Mage::getBaseUrl()."test/index/thanks")
		->sendResponse();
		$session = Mage::getModel('core/session');
		$session->addSuccess('Thankyou For Registration');
	}
	
	
	
  
	
}