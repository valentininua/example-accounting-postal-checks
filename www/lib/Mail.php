<?php

/**
 * Class Mail
 */
class Mail
{
    /**
     * @var
     */
    public $conn;

    public function __construct($servername = '', $username = '', $password = '')
    {
         //TODO:: SMTP example
    }

    /**
     * @param array $arr
     * @return bool
     */
    public function send($arr = [])
    {
        //TODO
        return mail($arr['mail'],$arr['subject'],$arr['msg']);

    }
}
