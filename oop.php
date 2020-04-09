<?php

 /*
   abstract class Customer{

        private $id;
        private $name;
        protected $email;
        private $balance;



        public function __construct($id,$name,$email,$balance){

            $this->id = $id;
            $this->name= $name;
            $this->email=$email;
            $this->balance=$balance;
          
        }

        abstract public function getEmail();
        

     

     public function getBalance(){

        return $this->balance;
     }

    }

    class Subscriber extends Customer{

        public $plan;

        public function __construct($id,$name,$email,$balance,$plan){

            parent::__construct($id,$name,$email,$balance);
            $this->plan = $plan;
        }

         public function getEmail()
        {
            return $this->email;
        }


    }

    //$customer = new Customer(1,'Brad','brad@gmail.com',0);

  //  echo $customer->getEmail();

    $subscriber =new Subscriber(1,'Brad','brad@gmail.com',45,'Pro');

  echo $subscriber->getEmail() ;*/


  class User{

    public $username;
    public $password;
    public static $passwordLenght = 5;


    public static function getPasswordLenght()
    {

            return self::$passwordLenght;

    }


  }

  echo User::$passwordLenght;



    
?>