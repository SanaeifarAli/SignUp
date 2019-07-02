<?php
namespace Task1\SignUp\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class NewAction extends Action
{
    public function execute()
    {
        //$result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        //$result->setContents('Hello New Action Frontend');
        //return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}