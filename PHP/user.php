<?php
require_once('account.php');
class User extends Account{    

    public function __construct($name, $document, $email) {
        parent::__construct($name, $document, $email);
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;        
    }
}
?>