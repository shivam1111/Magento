<?php
// we have to define class name in config.xml (Bluethink_Test_Model) to get / load  block content 

 class Workspace_Test_Model_Shivam extends Mage_Core_Model_Abstract
{
	
	 public function _construct()
    {
       //parent::_construct();
        $this->_init('test/shivam');
        // Module / Model name
    }

    //Overriding the setData Method
    public function setData($key, $value=null)
    {
    	return parent::setData($key, $value);
    }    
    
    public function trial_method($a,$b){
    	echo "==============i am in trial_method";
    	echo a+b;
    }

}
