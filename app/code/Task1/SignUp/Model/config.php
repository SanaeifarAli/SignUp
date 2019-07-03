<?php

namespace Task1\SignUp\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'signup/general/enabled';

    private $config;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $config
     */
    public  function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * @return mixed
     */
    public  function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }

}