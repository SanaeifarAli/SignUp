<?php
namespace Task1\SignUp\Setup;

use Task1\SignUp\Model\Demo;
use Task1\SignUp\Model\DemoFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $demoFactory;

    /**
     * InstallData constructor.
     * @param DemoFactory $demoFactory
     */
    public function __construct(DemoFactory $demoFactory)
    {
        $this->demoFactory = $demoFactory;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Exception
     */
    public function install(ModuleDataSetupInterface $setup,
                            ModuleContextInterface $context)
    {
        $demoData = [
            'name' => 'Test Name',
            'date' => '2019/05/28',
        ];
        $this->createDemo()->setData($demoData)->save();
    }

    /**
     * @return mixed
     */
    public function createDemo()
    {
        return $this->demoFactory->create();
    }
}