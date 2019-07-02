<?php

namespace Genmato\Sample\Model\ResourceModel\Demo;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'demo_id';
    /**
     * Define resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Genmato\Sample\Model\Demo',
            'Genmato\Sample\Model\ResourceModel\Demo');
    }
}