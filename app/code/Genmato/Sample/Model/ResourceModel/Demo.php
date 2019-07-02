<?php

namespace Genmato\Sample\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Demo extends AbstractDb
{
    /**
     * Initialize resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('genmato_demo', 'demo_id');
    }
}