<?php

namespace Task1\SignUp\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Task1\SignUp\Api\Data\ItemInterface[]
     */
    public function getList();

}
