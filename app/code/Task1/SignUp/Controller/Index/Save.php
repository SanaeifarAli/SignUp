<?php

namespace Task1\SignUp\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Task1\SignUp\Model\ItemFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    private $itemFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        ItemFactory $itemFactory
    ) {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $name   = $post['name'];
            $date    = $post['date'];
            //$bookingTime = $post['bookingTime'];


            $this->itemFactory->create()
                ->setData($this->getRequest()->getPostValue())
                ->save();
            $this->messageManager->addSuccessMessage('SignUp done!!!!!');
            return $this->resultRedirectFactory->create()->setPath('signup/index/new');

            // Display the succes form validation message
            //$this->messageManager->addSuccessMessage('SignUp done !');

            // Redirect to your form page (or anywhere you want...)

            //$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            //$resultRedirect->setUrl('signup/index/index');

            //return $resultRedirect;
        }
        // 2. GET request : Render the booking page
        //$this->_view->loadLayout();
        //$this->_view->renderLayout();
    }
}