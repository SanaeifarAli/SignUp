<?php

namespace Task1\SignUp\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Task1\SignUp\Model\DemoFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    private $itemFactory;

    /**
     * Save constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param DemoFactory $itemFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
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
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $name   = $post['name'];
            $date    = $post['date'];

            $this->itemFactory->create()
                ->setData($this->getRequest()->getPostValue())
                ->save();
            $this->messageManager->addSuccessMessage('SignUp done!!!!!');
            return $this->resultRedirectFactory->create()->setPath('signup/index/new');
        }
    }
}