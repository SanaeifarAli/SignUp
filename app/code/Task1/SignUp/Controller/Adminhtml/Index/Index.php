<?php
namespace Task1\SignUp\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $result */
        //$result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        //$result->setContents('Hello Admins1');
        //return $result;

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}