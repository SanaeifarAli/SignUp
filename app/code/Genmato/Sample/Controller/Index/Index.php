<?php
namespace Genmato\Sample\Controller\Index;

use Magento\Framework\App\Action\Action;

use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
/**
 * @var \Magento\Framework\View\Result\PageFactory
  */
    protected $resultPageFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory
    resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    /**
     * Renders Sample Index
     */

    public function execute()
    {
        $data_array =  array("data"=>array(
                "name" => 'api create',
                "date" => '2012/05/05')
        );


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/rest/V1/signupCreate/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'APIKEY: 111111111111111111111',
            'Content-Type: application/json',
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_array));
        $result = curl_exec($ch);


         curl_close($ch);


        /*$result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('response for api create:');
        return $result;
        return $this->resultPageFactory->create();*/

    }
}