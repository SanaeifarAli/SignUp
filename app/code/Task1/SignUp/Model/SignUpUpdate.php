<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\SignUpUpdateInterface;

class SignUpUpdate implements SignUpUpdateInterface
{


    /**
     * {@inheritdoc}
     */
    public function setData($data)
    {

        $id =$data['signup_id'];
        $name =$data['name'];
        $datee =$data['date'];
        //Customize the code as per your requirement.

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('task1_signup');

        $sql = "Update " . $tableName . " set name='$name',date='$datee' where signup_id='$id'";
        $connection->query($sql);

        //$response = ['success' => 'ok', 'message' => 'json format'];
        //header('Content-Type: application/json');
        //echo json_encode($response); exit;

        return 'signup successfully updated';
    }
}