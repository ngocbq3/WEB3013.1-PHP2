<?php
class Animal
{
    private $color;
    private $weight;
    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function sound()
    {
        echo "Động vật kêt theo tiếng của nó";
    }
}
//Lớp con chó kế thừa từ Animal
class Dog extends Animal
{
    private $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function run()
    {
        echo "$this->name có màu " . $this->getColor() . " đang chay bằng 4 chân";
    }
    public function sound()
    {
        echo "Con chó kêu go go<br>";
    }
}
//Lớp con mèo thừa kế từ Animal
class Cat extends Animal
{
    public function sound()
    {
        echo "Con mèo kêu meo meo<br>";
    }
}
//Khởi tạo đối tượng
$dog = new Dog("vàng", "15kg");
$dog->setName("Cậu vàng");
$dog->run();
$dog->sound();
//Tạo đối tượng cat
$cat = new Cat('Kitty', '5kg');
$cat->sound();
