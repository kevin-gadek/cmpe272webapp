<?php
/**
 * Created by PhpStorm.
 * User: huyvo
 * Date: 11/26/17
 * Time: 4:11 PM
 */

namespace Database;

class Database
{
    private $pdo;


    function __construct($host=null, $name=null, $port=null, $charset=null, $username=null, $password=null, $settings=null)
    {
        if($settings == null) {
            $this->pdo = new \PDO(sprintf(
                'mysql:host=%s;dbname=%s;port=%s;charset=%s',
                $host,
                $name,
                $port,
                $charset),
                $username,
                $password
            );
        }else{
            $this->pdo = new PDO(sprintf(
                    'mysql:host=%s;dbname=%s;port=%s;charset=%s',
                    settings['host'],
                    settings['name'],
                    settings['port'],
                    settings['charset']
                ),
                settings['username'],
                settings['password']
            );
        }
    }

    function __destruct()
    {
        $this->pdo = null;
    }

    // This is object by which all models do to connect to other database
    function getPDO(){
        return $this->pdo;
    }



}