<?php
    class User
    {
        public $name;
        public $lastname;
        public $age;
        public $email;
        public $gender;
        public $nationality;

        function __construct(string $name,string $lastname,int $age, string $email, string $gender, string $nationality)
        {
           $this->name=$name; 
           $this->lastname=$lastname; 
           $this->age=$age; 
           $this->email=$email; 
           $this->gender=$gender; 
           $this->nationality=$nationality; 
        }

    }

    class Premium_User extends User
    {
        function __construct(string $name,string $lastname,int $age, string $email, string $gender, string $nationality, string $premium_code, $premium_discount)
        {
            parent::__construct($name, $lastname,$age, $email, $gender, $nationality);

            $this->premium_code = $premium_code;
            $this->premium_discount = $premium_discount;
            
        }
    }

  

    
?>