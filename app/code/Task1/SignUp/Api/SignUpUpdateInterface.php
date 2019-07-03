<?php
namespace Task1\SignUp\Api;

interface  SignUpUpdateInterface
{
    /**
     * POST for signup update api

     * @param  string[] $data
     * @return string
     */
    public function setData($data);

}
