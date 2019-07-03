<?php
namespace Task1\SignUp\Api;

interface  SignUpCreateInterface
{
    /**
     * POST for signup create api
     *
     * @param  string[] $data
     * @return string
     */
    public function setData($data);

}