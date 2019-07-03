<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\SignUpCreateInterface;

class SignUpCreate implements SignUpCreateInterface
{
    /**
     * @param string[] $data
     * @return string
     */
    public function setData($data)
    {

        $name =$data['name'];
        $datee =$data['date'];

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('task1_signup');

        $sql = "Insert Into " . $tableName . " (name, date) Values ('$name','$datee')";
        $connection->query($sql);

        return 'signup successfully saved';
    }
}