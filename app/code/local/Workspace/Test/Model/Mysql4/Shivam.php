<?php
class Workspace_Test_Model_Mysql4_Shivam extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the callme_id refers to the key field in your database table.
        $this->_init('test/shivam', 'id');
                      // Module / model name // table primary key  
    }
    
}
