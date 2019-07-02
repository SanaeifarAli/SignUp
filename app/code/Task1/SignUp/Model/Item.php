<?php
namespace Task1\SignUp\Model;

use Task1\SignUp\Api\Data\ItemRepositoryInterface;

class Item extends ItemInterface
{
    /**#@+
     * Constant for confirmation status
     */
    const KEY_NAME = 'name';
    const KEY_DATE = 'date';

    /**#@-*/

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getDate()
    {
        return $this->_get(self::KEY_DATE);
    }
    /**
     * @param string $date
     * @return $this
     */
    public function setDate($name)
    {
        return $this->setData(self::KEY_DATE, $date);
    }

}