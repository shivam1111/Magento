<?php
class Workspace_Test_Model_Mysql4_Shivam_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('test/shivam');
        // Module name / model name
    }
}
