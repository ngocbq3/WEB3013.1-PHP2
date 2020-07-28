<?php
class Nhanvien
{
    private $name;
    private $address;
    private $email;
    private $phone;
    private $degree;

    public function add($name, $address, $email, $phone, $degree)
    {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
        $this->degree = $degree;
    }

    public function view()
    {
        echo "Name: $this->name<br>";
        echo "Address: $this->address<br>";
        echo "Email: $this->email<br>";
        echo "Phone: $this->phone<br>";
        echo "Degree: $this->degree<br>";
    }
}
