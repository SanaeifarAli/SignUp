<?php
namespace Task1\SignUp\Block;

use Magento\Framework\View\Element\Template;
use Task1\SignUp\Model\ResourceModel\Demo\Collection as DemoCollection;
use Magento\Store\Model\ScopeInterface;

class DemoList extends Template
{

    protected $_demoCollection;

    protected $_demoColFactory;

    public function __construct(Template\Context $context, \Task1\SignUp\Model\ResourceModel\Demo\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->_demoColFactory = $collectionFactory;
        parent::__construct(
            $context,
            $data
        );
    }

    public function getDemoItems()
    {
        if (null === $this->_demoCollection) {
            $this->_demoCollection =
                $this->_demoColFactory->create();
        }
        return $this->_demoCollection;
    }
}