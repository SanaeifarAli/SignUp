<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\SignUpCreateInterface;

class SignUpCreate implements SignUpCreateInterface
{


    /**
     * {@inheritdoc}
     */
    public function setData($data)
    {

        $name =$data['name'];
        $datee =$data['date'];
        //Customize the code as per your requirement.

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('task1_signup');

        $sql = "Insert Into " . $tableName . " (name, date) Values ('$name','$datee')";
        $connection->query($sql);

        //$response = ['success' => 'ok', 'message' => 'json format'];
        //header('Content-Type: application/json');
        //echo json_encode($response); exit;

        return 'signup successfully saved';
    }
}