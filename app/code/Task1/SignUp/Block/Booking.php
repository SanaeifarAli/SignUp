<?php

namespace Task1\SignUp\Block;

class Booking extends \Magento\Framework\View\Element\Template
{
    /**
     * Booking constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getFormAction()
    {
        return 'signup/index/save';
    }
}