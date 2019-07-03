<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\SignUpUpdateInterface;

class SignUpUpdate implements SignUpUpdateInterface
{
    /**
     * @param string[] $data
     * @return string
     */
    public function setData($data)
    {
        $id =$data['signup_id'];
        $name =$data['name'];
        $datee =$data['date'];

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('task1_signup');

        $sql = "Update " . $tableName . " set name='$name',date='$datee' where signup_id='$id'";
        $connection->query($sql);

        return 'signup successfully updated';
    }
}