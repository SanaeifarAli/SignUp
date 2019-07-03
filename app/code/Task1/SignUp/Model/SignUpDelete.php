<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\SignUpDeleteInterface;

class SignUpDelete implements SignUpDeleteInterface
{
    /**
     * @param string[] $data
     * @return string
     */
    public function deleteData($data)
    {

        $id =$data['signup_id'];

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('task1_signup');

        $sql = "Delete " . $tableName . " where signup_id='$id'";
        $connection->query($sql);

        return 'signup successfully deleted';
    }
}
