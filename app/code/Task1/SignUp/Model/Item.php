<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\Data\ItemRepositoryInterface;

class Item extends ItemInterface
{
    const KEY_NAME = 'name';
    const KEY_DATE = 'date';

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_get(self::KEY_NAME);
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::KEY_NAME, $name);
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_get(self::KEY_DATE);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setDate($name)
    {
        return $this->setData(self::KEY_DATE, $date);
    }

}