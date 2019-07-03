<?php

namespace Task1\SignUp\Controller\Adminhtml\Item;

use Task1\SignUp\Model\DemoFactory;

class Save extends \Magento\Backend\App\Action
{
    private $itemFactory;

    /**
     * Save constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param DemoFactory $itemFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        DemoFactory $itemFactory
    ) {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Redirect|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->itemFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();
        return $this->resultRedirectFactory->create()->setPath('signup/index/index');
    }
}
