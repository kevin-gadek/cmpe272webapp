<?php
/**
 * Created by PhpStorm.
 * User: huyvo
 * Date: 11/26/17
 * Time: 4:08 PM
 */
namespace User;

class User
{

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $emailAddress;

    function __construct($firstName, $lastName, $emailAddress)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }


    function insertToDB($pdo){
        if($pdo == null){
            throw new \PDOException("Error");
        }

        $sql = "INSERT INTO Users(firstName, lastName, emailAddress) VALUES (:firstName, :lastName, :emailAddress)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':firstName', $this->firstName);
        $stmt->bindValue(':lastName', $this->lastName);
        $stmt->bindValue(':emailAddress', $this->emailAddress);
        $stmt->execute();

    }

    function login($pdo){



        return false;
    }

}