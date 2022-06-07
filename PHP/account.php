<?php
class Account {
    public $id = integer;
    public $name      = string;
    public $document  = string;
    public $email     = string;
    public $password  = string;

    public function __construct($name, $document, $email) {
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
    }

    public function PrintDataAccount(){
        echo "Name: $this->name, Document: {$this->document}, document: {$this->email}";
    }
}
?>