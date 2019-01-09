<?php
class User {
    public $name;
    public $surname;
    public $surnameTwo;
    public $emailAddress;
    public $dni;
    public $phone;  

    function showInfo(){
        echo '<h5>Nombre: '.$this->name.'</h5>';
        echo '<h5>Apellido 1: '.$this->surname.'</h5>';
        echo '<h5>Apellido 2: '.$this->surnameTwo.'</h5>';
        echo '<h5>Email: '.$this->emailAddress.'</h5>';
        echo '<h5>Dni: '.$this->dni.'</h5>';
        echo '<h5>Telefono: '.$this->phone.'</h5>';
    }
}
?>