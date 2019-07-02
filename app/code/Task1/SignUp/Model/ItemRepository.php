<?php

namespace Task1\SignUp\Model;

use Task1\SignUp\Api\ItemRepositoryInterface;
use Task1\SignUp\Model\ResourceModel\Demo\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
