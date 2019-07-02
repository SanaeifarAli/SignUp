<?php

namespace Task1\SignUp\Api\Data;

interface ItemInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);


    /**
     * @return string|null
     */
    public function getDate();

    /**
     * @param string $date
     * @return $this
     */
    public function setDate($date);
}
