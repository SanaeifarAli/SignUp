<?php

namespace Task1\SignUp\Model;
use Magento\Framework\Model\AbstractModel;

class Demo extends AbstractModel
{
    /**
     * Initialize resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Task1\SignUp\Model\ResourceModel\Demo');
    }
}