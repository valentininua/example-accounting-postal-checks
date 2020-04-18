<?php

/**
 * Class Ftp
 */
class Ftp
{
    /**
     * @var false|resource
     */
    public $ftpConn;

    /**
     * @var bool
     */
    public $login;
    /**
     * Ftp constructor.
     * @param string $host
     * @param string $user
     * @param string $password
     */
    public function __construct($host = '' , $user = '' , $password = '')
    {
        $this->ftpConn = ftp_connect($host);
        $this->login = ftp_login($this->ftpConn,$user,$password);
        // PostalCheck connection
        if ((!$this->ftpConn) || (!$this->login)) {
            echo 'FTP connection has failed! '. $host. ' for user '.$user.'.';
        }
    }

    public function __destruct()
    {
        ftp_close($this->ftpConn);
    }

    /**
     * @return bool
     */
    public function ftpClose()
    {
        return ftp_close($this->ftpConn);
    }

    /**
     * @return array|false
     */
    public function getLs()
    {
        return ftp_nlist($this->ftpConn,'');
    }

    /**
     * @return array
     */
    public function getCheskJson()
    {
        $ls = $this->getLs();
        $arr = [];
        foreach ( $ls as $key => $value ) {
            if ($value!=='..' && $value!=='.' ) {
                $arr[$key] = $value;
            }
        }
        return $arr;
    }

    /**
     * @return array
     */
    public function ftpSync()
    {
        $ls = $this->getLs();
        $arr = [];
        foreach ( $ls as $key => $value ) {
            if ($value!=='..' && $value!=='.' ) {
                $arr[$key] = $value;
                ftp_get($this->ftpConn,$value,  $value, FTP_BINARY);
            }
        }
        return $arr;
    }
}
