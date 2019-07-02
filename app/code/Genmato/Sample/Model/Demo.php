<?php

namespace Genmato\Sample\Model;
use Magento\Framework\Model\AbstractModel;

class Demo extends AbstractModel
{
    /**
     * Initialize resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Genmato\Sample\Model\ResourceModel\Demo');
    }
}