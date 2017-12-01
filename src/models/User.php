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
    protected $email;
    protected $password;
    protected $homeNumber;
    protected $mobileNumber;

    function __construct($firstName, $lastName, $email, $password, $homeNumber, $mobileNumber)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->password = $password;
        $this->homeNumber = $homeNumber;
        $this->mobileNumber = $mobileNumber;

    }

    public function getId($pdo){

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
    public function setEmailAddress($email)
    {
        $this->email = $email;
    }

    function insertToDB($pdo)
    {

        try {
            $sql = "INSERT INTO Users(firstName, lastName, email, password, home_number, mobile_number) 
                    VALUES (:firstName, :lastName, :email, :password, :home_number, :mobile_number)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':firstName', $this->firstName);
            $stmt->bindValue(':lastName', $this->lastName);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':password', $this->password);
            $stmt->bindValue(':home_number', $this->homeNumber);
            $stmt->bindValue(':mobile_number', $this->mobileNumber);
            $stmt->execute();
            return;
        }catch (PDOException $e) {

            return false;
        }

    }

    function login(){



        return false;
    }

    function signOut(){

        return false;

    }

}