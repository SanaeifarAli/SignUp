<?php

namespace Task1\SignUp\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Demo extends AbstractDb
{
    /**
     * Initialize resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('task1_signup', 'signup_id');
    }
}