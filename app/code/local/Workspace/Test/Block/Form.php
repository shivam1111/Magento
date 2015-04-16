<?php

 class Workspace_Test_Block_Form extends Mage_Core_Block_Template
{
	public function getData(){
		$blogpost = Mage::getModel('test/shivam');
		return $blogpost->getCollection(); 
	}
}
