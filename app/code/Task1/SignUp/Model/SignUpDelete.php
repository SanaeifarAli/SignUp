<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\SignUpDeleteInterface;

class SignUpDelete implements SignUpDeleteInterface
{


    /**
     * {@inheritdoc}
     */
    public function deleteData($data)
    {

        $id =$data['signup_id'];
        //Customize the code as per your requirement.

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('task1_signup');

        $sql = "Delete " . $tableName . " where signup_id='$id'";
        $connection->query($sql);

        //$response = ['success' => 'ok', 'message' => 'json format'];
        //header('Content-Type: application/json');
        //echo json_encode($response); exit;

        return 'signup successfully deleted';
    }
}
