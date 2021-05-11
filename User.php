<?php

    class User {
        public $first_name;
        public $last_name;
        public $username;
        public $password;
        public $email_address;
        public $account_status;
        


        public function __construct($_first_name, $_last_name, $_username, $_password, $_email_address, $_account_status)
        {
            $this -> first_name = $_first_name;
            $this -> last_name = $_last_name;
            $this -> username = $_username;
            $this -> password = $_password;
            $this -> email_address = $_email_address;
            $this -> account_status = $_account_status;
        }
    }


    $users = [
        new User('John', 'Bennett', 'BrudEMiS', 'uc%!@bLEi^Ne', 'pgeme.a@kimsanginc.com', 'Registered'),
        new User('Haroon', 'Coleman', 'AchurgiC', 'xZ%5zAjN3O!V', 'bihab.ha@werkuldino.buzz', 'Registered'),
        new User('Jacob', 'Green', 'ANidemic', 'cR34N^xW3FJg', '6coutinho@revstore.shop', 'Registered'),
        new User('Brandon', 'Dixon', 'MCmISenT', 'R94zyy*FWpNL', 'phassanajahoue@tunnelerph.com', 'Registered'),
        new User('Kelly', 'Simmons', 'BLEtcOrd', 'SYKwIh**3MJp', 'itechni5ing.t@furnitt.com', 'Registered')
    ];