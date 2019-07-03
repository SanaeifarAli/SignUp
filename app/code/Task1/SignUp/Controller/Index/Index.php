<?php
namespace Task1\SignUp\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $config = $this->_objectManager->get('Task1\SignUp\Helper\Data')->getConfig('signup/general/enable');

        if ($config!=1) {
            $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
            $result->setContents('Form not enabled');
            return $result;
        }
        else
            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}