<?php

namespace Task1\SignUp\Model\ResourceModel\Demo;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'signup_id';
    /**
     * Define resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Task1\SignUp\Model\Demo',
            'Task1\SignUp\Model\ResourceModel\Demo');
    }
}